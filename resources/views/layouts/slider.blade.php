<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the Document</title>
    <link rel="stylesheet" href="{{asset('css/lightslider.css')}}">
    <script type="text/javascript" src="{{asset('js/Jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/lightslider.js')}}"></script>
    <style>
        .hea-flash-product-item{
            width: 305px !important;
            height: 476px;
            padding: 24px;
            border: 1px solid #CDCDCD;
            box-sizing: border-box;
            margin: 0 16px;
        }
        .hea-flash-product-image{
            width: 257px;
            height: 257px;
            position: relative;
        }
        .hea-flash-product-title{
            font-weight: 600;
            font-size: 20px;
            margin: 24px 0 8px 0;
        }
        .hea-flash-product-body{
            padding: 0 !important;
        }
        .hea-flash-product-body > div{
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 30px;
        }
        .hea-flash-product-price{
            font-weight: 600;
            font-size: 18px;
            color: var(--third-color);
            margin: 0px;
        }
        .hea-flash-product-saleoff{
            font-weight: 500;
            font-size: 20px;
            text-decoration-line: line-through;
            color: rgba(30, 30, 30, 0.5);
        }
        .hea-flash-product-list{
            display: flex;
            justify-content: center;
            margin-top: 24px;
            margin-bottom: 116px;
        }
        .hea-flash-product-saleoff-rate{
            position: absolute;
            top: 0px;
            right: 0px;
            width: 71px;
            height: 34px;
            background: #D35400;
            border-radius: 0px 8.75px 0px 8.75px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 20px;
            color: #F8F8F8;
        }
        .hea-flash-product-icon-start{
            color: #FFC700 !important;
        }






        .hea-flash-product-catagory{
            width: 100%;
            height: 109px;
            background: #F1EEE6;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-right: 24px;
            padding-left: 27px;
        }
        .hea-flash-product-catagory-btn{
            width: 223px;
            height: 65px;
            background: #924C32 !important;
            border-radius: 10px;
            font-weight: 600;
            font-size: 24px !important;
        }
        .hea-flash-product-catagory-btn > i{
            margin-left: 14px;
        }
        .hea-flash-product-catagory-title{
            font-weight: 700;
            font-size: 48px;
            color: #924C32;
            margin-top: 59px;
        }
        .hea-flash-product-catagory-title > i{
            margin-right: 25px;
        }

        .hea-flash-product-catagory-container{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .hea-flash-product-icon-start{
            font-size: 16px;
            width: 20px;
            height: 20px;
            padding: 0px;
        }
        .hea-flash-product-catagory{
            margin-top: 59px;
            margin-bottom: 24px;
        }
        .hea-flash-product-banner{
            margin-top: 116px;
            margin-bottom: -85px;
        }
        .container{
            display: flex;
            width: 80%;
            overflow-x: hidden ;
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
            color:#482619;
            text-align: center;
            font-size: 32px;
        }
        .hea-material-item2{
            background: #F4AB5D;
        }
        .hea-material-item3{
            background: #D3CAE9;
        }.hea-material-item4{
            background: #85A15F;
        }


    </style>

</head>
<body>
<div class="container">
    <div class="hea-material-text">
        <h3 class="hea-material-title">100% Minh bạch nguyên liệu</h3>
        <p class="hea-material-desc">Sản phẩm an LÀNH - Con người chân THẬT</p>
        <button class="hea-material-btn">Xem thêm</button>
    </div>
    <ul id="autoWidth" class="cs-hidden">
        <li class="item-a">
            <div class="card hea-material-item hea-material-item1">
                    <img src="{{asset('assets/clients/images/bacha.png')}}" class="card-img-top img-fluid hea-flash-product-image" alt="...">
                    <h3>BẠC HÀ</h3>
            </div>
        </li>
        <li class="item-a">
            <div class="card hea-material-item hea-material-item2">
                <h3>CAM</h3>
                <img src="{{asset('assets/clients/images/cam.png')}}" class="card-img-top img-fluid hea-flash-product-image" alt="...">
            </div>
        </li>
        <li class="item-a">
            <div class="card hea-material-item hea-material-item3">

                    <img src="{{asset('assets/clients/images/oaihuong.png')}}" class="card-img-top img-fluid hea-flash-product-image" alt="...">
                    <h3>OẢI HƯƠNG</h3>

            </div>
        </li>
        <li class="item-a">
            <div class="card hea-material-item hea-material-item4">
                    <img src="{{asset('assets/clients/images/xa.png')}}" class="card-img-top img-fluid hea-flash-product-image" alt="...">
            </div>
        </li>
    </ul>


</div>
</body>

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
