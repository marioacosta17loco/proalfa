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
    <h1 >Pedidos de clientes</h1> 
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cliente</th>
                <th class="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">reporte</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($pedidos as $pedido)
            <tr>
                <td>{{$pedido->id}}</td>
                <td>{{$pedido->cliente}}</td>
                <td>{{$pedido->d_entrega}}</td>
                <td>{{$pedido->telefono}}</td>
                <td>{{$pedido->reporte}}</td>
                
                

                <td>
                  <div class="flex justify-center rounded-lg text-lg" role="group">
                  <a href="{{ asset('reporte/' . $pedido->reporte) }}" class="btn btn-block btn-primary" download>Descargar</a>                 
                 <form action="{{route('pedidos.destroy', $pedido->id)}}" method="POST" class="formEliminar">
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
        {!! $pedidos->links() !!}

    </div>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
        </div>
    </div>
</div>

@endsection