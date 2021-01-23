<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon"/>
	{{-- <title>Cyrus</title> --}}
    @yield('meta')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/front.min.css') }}">
</head>
<body>
	@if(Session::has('message'))
		<div class="modal fade text-left" id="modalMessage">
		    <div class="modal-dialog modal-dialog-scrollable" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title" id="myModalLabel1">Message Box</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		            <div class="modal-body">
		            	{{ Session::get('message') }}
		            	{{ Session::forget('message') }}
		            </div>
		        </div>
		    </div>
		</div>
	@endif
	<div class="loader-container circle-pulse-multiple">
		<div class="loader">
			<div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
            <h2 class="l-text">B</h2>
		</div>
	</div>

	<div class="searchForm">
        <span class="cross-btn form_hide"><i class="lnr lnr-cross"></i></span>
       	<div class="container">
            <div class="row">
                <form action="{{ url('search') }}" method="post" class="col-xl-12 search_row m0">
                    @csrf
                    <div class="input-group"> 
                        <input type="search" name="keyword" class="form-control" placeholder="Input keyword and press Enter.">
                    </div> 
                    {{-- <p></p> --}}
                </form>
            </div>
       	</div>
    </div>

    <div class="offcanvas_menu_click">
        <div class="off_menu_inner">
            <span class="cross-btn cross"><i class="fas fa-times"></i></span>
            <div class="off_menu_relative">
                <ul>
                   <li><a href="#">FAQ</a></li>
                   <li><a href="#">Journal</a></li>
                   <li><a href="#">in the press</a></li>
                   <li><a href="#">locations</a></li>
                   <li><a href="#">weddings</a></li>
                   <li><a href="#">portraits</a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- <header class="main_menu_area full_pad"> --}}
	<header class="sticky-top">
		<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navigation">
			<a class="navbar-brand" href="#">
            	<img src="{{ asset('images/logo.jpg') }}" alt="" width="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto" id="nav_link">
					<li class="nav-item {{ Request::is('/') ? 'active' : null }}">
						<a class="nav-link" href="{{ url('/') }}">Home</a>
					</li>
                    <li class="nav-item {{ Request::is('portfolio') ? 'active' : null }}">
                        <a class="nav-link" href="{{ url('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item {{ Request::is('blog') ? 'active' : null }}">
                        <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                    </li>
					<li class="nav-item {{ Request::is('rate') ? 'active' : null }}">
						<a class="nav-link" href="{{ url('rate') }}">Rate</a>
					</li>
					
					
					<li class="nav-item {{ Request::is('contact') ? 'active' : null }}">
						<a class="nav-link" href="{{ url('contact') }}">Contact</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
                    <li class="search_dropdown">
                    	<a href="#" class="nav-link"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
			</div>
		</nav>
        {{-- <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                	<span></span>
                </button>
                <a class="navbar-brand" href="#">
                	<img src="{{ asset('images/logo.jpg') }}" alt="" width="100">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav menu">                                                              
                    <li class="active">
                    	<a href="index.html">Home</a>
                    </li>
                    <li>
                    	<a href="about.html">About</a>
                    </li>
                    <li>
                    	<a href="portfolio.html">Portfolio</a>
                    </li>
                    <li class="dropdown submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li>
                            	<a href="blog.html">Blog</a>
                            </li>
                            <li>
                            	<a href="blog-sidebar.html">Blog Left sidebar</a>
                            </li>
                            <li>
                            	<a href="blog-details.html">Blog Details</a>
                            </li>
                            <li>
                            	<a href="404.html">404</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    	<a href="contact.html">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="search_dropdown">
                    	<a href="#"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav> --}}
    </header>

    @yield('content')

    <footer class="footer_area full_pad">
        <div class="footer_bg footer-padtop">
            <div class="container">
                <div class="footer_instagram_area">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="instagram_list" id="instafeed"></ul>
                        </div>
                        <div class="col-md-4">
                            <div class="follow_me_inner">
                                <h3>Follow Me On <br /></h3>
                                <ul class="list-inline text-center mt-3">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/bryanvenanciophotography" target="_blank" class="text-dark"><i class="fa-2x fab fa-facebook-square"></i></a>
                                    </li>
                                    <!-- <li class="list-inline-item">
                                        <a href="#" target="_blank" class="text-dark"><i class="fa-2x fab fa-twitter-square"></i></a>
                                    </li> -->
                                    <li class="list-inline-item">
                                        <a href="#" target="_blank" class="text-dark"><i class="fa-2x fab fa-instagram"></i></a>
                                    </li>
                                    <!-- <li class="list-inline-item">
                                        <a href="#" target="_blank" class="text-dark"><i class="fa-2x fab fa-google-plus-square"></i></a>
                                    </li> -->
                                </ul>
                                <!-- <div class="instagram_box">
                                    <div class="instagram_box_inner">
                                        <h4>@Bryan Venancio.</h4>
                                    </div>
                                </div> -->
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <ul class="instagram_list" id="instafeed2"></ul>
                        </div>
                    </div>
                </div>
                <div class="footer_copyright">
                    <h6>Copyright © {{ date('Y') }} <a href="#">Bryan Venancio</a></h6>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
	<script src="{{ asset('js/front.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
	{{-- <script src="{{ asset('js/instafeed.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('js/script.min.js') }}"></script> --}}
	<script src="{{ asset('js/theme.min.js') }}"></script>
	<script type="text/javascript">
		$(window).on('load', function() {
            $('#modalMessage').modal('show');
        });
	</script>
    @yield('js')
</body>
</html>