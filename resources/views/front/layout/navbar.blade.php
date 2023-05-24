<!doctype html>
<html lang="en">

<head>

<title>@yield('title')</title>

<meta property="og:desc" content="@yield('meta_desc')">
<meta content="@yield('meta_desc')" name="description">
<meta content="@yield('meta_keyw')" name="keywords">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/front/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{asset('/front/css/owl.carousel.min.css')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('/front/css/bootstrap.min.css')}}">
  
  <!-- Style -->
  <link rel="stylesheet" href="{{asset('/front/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/front/css/slick-theme.css')}}" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon"  href="{{asset('/front/images/favicon.ico')}}">


    {{-- alertify css --}}
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KQGQZ6R');</script>
<!-- End Google Tag Manager -->
    
<!---->

    
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
    
    
</head>
<style>
  .fa-cart-shopping{
    position: relative;
    font-size: 17px;
  }
.count {
	position: absolute;
	bottom: 12px;
	left: 12px;
	background-color: #c35a5a;
	color: white;
	font-size: 9px;
	padding: 3px  5px;
	border-radius: 150px;
}
</style>

<body>
    
    <input value="{{ App::getLocale() }}" id="language_2" type="hidden">

  <div id="toTop">
    <i class="icon-chevron-up"></i>
  </div>
  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  <header class="site-navbar" role="banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-10 col-xl-2">
          <h1 class="mb-0 site-logo">
            <a href="{{ route('index') }}" class="text-white mb-0">
              <img src="{{asset($about->icon1)}}" alt="">
            </a>
           
          </h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="{{ route('index') }}"><span>{{ __('home') }} </span></a></li>
              <li class="active"><a href="{{ route('index').'#about_section' }}"><span>{{ __('about') }} </span></a></li>
              <li><a href="{{ route('index').'#program' }}"><span>{{ __('program') }} </span></a></li>
              <li><a href="{{ route('news') }}"><span>{{ __('blogs') }}</span></a></li>
              <li><a href="{{ route('index').'#us_projects' }}"><span>{{ __('projects') }} </span></a></li>
              <li><a href="{{ route('index').'#contact' }}"><span>{{ __('contact') }}</span></a></li>

              <!--<li class="has-children">-->
              <!--  <a href=""><span>{{ __('Qalareya') }}</span></a>-->
              <!--  <ul class="dropdown arrow-top">-->
              <!--    <li class="has-children"><a>{{ __('Foto') }}</a>-->
              <!--      <ul class="dropdown arrow-top">-->
              <!--        @foreach($photos2 as $photo)-->
              <!--        <li><a  href="{{route('photo.year',$photo->year)}}">{{ $photo->year }}</a></li>-->
              <!--        @endforeach-->
              <!--      </ul>-->
              <!--    </li>-->
              <!--    <li class="has-children"><a>Video</a>-->
              <!--     <ul class="dropdown arrow-top">-->
              <!--       @foreach($videos2 as $video)-->
              <!--      <li><a  href="{{route('video.year',$video->year)}}">{{ $video->year }}</a></li>-->
              <!--     @endforeach-->
              <!--     </ul>-->
              <!--    </li>-->
                  <!-- <li class="has-children"><a>Keçmiş forumlar</a>-->
                  <!-- <ul class="dropdown arrow-top">-->
                   
                  <!--  <li><a target="_blank"  href="https://2022.mirf.az/">MİRF 2022</a></li>-->
                   
                  <!-- </ul>-->
                  <!--</li>-->
              <!--  </ul>-->
              <!--  </li>-->

              <!--<li class="has-children lang">-->
              <!--  <a href="#"><span>  {{ strtoupper(App::getLocale()) }} </span></a>-->
              <!--  <ul class="dropdown arrow-top">-->
              <!--  @foreach ($all_languages as $a_language)-->
              <!--    <li><a href="{{ route('locale', $a_language->code) }}"> {{ $a_language->name }} </a> </li>-->
              <!--    @endforeach-->
              <!--  </ul>-->
              <!--</li>-->
              <li><a class="link-dropdown" href="{{ route('basket') }}">
              <i class="fa-solid fa-cart-shopping"><span class="count">  
                  @if(session()->get('cart') !== null)
                {{  count(session()->get('cart')) }} 
                @else
                0
                @endif 
              </span></i>
										</a></li>
              <li class="register-login"><a href=" {{ route('index').'#ticket' }}" ><span>{{ __('register') }}</span> <img
                    src="{{asset('/front/images/right.png')}}" alt=""></a></li>
              <li class="register-login-2"><a href="{{ route('sponsor_form') }}"><span>{{ __('register_sponsor') }} </span> <img
                    src="{{asset('/front/images/right.png')}}" alt=""></a></li>
            </ul>
          </nav>
        </div>
        <div class="col-2 d-inline-block d-xl-none ml-md-0 mr-auto py-3 text-right"
          style="position: relative; top: 3px;">
          <a href="#" class="site-menu-toggle js-menu-toggle ">
            <span class="icon-menu h3"></span>
          </a>
        </div>
      </div>
    </div>
    </div>

  </header>
