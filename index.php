<!DOCTYPE html>
  <title>Mini-mall</title>
    <head>
      <!--Links iniciales-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/css/custom.css" media="screen, projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <!--barra de navegación -->
    <?php 
    include("assets/inc/navbar.php");
    ?>
    <body>
    <h1 class="center">Bienvenido a Mini-mall</h1>
    <h4 class="center">Donde compras de todo lo que desees!</h4>
    <!--Slider -->
     <?php 
    include("assets/inc/slider.php");
    ?>
    
      <ul class=" yellow accent-4">
        <li class="center"><a href="publicidad">Barra publicitaria, cualquier cosa o autopublicacion</a></li>
        <li class="center"><a href="publicidad">Barra publicitaria</a></li>
        <li class="center"><a href="publicidad">Barra publicitaria</a></li>
      </ul>
     
      <div class="container">
        <h4 class="center">Ventas de usuarios</h4>
      </div>
      <?php 
      include("assets/inc/slide.php");
      ?>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script></script><script type="text/javascript">
      <!--inicializando slider -->
       $(document).ready(function(){
        $('.slider').slider({full_width: true});
          });
        </script>
        
    <!-- parallax funcion -->
    <script type="text/javascript">
      $(document).ready(function(){
        $('parallax').parallax();
      });
    </script>
    <!-- Carousel colores -->
    <script type="text/javascript">
  $('.carousel.carousel-slider').carousel({full_width: true});
    </script>
    <!-- Dynamic textfield-->
      <script type="text/javascript">
  $(document).ready(function() {
    Materialize.updateTextFields();
  });
      </script>
      

    </body>
    <?php 
    include("assets/inc/footer.php");
    ?>
</html>