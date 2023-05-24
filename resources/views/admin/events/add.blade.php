@extends('admin.layout.master')

@section('container')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span>  {{ __('event') }}</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">

        <!-- Basic with Icons -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between" style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h5 class="mb-0"> {{ __('add_event') }}</h5>
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
            <div class="card-body">
              @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif



          <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.events_add') }}">
            @csrf
             <div class="d-flex align-items-start align-items-sm-center gap-4">
                 <div class="container">



                 <div class="row mb-3">
                    <select id="largeSelect" name="date" class="form-select form-select-lg">
                        <option value="0">Select Date :</option>
                        @foreach($dates as $date)
                        <option value="{{ $date->id }}" > {{ $date->date }}</option>
                        @endforeach
                    </select>
                </div>






                   <div class="mb-3 col-md-12 ">
                    <label for="name" class="form-label"> {{ __('title') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="name" name="name"  
                      placeholder=" {{ __('title') }}"
                      required
                    />
                  </div>
              

                  <div class="mb-3 col-md-12 ">
                    <label for="hour" class="form-label"> {{ __('hour') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="hour" name="hour"  
                      placeholder=" {{ __('hour') }}"
                      required
                    />
                  </div>


                  <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck3" checked="" name="active">
                            <label class="form-check-label" for="defaultCheck3"> Open Table </label>
                  </div>




                  <!-- <div class="mb-3 col-md-12 ">
                    <label for="date" class="form-label"> {{ __('date') }} :</label>
                    <input
                      class="form-control"
                      type="date"
                      id="date" name="date"  
                      placeholder=" {{ __('date') }}"
                    />
                  </div> -->


                   <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
                     <i class="bx bx-reset d-block d-sm-none"></i>
                     <span class="d-none d-sm-block"> {{ __('add') }} </span>
                   </button>

                   
                 </div>
               </div>
                </form>

    
            </div>
          </div>
        </div>


      </div>
    </div>
    <!-- / Content -->


    <script src="{{ asset('/admin/js/file-upload.js') }}"></script>
    <script src="{{ asset('/admin/js/translate.js') }}"></script>
    <script src="{{ asset('/admin/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/cketditor.js') }}"></script>
@endsection
