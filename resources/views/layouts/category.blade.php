@extends('client.blocks.master')
@section('body')
<style>
    .hea-product{
        padding: 0px 97px;
        font-family: 'Nunito', sans-serif;
    }
    .hea-product-sidebar > h4{
        font-weight: 700;
        font-size: 24px;
    }

    .hea-sidebar-list-item{
        font-weight: 500;
        font-size: 20px;
        padding: 18px 0;
        border: none;
        border-bottom: 3px solid #F5EEE6;
        color: #916D60 !important;
    }
    .hea-sidebar-list-item:first-child{
        padding-top: 26px;
    }
    .hea-product-content{
        width: 82%;
        padding-right: 0;
        border-left: 2px solid #F5EEE6;
        display: block;
    }
    .hea-product-content >div{
        display: flex;
    }
    .hea-product-sidebar{
        width: 18%;
    }
    .hea-product-content > h1{
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        color: #924C32;
    }
    .hea-product-image{
        width: 268px;
        height: 268px;
    }
    .hea-product-card{
        padding: 24px 24px 0;
        width: 314px !important;
        height: 438px;
    }
    .hea-product-card-body{
        padding: 0px !important;
    }
    .hea-product-card-title{
        font-weight: 600;
        font-size: 20px;
    }
    .hea-new-product-card-child2, .hea-new-product-card-child1{
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        margin-top: 26px;
    }
    .hea-new-product-card-child1{
        color: #D35400;
        font-weight: 700;
        margin-bottom: 13px;
        padding-left: 0px;
        padding-right: 29px;

    }
    .hea-new-product-card-child2{
        text-decoration: line-through;
        color: rgba(30, 30, 30, 0.5);
        padding: 0 !important;
    }
    .hea-product-btn{
        width: 40px;
        height: 40px;
        right: 19px;
        top: 8px;
        background-color: var(--third-color);
        color: white;
    }
    .hea-product-card {
        margin-right: 32px;
        margin-bottom: 0 !important;
    }
    .hea-product-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .hea-product {
        margin-top: 40px;
    }

    .hea-category-card-body{
        width: 270px !important;
        padding: 0px;
        height: 100px;
    }
    .hea-category-card-body >div{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .hea-category-card-title{
        font-weight: 600;
        font-size: 20px;
        color: #1E1E1E;
        margin: 16px 0px 0px;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Số dòng tối đa hiển thị */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .hea-category-price{
        font-weight: 600;
        font-size: 18px;color: #D35400;
    }
    .hea-category-saleoff{
        font-weight: 500;
        font-size: 20px;
        text-decoration-line: line-through;
        color: rgba(30, 30, 30, 0.5);
    }
    .active{
        font-weight: bold;
        font-size: 20px;
        color: #924C32 !important;
    }
    .breadcrumb-item:first-child{
        font-weight: 500;
        font-size: 20px;
        color: #924C32;
    }
    .breadcrumb-item:first-child > a{
        text-decoration: none;
        font-weight: 500;
        font-size: 20px;
        color: #924C32;
    }
    .breadcrumb-item:first-child > a > i{
        margin-right:7px;
    }
    .hea-category-image{
        max-width: 268px;
    }
    .hea-category-card{
        max-width: 50%;
        max-height: auto;
        padding: 24px;
        margin: 0 18px 32px;
        border: 1px solid #CDCDCD;
        border-radius: 8px;
    }
    .hea-category-price, .hea-category-saleoff{
        padding: 0;
    }
    .hea-category-title{
    font-weight: 700;font-size: 48px;color: #924C32;
    }
    @media (max-width: 1750px) {
        .hea-category-title{
            font-size: 40px;
        }
        .hea-product-sidebar > h4{
            font-size: 22px;
        }
    }
    .hea-category-mobile{
        display: none;
    }
</style>

<div class="container-fluid hea-product hea-category-desktop">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i>Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
        </ol>
    </nav>
    <div class="row">
        <div class="hea-product-sidebar">
            <h4>Danh mục sản phẩm</h4>
            <ul class="list-group hea-sidebar-list-group">
                <?php
                foreach ($categoriesDetail as $item) {
                    echo '<a class="list-group-item hea-sidebar-list-item" href="' . $item->url . '">' . $item->label . '</a>';
                }
                ?>
            </ul>
        </div>
        <div class="hea-product-content ">
            <?php
            echo '<div class="hea-category-title">TINH DẦU</div>';
            echo '<div style="display: flex; flex-wrap: wrap">';
            foreach ($listProducts as $item) {
                echo '<div class="hea-category-card card" href="/product-detail/' . $item->url . '" style="text-decoration: none; color: black">';
                echo '<img src="' . $item->image . '" class="img-fluid card-img-top hea-category-image" alt="Image 1">';
                echo '<div class="card-body hea-category-card-body" style="max-width: 106%;">';
                echo '<p class="card-title hea-category-card-title">' . $item->label . '</p>';
                echo '<div class="" style="height: 50px; position: relative; padding-top: 13px;">';
                echo '<span class="col-5 hea-category-price">' . $item->realPrice . '</span>';
                echo '<span class="col-5 hea-category-saleoff">' . $item->price . '</span>';
                echo '<button class="btn hea-product-btn" onclick="handleToastButtonClick(); handleAddProduct(' . $item->id . ')" style="padding: 0;">';
                echo '<i class="fas fa-shopping-cart hea-new-category-cart" style="border: none; font-size: 20px;"></i>';
                echo '</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            echo '</div>';
            ?>
        </div>
    </div>
</div>


<div class="hea-category-mobile">
        <div class="product-grid">
            @foreach($listProducts as $item)
            <div class="product-box-responsive">
                <img src="{{ $item->image }}" class="img-fluid card-img-top hea-new-product-image" alt="...">
                <div class="card-body hea-new-product-body">
                    <h5 class="card-title hea-new-product-title">{{ $item->label }}</h5>
                    <div>
                        <div>
                            <p class="card-text hea-new-product-price">{{$item->realPrice }}đ</p>
                            <p class="card-text hea-new-product-saleoff">{{$item->price}}đ</p>
                        </div>
                        <a href="#" class="hea-new-product-btn"><i class="fas fa-shopping-cart hea-new-product-icon-cart"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
<script src="{{asset('js/tinhdau.js')}}"></script>
@endsection
