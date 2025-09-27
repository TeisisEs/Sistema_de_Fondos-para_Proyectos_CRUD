<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Informe de Proyectos</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 5px; text-align: left; }
        th { background-color: #f0f0f0; }
        h2, h3 { margin: 0; }
    </style>
</head>
<body>
    <h1>Gobierno de El Salvador</h1>
    <h2>Prueba Tecnica</h2>
    <p>Fecha: {{ $fecha }}</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Proyecto</th>
                <th>Fuente Fondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto Fondos Propios</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectos as $proyecto)
            <tr>
                <td>{{ $proyecto->id }}</td>
                <td>{{ $proyecto->NombreProyecto }}</td>
                <td>{{ $proyecto->fuenteFondos }}</td>
                <td>{{ number_format($proyecto->MontoPlanificado, 2) }}</td>
                <td>{{ number_format($proyecto->MontoPatrocinado, 2) }}</td>
                <td>{{ number_format($proyecto->MontoFondosPropios, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
