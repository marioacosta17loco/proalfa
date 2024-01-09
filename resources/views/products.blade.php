@extends('layouts.layout')

@section('content')
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="./assets/img/producto.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

    <style>
 .zoom-card:hover {
  transform: scale(1.1); 
}

</style>
 </head>
 <body style="background-color:#E0FFFF">
   
 <br><br><br><br><br><div class="row">
 @foreach($productos as $producto)
    <div class="col-md-3 card-group">
        <div class="card border border-primary p-4 mb-4 zoom-card" style="background-color:white">
            <img src="/imagen/{{$producto->imagen}}" class="card-img-top" alt="Imagen del producto">
            <div class="card-body">
                <h4 class="card-title" style="color: #ff0000;"> {{ $producto->nombre }} </h4>
                <h5 class="card-text" style="font-style: italic;">{{ $producto->descripcion }} </h5>
                <p class="card-text" style="font-weight: bold;">Precio: ${{ $producto->precio }}</p>
            </div>
        </div>
    </div>
@endforeach

</div>
 </body>
 </html>

@endsection