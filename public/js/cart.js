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
