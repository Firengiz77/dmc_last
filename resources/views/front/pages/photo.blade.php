@extends('front.layout.master')

<link rel="stylesheet" href="{{ asset('/front/lightbox_image/fonts/icomoon/style.css') }}">

<link rel="stylesheet" href="{{ asset('/front/lightbox_image/css/owl.carousel.min.css') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('/front/lightbox_image/css/bootstrap.min.css') }}">

<!-- Style -->
<link rel="stylesheet" href="{{ asset('/front/lightbox_image/css/style.css') }}">
<!-- WOW CSS -->
<link rel="stylesheet" href="{{ asset('/front/lightbox_image/css/animate.css') }}">
<link href="{{ asset('/front/lightbox_image/css/lightbox.css') }}" rel="stylesheet" />



@section('container')

<section>

        <div class="container">
            <div class="row">
                <div class="col-md-12 photo-gallery">
                       <div class="event-procedur-header">
                              <h2 style="margin-top: 100px;"> </h2>
                                           <!--<h2 style="margin-top: 100px;">{{ __('Foto Arxiv') }} </h2>-->
                      </div>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Carousel indicators -->
                        <div class="indicators">
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <img class="my-prev"
                                    src="{{ asset('/front/lightbox_image/images/about/left.png') }}" alt=""></a>

                            <a class="right carousel-control" href="#myCarousel" data-slide="next"> <img class="my-next"
                                    src="{{ asset('/front/lightbox_image/images/about/right.png') }}" alt="">
                            </a>

                        </div>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                 
                                    @if($photos !== null)
                                    @foreach ($photos->image as $key => $images)
                                    <div class="col-sm-3 mb-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <a href="{{ asset('uploads/photos/' . $images) }}" class="lightbox"
                                                    title="">
                                                    <img src="{{ asset('uploads/photos/' . $images) }}" alt="Thumbnail 2">
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                          
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<script src="{{ asset('/front/lightbox_image/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/front/lightbox_image/js/popper.min.js') }}"></script>
<script src="{{ asset('/front/lightbox_image/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/front/lightbox_image/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('/front/lightbox_image/js/main.js') }}"></script>
<script src="{{ asset('/front/lightbox_image/js/slick.js') }}"></script>
<script src="{{ asset('/front/lightbox_image/js/wow.js') }}"></script>
<script src="{{ asset('/front/lightbox_image/js/lightbox.js') }}"></script>

<script>
    new WOW().init();
</script>
<script>
    lightbox('.lightbox', {

        captions: true,

        captionsSelector: 'self',

        captionAttribute: 'title',

        nav: 'auto',

        navText: [

            '&lsaquo;',

            '&rsaquo;'

        ],

        close: true,

        closeText: '&times;',

        counter: true,

        keyboard: true,

        zoom: true,

        zoomText: '&plus;',

        docClose: false,

        swipeClose: true,

        scroll: false

    });
</script>


    
@endsection