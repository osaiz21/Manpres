<!doctype html>
<html lang="en">
  <head>
    <?php
      include('public/parciales/header.php')
    ?>

    <!-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> -->
    <!-- Custom styles for this template -->
  </head>
  <body>
    <!-- <header> -->
      <nav class="site-header sticky-top py-1">
        <?php include('public/parciales/nav.php');?>
      </nav>
    <!-- </header> -->

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <?php include('public/parciales/carousel.php');?>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="../assets/img/mision.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Mision</h2>
        <p>Mejorar la tasa de éxito de las organizaciones de mantenimiento, brindándoles contenidos
          relevantes en gestión de mantenimiento de flotas, enfocados en el liderazgo y profesionalización
          de su personal, socios y proveedores, Propiciar condiciones agradables, confianza y respeto con          
          nuestros colaboradores y proveedores. Responsabilidad y compromiso en el mejoramiento de
          nuestras capacidades.</p>
        <!-- <p><a class="btn btn-secondary" href="#" role="button">Ver Detalles &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="../assets/img/vision.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <h2>Vision</h2>
        <p>Nos visualizamos como una organización ligera, eficiente, sólida y comprometida, líderes en la
          prestación de servicios enfocados en la generación de valor en el personal de mantenimiento y la
          gestión del sistema de mantenimiento en empresas de transporte a nivel nacional.</p>
        <!-- <p><a class="btn btn-secondary" href="#" role="button">Ver Detalles &raquo;</a></p> -->
      </div>
    </div>


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Conoce Mas <span class="text-muted">Manpress</span></h2>
        <p class="lead">Mantenimiento Productivo Especializado “MANPRES S.A.S.” somos una organización creada con el
          propósito de contribuir en la generación de valor a nuestros clientes, y la sociedad, a través de la
          prestación de servicios especializados de capacitación, consultoría e ingeniería en el área de
          mantenimiento del gremio de transporte, Nuestro modelo está enfocados en filosofía, proceso,
          Personal y Solución de problemas, elementos del sistema de mantenimiento.
          Nuestros atributos: conocimiento, pensamiento sistémico, vocación, filosofía de mejora continua y
          experiencia de 30 años en el mantenimiento de flotas.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Valores <span class="text-muted">Corporativos</span></h2>
        <p class="lead">HUMILDAD: Tomamos conciencia de nuestros actos reconociendo nuestras limitaciones y virtudes,
          asimilándolos como una oportunidad de mejora y desarrollo empresarial.</p>
        <p>COMPROMISO: Hacemos nuestro mejor esfuerzo por conseguir el cumplimiento de los objetivos
          propuestos con responsabilidad y ética.</p>
        <p>RESPETO: Respetamos la cultura y normas de nuestros clientes y aliados. Promovemos la
          confianza y respeto mutuo entre trabajadores y dirección, reconociendo sus derechos, deberes y
          necesidades.</p>
        <p>AUSTERIDAD: Actuamos sobre lo esencial sin ostentación ni interés particular, con criterio de
          excelencia, con un manejo eficiente de los recursos, asegurando el desarrollo sostenible del
          negocio y el autocuidado.</p>
          HONESTIDAD: Correspondemos a su confianza de manera transparente, actuando
          permanentemente con la verdad, para fortalecer la confianza colectiva.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div> -->

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <!-- <p class="float-right"><a href="#">Back to top</a></p> -->
    <p>&copy; 2020 Manpres SAS,   <a href="#">manpres.flotas@gmail.com</a> &middot; <a href="#"></a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
