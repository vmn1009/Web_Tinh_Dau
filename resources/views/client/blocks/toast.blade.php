<style>
    #liveToast{
        position: fixed;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        transition: 0.3s linear;
        background-color: rgba(0, 0, 0, 0.5) !important;
        z-index: 99999999 !important;
    }
    .toast-container{
        max-width: 80%;
        max-height: 31%;
        background-color: white;
    }
    .toast-cover{
        position: fixed;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        transition: 0.3s linear;
        background-color: rgba(0, 0, 0, 0.5) !important;
        z-index: 999 !important;

    }
</style>
    <toasty id="liveToast" class="toast overlay" role="alert">
        <div class="toast-cover"></div>
            <div class="toast-body">
                <button type="button" class="btn-close toast-icon-close" data-bs-dismiss="toast" aria-label="Close"></button>
                <p class="toast-text">Đã thêm <span>1</span> sản phẩm vào giỏ hàng</p>
                <div class="toast-content">
                    <img class="toast-image img-fluid" src="{{asset('assets/clients/images/tinhdau1.png')}}" alt="Card image cap">
                    <div>
                        <p class="toast-label">Tinh Dầu Phối Hương Soothing Rain Thơm Phòng </p>
                        <span class="toast-price">150.000đ</span>
                    </div>
                </div>
                <button id="toast-btn" class="  btn hea-product-detail-btn " id="liveToastBtn" style="align-items: center; background: #924C32;">Thanh toán
                </button>
            </div>
    </toasty>
