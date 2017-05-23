<!DOCTYPE html>
<html>
<head>
    <title>Saturn by @flamekaizar</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Saturn is free PSD &amp; HTML template by @flamekaizar">
    <meta name="author" content="Afnizar Nur Ghifari">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link rel="shortcut icon" href="img/favicon.png" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<!-- Navigation -->
	<div class="main-nav">
		<div class="container">
			<header class="group top-nav">
				<nav class="navbar logo-w navbar-left" >
					<a class="logo" href="index.html">Saturn</a>
				</nav>
				<div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
				    <span class="logo">Saturn</span>
				</div>
			    <nav id="navbar-1" class="navbar item-nav navbar-right">
				    <ul>
				        <li class="active"><a href="index.html">Home</a></li>
				        <li><a href="#">About</a></li>
				        <li><a href="#">Archive</a></li>
				        <li><a href="#">Contact</a></li>
				    </ul>
				</nav>
			</header>
		</div>
	</div>

	<!-- Introduction -->
	<div class="intro">
		<div class="container">
			<div class="units-row">
			    <div class="unit-10">
			    	<img class="img-intro" src="img/ecompinguin.png" alt="">
			    </div>
			    <div class="unit-90">
			    	<p class="p-intro">Hello, I’m @yield('autor'). I’m proud to be a part of @yield('planet').</p>
			    </div>
			</div>
		</div>
	</div>

	<!-- Content -->
	<div class="content">
		<div class="container">
			<!-- Post -->
            @yield('content')

		</div>
	</div>

	<footer>
		<div class="container">
			<div class="units-row">
			    <div class="unit-50">
			    	<button class="btn btn-black"><i class="fa fa-arrow-left"></i> PREVIOUS</button>
			    </div>
			    <div class="unit-50">
					<ul class="social list-flat right">
						<li><a href="mailto:afnizarhilmi@gmail.com"><i class="fa fa-send"></i></a></li>
						<li><a href="http://twitter.com/flamekaizar"><i class="fa fa-twitter"></i></a></li>
						<li><a href="http://dribbble.com/flamekaizar"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="http://behance.com/flamekaizar"><i class="fa fa-behance"></i></a></li>
					</ul>
			    </div>
			</div>
			<p class="text-centered foot-cp">
	    		<a href="#">handcrafted by @flamekaizar</a>
	    	</p>
		</div>
	</footer>

	<!-- Javascript -->
	<script src="js/jquery.min.js"></script>
    <script src="js/kube.min.js"></script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
