
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
            <button type="button" class="hea-flash-product-catagory-btn" onclick="window.location.href='/category/{{ $item->url }}'">Xem tất cả<i class="fas fa-arrow-right"></i>
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
                    <div class="product-grid">
                        @foreach($allProductByCategory[$item->label] as $item)
                        <div class="product-box-responsive">
                            <img src="{{ $item->image }}" class="img-fluid card-img-top hea-new-product-image" alt="...">
                            <div class="card-body hea-new-product-body">
                                <h5 class="card-title hea-new-product-title">{{ $item->label }}</h5>
                                <div>
                                    <div>
                                        <p class="card-text hea-new-product-price">{{$item->realPrice }}đ</p>
                                        <p class="card-text hea-new-product-saleoff">{{$item->price}}đ</p>
                                    </div>
                                    <button onclick="handleToastButtonClick(); handleAddProduct({{ $item->id }})" href="#" class="hea-new-product-btn"><i class="fas fa-shopping-cart hea-new-product-icon-cart"></i></button>
                                </div>
                            </div>
                        </div>
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
        let amountTextProduct = document.querySelector('.hea-header-cart');
        let existingBadge = document.querySelector('.hea-header-amount-cart');
        if (existingBadge) {
            existingBadge.remove(); // Xóa thẻ đã tồn tại nếu có
        }
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
        }).done(function(result) {
            let responseData = result.included;
            let amountProduct = 0;
            for (let i = 0; i < responseData.length; i++) {
                if (responseData[i].type === 'basket.product') {
                    let quantity = responseData[i].attributes['order.product.quantity'];
                    amountProduct += quantity;
                }
            }
            let html = `<span class="position-absolute top-0 start-100 translate-middle hea-header-amount-cart badge rounded-pill bg-danger">${amountProduct}<span class="visually-hidden">unread messages</span></span>`;
            amountTextProduct.insertAdjacentHTML('afterend', html);
        });
    }

</script>

