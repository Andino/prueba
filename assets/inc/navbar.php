<nav class="light-blue accent-3">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo center">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a class='dropdown-button' data-beloworigin="true" href='#' data-activates='dropdown1'>Categorías</a>
          <ul id='dropdown1' class='dropdown-content'>
			       <li><a href="#!">Tecnología</a></li>
			       <li class="divider"></li>
			       <li><a href="#!">Souvenirs</a></li>
			       <li><a href="#!">Audio</a></li>
          </ul>
        </li>
        <li><a class='dropdown-button ' data-beloworigin="true" href='#' data-activates='dropdown2'>Venta</a>
            <ul id='dropdown2' class='dropdown-content'>
      			  <li><a href="#!">Tienda</a></li>
      			  <li class="divider"></li>
      			  <li><a href="#!">Usuario</a></li>
  		      </ul>
        </li>
        <li><a href="about.php">Acerca de...</a></li>
        <li><a href="">Contactenos</a></li>
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<li><a href="help.php">Ayuda</a></li>
        <li><a href="bestsell.php">Populares</a></li>
        <li><a href="badges.html">Más puntuados</a></li>
        
        <li><a class='dropdown-button' data-beloworigin='true' href='!#' data-activates='dropdown3'>Inicia sesión</a></li>
        <ul id="dropdown3" class="dropdown-content"> 

          <li><a class="modal-trigger" href="#modalog">Tienda</a></li>
          <div id="modalog" class="modal modal-fixed-footer">
            <div class="modal-content">
              <h3>Modal header</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
          </div>
          <!--Jquery Modal venta por tienda -->
         
          <li class="divider"></li>
        <!--Modal usuario normal-->     
          <li><a href="#!">Usuario</a></li>

        </ul>
    
      </ul>
    </div>
  </nav>

<script type="text/javascript" src="assets/"></script>  
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript">
            $(document).ready(function(){
             // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('modalog').modal();
            });
</script>


 
  
   