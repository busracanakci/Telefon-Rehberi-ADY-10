<!DOCTYPE html>
<html>
<head>
<title>Positive A Digital Approach Değerlendirme Projesi</title>
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--start-menu-->

<link href="{{asset('css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('js/memenu.js')}}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="{{asset('js/jquery.easydropdown.js')}}"></script>	
@yield('header')		
</head>
<body >
    
	<!--top-header-->
	<div class="top-header" style="background-color:powderblue;">
		<div class="container">
			<div class="top-header-main"  >
				<div class="col-md-6 top-header-left">
					<div class="drop">
						<!-- @auth
						<div class="box">
							<a href="">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
						</div>
						<div class="box">
							<a onclick="event.preventDefault();document.getElementById('logout-form').submit()" href="{{route('logout')}}">Çıkış Yap</a>
							<form action="{{route('logout')}}" method="POST" id="logout-form">
								{{csrf_field()}}
                            </form>
						</div>
						@endauth


						@guest
						<div class="box">
							<a href="{{route('login')}}">Giriş Yap</a>
						</div>
						<div class="box1">
						<a href="{{url('/register')}}">Kayıt Ol</a>
						</div>
						@endguest -->
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<h1><a href="{{ url('/') }} " >Telefon Rehberi</a></h1>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<!--<div class="header-bottom">
		
			
			
			<div class="clearfix"> </div>
			</div>
		</div>-->
			<!--bottom-header-->
    @yield('content')
	
<!--information-starts-->
<div class="information">
<br>		
</div>
	<!--information-end-->
	<!--footer-starts-->
	<div class="footer" style="background-color:powderblue;">
		
	</div>
	<!--footer-end-->	
	@yield('footer')
</body>
</html>