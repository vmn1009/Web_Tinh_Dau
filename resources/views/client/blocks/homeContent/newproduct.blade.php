<!--===Style(CSS)=======================================================-->
<link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">
<style>
    .product-box{
        max-width: 395px !important;
        max-height: 537px;
    }
    .lSPager{
        display:none;
    }
    .lSAction > a {

        background-color:#00000033;
        width:50px;
        height:50px;
        border-radius:50%;
        opacity:0.8;
        background-image:none;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .lSAction > a::after{
        position:absoult;
        content:'';
        margin:auto;
        border: solid #ffffff;
        border-width: 0 4px 4px 0;
        display: inline-block;
        padding: 5px;
    }
    .lSAction > .lSPrev::after {
        transform: rotate(135deg);
        -webkit-transform: rotate(135deg);
    }

    .lSAction > .lSNext::after {
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
    }
    .product-container-mobile{
        display: none;
    }

</style>

<div>
    <div class="hea-new-product-catagory">
        <p class="hea-new-product-catagory-title">Sản phẩm mới ra mắt</p>
    </div>
    <section class="products-slider product-container-desktop">
        <div class="product-container">
            <ul class="autoWidth" class="cs-hidden">
                @foreach ($otherListProductByCategory[2] as $item)
                <li class="item-a">
                    <div class="product-box">
                        <img src="{{$item->image}}" onclick=" window.location='/product-detail/{{ $item->url }}'" class="card-img-top hea-new-product-image" alt="...">
                        <div class="card-body hea-new-product-body">
                            <h5 onclick=" window.location='/product-detail/{{ $item->url }}'" class="card-title hea-new-product-title">{{$item->label}}</h5>
                            <div>
                                <p class="card-text hea-new-product-price" onclick=" window.location='/product-detail/{{ $item->url }}'">{{$item->realPrice}}đ</p>
                                <p class="card-text hea-new-product-saleoff" onclick=" window.location='/product-detail/{{ $item->url }}'"> {{$item->price}}đ</p>
                                <button onclick="handleToastButtonClick(); handleAddProduct({{ $item->id }})" id="liveToastBtn" class="hea-new-product-btn" style="z-index: 100">
                                    <i class="fas fa-shopping-cart hea-new-product-icon-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="product-container-mobile">
        <div class="product-grid">
            @foreach ($otherListProductByCategory[3] as $item)
            <div class="product-box-responsive">
                <img src="{{$item->image}}" onclick=" window.location='/product-detail/{{ $item->url }}'" class="card-img-top img-fluid hea-new-product-image" alt="...">
                <div class="card-body hea-new-product-body">
                    <h5 onclick=" window.location='/product-detail/{{ $item->url }}'" class="card-title hea-new-product-title">{{$item->label}}</h5>
                    <div>
                        <div>
                            <p class="card-text hea-new-product-price" onclick=" window.location='/product-detail/{{ $item->url }}'">{{$item->realPrice}}đ</p>
                            <p class="card-text hea-new-product-saleoff" onclick=" window.location='/product-detail/{{ $item->url }}'"> {{$item->price}}đ</p>
                        </div>
                        <button onclick="handleToastButtonClick(); handleAddProduct({{ $item->id }})" id="liveToastBtn" class="hea-new-product-btn" style="z-index: 100">
                            <i class="fas fa-shopping-cart hea-new-product-icon-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>



<!--===JavaScript=======================================================-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        $('.autoWidth').lightSlider({
            autoWidth:true,

            onSliderLoad: function() {
                $('.autoWidth').removeClass('cS-hidden');
            }
        });
    });


</script>

<!--***Javascript-end****-->
