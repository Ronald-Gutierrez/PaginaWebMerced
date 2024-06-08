<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/footer.css">
</head>
<body>
  <footer class="footer-09 text-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
          <!-- Columna 1 - Logo -->
          <a href="{{ url('/') }}">
            <img src="img/logo.png" alt="La Merced" style="height: 80px;">
          </a>        
        </div>
        <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
          <!-- Columna 2 - Conócenos -->
          <h2 class="footer-heading">Contacto</h2>
          <ul class="list-unstyled">
            <li><strong>Dirección:</strong> Avda Balmaceda #365, La Serena, Chile</li>
            <li><strong>Teléfono:</strong> <a href="tel:+56966210617">+56 9 6621 0617</a></li>
            <li><strong>Email:</strong> <a href="mailto:chiledelta@outlook.com">chiledelta@outlook.com</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
          <!-- Columna 3 - Conócenos -->
          <h2 class="footer-heading">Conócenos</h2>
          <ul class="list-unstyled">
            <li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
            <li><a href="{{ url('/contacto') }}">Contactos</a></li>
            <li><a href="{{ url('/producto') }}">Productos</a></li>
            <li><a href="{{ url('/servicio') }}">Servicios</a></li>
            <li><a href="{{ url('/terminos') }}">Términos y Condiciones</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
          <!-- Columna 4 - Redes Sociales -->
          <h2 class="footer-heading">Encuéntranos en nuestras Redes Sociales</h2>
          <ul class="list-unstyled">
            <li><a href="{{ url('https://www.instagram.com/lamerced_coffe/') }}"> <img src="svg/instagram-icon.svg" alt="Facebook icon"> Instagram</a></li>
            <li><a href="{{ url('https://www.facebook.com/profile.php?id=61552012255753') }}"> <img src="svg/facebook-icon.svg" alt="Facebook icon"> Facebook</a></li>
            <li><a href="{{ url('https://www.tiktok.com/@lamerced_coffe') }}"> <img src="svg/tiktok-icon.svg" alt="Facebook icon"> Tiktok</a></li>
          </ul>
        </div>
      </div>
      <div class="row pt-4 border-top">
        <div class="col-md-6 col-lg-8">
          <p class="text-muted">&copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
