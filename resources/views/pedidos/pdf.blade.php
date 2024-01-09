<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Pedido</title>

<style>
    .footer-basic {
  padding:40px 0;
  background-color:#ffffff;
  color:#4b4c4d;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1.6;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {
  margin-top:15px;
  text-align:center;
  font-size:13px;
  color:#aaa;
  margin-bottom:0;
}

.cabecera{
    background-color: black;
    color: white;
}
.cabecero{
    background-color: #D4FF33 ;
    color: black;
}
.cabeceri{
    background-color: #33FFEC ;
    color: black;
}
</style>
</head>
<body>
    <img src="./assets/img/hola.jpg" alt="" width="80px" height="60px"><br>
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-center cabecera"><h2>Detalles del pedido</h2></div><br>
            <div class="card-body">
             <div class="table-responsive">
                <h3 class="card-header cabecero">Datos del cliente</h3>
                <table class="table table-striped table-hover table-bordered">
                    <tr><td>Nombre:</td><td>{{ Auth::user()->name }}</td></tr>
                    <tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
                </table>
                <h3 class="card-header cabecero">Datos de los productos</h3>
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
                <br><br><h3 class="text-center cabeceri">Total a pagar:${{ \Cart::getTotal() }}</h3>
                
             </div>
             
    
            </div>

        </div>

    </div>
  
</div>
</div>
<div class="footer-basic">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Contáctanos</a></li>
                <li class="list-inline-item"><a href="#">9381819476</a></li>
                <li class="list-inline-item"><a href="#">gerencia@qalfaem.com</a></li>
            </ul>
            <h5 class="copyright">Quimialfa Energy de México</h5>
        </footer>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>