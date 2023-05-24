@extends('admin.layout.master')
@section('container')

<style>
  .upload-box{
    display:flex;
    text-align:center;
  }
  .image-box img{
    width:150px !important;
    height: 120px !important;

  }
 .a_remove3{
  margin-top:10px;
  margin-bottom:10px;
 }

</style>





          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <div style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('photos') }}</h4>
              <h4 class="fw-bold py-3 mb-4"><a class="text-muted fw-light" href="{{ route('admin.photos_show') }}">{{ __('add') }} </a>  </h4>
          </div>
              <!-- Basic Bootstrap Table -->
              <div>
              <ul class="nav nav-pills flex-column flex-md-row mb-3">
            @if($photos !== null)    
           <form action="{{route('admin.photos_update',$photos->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
           <div class="form-group">
                    <label for="image">Multiple Image</label>
                    <input type="file" name="image[]"  multiple class="form-control" id="image" >
                  </div>
                  <br>
                  <button  class="btn btn-outline-secondary account-image-reset mb-4" type="submit">Submit</button>
           </form>
      @endif

                  </ul>
              </div>

              <div class="card">
                <h5 class="card-header">{{ __('photos') }}</h5>
                
                <div class="table-responsive text-nowrap">
                 
       
                <div class="upload-box" style="flex-wrap:wrap">
                @if($photos !== null)
                    @foreach ($photos->image as $key => $images)

                    <div class="col-md-3" >
                        <div class="image-box">
                            <img src="{{ asset('uploads/photos/' . $images) }}" width="150" alt="">
                           <div id="newform24" class='a_remove2_{{$key}}'>
                            <button type="button" data_id="{{$key}}" class="a_remove3 btn btn-primary me-2" onclick="delete_images('{{route('admin.delete_images_gallery',$photos->id)}}','{{ $key }}')"  id="{{ $key }}" >
																 <input type="hidden" name="current_images[]" value="{{ $images }}" id='a_remove'>
                                    Delete
                               </button>
                              </div>
                        </div>
                         </div>
                    @endforeach
                    @endif

                </div>
                <!--  burda sekiller olacaq edit add ustunde olacaq -->


                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

              <hr class="my-5" />
            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
     

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
        <script>
          $('.delete-confirm').on('click', function (event) {
              event.preventDefault();
              const url = $(this).attr('href');
              swal({
                  title: 'Are you sure?',
                  text: 'This record and it`s details will be permanantly deleted!',
                  icon: 'warning',
                  buttons: ["Cancel", "Yes!"],
              }).then(function(value) {
                  if (value) {
                      window.location.href = url;
                  }
              });
          });
    </script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    {{-- <script src="{{ asset('back/assets/js/swal.js') }}"></script> --}}



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.6/dist/sweetalert2.all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.6/dist/sweetalert2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script>
  $(function() {
  const events = {
    click: 'click'
  };
  
  const $button = $('.delete-confirm');
  
  $button.on(events.click, function(event) {

  });
})


  </script>
<script src="{{ asset('/admin/js/own.js') }}"></script>





@endsection