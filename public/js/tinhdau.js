
$(document).ready(function() {
    $('.autoWidth').lightSlider({
        autoWidth:true,
        onSliderLoad: function() {
            $('.autoWidth').removeClass('cS-hidden');
        }
    });
});
//TODO:Xử lí toast
const toast = document.querySelector('.toast');
const cover = document.querySelector('.toast-cover');

function handleToastButtonClick() {
    toast.classList.toggle('show');
    setTimeout(function() {
        toast.classList.remove('show');
    }, 2000);
}

function handleAddProduct(id) {
    let data = {
        'data': [{
            'attributes': {
                'product.id': id,
                'quantity': 1,
            }
        }]
    };
    let content = $("meta[name=csrf-token]").attr("content");
    let url = '/jsonapi/basket?id=default&related=product&_token=' + content;
    $.ajax({
        url: url,
        method: "POST",
        dataType: "json",
        data: JSON.stringify(data)
    }).done( function( result ) {
        console.log( result );
    });
}
