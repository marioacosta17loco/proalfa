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
    <h1 >Documentos Quimialfa</h1> 
    <a class="btn btn-outline-info " href="{{route('archivos.create')}}">Crear</a>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th class="col">Tipo de archivo</th>
                <th class="col">Detalles</th>
                <th class="col">Fecha</th>
                <th class="col">Archivo</th>
                <th class="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($archivos as $archivo)
            <tr>
                <td>{{$archivo->id}}</td>
                <td>{{$archivo->nombre}}</td>
                <td>{{$archivo->tipoarchivo}}</td>
                <td>{{$archivo->detalles}}</td>
                <td>{{$archivo->fecha}}</td>
                <td>{{$archivo->documento}}</td>
                

                <td>
                  <div class="flex justify-center rounded-lg text-lg" role="group">
                  <a href="{{ asset('archivo/' . $archivo->documento) }}" class="btn btn-outline-primary" download>Descargar</a>                 
                 

                  </div>
                </td>
            </tr>
        </tbody>
        @endforeach

    </table>
    <div>
        {!! $archivos->links() !!}

    </div>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
        </div>
    </div>
</div>

@endsection