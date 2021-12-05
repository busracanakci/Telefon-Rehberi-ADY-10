<div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="" class="simple-text">
                 <img src="{{asset('admin_css\assets\img\favicon.png')}}" width="20" hight="20">    TELEFON REHBERİ
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{{route('admin.index')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Anasayfa</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.kisiler.index')}}">
                            <i class="material-icons">person</i>
                            <p>Rehber Listesi</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.sehir.index')}}">
                            <i class="material-icons">content_paste</i>
                            <p>Şehirler Listesi</p>
                        </a>
                    </li>
                    
                    
                    
                    
                    <li class="active-pro">
                    @auth
						<div class="box">
							<a onclick="event.preventDefault();document.getElementById('logout-form').submit()" href="{{route('logout')}}">Çıkış Yap</a>
							<form action="{{route('logout')}}" method="POST" id="logout-form">
								{{csrf_field()}}
						</div>
						@endauth
                    </li>
                </ul>
            </div>
        </div>