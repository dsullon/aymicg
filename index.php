<<<<<<< HEAD
<?php require_once('header.php');?>	
	<div class="row" >
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="img/carpinteria_metalica.png" alt="Carpinteria metalica">
	      <div class="caption">
	        <h3>Carpinter&iacute;a Met&aacute;lica</h3>
	        <p><small>La Carpintería Metálica consiste en la  fabricación y comercialización de productos metálicos, 
	        	como acero y aluminio, para los mercados de la construcción, industria y decoración, así como la 
	        	gama de productos orientada al cerramiento integral de la vivienda: puertas, ventanas, ...</small></p>
	        <p>
	          <a href="#" class="btn btn-primary" role="button">ver m&aacute;s</a>
	        </p>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="img/pintura_industrial.png" alt="Pintura industrial">
	      <div class="caption">
	        <h3>Pintura Industrial</h3>
	        <p><small>La pintura industrial tiene como objetivos principales proteger las piezas expuestas a las 
	        	condiciones ambientales, así como conferir a la pieza un mejor aspecto estético para conseguir 
	        	un mejor acabado, llegando así a poder aumentar el valor de las piezas y o maquinaria...</small></p>
	        <p>
	          <a href="#" class="btn btn-primary" role="button">ver m&aacute;s</a>
	        </p>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="img/empresa.png" alt="Aislamiento">
	      <div class="caption">
	        <h3>Aislamiento</h3>
	        <p><small>El aislamiento acústico consiste en separar acústicamente un ambiente o espacio de otro, para prevenir 
	        	o reducir la transmisión de sonidos entre los dos. El objetivo de aislar acústicamente un ambiente 
	        	puede ser prevenir que ruidos molestos penetren el ambiente desde “afuera”, sea este afuera un ambiente 
	        	contiguo...</small></p>
	        <p>
	          <a href="#" class="btn btn-primary" role="button">ver m&aacute;s</a>
	        </p>
	      </div>
	    </div>
	  </div>
	</div>
<?php require_once('footer.php');?>
=======
<?php
include_once('inc/header.php');
?>
<!-- Carousel
    ================================================== -->
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
	    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
	  	</ol>

	  	<!-- Wrapper for slides -->
	  	<div class="carousel-inner" role="listbox">
	    	<div class="item active">
		    	<img src="img/slide-image-1.jpg" alt="Chania">
		    	<div class="carousel-caption">
		        	<h3>Chania</h3>
		        	<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
		      	</div>
	    	</div>

		    <div class="item">
		    	<img src="img/slide-image-2.jpg" alt="Chania">
		      	<div class="carousel-caption">
		        	<h3>Chania</h3>
		        	<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
		      	</div>
		    </div>

    		<div class="item">
      			<img src="img/slide-image-3.jpg" alt="Flower">
      			<div class="carousel-caption">
        			<h3>Flowers</h3>
        			<p>Beatiful flowers in Kolymbari, Crete.</p>
      			</div>
    		</div>
  		</div>
  		<!-- Left and right controls -->
  		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
	</div><!-- /.carousel -->
<?php
require_once('inc/footer.php');
?>
>>>>>>> refs/remotes/origin/master
