@extends('front.layout.master')
<link rel="stylesheet" href="{{ asset('/front/lightbox_video/css/main.css') }}" />

@section('container')



<section style="padding-top: 3rem">
    <div id="video_container" class="container">
        <div class="event-procedur-header">
            <h2 style="margin-top: 100px;"></h2>
              <!--<h2 style="margin-top: 100px;">{{ __('Video Arxiv') }} </h2>-->
    </div>

        <div class="flex">

        @foreach ($videos as $item)
            <div class="vid youtube" style="background-image:url('/{{ $item->image }}');background-size: cover;"
                ytSrc="{{ $item->link }}"></div>

         @endforeach
        </div>
    </div>
</section>



<script src="{{ asset('/front/lightbox_video/js/BigPicture.js') }}"></script>

<script>
    ; (function () {
        // other stuff
        function setClickHandler(id, fn) {
            document.getElementById(id).onclick = fn
        }

        setClickHandler('video_container', function (e) {
            var className = e.target.className
            if (~className.indexOf('htmlvid')) {
                BigPicture({
                    el: e.target,
                    vidSrc: e.target.getAttribute('vidSrc'),
                })
            } else if (~className.indexOf('vimeo')) {
                BigPicture({
                    el: e.target,
                    vimeoSrc: e.target.getAttribute('vimeoSrc'),
                })
            } else if (~className.indexOf('twin-peaks')) {
                BigPicture({
                    el: e.target,
                    ytSrc: e.target.getAttribute('ytSrc'),
                    dimensions: [1226, 900],
                })
            } else if (~className.indexOf('youtube')) {
                BigPicture({
                    el: e.target,
                    ytSrc: e.target.getAttribute('ytSrc'),
                })
            }
        })

    })()
</script>
   
@endsection