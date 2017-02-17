<!DOCTYPE html>
	<html>
		<head>
			<title>Popular</title>
			 <!--Links iniciales-->
		      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		      <!--Import materialize.css-->
		      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
		      <link type="text/css" rel="stylesheet" href="assets/css/custom.css" media="screen, projection"/>
		      <!--Let browser know website is optimized for mobile-->
		      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		</head>
		<?php 
		include("assets/inc/navbar.php");
		?>
		<body>
		<h4 class="center">Puedes buscar entre estás categorias también</h4>
		<div class="row center">
			<div class="col s4">
				<!-- Javascript modal-->
				<script type="text/javascript">
					 $(document).ready(function(){
    				 // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    				 $('#modalvote').leanModal();
 					 });
				</script>
				<!--Activar modal --> 
				<a class="modal-trigger waves-effect waves-light btn light-blue accent-3" href="modalvote">Mejor voto</a>
				<div id="modalvote" class="modal modal-fixed-footer">
					<div class="modal-content">
						<div class="row">
							<div class="col s4">
							   <!-- Tarjeta de tienda -->
								<div class="card">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="assets/img/wp1.jpg">
									</div>
									<div class="card-content">
										<span class="card-title activator grey-text text-darken-4">Tienda Adis<i class="material-icons right">more_vert</i></span>
										<p><a href="#">más información</a></p> 
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">Tienda Adis<i class="material-icons right">close</i></span>
										<p>La tienda por la cual puedes comprar ropa deportiva a precios excesivamente caros :v</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col s4">
				<!--Activar modal --> 
				<a class="modal-trigger waves-effect waves-light btn light-blue accent-3" href="#modalchoice">Elección usuario</a>
				<div id="modalvote" class="modal modal-fixed-footer">
					<div class="modal-content">
						<div class="row">
							<div class="col s4">
							   <!-- Tarjeta de tienda -->
								<div class="card">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="assets/img/wp1.jpg">
									</div>
									<div class="card-content">
										<span class="card-title activator grey-text text-darken-4">Tienda Adis<i class="material-icons right">more_vert</i></span>
										<p><a href="#">más información</a></p> 
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">Tienda Adis<i class="material-icons right">close</i></span>
										<p>La tienda por la cual puedes comprar ropa deportiva a precios excesivamente caros :v</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col s4">
				<!--Activar modal --> 
				<a class="modal-trigger waves-effect waves-light btn light-blue accent-3" href="#modalvisit">Más visitadas</a>
				<div id="modalvote" class="modal modal-fixed-footer">
					<div class="modal-content">
						<div class="row">
							<div class="col s4">
							   <!-- Tarjeta de tienda -->
								<div class="card">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="assets/img/wp1.jpg">
									</div>
									<div class="card-content">
										<span class="card-title activator grey-text text-darken-4">Tienda Adis<i class="material-icons right">more_vert</i></span>
										<p><a href="#">más información</a></p> 
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">Tienda Adis<i class="material-icons right">close</i></span>
										<p>La tienda por la cual puedes comprar ropa deportiva a precios excesivamente caros :v</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</body>
		 <?php 
   		 include("assets/inc/footer.php");
    	?>
	</html>