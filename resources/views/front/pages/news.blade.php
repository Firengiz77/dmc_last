@extends('front.layout.master')

@section('title'){{$meta->blog_title}}@endsection
@section('meta_desc'){{$meta->blog_desc}}@endsection
@section('meta_keyw'){{$meta->blog_keyw}}@endsection

@section('container')



<section>
        <div class="container header-img">
            <img style="margin-top:100px !important;aspect-ratio: 0 !important;" src="{{ asset('/front/images/adsbg.png')}}" alt="">
        </div>
    </section>
    <section>
        <div class="blogs home-blogs">
            <div class="container">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="single-blog">
                            <div class="blog-text">
                                <h3>{{ $blog->title }}</h3>
                                <p> {!! substr($blog->desc,0,50) !!} </p>
                            </div>
                            <a href="{{ route('news_single',$blog->slug) }}" class="see-more"> Tam bax <img src="{{ asset('front/images/right-grey.png')}}"
                                    alt=""></a>
                        </div>
                    </div>
                    @endforeach
                 
                    {{ $blogs->links('vendor.pagination.custom1') }}

                </div>
            </div>
        </div>
    </section>





@endsection