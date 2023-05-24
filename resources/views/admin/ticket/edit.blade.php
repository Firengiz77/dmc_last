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
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.ticket_update',$ticket) }}">
                        @csrf
                        

                        <div class="col-md-12">
                          <div class="mb-3">
                              <label>{{ __('thumbnail') }}:</label>
                              <input type="file" class="form-control" name="image"
                                  onchange="ThumbnailUrl(this)" >
                              @error('image')
                                  <span class="text-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                          <img class="mb-3" src="" id="thumbnail">
                      </div>
                      <div class="col-md-12">
                          <div class="mb-3">
                              <label>{{ __('current_thumbnail') }}:</label>
                              <img style="width: 80px; object-fit:cover" src="{{ asset($ticket->image) }}"
                                  alt="">
                          </div>
                      </div>


                        <div class="mb-3 col-md-12 ">
                          <label for="title" class="form-label"> {{ __('title') }} :</label>
                          <input
                            class="form-control"
                            type="text"
                            id="title" name="title"  
                            value="{{ $ticket->title }}"
                            
                          />
                        </div>
      
                        <div class="mb-3 col-md-12 ">
                          <label for="inform" class="form-label"> {{ __('informasiya') }} :</label>
                          <input
                            class="form-control"
                            type="text"
                            id="inform" name="inform"  
                            value="{{ $ticket->inform }}"
                            
                          />
                        </div>
      
      
      
                        <div class="mb-3 col-md-12 ">
                          <label for="time" class="form-label"> {{ __('time') }} :</label>
                          <input
                            class="form-control"
                            type="text"
                            id="hour" name="time"  
                            value="{{ $ticket->time }}"
                            
                          />
                        </div>
      
                        <div class="mb-3 col-md-12 ">
                          <label for="date" class="form-label"> {{ __('date') }} :</label>
                          <input
                            class="form-control"
                            type="date"
                            id="hour" name="date"  
                            value="{{ $ticket->date }}"
                            
                          />
                        </div>
      
                        <div class="mb-3 col-md-12 ">
                          <label for="price" class="form-label"> {{ __('price') }} :</label>
                          <input
                            class="form-control"
                            type="price"
                            id="hour" name="price"  
                            value="{{ $ticket->price }}"
                            
                          />
                        </div>
      
                        <div class="mb-3 col-md-12 ">
                          <label for="url" class="form-label"> {{ __('url') }} :</label>
                          <input
                            class="form-control"
                            type="text"
                            id="hour" name="url"  
                            value="{{ $ticket->url }}"
                            
                          />
                        </div>

                        

                      
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" ></script>
    <script src="{{ asset('/admin/js/choise.js')}} "></script>
   

    <script>
    $(document).ready(function() {
        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,
        });
    });
</script>
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