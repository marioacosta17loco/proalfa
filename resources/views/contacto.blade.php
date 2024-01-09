@extends('layouts.layout')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="./assets/img/telefono.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
</head>
<body>
<br><div class="section section-tabs">
        <div class="container">
          <div class="row">
          <div class="col-md-10 ml-auto col-xl-6 mr-auto">
              <p class="category text-black">Informacion general</p>
              <!-- Tabs with Background on Card -->
              <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                  <img class="n-logo" src="./assets/img/hola4.png" alt="" width="150px" height="">
                    
                  </ul>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="home1" role="tabpanel">
                      <h5>RAZON SOCIAL: QUIMIALFA ENERGY DE MÉXICO SA de CV</h5>
                      <h5>NOMBRE COMERCIAL: QUIMIALFA ENERGY DE MÉXICO</h5>
                      <h5>REGISTRO FEDERAL: QEM230203JT2</h5>
                      <h5>DIRECCIÓN: Retorno Laguna Azul Norte No. 61 Residencia San Miguel CP: 24157, Ciudad del Carmen, Campeche.</h5>

                    </div>
                  </div>
                </div>
              </div>
              <!-- End Tabs on plain Card -->
            </div>
            <div class="col-md-10 ml-auto col-xl-6 mr-auto">
              <p class="category text-black">Para más preguntas:</p>
              <!-- Tabs with Background on Card -->
              <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                    <li class="nav-item">
                      <h5 class="text-center">Contáctos</h5>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="home1" role="tabpanel">
                      <h5>+52 938-181-9476</h5>
                      <h5>gerencia@qalfaem.com</h5>
                      <h5>www.qalfaem.com</h5>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Tabs on plain Card -->
            </div>
          </div>
        </div>
      </div>
</body>
</html>

@endsection