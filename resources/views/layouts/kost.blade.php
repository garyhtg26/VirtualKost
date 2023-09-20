<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">


</head>
<body class="hero-anime">

	<header class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">

						<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo.svg') }}" width="90px" alt=""></a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ms-auto py-4 py-md-0">
								<li class="nav-item ps-4 ps-md-0 ms-0 ms-md-4 me-md-4 {{ Request::routeIs('home') ? 'active' : '' }}">
									<a class="nav-link" href="{{ url('/') }}">Home</a>
								</li>
								<li class="nav-item ps-4 ps-md-0 ms-0 ms-md-4 me-md-4">
									<a class="nav-link" href="/#about">About</a>
								</li>
								<li class="nav-item ps-4 ps-md-0 ms-0 ms-md-4 me-md-4 {{ Request::routeIs('help-center') ? 'active' : '' }}">
									<a class="nav-link" href="/help-center">Help</a>
								</li>
								{{-- <li class="nav-item ps-4 ps-md-0 ms-0 ms-md-4 me-md-4 ">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Login</a>
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-sm-start" style="    left: -100px;">
										<a class="dropdown-item" href="#">Sebagai Pemilik</a>
										<a class="dropdown-item" href="#">Sebagai Penghuni</a>
									</div>
								</li> --}}
                                @if (Auth::user()?->name)
                                <li class="nav-item no-border ps-4 ps-md-0 ms-0 ms-md-4 me-md-4 ">
									<button class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/profile.svg" height="30px" class="me-2">{{ Auth::user()?->name }}</button>
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-sm-start" >

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="dropdown-item"  onclick="event.preventDefault();
                                            this.closest('form').submit();">Logout</button>
                                        </form>
									</div>
								</li>
                                @else
                                <button class="btn btn-primary ms-0 ms-md-4 me-md-4 " style="font-weight:600;" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
                                @endif
                            </ul>
						</div>

					</nav>
				</div>
			</div>
		</div>
	</header>


    <main>
        {{$slot}}
    </main>


	<div class="my-5 py-5">
	</div>
    <footer>
        <div class="container m-auto row" style="text-align: -webkit-center;">
            <div class="col-sm-12 col-md-3" style=" align-self: center;   ">
                <a class="navbar-brand" style="display: block;width: fit-content;" href="{{ url('/') }}"><img src="img/logo.svg" width="95px" alt=""></a>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="label-footer">Get our best offer</div>
                <form class="search-form mt-2 mb-3">
                    <input type="search" value="" placeholder="Email" style="width: 80% !Important" class="search-input">
                    <a href="#"><img class="subscribe-icon" src="img/subscribe.svg"></a>
                </form>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="label-footer">Follow us</div>
                <div class="follow-footer mt-4">
                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                      </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                      </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="label-footer">Contact Us</div>
                <a href="#" class="social-icon mt-4">
                    <i class="fab fa-whatsapp me-1"></i>
                    <div style="font-size: 1rem">081-22345578</div>
                  </a>
            </div>
        </div>
        <div class="bg-c-grid__item"><div class="bg-l-footer__divider"><span role="separator" class="bg-c-divider bg-c-divider--small"></span></div></div>
        <div class="text-center py-4">
            <div>© 2023 Virtual Kost | All Rights Reserved</div>
        </div>
    </footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-3">
          <h3 style="font-weight: 600; font-size: 1.2rem"> Masuk ke Virtual Kost</h3>
          <div class="container m-auto mt-4">
            <div class="card-login mb-3 d-flex" onclick="window.location='{{ url("login") }}'">
                <img data-v-c4a0837c="" src="https://static-asset.mamikos.com/assets/bangul/illustrations/login-tenant.svg?version=2.38.0" alt="login-tenant" class="bg-c-illustration login-role-selection__item-illustration" height="65">
                <div style="align-self: center;">Pencari Kost</div>
            </div>
            <div class="card-login mb-3 d-flex" onclick="window.location='{{ url("login-dashboard") }}'">
                <img data-v-c4a0837c="" src="https://static-asset.mamikos.com/assets/bangul/illustrations/login-owner.svg?version=2.38.0" alt="login-tenant" class="bg-c-illustration login-role-selection__item-illustration" height="65">
                <div style="align-self: center;">Pemilik Kost</div>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>


{{-- <div class="section full-height">
    <div class="absolute-center">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
            <h1><span>B</span><span>o</span><span>o</span><span>t</span><span>s</span><span>t</span><span>r</span><span>a</span><span>p</span> <span>4</span><br>
            <span>m</span><span>e</span><span>n</span><span>u</span></h1>
            <p>scroll for nav animation</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="switch">
                            <div id="circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
