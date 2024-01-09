<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Pedido</title>
</head>
<body>
<form action="{{ route('pedidos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-center bg-black text-white"><h4>Detalles del pedido</h4></div>
            <div class="card-body">
             <div class="table-responsive">
             <h4 class="text-danger">Paso 1: Verificar datos</h4>
                <h4>Datos del cliente</h4>
                <table class="table table-striped table-hover table-bordered">
                    <tr><td>Nombre:</td><td><input type="text" name="cliente" value="{{ Auth::user()->name }}"></td></tr>
                    <tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
                </table>
                <h4>Datos de los productos</h4>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                    @foreach($cartCollection as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>${{$item->price}}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>${{ \Cart::get($item->id)->getPriceSum() }}</td>
                    </tr>
                    @endforeach
                </table>
                <h3 class="text-center">Total a pagar:${{ \Cart::getTotal() }}</h3>
                
             </div>
             <h4 class="text-danger">"Si los datos estan bien, favor de descargar el comprobante":</h4><a href="{{ route('pedidos.pdf') }}" class="btn btn-primary">Descargar</a><br><br><br>
             <h4 class="text-danger">Paso 2:</h4>
             <h4>Favor de proporcionar la ubicacion de entrega</h4>
             <div class="mb-3">
    <div class="form-group">
        <label for="d_entrega" class="font-weight-bold text-dark">Dirección:</label>
        <input id="d_entrega" name="d_entrega" type="text" class="form-control bg-white" required>
    </div>
    <div class="mb-3">
    <div class="form-group">
        <label for="telefono" class="font-weight-bold text-dark">N celular:</label>
        <input id="telefono" name="telefono" type="number" class="form-control bg-white" required>
    </div>
    <label for="reporte" class="font-weight-bold text-dark">Por favor adjuntar el comprobante descargado:</label>
        <input id="reporte" name="reporte" type="file"  required>
            </div>

        </div>

    </div>
    
    <div class="d-grid gap-2 col-6 mx-auto">
    <a href="/cart" class="btn btn-warning">Cancelar</a>
  <button type="submit" class="btn btn-success" >Confirmar</button>
  </form>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>