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

.paletas-index, .nieves-index, .accesorios-index {
  background-repeat: no-repeat;
	background-position: center;
	height: 100%;
}

.paletas-index {
	background-image: url(images/paletas.jpg);
}

.nieves-index {
	background-image: url(images/nieves.jpg);
}

.accesorios-index {
	background-image: url(images/accesorios.jpg);
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

/* Smartphones (portrait) ----------- */
@media only screen and (max-width : 440px) {
div.nieves-index, div.paletas-index, div.accesorios-index {
  margin-bottom: 10px;
  background-size: 95%;
}

div.element-hover {
  height: 90%;
  margin-top: 25px;
  font-size: 1rem;
}

}

</style>

<div class="slider">
  <ul class="slides">
  <li>
    <img src="images/carousel1/img1.png">
    <div class="caption center-align">
      <h3>Moncoté</h3>
      <h5 class="light grey-text text-lighten-3">Nieves artesanales</h5>
    </div>
  </li>
  <li>
    <img src="images/carousel1/img2.png">
    <div class="caption left-align">
      <h3>Lo mejor del té</h3>
      <h5 class="light grey-text text-lighten-3">Hecho nieve</h5>
    </div>
  </li>
  <li>
    <img src="images/carousel1/img3.png">
    <div class="caption right-align">
      <h3>Refresantes sabores</h3>
      <h5 class="light grey-text text-lighten-3">De sabores tradicionales a lo mas exotico</h5>
    </div>
  </li>
  <li>
    <img src="images/carousel1/img4.png">
    <div class="caption center-align">
      <h3>Sin gluten y sin azucar</h3>
      <h5 class="light grey-text text-lighten-3">La neive más sana que probarás jamás.</h5>
    </div>
  </li>
</ul>
</div>



<div class="row categories-index">
  <div class="col l4 m12 s12 center-align nieves-index">
    <div class="element-hover center-align">
      <h2>Nieves</h2>
      <p>Nuestras nieves están creadas de manera artesanal, cada insumo que utilizamos es 100% natural, para asegurarnos que todo el sabor, color y olor de los Tés se conserven y puedas disfrutar de ésta cultural y romántica bebida, ahora bajo cero.</p>
      <a class="waves-effect waves-light btn">Ver más</a>
    </div>
  </div>
  <div class="col l4 m12 s12 center-align paletas-index">
    <div class="element-hover">
      <h2>Paletas</h2>
      <p>Si de calor se trata, la mejor manera de refrescarte es con nuestras paletas, creadas de manera artesanal, a base de flores combinadas con fruta 100% natural.</p>
      <a class="waves-effect waves-light btn">Ver más</a>
    </div>
  </div>
  <div class="col l4 m12 s12 center-align accesorios-index">
    <div class="element-hover">
      <h2>Accesorios</h2>
      <p> La mejor manera de disfrutar-Té es dándole un toque personal a tu taza favorita, tetera o juego de tazas que nunca debe faltar para compartir ése delicioso momento de tomar Té.</p>
      <a class="waves-effect waves-light btn">Ver más</a>
    </div>
  </div>
</div>

<div class="container hide-on-med-and-up">
  <div class="row ">
    <div class="col center s12">
      <h2>Nieves hechas con propiedades del té</h2>
    </div>
  </div>
</div>




<script type="text/javascript">
$(document).ready(function(){
     $('.slider').slider();
   });
</script>
