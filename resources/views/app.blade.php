<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title','Casa de la cultura | Honda Tolima')</title>
	{!!Html::style('css/style.css')!!}
	{!!Html::style('css/app.css')!!}

	<!--<link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>Lu15C4r!0$M4rC4
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style> 
            @import url(http://fonts.googleapis.com/css?family=Montserrat:400,700|Handlee);
            body {
                background: url(/images/bg2.jpg) no-repeat center top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
            }
            .container > header h1,
            .container > header h2 {
                color: #fff;
                text-shadow: 0 1px 1px rgba(0,0,0,0.5);
            }
        </style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}"><img src="/images/logo-mini.png"> </a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/web/index.php') }}">Ir a la web</a></li>
					

					<!-- ******Aprendiz ******-->
					<li class="dropdown"><a aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Aprendiz <span class="caret"></span></a>
						<ul class="dropdown-menu">
			                <li><a href="{{ route('admin.aprendices.create') }}">Crear Nuevo Aprendiz </a></li>
							<li><a href="{{ url('/admin/aprendices') }}">Ver Listado de Aprendices</a></li>
			             </ul>

					</li>



					<!-- ******instructor ******-->
					<li class="dropdown"><a aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Instructor <span class="caret"></span></a>
						<ul class="dropdown-menu">
			                <li><a href="{{ route('admin.instructores.create') }}">Crear Nuevo Instructor </a></li>
							<li><a href="{{ url('/admin/instructores') }}">Ver Listado de Instructores</a></li>
			             </ul>

					</li>



					<!-- ******cursos ******-->
					<li class="dropdown"><a aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Curso <span class="caret"></span></a>
						<ul class="dropdown-menu">
			                <li><a href="{{ route('admin.cursos.create') }}">Crear Nuevo curso </a></li>
							<li><a href="{{ url('/admin/cursos') }}">Ver Listado de Cursos</a></li>
			             </ul>

					</li>



					<!-- ******matricula ******-->
					


					
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Iniciar Sección</a></li>
						 <li><a href="{{ url('/auth/register') }}">Crear Usuaro</a></li> -->
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Cerrar sección</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')


	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	 <!-- Javascript -->
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
</body>
</html>
