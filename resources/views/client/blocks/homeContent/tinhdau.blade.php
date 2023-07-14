
<style>
    @media (max-width: 1750px) {

        .hea-new-product-btn{
            width: 50px;
            height: 50px;
        }
        .hea-new-product-icon-cart{
            font-size: 25px;
        }
        .hea-new-product-price, .hea-new-product-saleoff{
            font-size: 25px;
        }
    }
    .hea-new-product-cost{
        display: flex;
    }
    #hea-product-slider-tinhdau-mobile{
        display: none;
    }
</style>

<section class="hea-show-product-desktop ">
    @foreach($categoriesDetail as $item)
    @if($item->label !== 'Combo' || $item->url !== 'Quà tặng')
    <div>
        @if($item->url == 'tinh-dau-khuyech-tan')
        <div style="display: flex; justify-content: space-between; margin-top:69px">
            <img src="{{asset('assets/clients/images/p1.png')}}" class="card-img-top img-fluid" alt="" style="max-width: 48%;max-height: 19%;">
            <img src="{{asset('assets/clients/images/p2.png')}}" class="card-img-top img-fluid" alt="" style="max-width: 48%;max-height: 19%;">
        </div>
        @endif
        <div class="hea-new-product-catagory">
            <p class="hea-new-product-catagory-title">{{ $item->label }}</p>
            <button type="button" class="btn btn-primary hea-flash-product-catagory-btn" onclick="window.location.href='/category/{{ $item->url }}'">Xem tất cả<i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <section class="products-slider">
            <div class="product-container">
                <ul class="autoWidthTinhDau cS-hidden" id="hea-product-slider-tinhdau-desktop">
                    @foreach ($allProductByCategory[$item->label] as $category)
                    <li class="item-a hea-new-product-tinhdau-item" style="list-style: none">
                            <div class="product-box" onclick="">
                                <img src="{{ $category->image }}" onclick=" window.location='/product-detail/{{ $category->url }}'" class="card-img-top hea-new-product-image img-fluid" alt="{{ $category->imageLabel }}">
                                <div class="card-body hea-new-product-body">
                                    <h5 onclick=" window.location='/product-detail/{{ $category->url }}'" class="card-title hea-new-product-title" style="color: black">{{ $category->label }}</h5>
                                    <div style="margin-top: 10px" class="hea-new-product-cost-cart">
                                        <div class="hea-new-product-cost">
                                            <p onclick=" window.location='/product-detail/{{ $category->url }}'" class="card-text hea-new-product-price">{{ $category->realPrice }}đ</p>
                                            <p onclick=" window.location='/product-detail/{{ $category->url }}'" class="card-text hea-new-product-saleoff-home hea-new-product-saleoff">{{ $category->price }}đ</p>
                                        </div>
                                        <button onclick="handleToastButtonClick(); handleAddProduct({{ $category->id }})" id="liveToastBtn" class="hea-new-product-btn" style="z-index: 100">
                                            <i class="fas fa-shopping-cart hea-new-product-icon-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </li>
                    @endforeach
                </ul>


                <div id="hea-product-slider-tinhdau-mobile">
                    <div class="hea-new-product-tinhdau">
                        @foreach ($allProductByCategory[$item->label] as $category)
                        <li class="item-a hea-new-product-tinhdau-item" style="list-style: none">
                            <div class="product-box" onclick="">
                                <img src="{{ $category->image }}" onclick=" window.location='/product-detail/{{ $category->url }}'" class="card-img-top hea-new-product-image img-fluid" alt="{{ $category->imageLabel }}">
                                <div class="card-body hea-new-product-body">
                                    <h5 onclick=" window.location='/product-detail/{{ $category->url }}'" class="card-title hea-new-product-title" style="color: black">{{ $category->label }}</h5>
                                    <div style="margin-top: 10px" class="hea-new-product-cost-cart">
                                        <div class="hea-new-product-cost">
                                            <p onclick=" window.location='/product-detail/{{ $category->url }}'" class="card-text hea-new-product-price">{{ $category->realPrice }}đ</p>
                                            <p onclick=" window.location='/product-detail/{{ $category->url }}'" class="card-text hea-new-product-saleoff-home hea-new-product-saleoff">{{ $category->price }}đ</p>
                                        </div>
                                        <button onclick="handleToastButtonClick(); handleAddProduct({{ $category->id }})" id="liveToastBtn" class="hea-new-product-btn" style="z-index: 100">
                                            <i class="fas fa-shopping-cart hea-new-product-icon-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
</section>
@endif
@endforeach


<!--<script src="{{asset('js/tinhdau.js')}}"></script>-->
<script>
    window.addEventListener('resize', function() {
    let productSlider = document.getElementById('hea-product-slider');
    if (window.innerWidth >= 780) {
        productSlider.classList.add('autoWidthTinhDau');
    } else {
        productSlider.classList.remove('autoWidthTinhDau');
    }
    });

    $(document).ready(function() {
        $('.autoWidthTinhDau').lightSlider({
            autoWidth:true,
            onSliderLoad: function() {
                $('.autoWidthTinhDau').removeClass('cS-hidden');
            }
        });
    });
    //TODO:Xử lí toast
    const toast = document.querySelector('.toast');
    const cover = document.querySelector('.toast-cover');

    function handleToastButtonClick() {
        toast.classList.toggle('show');
        setTimeout(function() {
            toast.classList.remove('show');
        }, 2000);
    }

    function handleAddProduct(id) {
        let data = {
            'data': [{
                'attributes': {
                    'product.id': id,
                    'quantity': 1,
                }
            }]
        };
        let content = $("meta[name=csrf-token]").attr("content");
        let url = '/jsonapi/basket?id=default&related=product&_token=' + content;
        $.ajax({
            url: url,
            method: "POST",
            dataType: "json",
            data: JSON.stringify(data)
        }).done( function( result ) {
            console.log( result );
        });
    }
</script>

