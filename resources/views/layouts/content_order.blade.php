<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="checkout_details_area mt-50 clearfix">
                    <div class="cart-title">
                        <h2>Оформление заказа</h2>
                    </div>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="first_name" value="" placeholder="Имя" required="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="last_name" value="" placeholder="Фамилия" required="">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Email" value="">
                            </div>
                            <div class="col-12 mb-3">
                                <input id="address" name="address" type="text" class="form-control mb-3" placeholder="Адрес" value="">
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
                                <input type="text" class="form-control" id="zipCode" placeholder="Почтовый индекс" value="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="number" class="form-control" id="phone_number" min="0" placeholder="Телефон" value="">
                            </div>
                            <div class="col-12 mb-3">
                                <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Комментарий к заказу"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="cart-summary">
                    <h5>Cart Total</h5>
                    <ul class="summary-table">
                        <li><span>subtotal:</span> <span>$140.00</span></li>
                        <li><span>delivery:</span> <span>Free</span></li>
                        <li><span>total:</span> <span>$140.00</span></li>
                    </ul>
                    <div class="payment-method">

                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="cod" checked="">
                            <label class="custom-control-label" for="cod">Cash on Delivery</label>
                        </div>

                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="paypal">
                            <label class="custom-control-label" for="paypal">Paypal <img class="ml-15" src="data:image/webp;base64,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" alt="" data-pagespeed-url-hash="3975691678" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></label>
                        </div>
                    </div>
                    <div class="cart-btn mt-100">
                        <a href="#" class="btn amado-btn w-100">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>