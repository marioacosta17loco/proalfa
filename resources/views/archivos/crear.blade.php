@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         @extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <!DOCTYPE html>
<html lang="en">
<head>
<link href="/dist/output.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Añadir documento</h1>
    <form action="{{ route('archivos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
    <div class="form-group">
        <label for="nombre" class="font-weight-bold text-dark">Nombre:</label>
        <input id="nombre" name="nombre" type="text" class="form-control bg-white" required>
    </div>
    <div class="form-group">
        <label for="tipoarchivo" class="font-weight-bold text-dark">Tipo de archivo:</label>
        <input id="tipoarchivo" name="tipoarchivo" type="text" class="form-control bg-white" required>
    </div>
    <div class="form-group">
        <label for="detalles" class="font-weight-bold text-dark">Detalles:</label>
        <input id="detalles" name="detalles" type="text" class="form-control bg-white" required>
    </div>
    <div class="form-group">
        <label for="fecha" class="font-weight-bold text-dark">Fecha:</label>
        <input id="fecha" name="fecha" type="date" class="form-control bg-white" required>
    </div>

        <label for="documento" class="font-weight-bold text-dark">Archivo:</label>
        <input id="documento" name="documento" type="file"  required>

 </div>


                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <a href="{{ route('archivos.index') }}" class="btn btn-warning">Cancelar</a>
                    <button type="submit" class="btn btn-info">Guardar</button>
                </div>
            </form> 

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>   

 <!-- Script para ver la imagen antes de CREAR UN NUEVO PRODUCTO -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script>   
    $(document).ready(function (e) {   
        $('#imagen').change(function(){            
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#imagenSeleccionada').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
</script>
</body>
</html>
        </div>
    </div>
</div>

@endsection