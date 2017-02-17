<!DOCTYPE html>
<head>
	<title>Ayuda</title>
	 <head>
      <!--Links iniciales-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
  <?php 
    include("../assets/inc/navbar.php");
    ?>
<body>

  <div class="container">
  	<h3 class="center">¡Hola!, ¿En qué podemos ayudarte?</h3>
  	<p class="center">*Puedes realizar una busqueda de algun problema o alguna pregunta aquí abajo</p>
  	 <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">search</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Busca aquí</label>
        </div>
      </div>
      <div class="row">
      	<h3 class="center">Preguntas más frecuentes</h3>
      	<div class="col s6">
      		  <li><a href="question">¿Cómo puedo hacer pedidos?</a></li>
      		  <li><a href="question">¿Con quién contacto al hacer pedidos?</a></li>
              <li><a href="question">¿Es necesario hacer una cuenta?</a></li>
      	</div>
      	<div class="right col s6">
        	<li><a href="question">¿En cuánto tiempo llega mi pedido?</a></li>
        	<li><a href="question">¿Dónde contacto a la tienda?</a></li>
        	<li><a href="question">¿Se pueden hacer ventas al exterior?</a></li>
     	</div> 

      </div>
      <h5 class="center"> O también podemos ayudarte mediante...</h5>	
      	<div class="row"> 
          <i class="large material-icons">email</i>
          <h6>Nuestro email:</h6>
        </div>
       	<div class="row">
          <i class="large material-icons">question_answer</i>
           <h6>Nuestras redes sociales:</h6>
        </div>
      </div> 
</body>
<footer>
	<?php 
    include("assets/inc/footer.php");
    ?>
</footer>
</html>