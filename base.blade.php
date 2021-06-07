<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="icon"  type="image/ico" href="img/favicon.ico">
</head>
<body>
  <header>
   <!-- Barra de navegacion -->
    <nav class="navbar sticky-top navbar-expand-lg barra ">
      <a class="navbar-brand img-nav log-nav" href="https://www.fundacionformar.net/" target="_blanc"><img src="img/logo-formar.png" alt=""></a>
      <a class="navbar-brand img-nav log-nav" href="/"><img src="img/concurso-07.svg"  style="height:10%;" alt=""></a>
       <button class="hamburg navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>

      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link itm-nav" href="/#register" style="font-size:x-large;">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link itm-nav" href="/premios" style="font-size:x-large;">Premios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link itm-nav" href="/bases" style="font-size:x-large;">Bases y Condiciones</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    @yield("main")
  </main>
  <footer id="footer">
        <div class="row col-12 card-body text-center" >
          <a   class="mt-2 col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mx auto " href="https://www.fundacionformar.net/" target="_blanc"> <h5 id="h5f" style="font-size:x-large;color:#fff">www.fundacionformar.net</h5></a>
          <a   class="mt-2  col-12  col-sm-6 col-md-6 col-lg-6 col-xl-6 mx-auto " href="https://mail.google.com/mail/?tab=rm&ogbl" target="_blanc"><h5 id="h5f" style="font-size:x-large;color:#fff"> premioperitomoreno@gmail.com</h5></a>
          <a class="col-6 mx-auto" href="mailto:vikyngosweb@gmail.com?Subject=Pagina%20Premio%20Perito%20Moreno"><h5 id="h5f" style="font-size:large;color:#fff;margin:0;">Created by VikyngosWeb</h5></a>
        </div>
  </footer>
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
