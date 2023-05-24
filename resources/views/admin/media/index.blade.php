@extends('admin.layout.master')
@section('container')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <div style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('media') }} </h4>
         

          </div>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">{{ __('media') }} </h5>
                
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th> {{ __('row') }} </th>
                        <th>{{ __('name') }} </th>
                        <th>{{ __('surname') }} </th>
                        <th>{{ __('email') }}</th>
                        <th>{{ __('look') }} </th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                 @foreach ($media as $key => $item )
                      <tr>
                        <td> {{ ++$key }} </td>
                        <td>
                          {{  $item->name }}
                        </td>
                        <td>  {{  $item->surname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                          <a href="{{ route('admin.media_show',$item->id) }}" class="btn btn-outline-primary">{{ __('look') }}</a>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
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
    
@endsection