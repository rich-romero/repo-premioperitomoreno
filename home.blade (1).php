@extends("layout.base")
@section("title","Concurso Perito Moreno")
@section('main')
<div class="container d-flex vv">
  <div class="mx-auto">
    <video class="video bg-info" poster="img/poster.jpg" autoplay loop muted>
    <source src="img/parque-nac.mp4" type="video/mp4">
    <source src="img/parque-nac.webm" type="video/webm">
    </video>
  </div>
  <div class="cont-img">
    <img class="logo" src="img/logo-concurso-09.svg" alt="">
  </div>
</div>
<div class="container card cont-card mx-auto mt-4 mb-4" style="">
  <div class="card-body ">
    <h2 class="card-title mb-4"><b>EN QUÉ CONSISTE</b></h2>
    <p class="card-text text-left" style="font-size: 1.2rem;">
      El Concurso Ambiental “Premio Perito Moreno” es una iniciativa de la Fundación Formar que premia a los
       emprendedores que se destaquen en la búsqueda de soluciones al problema ambiental, generando conciencia
        frente a los desafíos actuales que debemos enfrentar y  nuevos enfoques para contribuir al futuro y
         sustentabilidad, en el ámbito del territorito de la República Argentina.<br><br>

      Los 4 proyectos seleccionados recibirán los siguientes premios: <br>
      <ul class="text-left"  style="font-size: 1.2rem;">
      <li>Primer puesto: <strong>un millón de pesos ($ 1.000.000) </strong> <br></li>

      <li>Segundo, tercer y cuarto puesto: <strong>un viaje a Groenlandia </strong>de una semana donde serán instruidos por científicos 
      internacionales especialistas en la temática ambiental (se realizará en Junio 2020).</p></li>
    </ul>
    </div>
</div>

<!--Segunda Seccion -->
<div class="bg-info">
  <div class="mx-auto con-tit-reg mt-4 card-body" style="background-color: #003c8f !important;">
    <h2 class="title-reg tit-cat">CATEGORÍAS QUE PARTICIPAN</h2>
  </div> 
</div>
<div id="carouselExampleControls" class="carousel slide cont-carr" data-ride="carousel" style="background-color: #003c8f !important;">
<div class="carousel-inner items-carr">
  <div class="carousel-item active">
    <img class="rounded item-carr" src="img/categorias/acc-por-clima.png" alt="foto accion por clima">
    <div class="carousel-caption d-md-block title-img cc">
      <h3 style="font-size: 1.5rem;">ACCIÓN POR EL CLIMA</h3>
    </div>
  </div>
  <div class="carousel-item">
    <img class="rounded item-carr" src="img/categorias/agua.png" alt="foto agua"> 
    <div class="carousel-caption d-md-block title-img cc">
      <h3 style="font-size: 1.5rem;">AGUA</h3>
    </div>
  </div>
  <div class="carousel-item">
    <img class="rounded item-carr" src="img/categorias/cons-y-prod.png" alt="foto consumo y produccion ">
    <div class="carousel-caption d-md-block title-img cc">
      <h3 style="font-size: 1.5rem;">CONSUMO Y PRODUCCION</h3>
    </div>
  </div>
  <div class="carousel-item">
    <img class="rounded item-carr" src="img/categorias/construccion.png" alt="foto construccion">
    <div class="carousel-caption d-md-block title-img cc">
      <h3 style="font-size: 1.5rem;">CONSTRUCCIÓN</h3>
    </div>
  </div>
  <div class="carousel-item">
    <img class="rounded item-carr" src="img/categorias/diseño-sust.png" alt="foto diseño sustenable">
    <div class="carousel-caption d-md-block title-img cc">
      <h3 style="font-size: 1.5rem;">DISEÑO SUSTENTABLE</h3>
    </div>
  </div>
  <div class="carousel-item">
    <img class="rounded item-carr" src="img/categorias/eco-trips.png" alt="foto turismo y educacion">
    <div class="carousel-caption d-md-block title-img cc">
      <h3 style="font-size: 1.5rem;">TURISMO Y EDUCACIÓN</h3>
    </div>
  </div>
  <div class="carousel-item">
    <img class="rounded item-carr" src="img/categorias/energia.png" alt="foto turismo y educacion">
    <div class="carousel-caption d-md-block title-img cc">
      <h3 style="font-size: 1.5rem">ENERGÍA</h3>
    </div>
  </div>
  <div class="carousel-item">
    <img class="rounded item-carr" src="img/categorias/recu-natu.png" alt="foto recursos naturales">
    <div class="carousel-caption d-md-block title-img cc">
      <h3 style="font-size: 1.5rem;">RECURSOS NATURALES</h3>
    </div>
  </div>
  <div class="carousel-item">
    <img class="rounded item-carr" src="img/categorias/residuos.png" alt="foto residuos">
    <div class="carousel-caption d-md-block title-img cc">
      <h3 style="font-size: 1.5rem;">RESIDUOS</h3>
    </div>
  </div>
  <div class="carousel-item">
    <img class="rounded item-carr" src="img/categorias/sect-agro.png" alt="foto sector agropecuario">
    <div class="carousel-caption d-md-block title-img cc">
      <h3 style="font-size: 1.5rem;">SECTOR AGROPECUARIO</h3>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
<div class="container card cont-card mx-auto mt-4 mb-4" style="">
  <div class="card-body">
    <h2 class="link-reg mb-4" id="register"><b>REQUISITOS</b></h2>
    <p class="text-left" style="font-size: 1.2rem;">Antes de registrarte asegurate de cumplir con estos requisitos:</p>
      <ul class="marg-ul text-left" style="list-style:none;font-size: 1.2rem;">
        <li><i class="fa fa-check io"></i> Tener entre 18 y 30 años de edad.</li>
        <li><i class="fa fa-check io"></i> Contar con DNI argentino.</li>
        <li><i class="fa fa-check io"></i> El equipo puede estar compuesto por un mínimo de un (1) y un máximo de diez (10) miembros.</li>
        <li><i class="fa fa-check io"></i> El proyecto presentado debe ser original o tener una antigüedad menor a dos años en caso de que ya exista.</li>
      </ul>
    <p style="font-size: 1.2rem;">Para mayor información consultá las <a href="/download" class="">Bases y Condiciones.</a></p>
    <div class="row mt-4" style="width: 101%;">
          <a class="btn btn-primary btn-xl btn-outline-light col-12 col-md-6 col-lg-4 col-xl-4 mr-auto ml-auto mb-4 border border-white" id="participa"   href="https://docs.google.com/forms/d/e/1FAIpQLSc5lVcg4jLjbjXzen26JcmJbMWoQzBfOF2uqmNHdORnSK716A/viewform">
           <h4 class="mt-1">REGISTRATE</h4>
          </a>
        </div>
    
  </div>
</div>
  


 <section class=" bg-info " >
        <div class="iconos m-lg-0 p-lg-0 m-xl-auto p-xl-auto text-center bg-info" style="justify-content:center;">
          <!-- subtitulo-->
          <h2 class="pt-4 page-section-heading br-info text-center text-white mb-3 font-weight-bold">ETAPAS</h2>
          
          <div class="row mx-auto col-12 text-center colum  py-5 flex-wrap" style="justify-content:center;">

            <!-- icono -->
            
            <div id="icon-fecha" class=" col-xl-2 col-lg-2 col-md-3 col-sm-5 col-5 p-4 py-lg-0 mx-auto border rounded-circle border-white ii">
                <i id="i" class="fa fa-rocket fa-5x  m-xl-5" style="color:#9EFFEF "aria-hidden="true"></i>
                <p class="fecha text-white " id="text-icon"><b>22</b> de <b>Noviembre</b> de <b>2019</b></p>
                <p class="fecha  text-white " id="text-icon"><strong>Apertura de <br>inscripción</strong></p>
            </div>

            <!-- icono -->
            <div id="icon-fecha" class="col-lg-2 col-md-3 col-sm-5 col-5 p-4 py-lg-0 mx-auto border rounded-circle border-white ii">
                <i id="i" class="fa fa-file-archive-o fa-5x mt-lg-2  m-xl-5" style="color:#BAFF9E" aria-hidden="true"></i>
                <p  class="fecha  mb-0 text-white" id="text-icon"><b>31</b> de <b>Marzo</b> de <b>2020</b></p>
                <p class="fecha  mb-0 text-white" id="text-icon"><strong>Cierre de <br>inscripción</strong></p>
            </div>

              <!--icono -->
              <div id="icon-fecha" class="col-lg-2 col-md-3 col-sm-5 col-5 p-4 py-lg-0 mx-auto border rounded-circle border-white ii">
                <i id="i" class="fa fa-check-square-o fa-5x  mt-lg-2  m-xl-5" style="color:#D5ABFF" ariahidden="true"></i>
                <p  class="fecha  mb-0 text-white" id="text-icon"><b>15</b> de <b>Abril</b> de <b>2020</b></p>
                <p class="fecha  mb-0 text-white" id="text-icon""><strong>Preselección de Proyectos</strong></p>
            </div>

            <!--icono -->
            <div id="icon-fecha" class="col-lg-2 col-md-3 col-sm-5 col-5 p-4 py-lg-0 mx-auto border rounded-circle border-white ii">
                <i id="i" class="fa fa-bell fa-5x  mt-lg-2  m-xl-5" style="color:#8C66B3" aria-hidden="true"></i>
                 <p  class="fecha  mb-0 text-white" id="text-icon"><b>06</b> al<b> 07</b> de <b>Mayo</b> de <b>2020</b></p>
                 <p class="fecha  mb-0 text-white" id="text-icon"><strong>Presentación ante el jurado</strong></p>
            </div>

            <!--icono -->
            <div id="icon-fecha" class="col-lg-2 col-md-3 col-sm-5 col-5 p-4 py-lg-0 mx-auto border rounded-circle border-white ii">
                <i id="i" class="fa fa-trophy fa-5x  mt-lg-2 text-primary  m-xl-5" aria-hidden="true" ></i>
                <p  class="fecha  mb-0 text-white" id="text-icon"><b>29</b> de<b> Mayo</b> de <b>2020</b></p>
                <p class="fecha  mb-0 text-white" id="text-icon"><strong>Anuncio de<br> ganadores</strong></p>
            </div>
        </div>
        <!-- /.row -->
        <div class="row mt-4 " style="width:101%;justify-content:center">
          <a id="participa" class="btn btn-primary btn-xl btn-outline-light col-8 col-md-4 col-lg-3 col-xl-2  mb-4 border border-white" style="background-color:#D444BE;"  href="#register">
           <h4 class="mt-1" >¡ PARTICIPÁ !</h4>
          </a>
        </div>
      </div>
 </section>
 <!-- style="background-color:#CDFDF8" -------------------------------------------------------------------------->
<section class="page-section text-blue mb-0 "  id="about" >
  <div id="historia" class="container text-center " >
  <!--  -->
    <div class="row ">
      <h2 class="mr-auto ml-auto col-lg-6 col-xl-8 pt-4 pb-3 page-section-heading text-uppercase text-blue" style="color:#000019;">¿ Por qué Perito Moreno ?</h2>
    </div>
  <!--  -->
    <div class="row mt-2" >
      <div class="col-lg-6 ml-auto"  style="font-size: 1.2rem;">
        <p style="text-align:left;color:#000000;font-size: 1.2rem;">La Fundación Formar lanza este premio al cumplirse 100 años de la muerte del Perito Francisco Pascasio Moreno, con el objetivo de impulsar el desarrollo de proyectos basados en la defensa y cuidado del medio ambiente. <br>
          Perito Moreno perteneció a la Generación del 80. Pero a diferencia de aquellos ilustres argentinos que la formaron, él se dedicó a la defensa de las riquezas naturales, a la exploración del medio ambiente, principalmente el sur del país, creando los que después se llamaron Parques Nacionales y la fundación del Movimiento Scouts de la Argentina.</p>
      </div>
      <div class="col-lg-6 mr-auto" style="font-size: 1.2rem;">
        <p style="text-align:left;color:#000000;font-size: 1.2rem;">Fue un científico, naturalista, explorador, geógrafo y escritor que, a diferencia de los hombres de su generación, buscó por otros caminos el mismo fin: consolidar la expansión del territorio nacional hacia el Sur, lo que hoy llamamos, la Patagonia. <br>
          Como gran defensor en la preservación del medio ambiente, de su esfuerzo nacieron los Parques Nacionales –uno de los cuales lleva su nombre, en la provincia de Santa Cruz - y en ese acto de imaginación, se adelantó muchos años a los esfuerzos actuales por mejorar la calidad de vida. </p>
      </div>
    </div>  
  </div>
  
</section>
 @endsection
