<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Max Task #2</title>

	<!-- Styles -->
	<link href="./css/compiled.min.css" rel="stylesheet">
	<script src="./js/vendor.min.js"></script>
</head>
<body>

	<?php
		$request_uri = explode('?', $_SERVER['REQUEST_URI'], 7);

		// Route it up!
		switch ($request_uri[0]) {
		    // Home page
		    case '/':
		        require '../views/kiev.php';
		        break;
		    // lviv page
		    case '/lviv':
		        require '../views/lviv.php';
		        break;
		    // lviv page
		    case '/odesa':
		        require '../views/odesa.php';
		        break;
		    // Everything else
		    default:
		        header('HTTP/1.0 404 Not Found');
		        require '../views/404.php';
		        break;
		    }

	?>
	<div class="container-header">
		<div class="wrap-container-header w-100">
			
			<div class="info d-flex flex-row-reverse">
					<span class="switch">Switch to English</span>
					<span class="symbol" >|</span>  
					<div class="dropdown">
					    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">
					      <span id="selected">Choose city</span><span class="caret"></span></a>
					  <ul class="dropdown-menu">
					    <li value="lviv"><a href="#">Lviv</a></li>
					    <li value="odesa"><a href="#">Odesa</a></li>
					    <li value="kiev"><a href="#">Kiev</a></li>
					  </ul>
					</div> 	
					<span class="town">Город : 
					</span>    	
					<span class="mail ml-auto">info@englishmyfriend.org</span>
					<span class="telephon">+380955555555</span>
			</div>
			<div class="navbarBox d-flex align-items-end p-0" id="navbarText">
				<nav class="navbar navbar-expand-md navbar-light bg-white">
					<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarsExample04">
						<ul class="navbar-nav ml-auto row">
							<li class="nav-item active">
								<a class="nav-link" href="#">Главная</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">О компании</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Программы обучения</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Цены</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Студентам</a>
							</li>
							<li class="nav-button">
								<button class="btn" type="submit">Перезвоните мне</button>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="logo">
				<a class="navbar-brand" href="#" style="background-color:#FFFFFF; "><img src="./images/logotype.png"></a>
			</div>
		</div>
	</div>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<script src="./js/compiled.min.js"></script>

</body>
</html>
