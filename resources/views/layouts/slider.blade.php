    <style>

        .hea-material-container{
            display: flex;
            width: 80%;
            height: 780px;
            overflow-x: hidden ;
            margin-top: 100px;
        }
        .hea-material-text{
            width: 54%;
            margin-right: 74px;

        }
        .hea-material-title{
            color: #924C32;
            font-size: 46px;
            margin-bottom: 17px;
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
        }
        .hea-material-item{
            width: 372px;
            height: 515px;
            border-radius: 11px;
            background: #C6E4C1;
            text-align: center;
        }
        .hea-material-item >h3{

        }


        .hea-material-item3{
            background: #D3CAE9;
        }.hea-material-item4{
             background: #85A15F;
         }
        .item-a{
            position: relative;
            height: 627px;
            display: flex;
            align-items: center;
        }
        .hea-material-item{
            position: relative;
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
        .hea-material-item{
            display: flex;
            align-items: end;
            padding: 0 16px;
        }
        .hea-material-item2,
        .hea-material-item4{
            align-items: start;
        }
        .hea-material-item2 >div,
        .hea-material-item4 >div{
            padding-top: 20%;
        }

    </style>
<div class="hea-material-container">
    <div class="hea-material-text">
        <h3 class="hea-material-title">100% Minh bạch nguyên liệu</h3>
        <p class="hea-material-desc">Sản phẩm an LÀNH - Con người chân THẬT</p>
        <button class="hea-material-btn">Xem thêm</button>
    </div>
    <ul id="autoWidth" class="cs-hidden">
        <li class="item-a item-a1">
            <div class="card hea-material-item hea-material-item1">
                <div>
                    <img src="{{asset('assets/clients/images/bacha.png')}}" class="hea-material-image1 img-fluid" alt="...">
                    <h3>BẠC HÀ</h3>
                    <p>“Lá Bạc hà được sử dụng trong các sản phẩm mỹ phẩm như: cao dược liệu để gội đầu, lá tắm cho trẻ em, nước súc miệng..."</p>
                </div>
            </div>
        </li>
        <li class="item-a item-a2 ">
            <div class="card hea-material-item hea-material-item2">
                <div>
                    <img src="{{asset('assets/clients/images/cam1.png')}}" class="hea-material-image2 img-fluid" alt="...">
                    <h3>CAM HƯƠNG</h3>
                    <p>“Lá Bạc hà được sử dụng trong các sản phẩm mỹ phẩm như: cao dược liệu để gội đầu, lá tắm cho trẻ em, nước súc miệng..."</p>
                </div>
            </div>
        </li>
        <li class="item-a item-a3 ">
            <div class="card hea-material-item hea-material-item3">
                <div>
                    <img src="{{asset('assets/clients/images/oaihuong.png')}}" class="hea-material-image3 img-fluid" alt="...">
                    <h3>OẢI HƯƠNG</h3>
                    <p>“Lá Bạc hà được sử dụng trong các sản phẩm mỹ phẩm như: cao dược liệu để gội đầu, lá tắm cho trẻ em, nước súc miệng..."</p>
                </div>
            </div>
        </li>
        <li class="item-a item-a4">
            <div class="card hea-material-item hea-material-item4">
               <div>
                   <img src="{{asset('assets/clients/images/xa.png')}}" class="hea-material-image4 img-fluid" alt="...">
                   <h3>XẢ CHANH</h3>
                   <p>“Lá Bạc hà được sử dụng trong các sản phẩm mỹ phẩm như: cao dược liệu để gội đầu, lá tắm cho trẻ em, nước súc miệng..."</p>
               </div>
            </div>
        </li>
    </ul>
</div>
<script>
    $(document).ready(function() {
        $('#autoWidth').lightSlider({
            autoWidth:true,
            onSliderLoad: function() {
                $('.autoWidth').removeClass('cS-hidden');
            }
        });
    });
</script>
