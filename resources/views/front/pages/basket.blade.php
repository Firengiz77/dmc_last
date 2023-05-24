
@extends('front.layout.master')

<link rel="stylesheet" href="{{ asset('/oldsStyle.css') }}">
<link rel="stylesheet" href="{{ asset('/e-commerce/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/oldStyle.css') }}">
<link rel="stylesheet" href="{{ asset('/e-commerce/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/e-commerce/oldsStyle.css') }}">
<link rel="stylesheet" href="{{ asset('/e-commerce/assets/css/all.css') }}">


@section('container')

<style>
    .count::before{
    margin-left: 25px !important;
}

.basket{
    margin-bottom: 50px;
}
.block-minicart .link-dropdown .count {
    left: 14px;
    min-width: 21px;
    height: 21px;
    padding: 0 1px;
    background-color: #c35a5a;
}
.basket_name h5{
    color: black;
    font-size: 0.9rem;
    width: 90%;
}
.basket_time h5{
    position: relative;
    color: black;
    font-size: 0.8rem;
}
.basket_date h5{
    position: relative;
    right: 15px;
    color: black;
    font-size: 0.8rem;
}
.basket_name input{
   
    width: 84px;
    padding-left: 32px !important;
    border: none;
}
.seller{
    display: flex !important;
    justify-content: space-between;
    padding-right:20px;
}

.basket-actual-price{
    color: rgba(0, 0, 0, 0.692);
}
.h5{
    margin-left: 38px;
    color: black !important;
}
.h55{
    margin-left: 47px;
    color: black ;
}.basket-quantity{
    border: none;
    position: relative;
    left: 30px;
    width: 200px;
}
.basket-trash{
    position: relative;
    left: 55px;
}
ul li{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.single_basket_product div{
    width: 100%;
}
.single_basket_product .basket_img a {
    display: flex;
    align-items: center;
    
    
}
.basket-price{
   position: relative;
   right: 26px;
}
.single_basket_product {
  
  
    padding: 10px;
}

.basket-quantity button{
    border-radius: 8px;
    background-color: black;
    width: 30px;
    height: 30px;
    margin: 0;
    font-family: none !important;
    font-size: 14px !important;
    line-height: 0px !important;
}

.odenis-novu{
    width: 80%;
    display: flex;
    justify-content: space-between;
    margin-left: 17px;

}
.discount-code .btn{
    font-size: 8px;
   
    padding-right: 15px;
}

.discount-code .btn:hover{
    background-color: black;
    color: rgb(252, 252, 252);
}

.basket-price-details ul li{
    font-size: 12px !important;
}

.basket-confirm{
    background-color: black;
    color: #fff;
    width: 100%;
    height: 60px;
    margin-top: 10px;
}
.basket-conf{
    width: inherit;
    background-color:rgb(110, 37, 37);
    
}

.fa-trash-alt{
    background-color: red;
    color: #fff !important;
    border-radius: 8px;
    padding: 8px;
    fill: #fff !important;
}
.fa-trash-alt:before{
    color: #fff !important;
}

.fa-balance-scale{
	position: relative;
}

.countwist{
	position: absolute;
	bottom: 14px;
	left: 15px;
	background-color: #c35a5a;
	color: white;
	font-size: 10px;
	padding: 5px  7px;
	border-radius: 150px;
}

button, input[type="submit"] {
    color: #f2efef !important;
}
.vec121{
    cursor: pointer;
}

.rad-label{
    display: flex;
    justify-content: space-around;
}

.total_products{
    margin-left: 45px;
}













@media only screen and (max-width: 1280px){
    .single_basket_product div {
        width: 13%;
    }
}

@media only screen and (max-width: 1024px){
    .single_basket_product div {
        width: 17%;
    }
}
@media only screen and (max-width: 779px){
    .single_basket_product {
        height: 400px;
        background-color: #fafafa;
    }
    .seller{
        width: 30%;
        height: 400px;
        border-bottom: none;
    }
    ul, ol {
        
        padding-left: 0px;
    }
    ul li {
        display: block !important;
        flex-direction: row;
    }
    .basket-quantity{
        left: 0px;
        width: 100px !important;
    }
    .basket-trash{
        left: 6%;
    }
   .basket-price{
    flex-direction: row;
    column-gap: 20px;
   }
    .seller {
        flex-direction: column !important;
        width: 10%;
        justify-content: space-between;
     
    }
    .discount-code .btn {
        font-size: 8px;
        padding-right: 15px;
    }
    
   .single_basket_product{
        flex-direction: column !important;
        width: 100%;
        align-items: flex-end; 
       
    }
    .single_basket{
        display: flex !important;
       
    }
   .basket_img img{
    width: 100% ;
    height: 70px;
   }
   .basket_name h5{
    width: 100% !important;
    font-size: 1rem;
   }
}

@media only screen and (max-width: 758px){
    .single_basket_product .basket_img{
        
        margin-right: 20px;
    }
    .single_basket_product .basket_img img{
        height: 60px;
        max-width: 400%;
       
    }
    .basket_img{
        margin-right: 20px;
        width: 100%;
    }
    .seller{
        width: 30%;
        height: 400px;
        border-bottom: none;
    }
    .basket_name{
        width: 90px !important;
       
      
    }
    .basket-trash {
        left: 0%
    }
    .single_basket_product {
        height: 400px;
        background-color: #fafafa;
    }
    .h55 {
        margin-left: 30px;
    }
}

@media only screen and (max-width: 540px){
    .seller{
        height: 400px;
    }
    .basket_name{
        width: 90px !important;
        margin-bottom: 30px;
    }
    .basket-trash{
        margin-right: 10px;
    }
    .basket-price{
        margin-right: 0px;
    }
    .basket_name{
        margin-bottom: 0px;
    }
    .single_basket_product .basket_img{
        margin-right: 30px;
    }
    .single_basket_product .basket_img img{
        height: 60px;
        max-width: 170%;
       
    }
}

@media only screen and (max-width: 528px){
    .basket-trash{
        margin-right: 10px;
    }
    .basket-price{
        margin-right: 0px;
    }
    .basket_name{
        margin-bottom: 0px;
    }
    .single_basket_product .basket_img{
        margin-right: 30px;
    }
    .single_basket_product .basket_img img{
        height: 60px;
        max-width: 170%;
       
    }
}
@media only screen and (max-width: 446px){
    .single_basket_product .basket_img{
        
        margin-right: 40px;
    }
    .single_basket_product .basket_img img{
        height: 60px;
        max-width: 400%;
       
    }
    .basket_name{
        width: 90px !important;
        margin-bottom: 10px;
    }
    .basket-trash{
        margin-right: 20px;
    }
    .basket_date{
        margin-right: 15px;
    }
    .basket_time{
        margin-right: 15px;
    }

}

@media only screen and (max-width: 414px){
    .seller{
        height: 400px;
    }
    .basket_name{
        width: 90px !important;
        margin-bottom: 30px;
    }
    .basket-trash{
        margin-right: 40px;
    }
    .basket-price{
        margin-right: 20px;
    }
    .basket_name{
        margin-bottom: 0px;
    }
    .single_basket_product .basket_img{
        
        margin-right: 60px;
    }
    .single_basket_product .basket_img img{
        height: 60px;
        max-width: 400%;
       
    }
    .basket_date{
        margin-right: 25px;
    }
    .basket_time{
        margin-right: 25px;
    }
}


</style>



<!-- Basket Section -->
<div class="basket" style="padding-top:3rem">
    <div class="total_products">
       
        <div class="col-lg-12">
            <div class="col-lg-7 about-text event-procedur-header">
      
      <h2>{{ __('Sebet') }}</h2>

    </div>
      <hr>
      </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-9">
                <ul>
                    <div id="wishlist12">
                    @if($carts !== null)
                    @include('front.widget.cart2')
                    @endif
                </div>
                   
                </ul>
            </div>








            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-12">
                    
                            <div class="basket-summary" style="margin-top: 20px;">
                                <div class="basket-total text-center mt-3">
                                    <span>Səbətin xülasəsi</span>

                                    <div class="basket-price-details mt-4">
                                       
                                        <ul>
                                            <li>Ödəniləcək məbləğ</li>
                                            <li class="odenilecek price"> {{ $price }} AZN</li>
                                        </ul>

                                    </div>
                                </div>
                             
                                
                               
                            </div>
                            <a href="{{ route('register_form') }}"><button  class="basket-confirm">Təsdiq et</button></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

{{-- <section style="padding-top: 5rem">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                  <div class="col-lg-7 about-text event-procedur-header">
            
            <h2>{{ __('Sebet') }}</h2>
      
          </div>
            <hr>
            </div>
              
                    <table style="color: black;width:100%;max-width:100%; box-shadow: rgb(0 0 0 / 7%) 0px 3px 8px;" border="1px" cellpadding="8px">
                        <thead>
                            <tr>
                                <th  style="font-weight: 900;font-size: 18px;">{{ __('Biletin adi') }}</th>
                                <th style="font-weight: 900;font-size: 18px;">{{ __('Time') }}</th>
                                <th style="font-weight: 900;font-size: 18px;">{{ __('Vaxt') }}</th>
                                <th style="font-weight: 900;font-size: 18px;">{{ __('price') }}</th>
                                <td style="font-weight: 900;font-size: 18px;">{{ __('Say') }}</td>
             
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="wishlist12">

                        @if($carts !== null)
                         @include('front.widget.cart')
                        @endif

                        </tbody>
                    </table>
                    <div class="col-lg-12" style="display:flex;flex-direction:column;margin-top:20px;align-items:flex-end;justify-content:flex-end">
                       
                        <div class="shoping__checkout">
                            <a style="color: black" href="{{ route('register_form') }}" class="primary-btn">
                                Yekun Qiymet <br>  <hr>
                               <div> <span class="price"> {{ $price }}</span>  Azn</div> 
                            </a>
                        </div>
                        <div class="shoping__checkout" style="margin-bottom: 10px">

                            <a style="color: black" href="{{ route('register_form') }}" class="primary-btn">
                                <button class="register-login-2" style="border:none;color:white;margin-top:20px;width:120px;height:50px;font-weight:800">
                                   {{ __('Sifaris et') }} 
                                </button>
                          
                            
                            </a>
                        </div>
                       
                    </div>
                </div>
            </div>
          
        </div>
     
          

        
                </div>
            </div>
      
    </div>
</section>



 --}}






    
@endsection
