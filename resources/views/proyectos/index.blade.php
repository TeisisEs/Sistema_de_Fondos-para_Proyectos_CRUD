<!-- resources/views/proyectos/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Proyectos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Lista de Proyectos</h1>
    <a href="{{ route('proyectos.create') }}" class="btn btn-primary mb-3">Nuevo Proyecto</a>

    <!-- Mensaje de éxito -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif
    
    <!-- Botón para descargar PDF -->

    <a href="{{ route('proyectos.pdf') }}" class="btn btn-primary mb-3" target="_blank">
    Descargar Informe PDF
    </a>


    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Proyecto</th>
                <th>Fuente de Fondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto Fondos Propios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
            <tr>
                <td>{{ $proyecto->id }}</td>
                <td>{{ $proyecto->NombreProyecto }}</td>
                <td>{{ $proyecto->fuenteFondos }}</td>
                <td>{{ $proyecto->MontoPlanificado }}</td>
                <td>{{ $proyecto->MontoPatrocinado }}</td>
                <td>{{ $proyecto->MontoFondosPropios }}</td>
                <td>
                    <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Deseas eliminar este proyecto?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
