@extends('front.layout.master')

@section('title'){{$meta->register_title}}@endsection
@section('meta_desc'){{$meta->register_desc}}@endsection
@section('meta_keyw'){{$meta->register_keyw}}@endsection

@section('container')

<style>
    .phone{
            margin-bottom:20px !important;
            border: 1px solid #8080804f;
            border-radius: 1px;
    }
    .submit2, .register-form .submit2:focus {
    border: none;
    outline: none;
    border-radius: 5px;
    background-color: #ffd91c;
   padding: 0;
    margin:0;
    cursor: pointer;
   }

</style>
<section>
        <div class="container header-img">
            <img src="{{asset('/front/images/ftbg.png')}}" alt="">
        </div>
    </section>
    <section>
        <div class="register-form">
            <div class="container">
                <div class="event-sponsor-header">
                    <h3>{{ __('register')}}</h3>
                    <h2>{{__('register_form')}}</h2>
                </div>

                @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                @endif
           
                <form action="{{ route('create_registration') }}" class="mt-5" method="post">
                @csrf
                <input type="text" class="form-control"  placeholder="{{ __('Promokod')}}" name="promokod" >


               
              
                {{-- @for ($quantity2 = 1; $quantity2 <= $quantity; $quantity2++) --}}
                @if(session()->get('cart'))
           @foreach(session()->get('cart') as $key => $cart)

         
          
           @if($cart['quantity'] > 1)
            
           @php
           $quantity = 0;
           $cart_quantity = $cart['quantity'];
           $quantity += $cart_quantity;
           $count = 0;

          
          @endphp

{{-- {{  dd($quantity23) }} --}}

           @for ($quantity2 = 1; $quantity2 <= $quantity; $quantity2++) 
          
      
           <table style="color: black;width:100%;max-width:100%; box-shadow: rgb(0 0 0 / 7%) 0px 3px 8px;margin-bottom:20px"  border="1px" cellpadding="8px">
            <thead>
                <tr>
                    <th  style="font-weight: 900;font-size: 18px;">{{ __('Biletin adi') }}</th>
                    <th style="font-weight: 900;font-size: 18px;">{{ __('Vaxt') }}</th>
                    <th style="font-weight: 900;font-size: 18px;">{{ __('Time') }}</th>
                    <th style="font-weight: 900;font-size: 18px;">{{ __('price') }}</th>
 
                </tr>
            </thead>
            <tbody id="wishlist12">
                <tr>
  
                    <td class="shoping__cart__price">
                   {{ $cart['title'] }}
                    </td>
                    <td>{{  date('d.m.Y', strtotime($cart['date'])) }}  </td>
                    <td>{{ $cart['time'] }}</td>
                    <td class="shoping__cart__quantity">
                        <div class="quantity">
                    {{ $cart['price'] }}
                        </div>
                    </td>
                 
                </tr>
          

            </tbody>
            </table>

           <div style="margin-bottom:120px;">
         

            <input type="hidden" value="{{  json_encode($cart['date']) }}"  name="date[{{ $count }}][{{ $cart['id'] }}]" >
            <input type="hidden" value="{{  json_encode($cart['price']) }}" name="price[{{ $count }}][{{ $cart['id'] }}]">
            <input type="hidden" value="{{  json_encode($cart['title']) }}" name="title[{{ $count }}][{{ $cart['id'] }}]">

            <input type="text" class="form-control" required placeholder="{{__('your_name') }}" name="name[{{ $count }}][{{ $cart['id'] }}]"   >
            <input type="text" class="form-control"  required placeholder="{{ __('your_surname')}}" name="surname[{{ $count }}][{{ $cart['id'] }}]">
            <input type="email" class="form-control"  required placeholder="{{ __('your_email')}}" name="email[{{ $count }}][{{ $cart['id'] }}]">
            <div class="phone">
             <span class="countrycode">+994</span><input   requiredtype="text" id="phone_{{$count}}_{{ $cart['id'] }}" name="phone[{{ $count }}][{{ $cart['id'] }}]"
            placeholder="(__) ___-__-__" />
            </div>
            <input type="text" class="form-control"  required placeholder="{{ __('your_work')}}" name="work[{{ $count }}][{{ $cart['id'] }}]">
            <input type="text" class="form-control"  required placeholder="{{ __('your_profession')}}" name="profession[{{ $count }}][{{ $cart['id'] }}]" >
            
        </div>

       
        @php
            $count = $count + 1;
        @endphp
      
           @endfor 
         
           @else
          
          <table style="color: black;width:100%;max-width:100%; box-shadow: rgb(0 0 0 / 7%) 0px 3px 8px; margin-bottom: 20px;" border="1px" cellpadding="8px">
            <thead>
                <tr>
                    <th  style="font-weight: 900;font-size: 18px;">{{ __('Biletin adi') }}</th>
                    <th style="font-weight: 900;font-size: 18px;">{{ __('Vaxt') }}</th>
                    <th style="font-weight: 900;font-size: 18px;">{{ __('Time') }}</th>
                    <th style="font-weight: 900;font-size: 18px;">{{ __('price') }}</th>
 
                </tr>
            </thead>
            <tbody id="wishlist12">
                <tr>
  
                    <td class="shoping__cart__price">
                   {{ $cart['title'] }}
                    </td>
                    <td>{{  date('d.m.Y', strtotime($cart['date'])) }} </td>
                    <td>{{ $cart['time'] }}</td>
                    <td class="shoping__cart__quantity">
                        <div class="quantity">
                      {{ $cart['price'] }}
                        </div>
                    </td>
                 
                </tr>
          

            </tbody>
            </table> 

           <div style="margin-bottom:120px;">
            {{-- <input type="text" name="ticket[]" > --}}
            @php
                $count = 1;
            @endphp

        <input type="hidden" value="{{  json_encode($cart['date']) }}" name="date[{{ $count }}][{{ $cart['id'] }}]">
        <input type="hidden" value="{{  json_encode($cart['price']) }}" name="price[{{ $count }}][{{ $cart['id'] }}]">
        <input type="hidden" value="{{  json_encode($cart['title']) }}" name="title[{{ $count  }}][{{ $cart['id'] }}]">

            <input type="text" class="form-control"  required placeholder="{{__('your_name') }}" name="name[{{ $count  }}][{{ $cart['id'] }}]" >
            <input type="text" class="form-control"  required placeholder="{{ __('your_surname')}}" name="surname[{{ $count  }}][{{ $cart['id'] }}]">
            <input type="email" class="form-control"  required  placeholder="{{ __('your_email')}}" name="email[{{ $count }}][{{ $cart['id'] }}]">
            <div class="phone">
             <span class="countrycode">+994</span><input  required type="text" id="phone_{{$count}}_{{ $cart['id'] }}"   name="phone[{{ $count }}][{{ $cart['id'] }}]"
            placeholder="(__) ___-__-__" />
            </div>
            <input type="text" class="form-control"  required placeholder="{{ __('your_work')}}" name="work[{{ $count  }}][{{ $cart['id'] }}]">
            <input type="text" class="form-control"  required placeholder="{{ __('your_profession')}}" name="profession[{{ $count  }}][{{ $cart['id'] }}]" >

        </div>

           @endif
             
         @endforeach
          @endif
                   
                    <button class="submit" type="submit">{{ __('tamamla')}}
                        <img src="{{ asset('/front/images/right-grey.png')}}" alt="">
                    </button>
                </form>
             
            </div>
        </div>
    </section>





   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    
    <script>
let btnSubmit = document.querySelector(".submit");

   btnSubmit.addEventListener("click",()=>{
       
    setTimeout(function() { btnSubmit.setAttribute('disabled', ''); }, 2000);

    btnSubmit.innerHTML = `<button class="submit2" disabled type="submit">Qeydiyyatı tamamla
        <i class="fa fa-spinner fa-spin"></i>
    </button>`;
    
    
})

    </script>
    
    



    <script>
        (function (jQuery, window, undefined) {
            "use strict";

            var matched, browser;

            jQuery.uaMatch = function (ua) {
                ua = ua.toLowerCase();

                var match = /(opr)[\/]([\w.]+)/.exec(ua) ||
                    /(chrome)[ \/]([\w.]+)/.exec(ua) ||
                    /(version)[ \/]([\w.]+).*(safari)[ \/]([\w.]+)/.exec(ua) ||
                    /(webkit)[ \/]([\w.]+)/.exec(ua) ||
                    /(opera)(?:.*version|)[ \/]([\w.]+)/.exec(ua) ||
                    /(msie) ([\w.]+)/.exec(ua) ||
                    ua.indexOf("trident") >= 0 && /(rv)(?::| )([\w.]+)/.exec(ua) ||
                    ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec(ua) ||
                    [];

                var platform_match = /(ipad)/.exec(ua) ||
                    /(iphone)/.exec(ua) ||
                    /(android)/.exec(ua) ||
                    /(windows phone)/.exec(ua) ||
                    /(win)/.exec(ua) ||
                    /(mac)/.exec(ua) ||
                    /(linux)/.exec(ua) ||
                    /(cros)/i.exec(ua) ||
                    [];

                return {
                    browser: match[3] || match[1] || "",
                    version: match[2] || "0",
                    platform: platform_match[0] || ""
                };
            };

            matched = jQuery.uaMatch(window.navigator.userAgent);
            browser = {};

            if (matched.browser) {
                browser[matched.browser] = true;
                browser.version = matched.version;
                browser.versionNumber = parseInt(matched.version);
            }

            if (matched.platform) {
                browser[matched.platform] = true;
            }

            // These are all considered mobile platforms, meaning they run a mobile browser
            if (browser.android || browser.ipad || browser.iphone || browser["windows phone"]) {
                browser.mobile = true;
            }

            // These are all considered desktop platforms, meaning they run a desktop browser
            if (browser.cros || browser.mac || browser.linux || browser.win) {
                browser.desktop = true;
            }

            // Chrome, Opera 15+ and Safari are webkit based browsers
            if (browser.chrome || browser.opr || browser.safari) {
                browser.webkit = true;
            }

            // IE11 has a new token so we will assign it msie to avoid breaking changes
            if (browser.rv) {
                var ie = "msie";

                matched.browser = ie;
                browser[ie] = true;
            }

            // Opera 15+ are identified as opr
            if (browser.opr) {
                var opera = "opera";

                matched.browser = opera;
                browser[opera] = true;
            }

            // Stock Android browsers are marked as Safari on Android.
            if (browser.safari && browser.android) {
                var android = "android";

                matched.browser = android;
                browser[android] = true;
            }

            // Assign the name and platform variable
            browser.name = matched.browser;
            browser.platform = matched.platform;


            jQuery.browser = browser;
        })(jQuery, window);

        /*
            Masked Input plugin for jQuery
            Copyright (c) 2007-2011 Josh Bush (digitalbush.com)
            Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license) 
            Version: 1.3
          https://cloud.github.com/downloads/digitalBush/jquery.maskedinput/jquery.maskedinput-1.3.min.js
        */
        (function (a) {
            var b = (a.browser.msie ? "paste" : "input") + ".mask", c = window.orientation != undefined; a.mask = { definitions: { 9: "[0-9]", a: "[A-Za-z]", "*": "[A-Za-z0-9]" }, dataName: "rawMaskFn" }, a.fn.extend({ caret: function (a, b) { if (this.length != 0) { if (typeof a == "number") { b = typeof b == "number" ? b : a; return this.each(function () { if (this.setSelectionRange) this.setSelectionRange(a, b); else if (this.createTextRange) { var c = this.createTextRange(); c.collapse(!0), c.moveEnd("character", b), c.moveStart("character", a), c.select() } }) } if (this[0].setSelectionRange) a = this[0].selectionStart, b = this[0].selectionEnd; else if (document.selection && document.selection.createRange) { var c = document.selection.createRange(); a = 0 - c.duplicate().moveStart("character", -1e5), b = a + c.text.length } return { begin: a, end: b } } }, unmask: function () { return this.trigger("unmask") }, mask: function (d, e) { if (!d && this.length > 0) { var f = a(this[0]); return f.data(a.mask.dataName)() } e = a.extend({ placeholder: "_", completed: null }, e); var g = a.mask.definitions, h = [], i = d.length, j = null, k = d.length; a.each(d.split(""), function (a, b) { b == "?" ? (k--, i = a) : g[b] ? (h.push(new RegExp(g[b])), j == null && (j = h.length - 1)) : h.push(null) }); return this.trigger("unmask").each(function () { function v(a) { var b = f.val(), c = -1; for (var d = 0, g = 0; d < k; d++)if (h[d]) { l[d] = e.placeholder; while (g++ < b.length) { var m = b.charAt(g - 1); if (h[d].test(m)) { l[d] = m, c = d; break } } if (g > b.length) break } else l[d] == b.charAt(g) && d != i && (g++, c = d); if (!a && c + 1 < i) f.val(""), t(0, k); else if (a || c + 1 >= i) u(), a || f.val(f.val().substring(0, c + 1)); return i ? d : j } function u() { return f.val(l.join("")).val() } function t(a, b) { for (var c = a; c < b && c < k; c++)h[c] && (l[c] = e.placeholder) } function s(a) { var b = a.which, c = f.caret(); if (a.ctrlKey || a.altKey || a.metaKey || b < 32) return !0; if (b) { c.end - c.begin != 0 && (t(c.begin, c.end), p(c.begin, c.end - 1)); var d = n(c.begin - 1); if (d < k) { var g = String.fromCharCode(b); if (h[d].test(g)) { q(d), l[d] = g, u(); var i = n(d); f.caret(i), e.completed && i >= k && e.completed.call(f) } } return !1 } } function r(a) { var b = a.which; if (b == 8 || b == 46 || c && b == 127) { var d = f.caret(), e = d.begin, g = d.end; g - e == 0 && (e = b != 46 ? o(e) : g = n(e - 1), g = b == 46 ? n(g) : g), t(e, g), p(e, g - 1); return !1 } if (b == 27) { f.val(m), f.caret(0, v()); return !1 } } function q(a) { for (var b = a, c = e.placeholder; b < k; b++)if (h[b]) { var d = n(b), f = l[b]; l[b] = c; if (d < k && h[d].test(f)) c = f; else break } } function p(a, b) { if (!(a < 0)) { for (var c = a, d = n(b); c < k; c++)if (h[c]) { if (d < k && h[c].test(l[d])) l[c] = l[d], l[d] = e.placeholder; else break; d = n(d) } u(), f.caret(Math.max(j, a)) } } function o(a) { while (--a >= 0 && !h[a]); return a } function n(a) { while (++a <= k && !h[a]); return a } var f = a(this), l = a.map(d.split(""), function (a, b) { if (a != "?") return g[a] ? e.placeholder : a }), m = f.val(); f.data(a.mask.dataName, function () { return a.map(l, function (a, b) { return h[b] && a != e.placeholder ? a : null }).join("") }), f.attr("readonly") || f.one("unmask", function () { f.unbind(".mask").removeData(a.mask.dataName) }).bind("focus.mask", function () { m = f.val(); var b = v(); u(); var c = function () { b == d.length ? f.caret(0, b) : f.caret(b) }; (a.browser.msie ? c : function () { setTimeout(c, 0) })() }).bind("blur.mask", function () { v(), f.val() != m && f.change() }).bind("keydown.mask", r).bind("keypress.mask", s).bind(b, function () { setTimeout(function () { f.caret(v(!0)) }, 0) }), v() }) } })
        })(jQuery);

        /*     My Javascript      */

        $(function ($) {
            $("#phone_0_0").mask("(99) 999-99-99");
            $("#phone_0_1").mask("(99) 999-99-99");
            $("#phone_0_2").mask("(99) 999-99-99");
            $("#phone_0_3").mask("(99) 999-99-99");
            $("#phone_0_4").mask("(99) 999-99-99");
            $("#phone_0_5").mask("(99) 999-99-99");
            
            $("#phone_1_0").mask("(99) 999-99-99");
            $("#phone_1_1").mask("(99) 999-99-99");
            $("#phone_1_2").mask("(99) 999-99-99");
            $("#phone_1_3").mask("(99) 999-99-99");
            $("#phone_1_4").mask("(99) 999-99-99");
             $("#phone_1_5").mask("(99) 999-99-99");
            
            $("#phone_2_0").mask("(99) 999-99-99");
            $("#phone_2_1").mask("(99) 999-99-99");
            $("#phone_2_2").mask("(99) 999-99-99");
            $("#phone_2_3").mask("(99) 999-99-99");
            $("#phone_2_4").mask("(99) 999-99-99");
            $("#phone_2_5").mask("(99) 999-99-99");
                
            $("#phone_3_0").mask("(99) 999-99-99");
            $("#phone_3_1").mask("(99) 999-99-99");
            $("#phone_3_2").mask("(99) 999-99-99");
            $("#phone_3_3").mask("(99) 999-99-99");
            $("#phone_3_4").mask("(99) 999-99-99");
            $("#phone_3_5").mask("(99) 999-99-99");
        }); 
    </script>



@endsection