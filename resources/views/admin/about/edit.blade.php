@extends('admin.layout.master')

@section('container')



          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('about') }} </h4>

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
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.about_update',$about) }}">
                        @csrf

                        <div class="col-md-12">
                          <label for="pdf">Pdf</label>
                          <input type="file" id="pdf" name="pdf" value="{{ $about->pdf }}">
                        </div>



    <div class="col-md-12">
                                    <div class="mb-3">
                                        <label>Header logo {{ __('thumbnail') }}:</label>
                                        <input type="file" class="form-control" name="icon1" 
                                            onchange="ThumbnailUrl(this)" >
                                        @error('icon1')
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
                                        <img style="width: 80px; object-fit:cover" src="{{ asset($about->icon1) }}"
                                            alt="">
                                    </div>
                                </div>
                                
                        <div class="col-md-12">
                                    <div class="mb-3">
                                        <label> Ana səhifə posteri {{ __('thumbnail') }}: </label>
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
                                        <img style="width: 80px; object-fit:cover" src="{{ asset($about->image) }}"
                                            alt="">
                                    </div>
                                </div>

                            

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label> Footer logo {{ __('thumbnail') }}:</label>
                                        <input type="file" class="form-control" name="icon2" 
                                            onchange="ThumbnailUrl(this)" >
                                        @error('icon2')
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
                                        <img style="width: 80px; object-fit:cover" src="{{ asset($about->icon2) }}"
                                            alt="">
                                    </div>
                                </div>

                  
                          <div class="mb-3 col-md-12">
                                <label for="content_1" class="form-label">{{ __('content') }} 1 :</label>
                                <textarea name="content_1"   class="form-control" id="editor" cols="30" rows="10">{{$about->content_1}}</textarea>
                              </div>


                        <div class="mb-3 col-md-12">
                          <label for="content_2" class="form-label">{{ __('content') }} 2 :</label>
                          <textarea name="content_2"   class="form-control" id="editor1" cols="30" rows="10">{{$about->content_2}}</textarea>
                        </div>


                          <div class="mb-3 col-md-12 ">
                            <label for="date" class="form-label">Date  :</label>
                            <time >
                            <input
                              class="form-control"
                              type="datetime-local"
                             name="date" 
                              value="{{ Carbon\Carbon::parse($about->date)->format('Y-m-d\TH:i') }}" 
                         
                            />
                          </div>

                          <div class="mb-3 col-md-12 ">
                            <label for="video" class="form-label">video :</label>
                            <input
                              class="form-control"
                              type="file"
                              id="video" name="video" 
                              value="{{ $about->video }}" 
                              placeholder="{{ $about->video }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="program" class="form-label">Program :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="program" name="program" 
                              value="{{ $about->program }}" 
                              placeholder="{{ $about->program }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="sponsor" class="form-label">Sponsor :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="sponsor" name="sponsor" 
                              value="{{ $about->sponsor }}" 
                              placeholder="{{ $about->sponsor }}"
                            />
                          </div>

                          <div class="mb-3 col-md-12 ">
                            <label for="program_1" class="form-label">Program text :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="program_1" name="program_1" 
                              value="{{ $about->program_1 }}" 
                              placeholder="{{ $about->program_1 }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="sponsor_1" class="form-label">Sponsor text :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="sponsor_1" name="sponsor_1" 
                              value="{{ $about->sponsor_1 }}" 
                              placeholder="{{ $about->sponsor_1 }}"
                            />
                          </div>


                          <div class="mb-3 col-md-12 ">
                            <label for="project" class="form-label">Project :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="project" name="project" 
                              value="{{ $about->project }}" 
                              placeholder="{{ $about->project }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="news" class="form-label">Blog :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="news" name="news" 
                              value="{{ $about->news }}" 
                              placeholder="{{ $about->news }}"
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