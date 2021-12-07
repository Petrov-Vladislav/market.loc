<div class="amado-pro-catagory clearfix">
    @foreach($categories as $category)
    
    <!-- Single Catagory -->
    <div class="single-products-catagory clearfix">
        <a href="{{$category->link}}">
             <img src="img/categories/{{ $category->img }}" alt="">
                <!-- Hover Content -->
            <div class="hover-content">
            <div class="line"></div>
                <h4>{{ $category->name }}</h4>
            </div>
        </a>
    </div>
    @endforeach
</div>