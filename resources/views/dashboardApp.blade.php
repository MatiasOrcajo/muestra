<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>{{env('APP_NAME')}}</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	{{-- <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/> --}}

	<!-- Fonts and icons -->
	{{-- <script src="../assets/js/plugin/webfont/webfont.min.js"></script> --}}
	<script>
		// WebFont.load({
		// 	google: {"families":["Open+Sans:300,400,600,700"]},
		// 	custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['../assets/css/fonts.css']},
		// 	active: function() {
		// 		sessionStorage.fonts = true;
		// 	}
		// });
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('css/azzara.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	{{-- <link rel="stylesheet" href="../assets/css/demo.css"> --}}
</head>
<body>
	<div class="wrapper">
		<!--
			Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" data-background-color="purple">
			<!-- Logo Header -->
			<!-- End Logo Header -->
			<div class="logo-header">
					<a href="{{route('dashboard')}}" class="logo d-none d-lg-block" style="color: white">
						TARIFARIO ADMIN
					</a>
					<div class="d-flex d-lg-none">
						<a href="{{route('dashboard.products')}}" class="mr-4" style="color: white;">
							Productos
						</a>
						<a href="{{route('dashboard.categories')}}" class="mr-4" style="color: white;">
							Categorias
						</a>
						<a href="{{route('dashboard.texts')}}" class="mr-4" style="color: white;">
							Textos
						</a>
						<a href="{{route('dashboard.seo')}}" class="mr-4" style="color: white;">
							SEO
						</a>
					</div>
			</div>
		</div>

		<!-- Sidebar -->
		<div class="sidebar">
			
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{Auth::user()->name}}
									<span class="user-level">Administrador</span>
                                  
								</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item">
							<a href="{{route('dashboard.categories')}}">
								<i class="fas fa-layer-group"></i>
								<p>Categorias</p>
							</a>
						</li>
                        <li class="nav-item">
							<a href="{{route('dashboard.products')}}">
								<i class="fas fa-layer-group"></i>
								<p>Productos</p>
							</a>
						</li>
                        <li class="nav-item">
							<a href="{{route('dashboard.texts')}}">
								<i class="fas fa-layer-group"></i>
								<p>Textos</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('dashboard.seo')}}">
								<i class="fas fa-layer-group"></i>
								<p>SEO</p>
							</a>
						</li>
                        
                        <li class="nav-item">
							<a href="{{route('dashboard.seo')}}">
								<i class="fas fa-layer-group"></i>
								  <a href="{{route('dashboard.logout')}}"> Salir </a>   
							</a>
						</li>
                        
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                @yield('content')
            </div>
        </div>

				
		
	</div>

<!--   Core JS Files   -->
<script src="{{asset('js/jquery.3.2.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="{{asset('js/popper.min.js')}}"></script>


</body>
</html>
