    <style>
        .hea-header-nav-link:hover{
            color: #924C32 !important;
        }
        /*.nav-link:focus{*/
        /*    color: #924C32 !important;*/
        /*    font-weight: 700 !important;*/
        /*}*/
        .hea-header-nav-link{
            color: #482619 !important;
            font-weight: 600;
            text-align: center;
        }
        .nav-item{
            font-family: 'Nunito', sans-serif;
        }
        .header{
            transition: top 0.3s ease;
        }
        .header.scrolling {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            animation: none;
        }
        .header > nav {

            background: #FEFBF4 !important;
            box-shadow: 0px 4px 15px 0px #0000001A;
            padding: 0 97px;
        }
        .searchResults {
            width: 100%;
            max-height: 400px;
            overflow: auto;
            border: 2px solid #dfdada;
            border-radius: 10px;
            padding: 15px;
            position: absolute;
            top: 58px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
            background-color: #f8fafc;
            display: none;
        }

        .hea-list-suggest-item {
            max-height: 400px;
            display: flex;
            margin-bottom: 16px;
        }

        .hea-list-suggest-image {
            width: 56px;
            height: 56px;
        }

        .hea-header-form {
            position: relative;
        }

        .hea-list-suggest-price,
        .hea-list-suggest-realPrice {
            font-size: 18px;
            margin: 0px;
        }
        .hea-header-container{
            background-color: white;
            z-index: 10 !important;
        }
        .hea-list-suggest-btn {
            width: 40px;
            height: 40px;
        }
        .hea-list-suggest-cart {
            font-size: 17px;
        }


        .hea-header-container-template2{
            background-color: white;
            z-index: 100;
        }

        .accordion-button{
            background-color: transparent !important;
            padding: 16px 0;
            color: #924C32 !important;
            font-size: 14px;
            font-weight: 600;
            border: none;
        }
        .accordion-button:focus{
            background-color: transparent;
            padding: 16px 0;
            outline: none;
            box-shadow: none;
        }
        .accordion-item{
            border: none;
        }
        .accordion-text-item{
            color: #924C32 !important;
            font-size: 12px;
            font-weight: 400;
        }
        .btn-close{
            color: #924C32 !important;
        }
        #navbarTogglerDemo04{
            padding: 16px;
        }
        .hea-header-navbar-logo-template2{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .navbar-toggler-icon{
            color: #924C32;
        }
        .navbar-toggler{
            border: none;
            padding: 0;
        }
        .show-pop-up{
            display: block !important;
        }
        .remove{
            display: none;
        }
        .navbar-container-template2{
            display: none;
        }
        .hea-list-suggest-title{
            font-size: 10px;
            font-weight: 600;
            margin-top: 3px;
        }
        .hea-list-suggest-price{
            font-size: 13px;
        }


    </style>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-container-template1">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="hea-header-navbar-logo navbar-brand" href="/home"><img src="https://www.heagarden.com/assets/clients/images/HEA_Logo.png" alt="Logo" class="hea-header-logo"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav hea-header-nav-list mr-auto">
                    <li class="nav-item hea-header-nav-item" onclick=" window.location='/home'">
                        <a class="nav-link hea-header-nav-link" >Trang chủ</a>
                    </li>
                    <li class="nav-item hea-header-nav-item" onclick=" window.location='/ve-chung-toi'">
                        <a class="nav-link hea-header-nav-link" >Về chúng tôi - Hea Garden</a>
                    </li>
                    <li class="nav-item hea-header-nav-item dropdown" >
                        <a class="nav-link hea-header-nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/category/tinh-dau-treo-xe">Tinh dầu treo xe</a>
                            <a class="dropdown-item" href="/category/tinh-dau-xit-phong">Tinh dầu xịt phòng</a>
                            <a class="dropdown-item" href="/category/tinh-dau-khuyech-tan">Tinh dầu khuyếch tán</a>
                            <a class="dropdown-item" href="/category/qua-tang">Quà tặng</a>
                            <a class="dropdown-item" href="/category/combo">Combo</a>
                        </div>

                    </li>
                    <li class="nav-item hea-header-nav-item" onclick=" window.location='/bai-viet'">
                        <a class="nav-link hea-header-nav-link" >Bài viết</a>
                    </li>
                    <li class="nav-item hea-header-nav-item" onclick=" window.location='/lien-he'">
                        <a class="nav-link hea-header-nav-link" >Liên hệ</a>
                        <div class="horizontalActive"></div>
                    </li>
                </ul>

                <button type="button" class="btn btn-primary position-relative" style="background-color: transparent; border:none" onclick=" window.location='/cart'">
                    <i class="fas fa-shopping-cart hea-header-cart"  style="border: none; font-size: 25px"></i>
                </button>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-container-template2">
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#secondFullscreenModal">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="hea-header-navbar-logo navbar-brand" href="/home"><img src="https://www.heagarden.com/assets/clients/images/HEA_Logo.png" alt="Logo" class="hea-header-logo"></a>
                <div style="display: flex; align-items: center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
                        <i class="hea-header-search fa-sharp fa-solid fa-magnifying-glass" ></i>
                    </button>
                    <button type="button" class="btn btn-primary position-relative" style="background-color: transparent; padding:0; border:none" onclick=" window.location='/cart'">
                        <i class="fas fa-shopping-cart hea-header-cart"  style="border: none; font-size: 25px"></i>
                    </button>
                </div>


                <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-labelledby="fullscreenModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="hea-search-close" >
                                    <i class="fa-solid fa-arrow-left hea-search-close"></i>
                                </button>
                                <form class="form-inline my-2 my-lg-0 hea-header-form">
                                    <input class="hea-header-input myInput" id="" type="search" placeholder="Search here" aria-label="Search here">
                                    <button class="hea-header-btn-firt btn my-2 my-sm-0" type="submit" style="display: flex;">
                                        <i class="hea-header-search fa-sharp fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="modal-body">
                                <div class="searchResultsModal"></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="modal fade" id="secondFullscreenModal" tabindex="-1" aria-labelledby="secondFullscreenModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div >
                                    <div style="position: relative; margin: 44px 0 24px 0px">
                                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                        <a class="hea-header-navbar-logo hea-header-navbar-logo-template2 navbar-brand" href="/home"><img src="https://www.heagarden.com/assets/clients/images/HEA_Logo.png" alt="Logo" class="hea-header-logo"></a>
                                    </div>
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                    Tinh dầu treo xe
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link accordion-text-item" href="#">Tinh dầu treo xe - Cam hương</a></li>
                                                    <li class="nav-item"><a class="nav-link accordion-text-item" href="#">Tinh dầu treo xe - Oải hương</a></li>
                                                    <li class="nav-item"><a class="nav-link accordion-text-item" href="#">Tinh dầu treo xe - Sả chanh</a></li>
                                                    <li class="nav-item"><a class="nav-link accordion-text-item" href="#">Tinh dầu treo xe - Bạc hà</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                    Tinh dầu xông phòng
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link accordion-text-item" href="#">Tinh dầu xông phòng - Cam hương</a></li>
                                                    <li class="nav-item"><a class="nav-link accordion-text-item" href="#">Tinh dầu xông phòng - Oải hương</a></li>
                                                    <li class="nav-item"><a class="nav-link accordion-text-item" href="#">Tinh dầu xông phòng - Sả chanh</a></li>
                                                    <li class="nav-item"><a class="nav-link accordion-text-item" href="#">Tinh dầu xông phòng - Bạc hà</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                    Tinh dầu khuyếch tán
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link accordion-text-item" href="#">Tinh dầu khuyếch tán - Cam hương</a></li>
                                                    <li class="nav-item"><a class="nav-link accordion-text-item" href="#">Tinh dầu khuyếch tán - Oải hương</a></li>
                                                    <li class="nav-item"><a class="nav-link accordion-text-item" href="#">Tinh dầu khuyếch tán - Sả chanh</a></li>
                                                    <li class="nav-item"><a class="nav-link accordion-text-item" href="#">Tinh dầu khuyếch tán - Bạc hà</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        </div>
        </nav>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function searchProduct() {
            let input = document.getElementById("inputSearch");
            let searchText = input.value.trim();
            let url = "https://www.heagarden.com/product-search/" + searchText;
            window.location.assign('https://www.heagarden.com/bai-viet');
        }
        $(window).on('scroll', function() {
            let scrollDistance = $(window).scrollTop();
            let headerHeight = $('.header').outerHeight();

            if (scrollDistance >= headerHeight) {
                $('.header').addClass('scrolling');
            } else {
                $('.header').removeClass('scrolling');
            }
        });

        $('.hea-search-close').on('click', function() {
            $(this).closest('.modal').modal('hide');
            $('.modal-backdrop').remove();
        });
        let dropdownLink = document.getElementById("navbarDropdown");
        dropdownLink.addEventListener("click", function() {
            let dropdownMenu = document.querySelector(".dropdown-menu");
            dropdownMenu.classList.toggle("show");
        });
        const navLinks = document.querySelectorAll('.hea-header-nav-link');
        function createHorizontalDiv() {
            const div = document.createElement('div');
            div.classList.add('horizontal');
            return div;
        }
        function removeHorizontalDivs() {
            const horizontalDivs = document.querySelectorAll('.horizontal');
            horizontalDivs.forEach(div => div.remove());
        }
        navLinks.forEach(navLink => {
            navLink.addEventListener('click', function (event) {
                event.preventDefault();
                const listItem = this.parentElement; // Lấy thẻ cha 'li'
                removeHorizontalDivs();
                const horizontalDiv = createHorizontalDiv();
                listItem.insertBefore(horizontalDiv, this.nextSibling);
            });
        });

        const searchResults = document.querySelector('.searchResults');
        $('.myInput').on('input', function () {
            if ($(this).val().trim() === '') {
                searchResults.classList.remove('show-pop-up');
            }
        });
        $('.myInput').on('blur', function (event) {
            if (!$(this).has($(event.relatedTarget)).length) {
                searchResults.classList.remove('show-pop-up');
            }
        });

        $('.myInput').on('keyup', function () {
            let inputValue = $(this).val();
            let apiUrl = 'https://www.heagarden.com/api/search/' + encodeURIComponent(inputValue);
            $.ajax({
                url: apiUrl,
                method: 'GET',
                success: function (response) {
                    let html = '';
                    if (response) {
                        response.forEach(function(item) {
                            html += '<div class="hea-list-suggest-item" onclick="window.location=\'/product-detail/' + item.url + '\'">';
                            html += '<img src="' + item.image + '" class="card-img-top hea-list-suggest-image" alt="...">';
                            html += '<div class="card-body" style="margin-left: 10px">';
                            html += '<h7 class="card-title hea-list-suggest-title">' + item.label + '</h7>';
                            html += '<div style="display: flex; align-items: center; justify-content: space-between; margin-top: 6%">';
                            html += '<p class="card-text hea-new-product-price hea-list-suggest-price">' + item.price + 'đ</p>';
                            html += '</div></div></div>';
                        });
                    }

                    searchResults.innerHTML = html;
                    searchResults.classList.add('show-pop-up');
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });


    </script>
