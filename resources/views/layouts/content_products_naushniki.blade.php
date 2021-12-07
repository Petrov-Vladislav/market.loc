<div class="amado_product_area section-padding-100">
    <div class="container-fluid">
        
        <div class="row">
            <!-- Single Product Area -->
            @foreach($naushniki as $naushnik)
            <div class="col-6 col-sm-6 col-md-6 col-xl-6">
                <div class="single-product-wrapper">
                    <!-- Product Image -->
                    <div class="product-img">
                <img src="img/naushniki/{{$naushnik->img}}" alt="">
                <!-- Hover Thumb -->
                <!-- <img class="hover-img" src="img/product-img/product2.jpg" alt=""> -->
            </div>
             <!-- Product Description -->
            <div class="product-description d-flex align-items-center justify-content-between">
                <!-- Product Meta Data -->
                <div class="product-meta-data">
                    <div class="line"></div>
                        <p class="product-price">{{$naushnik->price}}</p>
                            <h6>{{$naushnik->name}}</h6>

                        <p>
  
                            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapse{{$naushnik->id}}" aria-expanded="false" aria-controls="collapseExample">
                             Подробнее
                            </button>
                        </p>
                        <div class="collapse" id="collapse{{$naushnik->id}}">
                            <div class="card card-body">
                             {!!$naushnik->text!!}
                             </div>
                        </div>
</div>
</div>
                    <!-- Ratings & Cart -->
                    <div class="ratings-cart text-left">
                        
                        <div class="cart">
                            
                        <form method="POST" action="{{route('addToCart')}}">
                    {{csrf_field()}}
                    <input name="hid_naushniki" type="hidden" value="{{$naushnik->id}}">
                            <input class="btn btn-warning" type="submit" value="Добавить в корзину">
                            <!-- <a href="{{route('cart')}}" data-toggle="tooltip" data-placement="left" title="Добавить в корзину"><img src="img/core-img/cart.png" alt=""><span>Добавить в корзину</span></a> -->
                    </form>
                        </div>
                    </div>
                
            
        </div> 
    </div>
        @endforeach
</div>
</div>
</div>

