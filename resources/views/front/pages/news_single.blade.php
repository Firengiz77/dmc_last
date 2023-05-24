@extends('front.layout.master')

@section('title'){{$blog->meta_title}}@endsection
@section('meta_desc'){{$blog->meta_desc}}@endsection
@section('meta_keyw'){{$blog->meta_keyw}}@endsection

@section('container')

<section>
    <div class="container header-img">
      <img src="{{ asset($blog->image) }}" alt="">
    </div>
  </section>
  <section>
    <div class="container">
      <div class="event-procedur-header">
        <!--<h3>{{ __('blog_detail')}}</h3>-->
        <h2>{{ $blog->title }} </h2>
      </div>
      <div class="blog-content-area">
        <div class="blog-content">
         {!! $blog->desc !!}
        </div>
        <div class="showBlog-footer">
          <div class="btn_wrap">
            <span> {{ __('share')}} <img src="{{ asset('/front/images/right.png')}}" alt=""></span>
            <div class="container">
              <a  href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current()) }}" target="_blank"><i class="icon-facebook"></i></a>
              <a href="https://twitter.com/share?url={{urlencode(url()->current()) }}&text={{urlencode(url()->current()) }}" target="_blank"><i class="icon-twitter"></i></a>
              <a href="https://www.linkedin.com/sharing/share-offsite/?url={{urlencode(url()->current()) }}" target="_blank"><i class="icon-linkedin"></i></a>
              <a href="https://api.whatsapp.com/send?text={{urlencode(url()->current()) }}" target="_blank"><i class="icon-whatsapp"></i></a>
            </div>
          </div>
          <div class="blog-tags">
            <ul>
                @foreach($blog->tags as $tag)
                 <li><a href="{{ route('tags',$tag->slug) }}">#{{ $tag->title }} </a></li>
               @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection