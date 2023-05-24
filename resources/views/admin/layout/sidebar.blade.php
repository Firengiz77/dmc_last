  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{route('admin.index')}}" class="app-brand-link">
              <span class="app-brand-logo demo">
             <img src="{{ asset('admin/logo/logo.png') }}" width="160px" >
              </span>
     
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item @if(Route::is('admin.index')) active @endif">
              <a href="{{route('admin.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">{{ __('dashboard') }}</div>
              </a>
            </li>


            <li class="menu-item @if(Route::is('admin.account') || Route::is('admin.register')) active @endif">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings"> {{ __('account_settings') }} </div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{route('admin.account')}}" class="menu-link">
                  <i class='bx bxs-user-account menu-icon' ></i>
                    <div data-i18n="Account"> {{ __('account') }} </div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('admin.register')}}" class="menu-link">
                  <i class='bx bx-book-add menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('add_admin') }}</div>
                  </a>
                </li>
                  @php
                      $id=auth()->id();
                      $admin=App\Models\User::find($id);
                  @endphp
                  @if($admin->superadmin === '1')
                  <li class="menu-item ">
                      <a href="{{route('admin.all_admin')}}" class="menu-link">
                      <i class='bx bxs-happy menu-icon'></i>
                          <div data-i18n="Notifications">{{ __('all_admin') }}</div>
                      </a>
                  </li>
                      @endif
              </ul>
            </li>


                <li class="menu-item @if(Route::is('admin.about')) active @endif">
                  <a href="{{route('admin.about')}}" class="menu-link">
                  <i class='bx bx-home menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('home') }} </div>
                  </a>
                </li>


                <li class="menu-item @if(Route::is('admin.meta')) active @endif">
                  <a href="{{route('admin.meta')}}" class="menu-link">
                  <i class='bx bx-pyramid menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('meta') }} </div>
                  </a>
                </li>

            <li class="menu-item @if(Route::is('admin.media')) active @endif">
                  <a href="{{route('admin.media')}}" class="menu-link">
                  <i class='bx bx-pyramid menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('media') }} </div>
                  </a>
                </li>


                <li class="menu-item @if(Route::is('admin.contact')) active @endif">
                  <a href="{{route('admin.contact')}}" class="menu-link">
                  <i class='bx bx-phone menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('contact') }}</div>
                  </a>
                </li>



            <li class="menu-item @if(Route::is('admin.programs') || Route::is('admin.spikers')) active @endif">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='bx bx-table menu-icon'></i>
                <div data-i18n="Account Settings">{{ __('program') }} {{ __('and') }} {{ __('spikers') }}</div>
              </a>
              <ul class="menu-sub">

              <li class="menu-item @if(Route::is('admin.programs')) active @endif">
                  <a href="{{route('admin.programs')}}" class="menu-link">
                  <i class='bx bx-table menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('program') }} </div>
                  </a>
                </li>

                <li class="menu-item @if(Route::is('admin.spikers')) active @endif">
                  <a href="{{route('admin.spikers')}}" class="menu-link">
                  <i class='bx bx-speaker menu-icon'></i>
                    <div data-i18n="Notifications"> {{ __('spikers') }} </div>
                  </a>
                </li>

              </ul>
            </li>

            <li class="menu-item @if(Route::is('admin.sponsors') || Route::is('admin.support') ) active @endif">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='bx bx-group menu-icon'></i>
                <div data-i18n="Account Settings">{{ __('sponsor') }} {{ __('and') }} {{ __('Tərəfdaşlar') }} </div>
              </a>
              <ul class="menu-sub">

              <li class="menu-item @if(Route::is('admin.sponsors')) active @endif">
                  <a href="{{route('admin.sponsors')}}" class="menu-link">
                  <i class='bx bx-user-check menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('sponsor') }}</div>
                  </a>
                </li>

                <li class="menu-item @if(Route::is('admin.support')) active @endif ">
                  <a href="{{route('admin.support')}}" class="menu-link">
                  <i class='bx bx-group menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('Tərəfdaşlar') }}</div>
                  </a>
                </li>

              </ul>
            </li>

            <li class="menu-item @if(Route::is('admin.registration') || Route::is('admin.sponsor_form') ) active @endif">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='bx bx-book-content menu-icon'></i>
                <div data-i18n="Account Settings">{{ __('forms') }}</div>
              </a>
              <ul class="menu-sub">

              <li class="menu-item @if(Route::is('admin.registration')) active @endif " >
                  <a href="{{route('admin.registration')}}" class="menu-link">
                  <i class='bx bx-registered menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('registrations') }}</div>
                  </a>
                </li>

                <li class="menu-item @if(Route::is('admin.sponsor_form')) active @endif ">
                  <a href="{{route('admin.sponsor_form')}}" class="menu-link">
                  <i class='bx bx-user-check menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('sponsor')}}</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item @if(Route::is('admin.tags') || Route::is('admin.news')) active @endif">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='bx bx-news menu-icon '></i> 
                <div data-i18n="Account Settings">{{ __('blog')}}</div>
              </a>
              <ul class="menu-sub">

              <li class="menu-item @if(Route::is('admin.tags')) active @endif ">
                  <a href="{{route('admin.tags')}}" class="menu-link">
                  <i class='bx bx-purchase-tag-alt menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('tags')}}</div>
                  </a>
                </li>
                <li class="menu-item @if(Route::is('admin.news')) active @endif ">
                  <a href="{{route('admin.news')}}" class="menu-link">
                  <i class='bx bx-news menu-icon '></i> 
                    <div data-i18n="Notifications"> {{ __('blog')}} </div>
                  </a>
                </li>
          </ul>
        <li class="menu-item @if(Route::is('admin.videos') || Route::is('admin.videos')) active @endif">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='bx bx-news menu-icon '></i> 
                <div data-i18n="Account Settings">Arxiv</div>
              </a>

              <ul class="menu-sub">
              <li class="menu-item @if(Route::is('admin.photos')) active @endif ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='bx bx-news menu-icon'></i> 
                <div data-i18n="Account Settings">Fotolar</div>
              </a>
              <ul class="menu-sub">
              @foreach($photos2 as $photo)
              <li class="menu-item">
                  <a href="{{route('admin.photos.year',$photo->year)}}" class="menu-link">
                  <i class='bx bx-purchase-tag-alt menu-icon'></i>
                    <div data-i18n="Notifications"> {{  $photo->year }} </div>
                  </a>
                </li>
                @endforeach
             </ul>
       </li> 

      
                 <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class='bx bx-news menu-icon '></i> 
                    <div data-i18n="Notifications"> Videolar </div>
                  </a> 
            

               <ul class="menu-sub">
              @foreach($videos2 as $video)
              <li class="menu-item">
                  <a href="{{route('admin.videos.year',$video->year)}}" class="menu-link">
                  <i class='bx bx-purchase-tag-alt menu-icon'></i>
                    <div data-i18n="Notifications"> {{  $video->year }} </div>
                  </a>
                </li>
                @endforeach
             </ul>
             </li>




              </ul>
       </li> 

       <li class="menu-item @if(Route::is('admin.events') || Route::is('admin.moderators') ) active @endif">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='bx bx-book-content menu-icon'></i>
                <div data-i18n="Account Settings">{{ __('events') }}</div>
              </a>
              <ul class="menu-sub">

              <li class="menu-item @if(Route::is('admin.dates')) active @endif " >
                  <a href="{{route('admin.dates')}}" class="menu-link">
                  <i class='bx bx-registered menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('date') }}</div>
                  </a>
                </li>

              <li class="menu-item @if(Route::is('admin.events')) active @endif " >
                  <a  href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class='bx bx-registered menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('events') }}</div>
                  </a>

                  <ul class="menu-sub">
                     @php
                     $dates= App\Models\Dates::get();
                     @endphp

                  @foreach($dates as $date)

                  <li class="menu-item @if(Route::is('admin.events',$date->id)) active @endif" >
                  <a href="{{route('admin.events',$date->id)}}" class="menu-link">
                  <i class='bx bx-registered menu-icon'></i>
                    <div data-i18n="Notifications">{{$date->date}}</div>
                  </a>
                </li>
                @endforeach


                        </ul>
                </li>

                <li class="menu-item @if(Route::is('admin.moderators')) active @endif ">
                  <a class="menu-link menu-toggle">
                  <i class='bx bx-user-check menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('moderators')}}</div>
                  </a>
                  
                   <ul class="menu-sub">
                     @php
                     $dates= App\Models\Dates::get();
                     @endphp

                  @foreach($dates as $date)

                  <li class="menu-item @if(Route::is('admin.moderators',$date->id)) active @endif" >
                  <a href="{{route('admin.moderators',$date->id)}}" class="menu-link">
                  <i class='bx bx-registered menu-icon'></i>
                    <div data-i18n="Notifications">{{$date->date}}</div>
                  </a>
                </li>
                @endforeach


                        </ul>
                        
                </li>
              </ul>
            </li>

            <li class="menu-item @if(Route::is('admin.ticket')) active @endif">
              <a href="{{route('admin.ticket')}}" class="menu-link">
              <i class='bx bx-flag menu-icon'></i>
                <div data-i18n="Notifications">{{ __('Biletlər')}} </div>
              </a>
      </li>
      
          <li class="menu-item @if(Route::is('admin.language')) active @endif">
                  <a href="{{route('admin.language')}}" class="menu-link">
                  <i class='bx bx-flag menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('language')}} </div>
                  </a>
          </li>

          <li class="menu-item @if(Route::is('admin.subscribers')) active @endif">
                  <a href="{{route('admin.subscribers')}}" class="menu-link">
                  <i class='bx bx-shape-polygon menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('subscribers')}} </div>
                  </a>
          </li>


          <li class="menu-item @if(Route::is('admin.projects')) active @endif">
                  <a href="{{route('admin.projects')}}" class="menu-link">
                  <i class='bx bx-pie-chart-alt-2 menu-icon'></i>
                    <div data-i18n="Notifications">{{ __('projects')}} </div>
                  </a>
          </li>

        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
