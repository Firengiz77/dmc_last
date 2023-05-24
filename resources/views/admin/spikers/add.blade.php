@extends('admin.layout.master')

@section('container')


  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('spikers') }}</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">

        <!-- Basic with Icons -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between" style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h5 class="mb-0">{{ __('add') }}</h5>
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


          <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.spikers_add') }}">
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
                 
                  

                 <div class="row mb-3">
                    <select id="largeSelect" name="programs_id" class="form-select form-select-lg">
                        <option value="0">Select Program :</option>
                        @foreach($programs as $program)
                        <option value="{{ $program->id }}" > {{ $program->title }}</option>
                        @endforeach

                    </select>
                </div>



                   <div class="mb-3 col-md-12">
                    <label for="name" class="form-label">{{ __('fullname') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="name" name="name"  
                      placeholder="{{ __('fullname') }}"
                    />
                  </div>

                

                  <div class="mb-3 col-md-12 ">
                            <label for="profession" class="form-label">Profession :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="profession" name="profession" 
                      
                              placeholder="{{ $program->profession }}"
                            />
                          </div>
                          
                          
                   <div class="mb-3 col-md-12">
                    <label for="company" class="form-label">{{ __('company') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="company" name="company"  
                      placeholder="{{ __('company') }}"
                    />
                  </div>



                      <div class="mb-3 col-md-12">
                            <label for="desc" class="form-label">{{ __('content') }} 2 :</label>
                            <textarea name="desc"   class="form-control" id="editor1" cols="30" rows="10"></textarea>
                      </div>

                          <div class="mb-3 col-md-12 ">
                            <label for="fb" class="form-label">Facebook  :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="fb" name="fb" 
                              
                        
                              placeholder="Fb"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="linked" class="form-label">linkedin:</label>
                            <input
                              class="form-control"
                              type="text"
                              id="linked" name="linked"
                              placeholder="linkedin"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="twitter" class="form-label">Twitter :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="twitter" name="twitter" 
               
                              placeholder="Twitter"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="instagram" class="form-label">Instagram :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="instagram" name="instagram" 
                           
                              placeholder="Instagram"
                            />
                          </div>

           

                        
                
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
