@extends('admin.layout.master')

@section('container')
<link rel="stylesheet" href="{{ asset('/admin/assets/css/choise.css')}}">


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('blogs') }} </h4>

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
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.news_update',$news) }}">
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
                                        <img style="width: 80px; object-fit:cover" src="{{ asset($news->image) }}"
                                            alt="">
                                    </div>
                                </div>

    
                          <div class="mb-3 col-md-12 ">
                            <label for="title" class="form-label">{{ __('title') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="title" name="title" 
                              value="{{ $news->title }}" 
                   
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="desc" class="form-label">{{ __('content') }} :</label>
                            <textarea name="desc" class="form-control"  id="editor" cols="30" rows="10">  {!! $news->desc !!}</textarea>
                        
                          </div>

                          <div class="mb-3 col-md-12 ">
                            <label for="meta_desc" class="form-label">Meta {{ __('content') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="meta_desc" name="meta_desc" 
                              value="{{ $news->meta_desc }}" 
                              placeholder="{{ $news->meta_desc }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="meta_title" class="form-label">Meta {{ __('title') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="meta_title" name="meta_title" 
                              value="{{ $news->meta_title }}" 
                              placeholder="{{ $news->meta_title }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="meta_keyword" class="form-label">Meta {{ __('keywords') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="meta_keyword" name="meta_keyword" 
                              value="{{ $news->meta_keyword }}" 
                              placeholder="{{ $news->meta_keyword }}"
                            />
                          </div>

                          <div class="col-md-12 mb-5">
                                    <div class="mb-5">
                                        <label>{{ __('tag') }}:</label>
                                        <select name="tags[]" id="choices-multiple-remove-button" required multiple>
                                            @foreach ($tags as $tag)
                                                <option
                                                    {{ $tag->id ==in_array($tag->id,$news->tags()->pluck('id')->toArray())? 'selected': '' }}
                                                    value="{{ $tag->id }}">{{ $tag->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('tags')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
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