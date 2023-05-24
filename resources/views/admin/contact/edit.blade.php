@extends('admin.layout.master')

@section('container')



          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('contact') }} </h4>

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
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.contact_update',$contact) }}">
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
                                        <img style="width: 80px; object-fit:cover" src="{{ asset($contact->image) }}"
                                            alt="">
                                    </div>
                                </div>

    
                          <div class="mb-3 col-md-12 ">
                            <label for="title" class="form-label">{{ __('title') }} :</label>
                          <textarea name="title" class="form-control" id="title" cols="30" rows="10">{{ $contact->title }}</textarea>
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="address" class="form-label">{{ __('address') }} :</label>
                          <textarea name="address" class="form-control" id="title" cols="30" rows="10">{{ $contact->address }}</textarea>
                          </div>
                          
                          <div class="mb-3 col-md-12 ">
                            <label for="phone_1" class="form-label">Tel 1  :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="phone_1" name="phone_1" 
                              value="{{ $contact->phone_1 }}" 
                              placeholder="{{ $contact->phone_1 }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="phone_2" class="form-label">Tel 2  :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="phone_2" name="phone_2" 
                              value="{{ $contact->phone_2 }}" 
                              placeholder="{{ $contact->phone_2 }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="email" class="form-label">Email  :</label>
                            <input
                              class="form-control"
                              type="email"
                              id="email" name="email" 
                              value="{{ $contact->email }}" 
                              placeholder="{{ $contact->email }}"
                            />
                          </div>

                          <div class="mb-3 col-md-12 ">
                            <label for="fb" class="form-label">Facebook  :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="fb" name="fb" 
                              value="{{ $contact->fb }}" 
                              placeholder="{{ $contact->fb }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="linked" class="form-label">linkedin:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="linked" name="linked" 
                              value="{{ $contact->linked }}" 
                              placeholder="{{ $contact->linked }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="youtube" class="form-label">Youtube :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="youtube" name="youtube" 
                              value="{{ $contact->youtube }}" 
                              placeholder="{{ $contact->youtube }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="instagram" class="form-label">Instagram :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="instagram" name="instagram" 
                              value="{{ $contact->instagram }}" 
                              placeholder="{{ $contact->instagram }}"
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