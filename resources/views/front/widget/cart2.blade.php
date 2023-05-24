
@foreach ($carts as $cart )
<li class="single_basket">
    <div class="seller">
      
        <div>Bilet</div>
        <div>Vaxt</div>
        <div>Tarix</div>
        <div>Qiymət</div>
        <div>Miqdarı</div>
  
        <div>Sayğac</div>
        <div>Sil</div>
    </div>
    <div class="single_basket_product">

       
        <div class="basket_name">
            <h5> {{ $cart['title'] }}</h5>
        </div>
        <div class="basket_time">
            <h5>{{ $cart['time'] }}</h5>
        </div>
        <div class="basket_date">
            <h5> {{ date('m.d.Y', strtotime($cart['date'])) }}</h5>
        </div>

        <div class="basket-price">
            <span class="basket-current shoping__cart__quantity"> <div class="quantity">
                {{ $cart['price'] }} AZN
                    </div></span>
        </div>

        <div class="basket_name">
            <div style="width: 100%; text-align:center;" class="quantity234_{{ $cart['id'] }}" style="color: black">
                {{ $cart['quantity'] }} 
            </div>
   
        </div>


        <div class="basket-quantity">
            <button style="color:white" class="decrease register-login-3" onclick="descrease({{ $cart['id']}})">-</button>
            <button style="color:white" class="increase register-login-3" onclick="increase({{ $cart['id']}})" >+</button>
        </div>





        <div class="basket-trash">
            <a  onclick="remove_from_cart({{$cart['id']}})">    <i class="far fa-trash-alt"></i> </a>

         
        </div>


    </div>
</li>
@endforeach