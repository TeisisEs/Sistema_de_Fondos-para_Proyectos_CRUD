<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Proyecto;
use Illuminate\Http\Request;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            // Trae todos los proyectos de la base de datos
            $proyectos = Proyecto::all();

            // Devuelve la vista 'proyectos.index' pasando los proyectos
            return view('proyectos.index', compact('proyectos'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Muestra la vista para crear un nuevo proyecto
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validar datos
    $request->validate([
        'NombreProyecto' => 'required|string|max:255',
        'fuenteFondos' => 'required|string|max:255',
        'MontoPlanificado' => 'required|numeric',
        'MontoPatrocinado' => 'required|numeric',
        'MontoFondosPropios' => 'required|numeric', 
    ]);

     // Crear nuevo proyecto
    Proyecto::create($request->all());

    // Redirigir a la lista con mensaje
    return redirect()->route('proyectos.index')->with('success', 'Proyecto creado correctamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        // Devuelve la vista edit con los datos del proyecto
        return view('proyectos.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
            // Validar datos
            $request->validate([
                'NombreProyecto' => 'required|string|max:255',
                'fuenteFondos' => 'required|string|max:255',
                'MontoPlanificado' => 'required|numeric',
                'MontoPatrocinado' => 'required|numeric',
                'MontoFondosPropios' => 'required|numeric',]);

            // Actualizar proyecto
            $proyecto->update($request->all());

             // Redirigir a la lista con mensaje
            return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
    $proyecto->delete(); // Elimina el proyecto de la base de datos
    return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado correctamente.');   
    }


    
    public function generarPDF()
    {
        $proyectos = Proyecto::all(); // traemos todos los proyectos
        $fecha = now()->format('d/m/Y'); // fecha actual

        $pdf = Pdf::loadView('proyectos.pdf', compact('proyectos', 'fecha'));

        return $pdf->stream('informe_proyectos.pdf');
        // ->stream() = ver en navegador
        // ->download() = descargar directamente
    }

}