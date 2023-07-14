<style>
    .hea-product-search-result-content{
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 32px;
    }
    .hea-product-search-result{
        margin-top: 44px;
    }
    .hea-product-search-title{
        color: #924C32;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
    }
    .hea-product-search-description{
        color: #482619;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        margin-top: 14px;
        margin-bottom: 44px
    }
    .hea-product-result-item{
        margin-bottom: 32px;
    }
</style>

@extends('client.blocks.master')

@section('body')

<main style="padding: 0 97px">
    <section class="hea-product-search-result">
        <div class="hea-product-search-title">SẢN PHẨM</div>
        <?php
        echo '<div class="hea-product-search-description">Hea đã tìm thấy ' . count($dataSearch) . ' sản phẩm theo tiêu chí của bạn: <span>"tinh dầu"</span></div>';
        ?>
        <div class="hea-product-search-result-content">
            @foreach($dataSearch as $item)
            <div class="card hea-product-outstanding-card hea-product-result-item">
                <a href="/product-detail/{{$item->url}}" style="text-decoration: none">
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
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <section class="hea-product-search-posts">
        // TODO: làm thêm phần bài viết
    </section>
</main>

@endsection
