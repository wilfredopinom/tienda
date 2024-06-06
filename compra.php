<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Compra</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <link rel="icon" href="img/vulture.ico" type="image/x-icon" style="height: 10; width: 10;">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
  
    <link href="checkout.css" rel="stylesheet">
  </head>
  <body >
 
    
<div class="container" style="margin-left: 0;">
  <main>
    <div class="py-5 text-center">
      <a href="index.html"><img class=" mx-auto mb-4" src="assets/img/carrito.png" alt="" width="100" height="70"> </a>
	  <h2>COUSIÑAS 24H</h2>
	  <br>
      <h2>Checkout</h2>
      <p class="lead">Por favor, revisa cuidadosamente tu pedido antes de proceder al pago.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Tu carrito</span>
          <span class="badge bg-primary rounded-pill"></span>
        </h4>
        <ul class="list-group mb-3">
         

  <h2>Realizar Compra</h2>
                  

                      <div id="carrito" class="contenido">
                          <table class="tabla" id="lista-compra">
                              <thead>
                                  <tr>
                                      <th scope="col">Imagen</th>
                                      <th scope="col">Nombre</th>
                                      <th scope="col">Precio</th>
                                      <th scope="col">Cantidad</th>
                                      <th scope="col" style="width: 50px" >Sub Total</th>
                                      <th scope= "col"> Eliminar </th>
                                  
                                 
                                  </tr>
                              </thead>
                              <tbody>

                              </tbody>
                              <tr>
                                  <th colspan="4" scope="col" class="">SUB TOTAL :</th>
                                  <th scope="col"> <p id="subtotal"></p></th>
                                

                              </tr>
                              <tr>
                                  <th colspan="4" scope="col" class="">IVA :</th>
                                  <th scope="col">
                                      <p id="iva"></p>
                                  </th>
                              </tr>
                              <tr>
                                  <th colspan="4" scope="col" class="">TOTAL :</th>
                                  <th scope="col">
                                    <input type="text" id="total" name="monto_total" readonly>
                                  </th>
                              </tr>
                          </table>




     

       
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Dirección de facturación</h4>
        <form action="confirmacion_compra.php" method="post" class="needs-validation" novalidate >
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombres</label>
              <input name="firstName" type="text" class="form-control" id="firstName" placeholder="Tu nombre" value="" required>
              <div class="invalid-feedback">
                Se require un nombre valido.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastname" class="form-label">Apellidos</label>
              <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Tu apellido" value="" required>
              <div class="invalid-feedback">
                Se requiere un apellido valido.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Usuario</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input name="username" type="text" class="form-control" id="username" placeholder="Usuario" required>
              <div class="invalid-feedback">
                  Se requiere tu usuario.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Opcional)</span></label>
              <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Por favor introduzca una direccion email valida para informacion de la entrega.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Dirección</label>
              <input name="address" type="text" class="form-control" id="address" placeholder=" Avenida da Hispanidade 33" required>
              <div class="invalid-feedback">
                Por favor ingresa tu dirección.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Dirección 2 <span class="text-body-secondary">(Opcional)</span></label>
              <input name="address2" type="text" class="form-control" id="address2" placeholder="Numero de apartamento">
            </div>

            <div class="col-md-5">
                <label for="country" class="form-label">País</label>
                <select name="country" class="form-select" id="country" required onchange="showStates()">
                  <option value="">Elige...</option>
                  <option>España</option>
                  <option>Francia</option>
                  <option>Portugal</option>
                </select>
                <div class="invalid-feedback">
                  Por favor ingresa un país válido.
                </div>
              </div>
              
              <div class="col-md-4" id="stateDiv" style="display: none;">
                <label for="state" class="form-label">Provincia</label>
                <select name="state" class="form-select" id="state" required>
                  <option value="">Elige...</option>
                </select>
                <div class="invalid-feedback">
                  Se requiere una provincia válido.
                </div>
              </div>
              
              <script>
                function showStates() {
                  var countrySelect = document.getElementById("country");
                  var stateSelect = document.getElementById("state");
              
                  stateSelect.innerHTML = "";
              
                  if (countrySelect.value === "Francia") {
                    addOption(stateSelect, "Burdeos", "Burdeos");
                    addOption(stateSelect, "Lille", "Lille");
                    addOption(stateSelect, "Lyon", "Lyon");
                    addOption(stateSelect, "Marsella", "Marsella");
                    addOption(stateSelect, "Montpellier", "Montpellier");
                    addOption(stateSelect, "Niza", "Niza");
                    addOption(stateSelect, "Paris", "Paris");
                    addOption(stateSelect, "Toulouse", "Toulouse");
 
                  } else if (countrySelect.value === "España") {
                    addOption(stateSelect, "Barcelona", "Barcelona");
                    addOption(stateSelect, "Madrid", "Madrid");
                    addOption(stateSelect, "Pontevedra", "Pontevedra");
                    addOption(stateSelect, "Sevilla", "Sevilla");
                    addOption(stateSelect, "Valencia", "Valencia");  
                    addOption(stateSelect, "Zaragoza", "Zaragoza");
                   
                  } else if (countrySelect.value === "Portugal") {
                    addOption(stateSelect, "Lisboa", "Lisboa");
                    addOption(stateSelect, "Oporto", "Oporto");
                    
                  }
              
                  if (countrySelect.value === "Francia" || countrySelect.value === "España" || countrySelect.value === "Portugal") {
                    document.getElementById("stateDiv").style.display = "block";
                    stateSelect.required = true;
                  } else {
                    document.getElementById("stateDiv").style.display = "none";
                    stateSelect.required = false;
                  }
                }
              
                function addOption(select, text, value) {
                  var option = document.createElement("option");
                  option.text = text;
                  option.value = value;
                  select.add(option);
                }
              </script>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input name="zip" type="text" class="form-control" id="zip" placeholder="Ej: 36204" required>
              <div class="invalid-feedback">
                Se requiere el codigo postal.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">La dirección de envio es la misma que la dirección de facturación.</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Guarda esta información para la próxima vez</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Pago</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Tarjeta de credito</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Tarjeta de debito</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nombre en la tarjeta</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-body-secondary">Nombre completo tal como aparece en la tarjeta</small>
              <div class="invalid-feedback">
                Se requiere el nombre en la tarjeta
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Numero de tarjeta</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere el numero de la tarjeta.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Fecha de exp</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Es requerida la fecha de expiración
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere el codigo de seguridad
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Pagar</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">&copy; 2024–2024 @Cousiñas 24H</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="nosotros.html">Nosotros</a></li>
          <li class="list-inline-item"><a href="productos.html">Productos</a></li>
          <li class="list-inline-item"><a href="contacto.html">Contacto</a></li>
    </ul>
  </footer>


</div>
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script  src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <script  src="assets/js/scripts.js"></script>
    <script src="assets/js/carrito.js"></script>
    <script src="assets/js/pedido.js"></script>
    <script src="assets/js/compra.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
   
  <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/sweetalert2.min.js"></script>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="checkout.js"></script></body>
</html>
