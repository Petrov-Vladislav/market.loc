<!-- Close Icon -->
<div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="{{route('category')}}">Главная</a></li>
                    <li><a href="#">Товары</a>
                        <ul class="list_prod">
                            <li><a href="{{route('products')}}">Смартфоны</a></li>
                            <li><a href="{{route('noutbooks')}}">Ноутбуки</a></li>
                            <li><a href="{{route('monobloks')}}">Моноблоки</a></li>
                            <li><a href="{{route('naushniki')}}">Наушники</a></li>
                        </ul>    
                    </li>
                    <li><a href="{{route('cart')}}">Корзина</a></li>
                    <li><a href="checkout.html">Оплата</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="#" class="btn amado-btn mb-15">Скидка</a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="{{route('cart')}}" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Корзина <span class="badge badge-primary badge-pill">@php echo session('count_prod', 0); @endphp</span></a>
                <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Поиск</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
