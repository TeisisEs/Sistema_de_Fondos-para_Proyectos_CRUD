<!-- resources/views/proyectos/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Editar Proyecto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Editar Proyecto</h1>
    <a href="{{ route('proyectos.index') }}" class="btn btn-secondary mb-3">Volver a la lista</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="NombreProyecto" class="form-label">Nombre del Proyecto</label>
            <input type="text" class="form-control" id="NombreProyecto" name="NombreProyecto" value="{{ old('NombreProyecto', $proyecto->NombreProyecto) }}" required>
        </div>

        <div class="mb-3">
            <label for="fuenteFondos" class="form-label">Fuente de Fondos</label>
            <input type="text" class="form-control" id="fuenteFondos" name="fuenteFondos" value="{{ old('fuenteFondos', $proyecto->fuenteFondos) }}" required>
        </div>

        <div class="mb-3">
            <label for="MontoPlanificado" class="form-label">Monto Planificado</label>
            <input type="number" step="0.01" class="form-control" id="MontoPlanificado" name="MontoPlanificado" value="{{ old('MontoPlanificado', $proyecto->MontoPlanificado) }}" required>
        </div>

        <div class="mb-3">
            <label for="MontoPatrocinado" class="form-label">Monto Patrocinado</label>
            <input type="number" step="0.01" class="form-control" id="MontoPatrocinado" name="MontoPatrocinado" value="{{ old('MontoPatrocinado', $proyecto->MontoPatrocinado) }}" required>
        </div>

        <div class="mb-3">
            <label for="MontoFondosPropios" class="form-label">Monto Fondos Propios</label>
            <input type="number" step="0.01" class="form-control" id="MontoFondosPropios" name="MontoFondosPropios" value="{{ old('MontoFondosPropios', $proyecto->MontoFondosPropios) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Proyecto</button>
    </form>
</div>
</body>
</html>
