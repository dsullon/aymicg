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
		        	<h4>Chania</h4>
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
  <div class="jumbotron">
    <div class="row">
      <div class="col-sm-6 col-md-9">
        <p class="text-justify"><em>"Nuestro principal objetivo es lograr la SATISFACCIÓN TOTAL de las empresas que depositan 
          su confianza en nosotro. En tal sentido, nos preocupamos por ofrecer recursos humanos calificados y 
          capacitados constantemente, además, contamos con distinguidos proveedores, equipos, herramientas y 
          tecnología de punta, controles de calidad y normas de seguridad que garantizan la ejecución del 
          servicio ofrecido en el tiempo, cantidad y exigencias requeridas por nuestros contratantes."
        </p>
        <footer>Gerencia General</footer>
      </div>
      <div class="col-sm-6 col-md-3">
        <img src="img/empresa.png" alt="..." class="img-thumbnail">
      </div>
    </div>
  </div>
  <div class="page-header">
    <h1>Nuestros servicios</h1>      
  </div> 
  <div class="row">
    <div class="col-sm-6 col-md-3">
      <div>
        <img src="img/carpinteria_metalica.png" class="img-thumbnail" alt="Carpintería metálica">
        <div class="caption">
          <h3>Carpinteria metálica</h3>
          <p><a href="#" class="btn btn-default" role="button">leer más</a></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div>
        <img src="img/pintura_industrial.png" class="img-thumbnail" alt="Pintura Industrial">
        <div class="caption">
          <h3>Pintura Industrial</h3>
          <p><a href="#" class="btn btn-default" role="button">leer más</a></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div>
        <img src="img/aislamiento_acustico.jpg" class="img-thumbnail" alt="Aislamiento Acústico">
        <div class="caption">
          <h3>Aislamiento Acústico</h3>
          <p><a href="#" class="btn btn-default" role="button">leer más</a></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div>
        <img src="img/aislamiento_termico.jpg" class="img-thumbnail" alt="Aislamiento Térmico">
        <div class="caption">
          <h3>Aislamiento Térmico</h3>
          <p><a href="#" class="btn btn-default" role="button">leer más</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="page-header">
    <h1>Clientes</h1>      
  </div>
  <div class="row">
    <div class="col-sm-4 col-md-2">
      <div class="thumbnail">
        <img src="img/clientes/capricornio.png" class="img-thumbnail" alt="capricornio">
      </div>
    </div> 
    <div class="col-sm-4 col-md-2">
      <div class="thumbnail">
        <img src="img/clientes/centinela.png" class="img-thumbnail" alt="centinela">
      </div>
    </div>
    <div class="col-sm-4 col-md-2">
      <div class="thumbnail">
        <img src="img/clientes/centropapelero.gif" class="img-thumbnail" alt="centropapelero">
      </div>
    </div>
    <div class="col-sm-4 col-md-2">
      <div class="thumbnail">
        <img id="clientes" src="img/clientes/cfg.png" class="img-thumbnail" alt="cfg">
      </div>
    </div>
    <div class="col-sm-4 col-md-2">
      <div class="thumbnail">
        <img id="clientes" src="img/clientes/cip.png" class="img-thumbnail" alt="cip">
      </div>
    </div>
    <div class="col-sm-4 col-md-2">
      <div class="thumbnail">
        <img id="clientes" src="img/clientes/diamante.png" class="img-thumbnail" alt="diamante">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4 col-md-2">
      <div class="thumbnail">
        <img src="img/clientes/elingenio.png" class="img-thumbnail" alt="elingenio">
      </div>
    </div>
    <div class="col-sm-4 col-md-2">
      <div class="thumbnail">
        <img id="clientes" src="img/clientes/fiem.png" class="img-thumbnail" alt="fiem">
      </div>
    </div>
    <div class="col-sm-4 col-md-2">
      <div class="thumbnail">
        <img id="clientes" src="img/clientes/fima.png" class="img-thumbnail" alt="fima">
      </div>
    </div>
    <div class="col-sm-4 col-md-2">
      <div class="thumbnail">
        <img id="clientes" src="img/clientes/furukawa.gif" class="img-thumbnail" alt="furukawa">
      </div>
    </div>
    <div class="col-sm-4 col-md-2">
      <div class="thumbnail">
        <img id="clientes" src="img/clientes/goalco.png" class="img-thumbnail" alt="goalco">
      </div>
    </div>
    <div class="col-sm-4 col-md-2">
      <div class="thumbnail">
        <img id="clientes" src="img/clientes/hayduk.png" class="img-thumbnail" alt="hayduk">
      </div>
    </div>
  </div>
  <p><a href="#" class="btn btn-default" role="button">ver más</a></p>
<?php
require_once('inc/footer.php');
?>