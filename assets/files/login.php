<!DOCTYPE html>
<html>
<head>
	<title>Inico de Sesión</title>

	<!--Links iniciales-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<?php 
include("assets/inc/navbar.php");
?>
<body>
	<h3 class="center">Puedes iniciar sesión o también puedes registrarte</h3><p class="center"><b>*Para visualizar contactos y ver detalles de los articulos debes ingresar a la página*</b></p>
<div class="row">
	<form class="col s12">
		<div class="row">
			<div class="col s6">
			 	<h4 class="center">Crea una cuenta</h4>
			 		<div class="input-field">
			          	<i class="material-icons prefix">account_circle</i>
			          	<input id="icon_prefix" type="text" class="validate">
			          	<label class="active" for="icon_prefix">Nombre</label>
	        		</div>
	        		<div class="input-field">
			          	<i class="material-icons prefix">account_circle</i>
			          	<input id="icon_prefix" type="text" class="validate">
			          	<label class="active" for="icon_prefix">Apellido</label>
	        		</div>
	        		<div class="input-field">
			          	<i class="material-icons prefix">account_circle</i>
			          	<input id="icon_prefix" type="text" class="validate">
			          	<label class="active" for="icon_prefix">Correo</label>
	        		</div>
	        		<div class="input-field">
			          	<i class="material-icons prefix">account_circle</i>
			          	<input id="icon_prefix" type="text" class="validate">
			          	<label class="active" for="icon_prefix">Contraseña</label>
	        		</div>
	        		<div class="input-field">
			          	<i class="material-icons prefix">account_circle</i>
			          	<input id="icon_prefix" type="text" class="validate">
			          	<label class="active" for="icon_prefix">Negocio</label>
	        		</div>
	        		<div class="input-field">
			          	<i class="material-icons prefix">account_circle</i>
			          	<input id="icon_prefix" type="text" class="validate">
			          	<label class="active" for="icon_prefix">Número de telefono</label>
	        		</div>
	        		 <div class="input-field col s12">
          				<textarea id="textarea1" class="materialize-textarea"></textarea>
          				<label for="textarea1">Descripción</label>
        			</div>
				  <button class="btn waves-effect waves-light" type="submit" name="action">Realizado
				    <i class="material-icons right">send</i>
				  </button>
        
			</div>
			<div class="col s6">
			 	<h4 class="center">Inicia Sesión</h4>
			 	 <div class="row">
	        	 <div class="input-field col s12">
          			<input id="last_name" type="text" class="validate">
          			<label class="active" for="last_name">Negocio</label>
        		 </div>
        		  <div class="input-field col s12">
          			<input id="last_name" type="text" class="validate">
          			<label class="active" for="last_name">Contraseña</label>
        		 </div>
        		 <a class="waves-effect waves-light btn">Iniciar Sesión</a>
			</div>
	        </div>
		</div>
	</form>
</div>

</body>
<?php 
include("assets/inc/footer.php");
?>
</html>