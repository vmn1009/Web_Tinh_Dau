<style>
@media (max-width: 1750px) {
    .hea-infor-span1{
        font-size: 17px;
    }
    .hea-infor-row{
        padding: 0 20px;
    }
}
.hea-flash-product-catagory-title{
    margin: 0!important;
}
.hea-flash-product-catagory-btn{
    color: white;
}
.hea-flash-product-item{
    border-radius: 1px solid 
}
.hea-flash-product-item:hover{
    box-shadow: 2px 2px 18px rgba(0,0,0,0.10);
    transform: scale(1.008);
    transition: all 0.3s ease;
}
}
</style>
<div class="hea-infor">
    <div class="row ">
        <div class="col-md-3 hea-infor-container">
            <div class="row hea-infor-row ">
                <div class="col-md-3 hea-infor-image">
                    <!-- Hình ảnh 1 -->
                    <img src="{{asset('assets/clients/images/icon1.png')}}" alt="Hình ảnh 1" class="img-fluid">
                </div>
                <div class="col-md-9 hea-infor-content">
                    <span class="hea-infor-span1">Ship code toàn quốc</span>
                    <span class="hea-infor-span2">Thanh toán khi nhận hàng. Phí chỉ 20-25k</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 hea-infor-container">
            <div class="row hea-infor-row">
                <div class="col-md-3 hea-infor-image">
                    <!-- Hình ảnh 3 -->
                    <img src="{{asset('assets/clients/images/icon2.png')}}" alt="Hình ảnh 3" class="img-fluid">
                </div>
                <div class="col-md-9 hea-infor-content">
                    <span class="hea-infor-span1">Miễn phí đổi - trả</span>
                    <span class="hea-infor-span2">Đối với sản phẩm lỗi sản xuất hoặc vận chuyển</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 hea-infor-container">
            <div class="row hea-infor-row">
                <div class="col-md-3 hea-infor-image">
                    <!-- Hình ảnh 5 -->
                    <img src="{{asset('assets/clients/images/icon1.png')}}" alt="Hình ảnh 5" class="img-fluid">
                </div>
                <div class="col-md-9 hea-infor-content">
                    <span class="hea-infor-span1">Ưu tiên thành viên</span>
                    <span class="hea-infor-span2">Đăng kí thành viên nhân nhiều ưu đã lớn</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 hea-infor-container">
            <div class="row hea-infor-row">
                <div class="col-md-3 hea-infor-image">
                    <!-- Hình ảnh 7 -->
                    <img src="{{asset('assets/clients/images/icon3.png')}}" alt="Hình ảnh 7" class="img-fluid">
                </div>
                <div class="col-md-9 hea-infor-content">
                    <span class="hea-infor-span1">Ưu đãi combo</span>
                    <span class="hea-infor-span2">Mưua theo combo, càng mua càng rẻ</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="hea-flash-product-catagory">
        <p class="text-md hea-flash-product-catagory-title"><i class="x fa-sharp fa-solid fa-bolt"></i>Deal đang diễn ra</p>
        <button type="button" class="hea-flash-product-catagory-btn">Xem tất cả<i class="fas fa-arrow-right"></i>
        </button>
    </div>
    <div class="card-body  hea-flash-product-catagory-container">
        <ul id="autoWidth" class="cs-hidden">
            <!--1------------------------------>
            @foreach ($otherListProductByCategory[2] as $item)
            <li class="item-a hea-flash-product-item-product">
                <div class="card hea-flash-product-item">
                    <div class="position-relative">
                        <img src="{{$item->image}}" class="card-img-top img-fluid hea-flash-product-image" alt="...">
                        <span class="hea-flash-product-saleoff-rate">-20%</span>
                    </div>
                    <div class="card-body hea-flash-product-body">
                        <h5 class="card-title hea-flash-product-title">{{$item->label}}</h5>
                        <div>
                            <p class="card-text hea-flash-product-price">{{$item->realPrice}}đ</p>
                            <p class="card-text hea-flash-product-saleoff">{{$item->price}}đ</p>
                        </div>
                        <div>
                            <div style="display: flex">
                                <?php
                                for($i = 0; $i < 5; $i++){
                                    echo '<i class="fas fa-star hea-flash-product-icon-start"></i>';
                                }
                                ?>
                                <span class="hea-flash-product-catagory-amount">(90)</span>
                            </div>
                            <p style="margin: 0" class="hea-flash-product-sold-amount">Đã bán: 24</p>
                        </div>
                        <div class="progress" style="margin-top: 13px;position: relative; height: 20px; border-radius: 10px;">
                            <span style="font-weight: 600;font-size: 14px;color: #FEFBF4;position: absolute;top: 50%; left: 50%; transform: translate(-50%, -50%);" class="hea-flash-product-time-countdown">Còn 0 ngày 0:49:52</span>
                            <div class="progress-bar" role="progressbar" style="width: 75%; height: 100%; border-radius: 10px;background: #D35400;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
            <!--2------------------------------>
        </ul>
    </div>
    </div>
    <div class="hea-flash-product-banner">
        <img src="{{asset('assets/clients/images/banner1.png')}}" class="card-img-top " alt="...">
    </div>



<script>
    $(document).ready(function() {
        $('#autoWidth').lightSlider({
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            }
        });
    });
</script>
