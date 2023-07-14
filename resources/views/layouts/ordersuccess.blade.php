@extends('client.blocks.master')
@section('body')
<style>
    .hea-product-order-success{
        margin-top: 73px;
    }
    .hea-product-order-success-image{
        max-width: 37%;
        max-height: 40%;
        display: block;
        margin: 0 auto;
    }
    .hea-product-order-success-btn{

    }
    .hea-product-order-success-title{
        color:  #613422;
        text-align: center;
        font-size: 24px;
        font-weight: 700;
    }
    .hea-product-order-success-btn{
        border-radius: 12px;
        background: #924C32;
        width: 353px;
        height: 64px;
        border: none;
        outline: none;
        color: white;
        display: block;
        margin: 0 auto;
        font-size: 20px;

    }
</style>


<div class="hea-product-order-success">
    <img src="{{asset('assets/clients/images/orderSuccess.png')}}" class="img-fluid hea-product-order-success-image" alt="...">
    <p class="hea-product-order-success-title">Cảm ơn bạn đã mua hàng từ Hea Garden!</p>
    <button type="button" class="btn hea-product-order-success-btn" onclick=" window.location='/home'">TIẾP TỤC MUA HÀNG</button>
</div>


@endsection
