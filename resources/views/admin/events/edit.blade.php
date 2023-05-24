@extends('admin.layout.master')

@section('container')


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('event') }} </h4>

              <ul class="d-flex justify-content-end">
                                    @foreach ($all_languages as $a_language)
                                        <li style="margin-right: 10px">
                                            <a class="btn btn-{{ app()->getLocale() == $a_language->code ? 'danger' : 'primary' }} btn-large"
                                                href="{{ route('locale', $a_language->code) }}">
                                                {{ $a_language->code }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                </div>
          

              <!-- Examples -->
              <div class="row mb-5">
                <div class="col-md-4 col-lg-2 mb-3 card-body" style="border:1px solid #a1acb8;border-radius:8px">
                    @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.events_update',$event) }}">
                        @csrf
                        

                        <div class="row mb-3">
                                <div class="col-md-12">
                                  <select id="largeSelect" name="date" class="form-select form-select-lg">
                                    <option value="{{ $event['dates2']['date'] }}">Select date :</option>
                                    @foreach($date as $date2)
                                        <option value="{{$date2->id}}" @if($event['dates2']['id'] == $date2->id) selected @endif > {{ $date2->date }}  </option>
                                        @endforeach
                                </select>
                                </div>
                        </div>





    
                          <div class="mb-3 col-md-12 ">
                            <label for="name" class="form-label">{{ __('title') }}</label>
                            <input
                              class="form-control"
                              type="text"
                              id="name" name="name" 
                              value="{{ $event->name }}" 
                              placeholder="{{ $event->name }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="hour" class="form-label">{{ __('hour') }}</label>
                            <input
                              class="form-control"
                              type="text"
                              id="hour" name="hour" 
                              value="{{ $event->hour }}" 
                              placeholder="{{ $event->hour }}"
                            />
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck3" @if($event->active === 1) checked=""  @endif name="active">
                            <label class="form-check-label" for="defaultCheck3"> Open Table </label>
                      </div>

                          <!-- <div class="mb-3 col-md-12 ">
                            <label for="date" class="form-label">{{ __('date') }}</label>
                            <input
                              class="form-control"
                               type="date"
                              id="date" name="date" 
                              value="{{ $event->date }}" 
                            />
                          </div> -->
                      
                               <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
                                 <i class="bx bx-reset d-block d-sm-none"></i>
                                 <span class="d-none d-sm-block">{{ __('edit') }}</span>
                               </button>
     
                             </div>
                           </div>
                            </form>
                  </div>

              </div>
              <!-- Examples -->

            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    
@endsection