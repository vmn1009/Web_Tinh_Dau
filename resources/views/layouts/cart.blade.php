@extends('client.blocks.master')

@section('body')
<style>
    .hea-product-cart-title{
        color: #482619;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 24px;
    }
    .hea-product-cart-list-title{
        color:  #482619;
        font-size: 24px;
        font-weight: 700;
    }
    .hea-product-cart-container{
        margin-top: 62px;
        display: flex;
    }
    .hea-product-cart-result{
        width: 786px;
    }
    .hea-product-cart-desc{
        color: #504C3D;
        font-size: 13px;
        font-style: italic;
        font-weight: 400;
    }
    input{
        width: 405px;
        height: 64px;
        border-radius: 12px;
        border: 1px solid #CDCDCD;
    }
    .hea-product-cart-posts{
        width:842px ;
        /*max-width: 100%;*/
        height: auto;
        padding: 44px;
        border-radius: 24px;
        background: #FFF;
        margin-left: 64px;
        box-sizing: border-box;
        box-shadow: 0px 3px 8px 0px rgba(146, 76, 50, 0.22);
    }
    .hea-product-cart-content{
        display: flex;
        justify-content: space-between;
    }
    .hea-product-cart-card{
        max-width: 100%;
        height: auto;
        padding: 24px 16px;
        border: none;
        border-bottom: 1px solid #CDCDCD;

    }
    .hea-product-cart-content-cost-item{
        display: flex;
        justify-content: space-between;
        padding-left: 0;
        color: #613422;
        font-size: 20px;
        font-weight: 700;
    }
    .hea-product-cart-image{
        width: 112px;
        height: 112px;
        border-radius: 8px;
    }
    .hea-product-cart-icon{
        padding-left: 23px;
        font-size: 24px;
        cursor: pointer;

    }
    .hea-product-cart-title{
        font-size: 20px;
        font-weight: 700;
        color: #482619;
    }
    .hea-product-cart-content:last-child{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .hea-product-cart-content:last-child > div{
        display: flex;
        gap: 26px;
        align-items: center;
    }
    .hea-product-cart-counter{
        width: 87.405px;
        height: 42px;
    }
    .hea-product-cart-counter-icon{
        font-size: 14px;
    }
    .hea-product-cart-counting{
        font-size: 20px !important;
    }
    .hea-product-cart-realPrice, .hea-product-cart-totalPrice{
        color: #613422;
        font-size: 20px;
        font-weight: 500;
    }
    .hea-product-cart-totalPrice{
        font-size: 24px;
    }
    .hea-product-cart-input-code-discount{
        width: 594px;
        height: 60px;
        border-radius: 6px;
        padding: 0 10px;
        border: none;
        outline: none;
    }
    .hea-product-cart-button-apply{
        width: 128px;
        height: 59px;
        border-radius: 10px;
        border: none;
        background: #924C32;
        font-size: 20px;
        font-weight: 700;
        color: #f8fafc;
        margin-left: 32px;
    }
    .hea-product-cart-input-group{
        display: flex;
        justify-content: space-between;
    }
    .hea-product-cart-content-cost{
        padding: 18px 0 0;
        border-bottom: 1px solid #CDCDCD;
    }
    .hea-product-cart-content-cost-total{
        margin-top: 28px;
    }
    .hea-product-cart-content-cost-total > div{
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: #924C32;
        font-size: 40px;
        font-weight: 700;
    }
    .hea-product-cart-button-payment{
        width: 100%;
        height: 69%;
        border-radius: 24px;
        background: #924C32;
        color: #F8F8F8;
        text-align: center;
        font-size: 32px;
        font-weight: 700;
        border: none;
        margin-top: 26px;
    }

</style>
<main style="padding: 0 97px" class="hea-product-cart-container">
    <section class="hea-product-cart-result">
        <h3 class="hea-product-cart-title">Thông tin nhận hàng</h3>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Họ và Tên *</label>
                <input type="text" class="form-control" id="inputFullName" placeholder="Nhập họ và tên">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Số điện thoại *</label>
                <input type="text" class="form-control" id="inputPassword" placeholder="Nhập số điện thoại">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Tỉnh/thành phố *</label>
                <select id="selectCity" class="form-select">
                    <option selected>Chọn tỉnh/thành phố </option>
                    <option>Hồ Chí Minh</option>
                    <option>Ninh Thuận</option>
                    <option>Tiền Giang</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Quận/huyện *</label>
                <select id="selectDistrict" class="form-select">
                    <option selected>Chọn quận/huyện</option>
                    <option>Ninh Sơn</option>
                    <option>Ninh Hải</option>
                    <option>Bác Ái</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Phường/Xã *</label>
                <select id="selectWard" class="form-select">
                    <option selected>Chọn phường/xã</option>
                    <option>Ninh Sơn</option>
                    <option>Ninh Hải</option>
                    <option>Bác Ái</option>
                </select>
            </div>

            <div class="col-12">
                <label for="inputAddress2" class="form-label">Địa chỉ *</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Địa chỉ">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Ghi chú</label>
                <input type="text" class="form-control" id="inputTakeNote" placeholder="Ghi chú thêm (ví dụ giao giờ hành chính)">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Chọn hình thức thanh toán</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="gridCheck" name="option">Thanh toán khi giao hàng (COD)
                    <label class="form-check-label" for="gridCheck">

                    </label>
                </div>
            </div>
        </form>
    </section>
    <section class="card hea-product-cart-posts">
        <h3 class="hea-product-cart-list-title">Chi tiết đơn hàng</h3>
        <label for="inputAddress2" class="form-label" style="color:#482619;font-size: 20px;font-weight: 700;margin-top: 40px">Mã giảm giá</label>
        <div class="hea-product-cart-input-group">
            <input type="text" class="hea-product-cart-input-code-discount">
            <button class="hea-product-cart-button-apply" type="button" id="button-addon2">Áp dụng</button>
        </div>
        <span class="hea-product-cart-desc">Thêm dấu phẩy giữa các mã để sử dụng nhiều mã</span>
        <div class="hea-product-cart-content-cost">
            <ul class="hea-product-cart-content-cost-item">
                <li>Tạm tính: </li>
                <li>1.000.000đ</li>
            </ul>
            <ul class="hea-product-cart-content-cost-item">
                <li>Giảm giá: </li>
                <li>0đ</li>
            </ul>
            <ul class="hea-product-cart-content-cost-item">
                <li>Phí vận chuyển: </li>
                <li>0đ</li>
            </ul>
        </div>
        <div class="hea-product-cart-content-cost-total">
            <div>
                <span>Tổng </span>
                <span>1.000.000đ</span>
            </div>
            <button class="btn hea-product-cart-button-payment submitButton" onclick="getInfo();createOrder()">Thanh toán</button>
        </div>
    </section>
</main>
<script>
    let content = $("meta[name=csrf-token]").attr("content");
    // Viết logic hiển thị danh sách của giỏ hàng
    fetch('https://www.heagarden.com/jsonapi/basket?id=default')
        .then(response => response.json())
        .then(data => {
            if (data && data.included) {
                let responseData = data.included;
                console.log(responseData);
                let html = "";
                responseData.forEach(function(item) {
                    console.log();
                    if (item.type === 'basket.product') {
                        let totalPrice = parseFloat(item.attributes['order.product.price']) * parseFloat(item.attributes['order.product.quantity']);
                        html += `
                    <div class="card hea-product-cart-card col">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="https://www.heagarden.com/aimeos/${item.attributes['order.product.mediaurl']}" class="hea-product-cart-image img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <div class="hea-product-cart-content">
                                        <h5 class="card-title hea-product-cart-title">${item.attributes['order.product.name']}</h5>
                                        <i class="hea-product-cart-icon fa-solid fa-trash-can" onclick="deleteParent(this, ${item.id})"></i>
                                    </div>
                                    <div class="hea-product-cart-content">
                                        <div>
                                            <span class="card-text hea-product-cart-realPrice">${item.attributes['order.product.price']}đ</span>
                                            <div class="hea-product-detail-count-container hea-product-cart-counter">
                                                <button class="hea-product-detail-count-decre hea-product-detail-count-btn" onclick="decrement(${item.id}, ${item.id})">
                                                    <i class="hea-product-cart-counter-icon fas fa-minus"></i>
                                                </button>
                                                <div class="hea-product-cart-counting" id="${item.id}">${item.attributes['order.product.quantity']}</div>
                                                <button class="hea-product-detail-count-incre hea-product-detail-count-btn" onclick="increment(${item.id},${item.id})">
                                                    <i class="hea-product-cart-counter-icon fa-regular fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <span class="card-text hea-product-cart-totalPrice" id="total-price-${item.id}">${totalPrice}.000đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                    }
                });
                const cartListTitle = document.querySelector('.hea-product-cart-list-title');
                if (cartListTitle) {
                    cartListTitle.insertAdjacentHTML('afterend', html);
                }
            }
        })
        .catch(error => {
            console.error('Lỗi:', error);
        });
    function createOrder(){
        let url = '/jsonapi/basket?_token='+content;
        $.ajax({
            url: url,
            method: "POST",
            dataType: "json"
        }).done( function( result ) {
            console.log( result );
        });
    }
    function deleteAllCar(){
        let url = '/jsonapi/basket?id=default&related=address&relatedid=payment&_token=' + content;
        $.ajax({
            url: url,
            method: "DELETE",
            dataType: "json"
        }).done( function( result ) {

            console.log( result );
        });
    }

    function deleteParent(element, id) {
        const parent = element.closest('.hea-product-cart-card');
        parent.remove();
        let url = '/jsonapi/basket?id=default&related=product&relatedid=' + id + '&_token=' + content;
        $.ajax({
            url: url,
            method: "DELETE",
            dataType: "json"
        }).done(function(result) {
        });
    }
    function getInfo(){
        $.ajax({
            url: "/jsonapi/basket?id=default&related=address&relatedid=payment&_token="+content,
            method: "DELETE",
            dataType: "json"
        }).done( function( result ) {
            console.log( result );
        });
    }
    function getInfo() {
        const fullName = document.getElementById('inputFullName').value;
        const phoneNumber = document.getElementById('inputPassword').value;
        const email = document.getElementById('inputEmail').value;
        let item1 = document.getElementById("selectCity");
        let city = item1.options[item1.selectedIndex].text;
        let item2 = document.getElementById("selectDistrict");
        let district = item2.options[item2.selectedIndex].text;
        const item3 = document.getElementById('selectWard');
        const ward = item3.options[item3.selectedIndex].text;
        const address = document.getElementById('inputAddress').value;
        const note = document.getElementById('inputTakeNote').value;
        const radioButtons = document.getElementsByName('option');

        let params = {"data": [{
                "id": "payment",
                "attributes": {
                    "order.address.firstname": fullName,
                    "order.address.address1": district,
                    "order.address.address2": ward,
                    "order.address.address3": address,
                    "order.address.city": city,
                    "order.address.telephone": phoneNumber,
                    "order.address.email": email,
                }
            }]};
        $.ajax({
            url: "/jsonapi/basket?id=default&related=address&_token="+content,
            method: "POST",
            dataType: "json",
            data: JSON.stringify(params)
        }).done( function( result ) {
            console.log("Hello World");
            console.log(result);
        });

    }
    function redirectToPage() {
        window.location.href = '/order-success';
    }

    function increment(id, productId) {
        const quantityElement = document.getElementById(id);
        const currentQuantity = parseInt(quantityElement.innerHTML);
        const newQuantity = currentQuantity + 1;
        quantityElement.innerHTML = newQuantity;
        handleChangeQuantity(newQuantity, productId);
    }
    function decrement(id, productId) {
        const quantityElement = document.getElementById(id);
        const currentQuantity = parseInt(quantityElement.innerHTML);
        if(currentQuantity > 1){
            const newQuantity = currentQuantity - 1;
            quantityElement.innerHTML = newQuantity;
            handleChangeQuantity(newQuantity, productId);
        }
    }
    function handleChangeQuantity(quantity, id){
        const params = {
            'data': {
                'attributes': {
                    'quantity': quantity
                }
            }
        };
        let url ="/jsonapi/basket?id=default&related=product&relatedid="+id+"&_token="+content;
        $.ajax({
            url: url,
            method: "PATCH",
            dataType: "json",
            data: JSON.stringify(params)
        }).done( function( result ) {
                let responseData = result.included;
                for (let i = 0; i < responseData.length; i++) {
                    if (responseData[i].type === 'basket.product' && responseData[i].id === id) {
                            let totalPrice = parseFloat(responseData[i].attributes['order.product.price']) * parseFloat(responseData[i].attributes['order.product.quantity']);
                            let totalPriceElement = document.querySelector(`#total-price-${id}`);
                            totalPriceElement.textContent = totalPrice.toFixed(3) + "đ";
                        }
                    }
                }
            );
    }
</script>
@endsection


