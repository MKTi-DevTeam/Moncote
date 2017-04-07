<style media="screen">

.carousel {
height: auto;
}

.carousel img {

}

.divisor {
  position: relative;
  height: 50px;
  width: 100vw;
  background-image: url(images/patron.png);
  background-size: 45%;
  background-repeat: repeat;
}
.categories-index {
	margin-top: 4%;
	height: 500px;
}

.paletas-index {
	background-image: url(images/paletas.jpg);
	background-repeat: no-repeat;
	background-position: center;
	height: 100%;
}

.nieves-index {
	background-image: url(images/nieves.jpg);
	background-repeat: no-repeat;
	background-position: center;
	height: 100%;
}

.accesorios-index {
	background-image: url(images/accesorios.jpg);
	background-repeat: no-repeat;
	background-position: center;
	height: 100%;
}

.element-hover {
	position: relative;
	height: 100%;
  width: auto;
	background-color: rgba(255, 255, 255, 0.9);
	padding: 0 0;
	margin: 0 0;
	border: 0 0;
	opacity: 0;
	border-radius: 10px;
  transition: 1s ease-in-out;
}

.element-hover:hover {
	opacity: 1;
	transition: .5s ease-in-out;
}

 div.element-hover h2 {
	margin: 0px 0px;
	margin-bottom: 10px;
	color: rgb(28, 178, 193);
	font-weight: bold;
  padding: 15px 20px;
}

div.element-hover p {
	padding: 20px 20px;
}

div.gallery-element img {
	padding: 15px 5px;
	background-color: black;
	height: auto;
}



</style>


<main>

<div class="carousel carousel-slider">
 <a class="carousel-item" href="#one!"><img src="images/carousel1/img1.png" class="responsive-img"></a>
 <a class="carousel-item" href="#two!"><img src="images/carousel1/img2.png" class="responsive-img"></a>
 <a class="carousel-item" href="#three!"><img src="images/carousel1/img3.png" class="responsive-img"></a>
 <a class="carousel-item" href="#four!"><img src="images/carousel1/img4.png" class="responsive-img"></a>
</div>



<div class="row categories-index">
  <div class="col l4 m12 s12 center-align nieves-index">
    <div class="element-hover center-align">
      <h2>Nieves</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
      <a class="waves-effect waves-light btn">Ver más</a>
    </div>
  </div>
  <div class="col l4 m12 s12 center-align paletas-index">
    <div class="element-hover">
      <h2>Paletas</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
      <a class="waves-effect waves-light btn">Ver más</a>
    </div>
  </div>
  <div class="col l4 m12 s12 center-align accesorios-index">
    <div class="element-hover">
      <h2>Accesorios</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
      <a class="waves-effect waves-light btn">Ver más</a>
    </div>
  </div>
</div>

</main>



<script type="text/javascript">
  $('.carousel.carousel-slider').carousel({fullWidth: true});
</script>
