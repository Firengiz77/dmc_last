@extends('front.layout.master')
@section('title'){{$meta->home_title}}@endsection
@section('meta_desc'){{$meta->home_desc}}@endsection
@section('meta_keyw'){{$meta->home_keyw}}@endsection
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<script src="https://jsuites.net/v4/jsuites.js"></script>
<link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('container')

<style>


</style>


@if(session()->has('message'))
<div class="alert alert-success">
  {{ session()->get('message') }}
</div>
@endif


<section style="padding-top:3rem">
  <div class="container">
    <div class="row header-area">
      <div class="col-lg-8 header-text">
        <h1>{!! $about->content_1 !!}</h1>
      </div>
      <div class="col-lg-4">
        <img src="{{asset('/front/images/Ellipse-1.gif')}}" alt="" class="circle">
        <div class="download-presentation">
          <a target="_blank" href="{{asset($about->pdf)}}">
            {{ __('teqdimati_endir') }}
            <img src="{{asset('/front/images/right.png')}}" alt="">
          </a>
        </div>
      </div>
    </div>

  </div>
  <!--@@@@@ video-area start @@@@@@@-->
  <div class="video-area mb-5">
    <video id="video" loop="" playsinline="" autoplay="" muted="" controls="controls">
      <source src="{{ asset($about->video) }}" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
    </video>
    <input type="hidden" value="{{ \Carbon\Carbon::parse($about->date)->format('M d,Y H:m:s') }}" id="date_from_video" name="date_from_video">

    <div class="container countDown-area">
      <div class="time">
        <div id="days"></div>
        <div id="hours"></div>
        <div id="minutes"></div>
        <div id="seconds"></div>
      </div>
    </div>
  </div>
</section>


@if(session()->has('message'))
<div class="alert alert-success">
  {{ session()->get('message') }}
</div>
@endif


<section id="about_section">
  <div class="home-about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-12 about-text event-procedur-header">
          <h3> {{ __('vmzabout') }}</h3>
          <p> {!! $about->content_2 !!}
          </p>
        </div>
        <div class="col-lg-5 about-img">
          <img src="{{ asset($about->image)}}" alt="">
        </div>
        <!--<div class="download-presentation">-->
        <!--  <a style="margin: 0px 15px;" target="_blank" href="https://fb.me/e/2bpa9QET4">-->
        <!--    <i class="fa-brands fa-facebook-f pe-1"></i>-->
        <!--    {{ __('Facebook Event') }}-->

        <!--    <img src="{{asset('/front/images/right.png')}}" alt="">-->
        <!--  </a>-->

        <!--</div>-->
      </div>
    </div>
  </div>
</section>

<!--@@@@@@@@@ event start @@@@@@@@@@-->


<section>
  <div class="event-procedur">
    <div class="container event-procedur-area">
      <div style="width:100% !important;" class="event-procedur-header">
        <!--<h3> {{ __('program_and_spiker')}} </h3>-->
        <h2 style="text-align:center;">{{ $about->program}} </h2>

        <form class="searchform searchform-2" action="{{ route('search') }}" method="get">
          <input  required id="search_input" name="q" type="text" class="searchform__input searchform__input2" name="search" placeholder="{{ __('search_2') }}">
          <!--  <button type="submit" class="searchform__submit"> -->
          <i class="dl-icon-search1"></i>
          </button>
        </form>

        <!-- Search -->
        <span id="search_result" style="width: 100%;"></span>


        <!--<p> {{ $about->program_1 }} </p>-->
      </div>




      @foreach($programs as $program)
      @php
      $spikers = App\Models\Spiker::where('programs_id',$program->id)->get()->sortBy('name', SORT_NATURAL);
      $count2 =0;
      @endphp

      
      <div class="supporter-area">
        <h3>{{ $program->title }}</h3>
        <div class="x-flex">


         
          @foreach($spikers as $key => $spiker)
          <a href="#ModalArea_{{$spiker->id}}" style="width:254px" data-toggle="modal" data-target="#myModal_{{$spiker->id}}" class="sponsor_link sponsor_link2">
            <div class="moderator-info">
              <img src="{{ asset($spiker->image) }}" alt="">
              <h4 class="moder-h"> {{ $spiker->name  }}</h4>
              <p> {{ $spiker->company }} </p>
              <p> {{ $spiker->profession }} </p>
            </div>
          </a>
          @endforeach
        </div>

        <!--XXXXXXXXXXXX id ModalArea dan goturdum style="position: absolute;z-index:99;top:100%;left:15%"   XXXXXXXXXXXXX -->
        @foreach($spikers as $key => $spiker)
        <div id="ModalArea_{{$spiker->id}}" class="supporter-area23">
          <div class="modal fade" id="myModal_{{$spiker->id}}">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 style="font-weight:700" class="modal-title"> {{ $spiker->name  }} <span>{{ $spiker->title }}  | {{ $spiker->company }} | {{ $spiker->profession }}</span></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body row">
                  <div class="modal-left col-lg-4">
                    <img src="{{ asset($spiker->image) }}" alt="">

                    <div class="social_icons">
                      <a href="{{ $spiker->fb }}" target="_blank"><i class="icon-facebook"></i></a>
                      <a href="{{ $spiker->linked }}" target="_blank"><i class="icon-linkedin"></i></a>
                      @if($spiker->twitter !== null)
                      <a href="{{ $spiker->twitter }}" target="_blank"><i class="icon-twitter"></i></a>
                      @endif
                      <a href="{{ $spiker->instagram }}" target="_blank"><i class="icon-instagram"></i></a>

                    </div>
                  </div>
                  <div class="modal-right col-lg-8">
                    <p> {!! $spiker->desc !!}
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      @endforeach








      <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

      {{-- @foreach($programs as $program)
        @php
        $spikers = App\Models\Spiker::where('programs_id',$program->id)->get();
        @endphp
        <div class="moderator-area">
          <h3>{{ $program->title }}</h3>
      <div class="moderator">
        @foreach($spikers as $spiker)
        <div>
          <div class="single-moderator">
            <img src="{{ asset($spiker->image) }}" alt="">
            <h3 class="moderator-name">
              {!! str_replace(' ', '</br>', $spiker->name) !!}
            </h3>
          </div>
          <div class="moderator-more-info">
            <h3> {{ $spiker->profession }} </h3>
            <div class="moderator-social">
              <a href="{{ $spiker->fb }}" target="_blank"><i class="icon-facebook"></i></a>
              <a href="{{ $spiker->linked }}" target="_blank"><i class="icon-linkedin"></i></a>
              @if($spiker->twitter !== null)
              <a href="{{ $spiker->twitter }}" target="_blank"><i class="icon-twitter"></i></a>
              @endif
              <a href="{{ $spiker->instagram }}" target="_blank"><i class="icon-instagram"></i></a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>

    @endforeach --}}

  </div>
</section>
<!--@@@@@@@@@ event sponsor start @@@@@@@@@@-->
<section>
  <div class="event-sponsor" id="projects">
    <!-- burdayam -->
    <div class="container">
      <!-- burdayam1 -->
      <div class="event-sponsor-header">

        <!--<h3>{{ __('tedbirin_sponsorlari') }}</h3>-->
        <h2 style="text-align:center;">{{ $about->sponsor }}</h2>
        <!--<p> {{ $about->sponsor_1 }}</p>-->
      </div>
      <!-- burdayam3 -->
      @foreach($sponsors as $sponsor)

      @php
      $supports = App\Models\Supporter::where('sponsor_id',$sponsor->id)->get()->sortBy('title', SORT_NATURAL);
      $count=0;
      @endphp
<!-- zzzz -->
      <div class="supporter-area">
        <h3>{{ $sponsor->title }}</h3>

        <div class="brend-flex">

          @foreach($supports as $key => $support)
          <!-- burdayam 4 -->
          <a class="sponsor_link popap" href="#ModalArea12_{{ $support->id}}" data-toggle="modal" data-target="#myModal12_{{ $support->id }}">
              
            <div class="sponsor_img">
                
              <img src="{{ asset($support->image) }}" alt="">
            </div>
          </a>

          @endforeach

        </div>

        @foreach($supports as $key => $support)
        <div id="ModalArea12_{{$support->id}}" class="support_area_23" >
          <div class="modal fade" id="myModal12_{{ $support->id}}">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"> <span>{{ $support->title }}</span></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body row">
                  <div class="modal-left col-lg-4">
                    <img src="{{ asset($support->image) }}" alt="">
                    <a href="{{ $support->link }}" target="_blank" class="see-more">{{ __('Sayta kec') }} <img src="{{asset('/front/images/right-grey.png')}}" alt=""></a>
                  </div>
                  <div class="modal-right col-lg-8">
                    <p> {!! $support->desc !!}
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      @endforeach

    </div>
  </div>
</section>

<!--@@@@@@@@@ program start @@@@@@@@@@-->


<section>
  <div class="container" id="program">
    <div class="event-sponsor-header  sponsor-2">
      <h3>{{ __('Tədbirin Proqramı') }}</h3>
      <h2>{{ __('Panellərlə tanış olun') }}</h2>
    </div>


    <div class="event-schedule">
      <!-- Tabs nav -->
      <div class="nav nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">

        <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
          <i class="fa fa-user-circle-o mr-2"></i>
          <span class="">{{ date('d.m.Y', strtotime($first_date->date)) }} </span></a>

        <!--<a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"-->
        <!--  role="tab" aria-controls="v-pills-profile" aria-selected="false">-->
        <!--  <i class="fa fa-calendar-minus-o mr-2"></i>-->
        <!--  <span class="">{{ $last_date->date}}</span></a>-->
      </div>

      <!-- Tabs content -->
      <div class="tab-content" id="v-pills-tabContent">

        <div class="tab-pane fade shadow rounded bg-white show active p-4" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="accordion" id="accordionExample">


            @foreach($first_event as $key => $event2)

            @php
            $moderators = App\Models\Moderator::where('events_id',$event2->id)->get();
            @endphp

            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" @if($event2->active === 1)
                    data-toggle="collapse"
                    data-target="#collapseOne_{{$key}}" aria-expanded="true" aria-controls="collapseOne_{{$key}}"
                    @endif
                    >
                    {{$event2->name}}
                    @if($event2->active === 1)
                    <img id="event_images" src="{{ asset('/front/images/down-arrow.png') }}" width="20px">
                    @endif
                  </button>
                </h2>
              </div>
              <div id="collapseOne_{{$key}}" class="collapse " aria-labelledby="headingOne_{{$key}}" data-parent="#accordionExample">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">{{__('Panel')}} </th>
                      <th scope="col">{{__('time')}}</th>
                      <th scope="col">{{__('Moderator / Spikerlər')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row" class="rowSpan" rowspan="{{ $event2->id }}">
                        {{$event2->name}}
                        <br>
                        {{ $event2->hour}}

                      </td>

                      @foreach($moderators as $key => $moderator)
                      @if($key != 0)
                    <tr> @endif

                      <td> {{ $moderator->hour }} </td>
                      <td class="event-speaker">
                        <!--@if($moderator->image !== null)-->
                        <!--<a href="#ModalArea89_{{$moderator->id}}" style="width:254px" data-toggle="modal" data-target="#myModal89_{{$moderator->id}}" class="sponsor_link sponsor_link2">-->
                             <img src="{{ asset($moderator->image) }}" alt="">
                        <!--</a>-->
                        <!--@endif-->
                        <div> {{ $moderator->name }}</div>
                      </td>
                    </tr>
                    @endforeach
                    
                        <!--XXXXXXXXXXXX id ModalArea dan goturdum style="position: absolute;z-index:99;top:100%;left:15%"   XXXXXXXXXXXXX -->
                                <!--@foreach($moderators as $key => $moderator)-->
                                <!--<div id="ModalArea89_{{$moderator->id}}" class="supporter-area89">-->
                                <!--  <div class="modal fade" id="myModal89_{{$moderator->id}}">-->
                                <!--    <div class="modal-dialog modal-lg">-->
                                <!--      <div class="modal-content">-->
                                <!--        <div class="modal-header">-->
                                <!--          <h4 style="font-weight:700" class="modal-title"> {{ $moderator->name  }} <span>{{ $moderator->title }}  | {{ $moderator->company }} | {{ $moderator->profession }}</span></h4>-->
                                <!--          <button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                <!--        </div>-->
                                <!--        <div class="modal-body row">-->
                                <!--          <div class="modal-left col-lg-4">-->
                                <!--            <img src="{{ asset($moderator->image) }}" alt="">-->
                        
                                <!--            <div class="social_icons">-->
                                <!--              <a href="{{ $moderator->fb }}" target="_blank"><i class="icon-facebook"></i></a>-->
                                <!--              <a href="{{ $moderator->linked }}" target="_blank"><i class="icon-linkedin"></i></a>-->
                                <!--              @if($moderator->twitter !== null)-->
                                <!--              <a href="{{ $moderator->twitter }}" target="_blank"><i class="icon-twitter"></i></a>-->
                                <!--              @endif-->
                                <!--              <a href="{{ $moderator->instagram }}" target="_blank"><i class="icon-instagram"></i></a>-->
                        
                                <!--            </div>-->
                                <!--          </div>-->
                                <!--          <div class="modal-right col-lg-8">-->
                                <!--            <p> {!! $moderator->desc !!}-->
                                <!--            </p>-->
                                <!--          </div>-->
                                <!--        </div>-->
                        
                                <!--      </div>-->
                                <!--    </div>-->
                                <!--  </div>-->
                                <!--</div>-->
                                <!--@endforeach-->

                  </tbody>
                </table>
              </div>
            </div>
            @endforeach

          </div>
        </div>


        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <div class="accordion" id="accordion2">

            @foreach($last_event as $key => $event3)

            @php
            $moderators = App\Models\Moderator::where('events_id',$event3->id)->get();
            @endphp


            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" @if($event3->active === 1)
                    data-toggle="collapse"
                    data-target="#collapseOne_{{$key}}" aria-expanded="true" aria-controls="collapseOne_{{$key}}"
                    @endif
                    >
                    {{$event3->name}}
                    @if($event3->active === 1)
                    <img id="event_images" src="{{ asset('/front/images/down-arrow.png') }}" width="20px">
                    @endif
                  </button>
                </h2>
              </div>
              <div id="collapseOne_{{$key}}" class="collapse " aria-labelledby="headingOne_{{$key}}" data-parent="#accordionExample">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">{{__('registrations')}} </th>
                      <th scope="col">{{__('time')}}</th>
                      <th scope="col">{{__('moderator')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row" class="rowSpan" rowspan="{{ $event3->id }}">
                        {{$event3->name}}
                        <br>
                        {{ $event3->hour}}
                      </td>

                      @foreach($moderators as $key => $moderator)
                      @if($key != 0)
                    <tr> @endif

                      <td> {{ $moderator->hour }} </td>
                      <td class="event-speaker">
                        <img src="{{ asset($moderator->image) }}" alt="">
                        <div> {{ $moderator->name }}</div>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>


            @endforeach
          </div>

        </div>
      </div>
    </div>
</section>

<!--@@@@@@@@@ contact start @@@@@@@@@@-->

<section>
  <div class="location" id="contact">
    <div class="container">
      <div class="event-procedur-header">
        <!--<h3></h3>-->
        <h2>{{ __('elaqe_unvan')}} / {{ __('contact')}} </h2>
        <!--<p> {{ $contact->title }}</p>-->
      </div>
      <div class="row">
        <div class="col-lg-9 location-img">
          <img src="{{ asset($contact->image) }}" alt="">
        </div>
        <div class="col-lg-3">
          <div class="location-details">
            <div class="phone field">
              <div>
                {{ __('contact_sponsor') }}
              </div>
              <div>
                <i class="icon-phone"></i> <a href="tel:+{{ str_replace($contact->phone_1,' ','' )}}">{{ $contact->phone_1 }}</a>
              </div>
              <div>
                {{ __('elaqe_satis') }}
              </div>
              <div>
                <i class="icon-phone"></i> <a href="tel:+{{ str_replace($contact->phone_2,' ','' )}}">{{ $contact->phone_2 }}</a>
              </div>
            </div>
            <div class="field">
              <div class="social">
                <a href="{{ $contact->fb }}" target="_blank"><i class="icon-facebook"></i></a>
                <a href="{{ $contact->linked }}" target="_blank"><i class="icon-linkedin"></i></a>
                <a href="{{ $contact->youtube }}" target="_blank"><i class="icon-youtube"></i></a>
                <a href="{{ $contact->instagram }}" target="_blank"><i class="icon-instagram"></i></a>
              </div>
            </div>
            <div class="location-name field">

              <a href="https://goo.gl/maps/nj8QFUhuavMhuEdeA" target="_blank"><i class="icon-map-marker"></i></a>

              {{ $contact->address }}
            </div>
            <div class="field">
              <div class="location-email">
                <i class="icon-mail_outline"></i>
                <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>



<!--@@@@@@@@@ Old Forms start @@@@@@@@@@-->
<section>
  <div class="event-sponsor" id="us_projects">
    <div class="container">
      <div class="event-sponsor-header">
        <!--<h3>{{ __('projects')}}</h3>-->
        <h2 style="text-align:center;">{{ $about->project }}</h2>
        <!-- <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.Lorem Ipsum
            is simply dummy text of the printing and typesetting industry.</p> -->
      </div>
      <div class="supporter-area">
        <div class="brend-flex">
          @foreach($projects as $key => $project)
          <a href="#ModalAreaProj" class="popap" data-toggle="modal" data-target="#myModalProject_{{$key}}" class="sponsor_link">
            <div>
              <img src="{{ asset($project->image) }}" alt="">
            </div>
          </a>
          @endforeach
        </div>
        @foreach($projects as $key => $project)
        <div id="ModalAreaProj" class="support_area_23">
          <div class="modal fade" id="myModalProject_{{$key}}">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"> <span>{{ $project->title }}</span></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body row">
                  <div class="modal-left col-lg-4">
                    <img src="{{ asset($project->image) }}" alt="">
                    <div class="projects-social">
                      @if($project->fb !== null )
                      <a href="{{ $project->fb }}" target="_blank"><i class="icon-facebook"></i></a>
                      @endif
                      @if($project->linked !== null)
                      <a href="{{ $project->linked }}" target="_blank"><i class="icon-linkedin"></i></a>
                      @endif
                      @if($project->twitter !== null)
                      <a href="{{ $project->twitter }}" target="_blank"><i class="icon-twitter"></i></a>
                      @endif
                      @if($project->instagram !== null)
                      <a href="{{ $project->instagram }}" target="_blank"><i class="icon-instagram"></i></a>
                      @endif
                      <a href="{{ $project->link }}" target="_blank" class="see-more"> {{ __('Sayta kec') }} <img src="{{asset('/front/images/right-grey.png')}}" alt=""></a>
                    </div>

                  </div>
                  <div class="modal-right col-lg-8">
                    <p>{!! $project->desc !!} </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        @endforeach

      </div>
    </div>
  </div>
</section>
{{-- ticket --}}
<section class="call-to-action  tickets" id="ticket">


  <div class="container">
    <div class="call-to-header">
      <h3 style="color:white">{{ __('Bileter') }}</h3>
      <!--<h2 style="color:white;    text-align: left;">{{ __('Qeydiyyat') }}</h2>-->
    </div>
    <div class="row justify-content-center">

      @foreach ($tickets as $ticket)

      <div class="col-xl-4">
        <div class="ticket">
          <div class="stub">
            <div class="stub-info">
              <div>
                <img src="{{ asset($ticket->image) }}" alt="{{ __('registration') }}" />
                <div class="info">
                    
                    <i class="fa-solid fa-circle-info icon-info-sign"></i>
                  <span class="extra-info">
                         {{ $ticket->inform   }}
                  </span>
                </div>
              </div>
              <div>
                <div class="date">
                  <span>{{ __('date') }}:</span>
                  <span>{{ $ticket->date }}</span>
                </div>
                <div class="place-event">
                  <span>{{ __('time') }}</span>
                  <span>{{ $ticket->time }}</span>
                </div>
              </div>
            </div>
            <div class="ticket-type">
              {{ $ticket->title }}
            </div>
          </div>
          <div class="check">
            <div class="ticket-price">

              {{ $ticket->price }} Azn
            </div>
            {{-- id='notification' value='Show notification'  --}}
            <button onclick="addtocart({{ $ticket->id }})">{{ __('Buy_ticket') }}</button>
          </div>
        </div>
      </div>
      @endforeach
      <h3 style="color:white; font-weight: 700; background-color: #06B3D2;text-align: center; padding: 20px 150px 20px 150px;">{{ __('Bileter2') }}</h3>
            <div class="col-xl-4">
        <div class="ticket">
          <div class="stub">
            <div class="stub-info">
              <div>
               <img src="{{ asset($ticket->image) }}" alt="{{ __('registration') }}" />
              </div>
              <div>
                <div class="date">
                  <span>{{ __('date') }}:</span>
                  <span>{{ $ticket->date }}</span>
                </div>
                <div class="place-event">
                  <span>{{ __('time') }}</span>
                  <span>09:00</span>
                </div>
              </div>
            </div>
            <div class="ticket-type">
              Bilet (Nahar daxil)
            </div>
          </div>
          <div class="check">
            <div class="ticket-price">

              120 Azn
            </div>


          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="ticket">
          <div class="stub">
            <div class="stub-info">
              <div>
                <img src="{{ asset($ticket->image) }}" alt="{{ __('registration') }}" />
              </div>
              <div>
                <div class="date">
                  <span>{{ __('date') }}:</span>
                  <span>{{ $ticket->date }}</span>
                </div>
                <div class="place-event">
                  <span>{{ __('time') }}</span>
                  <span>{{ $ticket->time }}</span>
                </div>
              </div>
            </div>
            <div class="ticket-type">
              Bilet (Nahar xaric)
            </div>
          </div>
          <div class="check">
            <div class="ticket-price">
              60 Azn
            </div>


          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="ticket">
          <div class="stub">
            <div class="stub-info">
              <div>
                 <img src="{{ asset($ticket->image) }}" alt="{{ __('registration') }}" />
              </div>
              <div>
                <div class="date">
                  <span>{{ __('date') }}:</span>
                  <span>{{ $ticket->date }}</span>
                </div>
                <div class="place-event">
                  <span>{{ __('time') }}</span>
                  <span>{{ $ticket->time }}</span>
                </div>
              </div>
            </div>
            <div class="ticket-type">
              Online bilet
            </div>
          </div>
          <div class="check">
            <div class="ticket-price">

              30 Azn
            </div>


          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!--@@@@@@@@@ blogs start @@@@@@@@@@-->
<section>
  <div class="home-blogs">
    <div class="container">
      <div class="event-procedur-header">
        <!--<h3>{{__('blogs')}} </h3>-->
        <h2>{{ $about->news }}</h2>
      </div>
      <div class="row">

        @foreach($blogs as $blog)
        <div class="col-lg-4 mb-4">
          <div class="single-blog">
            <div class="blog-text">
              <h3>{{ $blog->title }}</h3>
              <p>{!! substr($blog->desc,0,150) !!}</p>
            </div>
            <a href="{{ route('news_single',$blog->slug) }}" class="see-more"> {{ __('look') }} <img src="{{asset('/front/images/right-grey.png')}}" alt=""></a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="col-lg-11">
    <div class="download-presentation">
      <a href="{{ route('news') }}">
        {{ __('See_more') }}
        <img src="{{asset('/front/images/right.png')}}" alt="">
      </a>
    </div>
  </div>
</section>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script>
  $('#search_input').on('keyup', function() {
    var keyword = $('#search_input').val();
    search(keyword);
  });

  function search(keyword) {
    var url = '{{ route('search', ':keyword') }}';
   url = url.replace(':keyword', keyword);


    $.ajax({
      type: "GET",
      url: url,
      success: function(data) {

        $('#search_result').html(data);
      }
    })
  }
</script>


@endsection