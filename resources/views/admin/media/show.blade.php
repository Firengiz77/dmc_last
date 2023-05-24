@extends('admin.layout.master')

@section('container')


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('media') }} </h4>

                </div>
          

              <!-- Examples -->
              <div class="row mb-5">
                <div class="col-md-4 col-lg-2 mb-3 card-body" style="border:1px solid #a1acb8;border-radius:8px">
                    @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif
                   
    
                          <div class="mb-3 col-md-12 ">
                            <label for="name" class="form-label">{{ __('name') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="name" name="name" 
                              value="{{ $media->name }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="surname" class="form-label">{{ __('surname') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="surname" name="surname" 
                              value="{{ $media->surname }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="email" class="form-label">{{ __('email') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email" name="email" 
                              value="{{ $media->email }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="phone" class="form-label">{{ __('phone') }}  :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="phone" name="phone" 
                              value="{{ $media->tel }}"
                            />
                          </div>

                          <div class="mb-3 col-md-12 ">
                            <label for="work" class="form-label">{{ __('media_qurum') }} :</label>
                            <textarea class="form-control" >{{ $media->media_qurum }}</textarea>
                            
                          </div>

                          <div class="mb-3 col-md-12 ">
                            <label for="profession" class="form-label">{{ __('qeyd') }}  :</label>
                         <textarea  class="form-control" >{{ $media->qeyd }}</textarea>
                            
                          </div>

                             </div>
                           </div>
                         
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