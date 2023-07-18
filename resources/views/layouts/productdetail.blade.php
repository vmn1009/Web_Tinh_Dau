@extends('client.blocks.master')
@section('body')

<style>
    *{
        font-family: 'Nunito', sans-serif ;
    }
    .hea-nav-pill-child:first-child {
        display: flex;
    }

    #inputCounter{
        width: 50px;
        height: 30px;
        border: none;
        text-align: center;
        font-size: 22px;
        color: #533f03;
    }
    #inputCounter:focus{
        border: none !important;
        outline: none;
    }
    .hea-product-detail-tab-btn
    ,.hea-product-detail-tab-btn:hover
    ,.hea-product-outstanding-card-title:hover{
        color: black;
    }

</style>
<section class="hea-product-detail-container ">

    <div>
        <div class="hea-nav-pill-child">
            @include('client.blocks.productContent.slider')
        </div>
        <div class="hea-nav-pill-child" style="width:689px;; margin-left: 38px;">
            <div class="hea-nav-pill-child-title">
                {{$productDetails->label}}
            </div>
            <div class="hea-nav-pill-child-content" style=" display: flex;
             align-items: center; padding-bottom: 18.9px;padding-top: 16px">
                <div style="display: flex; align-items: center">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <div class="hea-product-detail-rate">(90 đánh giá)</div>
                </div>
                <div class="hea-product-detail-sold">
                    Đã bán: 125
                </div>
            </div>
            <div>
                <span class="hea-product-detail-saleoff">{{$productDetails->price}}đ</span>
                <span class="hea-product-detail-realPrice">{{$productDetails->realPrice}}đ</span>
            </div>
            <div style="display: flex;">
                <div class="hea-product-detail-count-container">
                    <button id="increment" class="hea-product-detail-count-decre hea-product-detail-count-btn" onclick="decrease()"><i class="fas fa-minus"></i></button>
                    <input type="text" value="0" id="inputCounter" class="counting">
                    <button id="decrement" class="hea-product-detail-count-incre hea-product-detail-count-btn" onclick="increase() "><i class="fa-regular fa-plus"></i></button>
                </div>

                <button class="btn hea-product-detail-btn " id="liveToastBtn" style="align-items: center; background: #924C32;">Thêm vào
                    giỏ hàng
                </button>
            </div>
            <div>
                <div>
                    <i class="fa-sharp fa-regular fa-gift-card"></i>
                    <p style="font-weight: 600;font-size: 20px;line-height: 27px;color: #D35400;">Ưu đãi dành cho người
                        thương của Hea</p>
                </div>
                <ul class="hea-product-detail-endow" style="">
                    <li>Phí ship: Chỉ 35.000đ trên tất cả đơn hàng.</li>
                    <li>Miễn phí đổi trả sản phẩm lỗi do vận chuyển, sản xuất</li>
                    <li>Lorem Ipsum is simply dummy text of the printing and Ipsum is</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="hea-product-detail-banner">
        @for($i = 0; $i < 3; $i++)
        <img src="{{asset('assets/clients/images/banner2.png')}}" alt="..." class="rounded " style="margin-right: 18px">
        @endfor
    </div>

</section>

<div class="hea-product-detail-outstanding-container">

    <div class="hea-product-detail-tabItem">

        <div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist" style="border: none; overflow-y: hidden">
                    <button class="hea-product-detail-tab-btn nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">THÔNG TIN CHI TIẾT
                    </button>
                    <button class="hea-product-detail-tab-btn nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">HƯỚNG DẪN SỬ DỤNG
                    </button>
                    <button class="hea-product-detail-tab-btn nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                            aria-selected="false">REVIEW TỪ KOL
                    </button>
                    <button class="hea-product-detail-tab-btn nav-link" id="nav-desc-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-desc" type="button" role="tab" aria-controls="nav-desc"
                            aria-selected="false">REVIEW TỪ KOL
                    </button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    @include('client.blocks.productContent.content')
                </div>
                <div class="tab-pane fade" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">4</div>
            </div>

            <div style="margin-top: 48px">
                <h2 class="hea-product-outstanding-card-title-main hea-product-relavent-card-title-main">SẢN PHẨM LIÊN QUAN</h2>
                <div class="hea-product-relavent-card-container">
                    @foreach ($otherListProductByCategory[0] as $item)
                    <div class="card hea-product-outstanding-card" style="text-decoration: none">
                        <img class="card-img-top hea-product-outstanding-image" src="{{$item->image}}" alt="Card image cap">
                        <div class="card-body hea-product-outstanding-card-body">
                            <h5 class="card-title hea-product-outstanding-card-title">{{$item->label}}</h5>
                            <div>
                                <p class="card-text hea-product-outstanding-price">{{$item->realPrice}}đ</p>
                                <p class="card-text hea-product-outstanding-saleoff">{{$item->price}}đ</p>
                                <button type="submit" class="hea-product-outstanding-btn">
                                    <i class="fas fa-shopping-cart hea-product-outstanding-icon-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
    <div class="hea-product-detail-sidebar">
        <h2 class="hea-product-outstanding-card-title-main">SẢN PHẨM NÔI BẬT</h2>
        @foreach($otherListProductByCategory[1] as $item)
        <div class="card hea-product-outstanding-card">
            <div style="text-decoration: none">
                <img class="card-img-top hea-product-outstanding-image"
                     src="{{$item->image}}" alt="Card image cap">
                <div class="card-body hea-product-outstanding-card-body">
                    <h5 class="card-title hea-product-outstanding-card-title">{{$item->label}}</h5>
                    <div>
                        <p class="card-text hea-product-outstanding-price">{{$item->realPrice}}đ</p>
                        <p class="card-text hea-product-outstanding-saleoff">{{$item->price}}đ</p>
                        <button href="#" class="hea-product-outstanding-btn"><i
                                class="fas fa-shopping-cart hea-product-outstanding-icon-cart"></i></button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<script>

    let input=document.getElementById("inputCounter")
    const currentQuantity = parseInt(input.innerHTML);
    function increase(){
        input.value=eval(input.value)+1
    }
    function decrease(){
        if(currentQuantity > 1){
            input.value=eval(input.value)-1
        }
    }
</script>

@endsection
