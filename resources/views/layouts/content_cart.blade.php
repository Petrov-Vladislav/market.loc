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
                            <tr class="view_cart">
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
                                        1 шт.
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
                        <li><span>Доставка:</span> <span id="price_dost"></span></li>
                        <li><span>Всего к оплате:</span> <span id="sum">{{$cart_sum}} р.</span></li>
                    </ul>
                    <div class="cart-btn mt-100">
                        <button id="button_newdostavka" class="btn amado-btn w-100">Оформить доставку</button>
                    </div>
                </div>
            </div>
            <div id="new_dostavka" class="cart-table-area section-padding-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="checkout_details_area mt-50 clearfix">
                                <div class="cart-title">
                                    <h2>Оформление доставки</h2>
                                </div>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control" id="first_name" value="" placeholder="Имя" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control" id="last_name" value="" placeholder="Фамилия" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="email" class="form-control" id="email" placeholder="Email" value="" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input id="address" name="address" type="text" class="form-control mb-3" placeholder="Адрес" value="" required>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                            <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css" rel="stylesheet" />
                                            <script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js"></script>
            
                                            <script>
                                                $("#address").suggestions({
                                                    token: "24eb7082e0d6c2ba0a44ffdda061340d69b36dcb",
                                                    type: "ADDRESS",
                                                    /* Вызывается, когда пользователь выбирает одну из подсказок */
                                                    onSelect: function(suggestion) {
                                                        console.log(suggestion);
                                                    }
                                                });
                                            </script>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="tel" class="form-control" id="phone_number" placeholder="Телефон" value="" pattern="+7[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="date" class="form-control" id="date" placeholder="Дата доставки" value="" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Комментарий к заказу"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>