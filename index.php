<!-- Incluímos el header -->
<?php include_once 'header.php';?>
	
	<!-- ARCHIVOS PROPIOS DEL CSS Y JS -->
	<link rel="stylesheet" href="css/top.css">
	<link  rel="stylesheet" href="css/carousel.css">

	<script src="utilidades/scroll/jquery.easing.min.js"></script>
	<script src="js/scroll_menu.js"></script>

</head>

<body>
<div id="wrap">

	<div id="container">
	
		<!-- Top con menu -->
		<section id="top">
			<div id="row">
				<div id="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					
					<nav class="navbar navbar-default navbar-fixed-top">
      					<div class="container">
       	 					<div class="navbar-header">
          						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            					<span class="sr-only">Toggle navigation</span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
          						</button>
          						<a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo TNT" width="80px"></a>
        					</div>
        					<div id="navbar" class="navbar-collapse collapse">
          						<ul class="nav navbar-nav navbar-right">
						            <li class="active"><a href="#">Home</a></li>
						            <li><a href="#">Program</a></li>
						            <li><a href="#">Participants</a></li>
						            <li><a href="#">News</a></li>
						            <li><a href="#">Sponsors</a></li>
          						</ul>
        					</div>
      					</div>
    				</nav>


				</div>
			</div>
		</section>
		<!-- /Top con menu -->

		<form class="navbar-form navbar-left" role="search">
		  <div class="form-group">
		    <p class="navbar-text">NEWS</p>
		  </div>
		</form>

		<!-- /Carousel -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img class="first-slide" src="img/cactus.png" alt="First slide">
		      <div class="container">
		        <div class="carousel-caption">
		          <h1>Example headline.</h1>
		          <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
		        </div>
		      </div>
		    </div>
		  </div>
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<!-- /Carousel -->

	</div>
</div>

</body>
</html>