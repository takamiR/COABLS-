<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Title -->
		<title>Neptune</title>
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/vendor/themify-icons/themify-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/vendor/animate.css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/vendor/jscrollpane/jquery.jscrollpane.css') }}">
		<link rel="stylesheet" href="{{ asset('/vendor/waves/waves.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/vendor/chartist/chartist.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/vendor/switchery/dist/switchery.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/vendor/morris/morris.css') }}">
		<link rel="stylesheet" href="{{ asset('/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}">

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="{{ asset('css/core.css') }}">

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="large-sidebar fixed-sidebar fixed-header content-appear">
		<div class="wrapper">

			<!-- Sidebar -->
			<div class="site-sidebar-overlay"></div>
			<div class="site-sidebar">
				<a class="logo" href="index.html">
					<span class="l-text">All Business</span>
				</a>
				<div class="custom-scroll custom-scroll-light">
					@yield('menu')
				</div>
			</div>
			<!-- Header -->
			<div class="site-header">
				<nav class="navbar navbar-light">
					<ul class="nav navbar-nav">
						<li class="nav-item m-r-1 hidden-lg-up">
							<a class="nav-link collapse-button" href="#">
								<i class="ti-menu"></i>
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-xs-right">
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
								<div class="avatar box-32">
									<img src="img/avatars/1.jpg" alt="">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right animated flipInY">
								<a class="dropdown-item" href="#">
									<i class="ti-settings m-r-0-5"></i> Configuración
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="ti-power-off m-r-0-5"></i> Salir</a>
							</div>
						</li>
						<li class="nav-item hidden-md-up">
							<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse-1">
								<i class="ti-more"></i>
							</a>
						</li>
					</ul>
					<div class="navbar-toggleable-sm collapse" id="collapse-1">
						<div class="header-form pull-md-left m-md-r-1">
							<span class="l-text">Bienvenido, usuario</span>
						</div>
					</div>
				</nav>
			</div>

			<div class="site-content">
				<!-- Content -->
				@yield('content')

				<!-- Footer -->
				<footer class="footer">
					<div class="container-fluid">
						2016 © Neptune
					</div>
				</footer>
			</div>

		</div>

		<!-- Vendor JS -->
		<script type="text/javascript" src="{{ asset('/vendor/jquery/jquery-1.12.3.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/tether/js/tether.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/detectmobilebrowser/detectmobilebrowser.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/jscrollpane/jquery.mousewheel.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/jscrollpane/mwheelIntent.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/jscrollpane/jquery.jscrollpane.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/waves/waves.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/chartist/chartist.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/switchery/dist/switchery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/flot/jquery.flot.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/flot/jquery.flot.resize.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/CurvedLines/curvedLines.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/TinyColor/tinycolor.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/sparkline/jquery.sparkline.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/raphael/raphael.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/morris/morris.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/vendor/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/demo.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
	</body>
</html>
