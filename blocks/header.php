<style media="screen">

	.nav-wrapper {
		background: #43dbd1; /* Old browsers */
		background: -moz-linear-gradient(left, #43dbd1 0%, #29bbce 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(left, #43dbd1 0%,#29bbce 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to right, #43dbd1 0%,#29bbce 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#43dbd1', endColorstr='#29bbce',GradientType=1 );
		height: 100px;
	}

	.logo-header {
		height:auto;
	}

	.social-media-logos {
		width: 20px;
		padding: 22px 0;
	}



</style>



<header>
	<ul id="dropdown1" class="dropdown-content">
	  <li><a href="#!">Nieves</a></li>
	  <li><a href="#!">Paletas</a></li>
	  <li><a href="#!">Accesorios</a></li>
	</ul>
<div class="navbar-fixed">
	<nav>
	  <div class="nav-wrapper row">
	    <a href="#!" class="brand-logo center"><img src="images/mon-cote.png" alt=""></a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	    <ul class="col s3 offset-s3 left hide-on-med-and-down">
	      <li><a href="#">Inicio</a></li>
				<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Productos <i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
	      <!-- Dropdown Trigger -->
	    <ul class="col s3 pull-s2 right hide-on-med-and-down valign-wrapper">
				<li><a href="#">Contacto</a></li>
				<li><a target="_blank" href="https://www.facebook.com/MonCote/?fref=ts"><img src="images/facebook.png" class="social-media-logos" alt=""></a></a></li>
				<li><a target="_blank" href="https://www.instagram.com/moncotegdl/"><img src="images/instagram.png" class="social-media-logos" alt=""></a></li>
	    </ul>
	  </div>
	</nav>
</div>
</header>

<?php include_once("$ROOT/blocks/mobile-menu.php");
