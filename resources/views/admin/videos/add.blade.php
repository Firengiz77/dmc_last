@extends('admin.layout.master')

@section('container')


  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('support') }}</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">

        <!-- Basic with Icons -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between" style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h5 class="mb-0">{{ __('add') }}</h5>
            

            </div>
            <div class="card-body">
              @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif

          <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.videos_add') }}">
            @csrf
             <div class="d-flex align-items-start align-items-sm-center gap-4">
                 <div class="container">

                  <div class="col-md-12">
                    <div class="mb-3">
                      <label>{{ __('thumbnail') }}:</label>
                        <input type="file" class="form-control" name="image"
                         onchange="ThumbnailUrl(this)" required>
                       @error('image')
                                    <span class="text-danger" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                     </div>
                           <img class="mb-3" src="" id="thumbnail">
                 </div>
                 

                   <div class="mb-3 col-md-12">
                    <label for="link" class="form-label">Link :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="link" name="link"  
                      placeholder="Link"
                    />
                  </div>

                  @php
                  use Carbon\Carbon;
                  @endphp

                  <input type="hidden" name="year" value="{{ Carbon::now()->year }}">
           

                   <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
                     <i class="bx bx-reset d-block d-sm-none"></i>
                     <span class="d-none d-sm-block">{{ __('add') }}</span>
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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" ></script>
    <script src="{{ asset('/admin/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/cketditor.js') }}"></script>
   
 
<script>
    function ThumbnailUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#thumbnail').attr('src', e.target.result).width(100).height(90);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


@endsection
