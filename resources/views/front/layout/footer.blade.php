<section>
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-content">
                <h3>{{ __('subscribe') }}</h3>
                <!--<p>{{ __('footer-desc') }}</p>-->
                @error('tags')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <form action="{{ route('subscribe') }}" method="post">
                    @csrf
                    <div class="subscribe">
                        <input type="email" name="email" placeholder="{{ __('Mail adresinizi daxil edin') }}" required>
                        <button type="submit">
                            <div class="subscribe-apply">
                                <img src="{{ asset('/front/images/right.png') }}" alt="">
                            </div>
                        </button>
                    </div>
                    <div class="fot-but">
                        <button class="f-but1"><a  href="{{ route('media') }}">Media akkreditasiya</a> </button>
                    <button class="f-but2"><a style="color:#42bc56" href="{{ asset('/front/images/dmclogo.pdf') }}" target="_blank">{{ __('Logos') }}  </a></button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-logo">
                <img src="{{ asset($about->icon2) }}" alt="">
            </div>
            <div class="footer-social">
                <a href="{{ $contact->fb }}" target="_blank"><i class="icon-facebook"></i></a>
                <a href="{{ $contact->linked }}" target="_blank"><i class="icon-linkedin"></i></a>
                <a href="{{ $contact->youtube }}" target="_blank"><i class="icon-youtube"></i></a>
                <a href="{{ $contact->instagram }}" target="_blank"><i class="icon-instagram"></i></a>
            </div>
            <div class="footer-nav">
                <ul>
                    <li><a href="{{ route('index') . '#about_section' }}">{{ __('about') }}</a></li>
                    <li><a href="{{ route('index') . '#program' }}"> {{ __('program') }} </a></li>
                    <li><a href="{{ route('news') }}">{{ __('blogs') }} </a></li>
                    <li><a href="{{ route('index') . '#us_projects' }}"> {{ __('projects') }} </a></li>
                    <li><a href="{{ route('index') . '#contact' }}">{{ __('contact') }} </a></li>
                       
                    
                </ul>
            </div>

            <div class="copyright">
                <div class="markup-agency">
                    <h5>Veb sayt <a href="https://www.markup.az/" class="footer-markup">Markup Agency</a> tərəfindən
                        hazırlanıb
                    </h5>
                </div>
                <!--<div class="footer-lang">-->
                <!--  AZ-->
                <!--</div>-->
            </div>
            
        </div>
    </div>
</section>


<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>




<script src="{{ asset('/front/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/front/js/popper.min.js') }}"></script>
<script src="{{ asset('/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/front/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('/front/js/main.js') }}"></script>
<script src="{{ asset('/front/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/front/js/slick.min.js') }}"></script>

<script>
    // $(function() {

    //     $(".sponsor_link").click(function(e) {
    //         e.preventDefault();
    //         const element = $(this).attr("href");
    //         console.log(element);
    //         $('html, body').animate({
    //             scrollTop: $(element).offset().top 
    //         });
    //     });

    //     return $(".modal").on("show.bs.modal", function() {
    //         var curModal;
    //         curModal = this;

    //         $(".modal").each(function() {
    //             if (this !== curModal) {
    //                 $(this).modal("hide");
    //             }
    //         });
    //     });
    // });
</script>


<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}

<script>
    function addtocart(getid) {
      let lang = window.location.href.split('/')[3];
      $.get("/add_to_cart/" + getid,
          {
              id: getid,
          },
          function (data, status) {
              $('.count').html(data.count);
              $('.price').html(data.price);
            //   alert(data.count);
              // alert(data.count);
              alertify.set('notifier','position', 'bottom-right');
              alertify.notify(data.message,'custom', 2);
          });
  }

</script>

<script>
    function increase(getid) {
      let lang = window.location.href.split('/')[3];
      $.get("/increase_cart/" + getid,
          {
              id: getid,
          },
          function (data, status) {
              $(`.quantity234_${getid}`).html(data.quantity);
              $(`.sub_total_${getid}`).html(data.sub_total);
          $('.price').html(data.price);
              
            //   alert(data.count);
              // alert(data.count);
            //   alertify.set('notifier','position', 'bottom-right');
              alertify.notify(data.message,'custom', 2);
          });
  }

</script>



<script>
    function descrease(getid) {
      let lang = window.location.href.split('/')[3];
      $.get("/descrease_cart/" + getid,
          {
              id: getid,
          },
          function (data, status) {
              $(`.quantity234_${getid}`).html(data.quantity);
              $(`.sub_total_${getid}`).html(data.sub_total);
              $('.price').html(data.price);
            //   alert(data.count);
              // alert(data.count);
            //   alertify.set('notifier','position', 'bottom-right');
              alertify.notify(data.message,'custom', 2);
          });
  }

</script>


<script>
     function remove_from_cart(getid) {
        let lang = window.location.href.split('/')[3];
        $.get("/remove_from_cart",
            {
                id: getid,
            },
            function (data, status) {
                $('#wishlist12').html(data.html);
                $('.count').html(data.count);
                $('.price').html(data.price);
            
                alertify.set('notifier','position', 'bottom-right');
                alertify.notify('Səbətdən Silindi','custom', 2);
            });
    }

</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G7YGTK0CD1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G7YGTK0CD1');
</script>

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '702621117959782');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=702621117959782&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

</body>

</html>
