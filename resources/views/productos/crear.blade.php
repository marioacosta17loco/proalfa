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
    <h1>Añadir producto</h1>
    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
    <div class="form-group">
        <label for="nombre" class="font-weight-bold text-dark">Nombre:</label>
        <input id="nombre" name="nombre" type="text" class="form-control bg-white" required>
    </div>
    <div class="form-group">
        <label for="descripcion" class="font-weight-bold text-dark">Descripción:</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control bg-white" required>
    </div>
    <div class="form-group">
        <label for="precio" class="font-weight-bold text-dark">Precio:</label>
        <input id="precio" name="precio" type="number" class="form-control bg-white" required>
    </div>
    <div class="form-group">
        <label for="stock" class="font-weight-bold text-dark">Stock:</label>
        <input id="stock" name="stock" type="number" class="form-control bg-white" required>
    </div>
</div>

                <!-- Para ver la imagen seleccionada, de lo contrario no se -->
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <img id="imagenSeleccionada" style="max-height: 300px;">           
                </div>

                <div class="mb-3">
                <label class="form-label text-dark">Subir Imagen</label>
                    <div>
                        <label>
                            <div>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class="form-label text-dark">Seleccione la imagen</p>
                            </div>
                        <input name="imagen" id="imagen" type='file' class="hidden" />
                        </label>
                    </div>
                </div>

                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <a href="{{ route('productos.index') }}" class="btn btn-warning">Cancelar</a>
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