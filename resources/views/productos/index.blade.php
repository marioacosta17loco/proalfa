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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2 >Administar Productos</h2> 
    <a class="btn btn-outline-info" href="{{route('productos.create')}}">Agregar</a>
    <table class="table   table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock}}</td>
                <td>
                    <img src="/imagen/{{$producto->imagen}}" width="60%">
                </td>
                <td>
                  <div class="flex justify-center rounded-lg text-lg" role="group">
                  <a class="btn btn-block btn-success" href="{{route('productos.edit', $producto->id)}}">Editar</a>

                  <form action="{{route('productos.destroy', $producto->id)}}" method="POST" class="formEliminar">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-block btn-danger" type="submit">Borrar</button>
                  </form>

                  </div>
                </td>
            </tr>
        </tbody>
        @endforeach

    </table>
    <div>
        {!! $productos->links() !!}

    </div>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
        </div>
    </div>
</div>
<script>
  (function () {
  'use strict'
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
  .forEach(function (form) { 
    form.addEventListener('submit', function (event) {
        event.preventDefault()
        event.stopPropagation()
        Swal.fire({
  title: 'Confirmar la eliminacion del registro?',
  icon: 'info',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Confirmar'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Eliminado!',
      'El registro fue eliminado exitosamente.',
      'success'
    );
  }
})


    }, false)
  })
})()
</script>
@endsection



