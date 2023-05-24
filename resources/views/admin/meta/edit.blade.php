@extends('admin.layout.master')

@section('container')



          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('meta') }} </h4>

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
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.meta_update',$meta) }}">
                        @csrf

                     


                          <div class="mb-3 col-md-12 ">
                            <label for="home_title" class="form-label">Home meta title :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="home_title" name="home_title" 
                              value="{{ $meta->home_title }}" 
                              placeholder="{{ $meta->home_title }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="home_desc" class="form-label">home meta desc :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="home_desc" name="home_desc" 
                              value="{{ $meta->home_desc }}" 
                              placeholder="{{ $meta->home_desc }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="home_keyw" class="form-label">home meta keywords :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="home_keyw" name="home_keyw" 
                              value="{{ $meta->home_keyw }}" 
                              placeholder="{{ $meta->home_keyw }}"
                            />
                          </div>


                          <div class="mb-3 col-md-12 ">
                            <label for="blog_title" class="form-label">blog meta title :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="blog_title" name="blog_title" 
                              value="{{ $meta->blog_title }}" 
                              placeholder="{{ $meta->blog_title }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="blog_desc" class="form-label">blog meta desc :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="blog_desc" name="blog_desc" 
                              value="{{ $meta->blog_desc }}" 
                              placeholder="{{ $meta->blog_desc }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="blog_keyw" class="form-label">blog meta keywords :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="blog_keyw" name="blog_keyw" 
                              value="{{ $meta->blog_keyw }}" 
                              placeholder="{{ $meta->blog_keyw }}"
                            />
                          </div>


                          <div class="mb-3 col-md-12 ">
                            <label for="register_title" class="form-label">register meta title :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="register_title" name="register_title" 
                              value="{{ $meta->register_title }}" 
                              placeholder="{{ $meta->register_title }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="register_desc" class="form-label">register meta desc :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="register_desc" name="register_desc" 
                              value="{{ $meta->register_desc }}" 
                              placeholder="{{ $meta->register_desc }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="register_keyw" class="form-label">register meta keywords :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="register_keyw" name="register_keyw" 
                              value="{{ $meta->register_keyw }}" 
                              placeholder="{{ $meta->register_keyw }}"
                            />
                          </div>


                          <div class="mb-3 col-md-12 ">
                            <label for="sponsor_title" class="form-label">sponsor meta title :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="sponsor_title" name="sponsor_title" 
                              value="{{ $meta->sponsor_title }}" 
                              placeholder="{{ $meta->sponsor_title }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="sponsor_desc" class="form-label">sponsor meta desc :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="sponsor_desc" name="sponsor_desc" 
                              value="{{ $meta->sponsor_desc }}" 
                              placeholder="{{ $meta->sponsor_desc }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="sponsor_keyw" class="form-label">sponsor meta keywords :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="sponsor_keyw" name="sponsor_keyw" 
                              value="{{ $meta->sponsor_keyw }}" 
                              placeholder="{{ $meta->sponsor_keyw }}"
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