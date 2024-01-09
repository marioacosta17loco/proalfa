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
    <h1>Editar producto</h1>
    <form action="{{ route('productos.update',$producto->id) }}" method="POST" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label class="font-weight-bold text-dark">Nombre:</label>
                    <input name="nombre" value="{{ $producto->nombre }}" class="form-control bg-white" type="text" required/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="font-weight-bold text-dark">Descripción:</label>
                    <input name="descripcion" value="{{ $producto->descripcion }}" class="form-control bg-white" type="text" required/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="font-weight-bold text-dark">Precio:</label>
                    <input name="precio" value="{{ $producto->precio }}" class="form-control bg-white" type="text" required/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="font-weight-bold text-dark">Stock:</label>
                    <input name="stock" value="{{ $producto->stock }}" class="form-control bg-white" type="text" required/>
                </div>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <img src="/imagen/{{ $producto->imagen }}" width="200px" id="imagenSeleccionada">
                </div>                                    
                
                <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="form-label text-dark">Subir Imagen</label>
                    <div class='flex items-center justify-center w-full'>
                        <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
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