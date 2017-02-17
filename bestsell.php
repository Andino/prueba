<!DOCTYPE html>
<html>
<head>
	<title>Más puntuados</title>
	 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>


      <!--optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<?php
include("assets/inc/navbar.php");
?>
<body>
	<section>
		<div class="row">
			<div class="col-s12">
				  <div class="parallax-container">
				  	<div class="row">
				  		<div class="col s12 m6 13 ">Lorem ipsum</div>
				  		<div class="col s12 m6 13">Lorem ipsum</div>
				  	</div>
    				<div class="parallax"><img src="assets/img/nyan-pacman.jpg"></div>
  				  </div>
	  				<div class="section white">
	    				<div class="row container">
	      				<h2 class="header">Parallax</h2>
	      				<p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, 				is moved at a different speed than the foreground content while scrolling.</p>
	    				</div>
	  				</div>
  					<div class="parallax-container">
    					<div class="parallax"><img src="assets/img/pic1.jpg"></div>
  					</div>
			</div>
		</div>
	</section>
</body>
<?php
include("assets/inc/footer.php");
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
  			$('.parallax').parallax();
  		});
</script>

</html>
