<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cart-title mt-50">
                    <h2>Корзина</h2>
                </div>
               @if($user)
                <div class="cart-table clearfix">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Товар</th>
                                <th>Цена</th>
                                <th>Количество</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        
                        @foreach($carts as $cart)
                            <tr>
                                <td class="cart_product_img">
                                    <img src="img/cart/{{$cart->img}}" alt="{{$cart->name}}">
                                    <form action="{{route('delFromCart')}}" method="post">
                                    {{csrf_field()}}
                                        <input name="del_prod" type="hidden" value="{{$cart->id}}">
                                        <input class="btn btn-danger btn-sm" type="submit" name="delete" value="Удалить из корзины">
                                    </form>
                                </td>
                                <td class="cart_product_desc">
                                    <h5>{{$cart->name}}</h5>
                                </td>
                                <td class="price">
                                    <span>{{$cart->price}} р.</span>
                                </td>
                                <td class="qty">
                                    <div class="qty-btn d-flex">
                                        <div class="quantity">
                                            <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                            <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                       @else
                       <p>Корзина пуста</p>
                       @endif
                        </tbody>
                    </table>
                </div>
                
            </div>
            @if($user)
            <div class="col-12 col-lg-4">
                <div class="cart-summary">
                    <h5>Итого</h5>
                    <ul class="summary-table">
                        <li><span>Цена за товары:</span> <span>{{$cart_sum}} р.</span></li>
                        <li>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dostavka" id="pickup" value="pickup">
                                <label class="form-check-label" for="pickup">
                                    Самовывоз
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dostavka" id="delivery" value="delivery">
                                <label class="form-check-label" for="delivery">
                                    Доставка
                                </label>
                            </div>
                        </li>
                        <li><span>Доставка:</span> <span>Free</span></li>
                        <li><span>Всего к оплате:</span> <span>$140.00</span></li>
                    </ul>
                    <div class="cart-btn mt-100">
                        <a href="cart.html" class="btn amado-btn w-100">Оплатить</a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>