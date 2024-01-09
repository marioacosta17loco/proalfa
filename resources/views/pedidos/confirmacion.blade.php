<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">SU PEDIDO SE HA REALIZADO SASTIFACTORIAMENTE</h1>
    <div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Nos cumunicaremos con usted lo mas pronto posible!!</h5>
    <p class="card-text"></p>
    <form action="{{ route('cart.cleaar') }}" method="POST">
                        {{ csrf_field() }}
                        <button class="btn btn-primary btn-md">Continuar</button> 
                    </form>
  </div>
  <div class="card-footer text-body-secondary">
    QUIMIALFA ENERGY DE MEXICO
  </div>
</div>
<H3 class="text-center">GRACIAS POR SU CONFIANZA!!</H3>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>