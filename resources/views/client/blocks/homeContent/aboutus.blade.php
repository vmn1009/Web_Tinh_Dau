<style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap');


    @media (max-width: 1919px) {
        .hea-about-us-sign{
            font-size: 110px;
        }
    }
    @media (max-width: 1750px) {
        .hea-about-us-sign{
            font-size: 90px;
        }
        .hea-about-us-decs{
            font-size: 22px;
        }
        .hea-about-us-container > span{

        }
    }

    .hea-about-us-btn{
        font-family: 'Nunito', sans-serif;
    }

    .hea-material-container{
        display: flex;
        width: 100%;
        height: auto;
        overflow-x: hidden ;
        margin-top: 100px;
        align-items: center;
    }
    .hea-material-text{
        width: 32%;
        margin-right: 74px;
    }
    .hea-material-title{
        color: #924C32;
        font-size: 46px;
        margin-bottom: 17px;
        font-weight: 700;
    }
    .hea-material-btn{
        border-radius: 10px;
        background: #924C32;
        display: inline-flex;
        padding: 16px 44px;
        align-items: center;
        gap: 12px;
        outline: none;
        border: none;
        font-size: 24px;
        color: white;
        float: right;
    }

    .hea-material-desc{
        font-size: 20px;
        font-weight: 500;
    }
    .hea-material-item{
        width: 372px;
        height: 515px;
        border-radius: 11px;
        background: #C6E4C1;
        text-align: center;
    }
    .hea-material-item3{
        background: #D3CAE9;
    }.hea-material-item4{
         background: #85A15F;
     }
    .hea-material-parent{
        position: relative;
        height: 627px;
        display: flex;
        align-items: center;
    }
    .hea-material-item{
        position: relative;
    }
    .hea-material-item{
        display: flex;
        padding: 0 16px;
    }
    .hea-material-image1,
    .hea-material-image3{
        position: absolute;
        top: -10%;
        left: 50%;
        transform: translateX(-50%);
    }
    .hea-material-image2,
    .hea-material-image4{
        position: absolute;
        bottom: -10%;
        left: 50%;
        transform: translateX(-50%);
        align-items: start;
    }
    .hea-material-item2{
        background: #F4AB5D;
    }
    .hea-material-item >div>h3{
        color:#482619;
        text-align: center;
        font-size: 32px;
        border-bottom: 3px solid #AFC9AB;
        display: block;
        width: 80%;
        padding: 0 8px 20px;
        margin: 30px auto;
    }
    .hea-material-item >div>p{
        font-size: 20px;
        line-height: 2;
    }
    .hea-material-item2 >div,
    .hea-material-item4 >div{
        padding-top: 20%;
    }
    .hea-material-slider{
        width: 100%;
    }
    .hea-about-us-sign{
        font-family: "Adventures Unlimited Script";
        font-style: italic;
        font-weight: 400;
        font-size: 120px;
        color: #924C32;
    }
    .hea-about-us-button{
        width: 201px;
        height:65px;
        font-size: 24px;
        background: #924C32;
        color: white;
    }
</style>
<section class="hea-about-us">
        <img src="{{asset('assets/clients/images/aboutus1.png')}}" class="img-fluid hea-about-us-image" alt="Image 1">
        <div class="card text-right" style="width: 38%; border: none">
            <div class="card-body ">
                <h2 class="card-title text-left" style="font-size: 48px; font-weight: 700; margin-bottom: 35px">Câu chuyện của chúng mình</h2>
                <div style="display: flex">
                    <span style="font-size: 165px;color: #924C32; font-weight: 400; position: absolute; top: 5%; left: 0">“</span>
                    <p style="font-size: 20px; font-weight: 500; padding-left: 74px" class="card-text text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <h1 class="card-title hea-about-us-sign" style="">hea garden</h1>
                <button href="#" class="btn hea-about-us-button">xem thêm</button>
            </div>
        </div>
</section>

<section>
    <div class="hea-material-container">
        <div class="hea-material-text">
            <h3 class="hea-material-title">100% Minh bạch nguyên liệu</h3>
            <p class="hea-material-desc">Sản phẩm an LÀNH - Con người chân THẬT</p>
            <button class="hea-material-btn">Xem thêm</button>

        </div>
        <ul id="autoWidthMaterial" class="cs-hidden hea-material-slider">
            <li class="hea-material-parent item-a1" >
                <div class=" hea-material-item hea-material-item1" style="align-items: end !important;">
                    <div>
                        <img src="{{asset('assets/clients/images/bacha.png')}}" class="hea-material-image1 img-fluid" alt="...">
                        <h3>BẠC HÀ</h3>
                        <p>“Lá Bạc hà được sử dụng trong các sản phẩm mỹ phẩm như: cao dược liệu để gội đầu, lá tắm cho trẻ em, nước súc miệng..."</p>
                    </div>
                </div>
            </li>
            <li class="hea-material-parent item-a2 ">
                <div class=" hea-material-item hea-material-item2">
                    <div>
                        <img src="{{asset('assets/clients/images/cam1.png')}}" class="hea-material-image2 img-fluid" alt="...">
                        <h3>CAM HƯƠNG</h3>
                        <p>“Lá Bạc hà được sử dụng trong các sản phẩm mỹ phẩm như: cao dược liệu để gội đầu, lá tắm cho trẻ em, nước súc miệng..."</p>
                    </div>
                </div>
            </li>
            <li class="hea-material-parent item-a3 ">
                <div class=" hea-material-item hea-material-item3" style="align-items: end !important;">
                    <div>
                        <img src="{{asset('assets/clients/images/oaihuong.png')}}" class="hea-material-image3 img-fluid" alt="...">
                        <h3>OẢI HƯƠNG</h3>
                        <p>“Lá Bạc hà được sử dụng trong các sản phẩm mỹ phẩm như: cao dược liệu để gội đầu, lá tắm cho trẻ em, nước súc miệng..."</p>
                    </div>
                </div>
            </li>
            <li class="hea-material-parent item-a4">
                <div class=" hea-material-item hea-material-item4">
                    <div>
                        <img src="{{asset('assets/clients/images/xa.png')}}" class="hea-material-image4 img-fluid" alt="...">
                        <h3>XẢ CHANH</h3>
                        <p>“Lá Bạc hà được sử dụng trong các sản phẩm mỹ phẩm như: cao dược liệu để gội đầu, lá tắm cho trẻ em, nước súc miệng..."</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        var multipleCardCarousel = document.querySelector(
            "#carouselExampleControls"
        );
        if (window.matchMedia("(min-width: 576px)").matches) {
            var carousel = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
                wrap: false
            });
            var carouselWidth = $(".carousel-inner")[0].scrollWidth;
            var cardWidth = $(".carousel-item").width();
            var scrollPosition = 0;
            $("#carouselExampleControls .carousel-control-next").on("click", function () {
                if (scrollPosition < carouselWidth - cardWidth * 3) {
                    scrollPosition += cardWidth;
                    $("#carouselExampleControls .carousel-inner").animate(
                        { scrollLeft: scrollPosition },
                        600
                    );
                }
            });
            $("#carouselExampleControls .carousel-control-prev").on("click", function () {
                if (scrollPosition > 1) {
                    scrollPosition -= cardWidth;
                    $("#carouselExampleControls .carousel-inner").animate(
                        { scrollLeft: scrollPosition },
                        600
                    );
                }
            });
        } else {
            $(multipleCardCarousel).addClass("slide");
        }
    });
    $(document).ready(function() {
        $('#autoWidthMaterial').lightSlider({
            autoWidth:true,
            onSliderLoad: function() {
                $('.autoWidth').removeClass('cS-hidden');
            }
        });
    });
</script>
