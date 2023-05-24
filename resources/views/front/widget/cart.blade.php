@foreach ($carts as $cart )
<tr>
  
    <td class="shoping__cart__price">
   {{ $cart['title'] }}
    </td>
    <td>{{ $cart['date'] }}</td>
    <td>{{ $cart['time'] }}</td>
    <td class="shoping__cart__quantity">
        <div class="quantity">
    {{ $cart['price'] }}
        </div>
    </td>
    <td>
       
       <div style="width: 100%;" class="quantity234_{{ $cart['id'] }}">
   {{ $cart['quantity'] }} </div>
     
    </td>
  
    <td class="shoping__cart__item__close">
        <button style="color:white" class="register-login-3" onclick="descrease({{ $cart['id']}})">-</button>
     <a  onclick="remove_from_cart({{$cart['id']}})"> <img src="{{ asset('/front/images/trash.png') }}" alt="" width="30px"></a>
     <button style="color:white" class="register-login-3" onclick="increase({{ $cart['id']}})" >+</button>
    </td>
</tr>
@endforeach