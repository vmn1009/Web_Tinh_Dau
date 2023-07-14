const template1 = `
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="hea-header-navbar-logo navbar-brand" href="/home"><img src="{{asset('assets/clients/images/HEA_Logo.png')}}" alt="Logo" class="hea-header-logo"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav hea-header-nav-list mr-auto">
                    <li class="nav-item hea-header-nav-item active">
                        <a class="nav-link hea-header-nav-link" href="#">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item hea-header-nav-item">
                        <a class="hea-header-nav-link nav-link" href="#">Về chúng tôi - Hea Garden</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            foreach ($categoriesDetail as $item) {
                                echo '<a class="dropdown-item" href="/category/' . $item->url . '">' . $item->label . '</a>';
                            }
                        ?>
                        </div>
                    </li>
                    <li class="nav-item hea-header-nav-item">
                        <a class="hea-header-nav-link nav-link" href="#">Bài viết</a>
                    </li>
                    <li class="nav-item hea-header-nav-item">
                        <a class="hea-header-nav-link nav-link" href="#">Liên hệ</a>
                        <div class="horizontalActive"></div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 hea-header-form">
                    <input class="hea-header-input" id="myInput" type="search" placeholder="Search here" aria-label="Search here">
                    <button class="hea-header-btn-firt btn btn-outline-success my-2 my-sm-0" type="submit">
                        <i class="hea-header-search fa-sharp fa-solid fa-magnifying-glass"></i>
                    </button>
                    <div id="searchResults"></div>
                </form>
                <button type="button" class="btn btn-primary position-relative" style="background-color: transparent; border:none" onclick=" window.location='/cart'">
                    <i class="fas fa-shopping-cart hea-header-cart"  style="border: none; font-size: 25px"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        99+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
        </div>
    </nav>
    `
const template2 = `
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="hea-header-navbar-logo navbar-brand" href="/home"><img src="{{asset('assets/clients/images/HEA_Logo.png')}}" alt="Logo" class="hea-header-logo"></a>
        <div class="collapse navbar-collapse hea-header-container-template2" id="navbarTogglerDemo03">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Accordion Item #1
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Accordion Item #2
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
        </div>
    </nav>
    `

function switchTemplate() {
    var screenWidth = window.innerWidth;

    if (screenWidth < 768) { // Điều kiện cho màn hình mobile (vd: < 768px)
        document.getElementById('header').innerHTML = template2;
    } else { // Điều kiện cho màn hình lớn
        document.getElementById('header').innerHTML = template1;
    }
}

// Gọi hàm khi tải trang và khi thay đổi kích thước màn hình
window.addEventListener('load', switchTemplate);
window.addEventListener('resize', switchTemplate);







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
const searchResults = document.querySelector('#searchResults');

$('#myInput').on('input', function () {
    if ($(this).val().trim() === '') {
        searchResults.classList.remove('show');
    }
});

$('#myInput').on('blur', function () {
    searchResults.classList.remove('show');
});

$('#myInput').on('keyup', function () {
    var inputValue = $(this).val();
    var apiUrl = 'https://www.heagarden.com/api/search/' + encodeURIComponent(inputValue);
    $.ajax({
        url: apiUrl,
        method: 'GET',
        success: function (response) {
            var html = '';
            if (response) {
                response.forEach(function (item) {
                    html += '<div class="hea-list-suggest-item">';
                    html += '<img src="' + item.image + '" class="card-img-top hea-list-suggest-image" style="width: 100px;height: 100px;" alt="...">';
                    html += '<div class="card-body">';
                    html += '<h5 class="card-title">' + item.label + '</h5>';
                    html += '<div style="display: flex; align-items: center; justify-content: space-between">';
                    html += '<p class="card-text hea-new-product-price hea-list-suggest-price">' + item.price + 'đ</p>';
                    html += '<button class="hea-new-product-btn hea-list-suggest-btn"><i class="fas fa-shopping-cart hea-list-suggest-cart hea-new-product-icon-cart"></i></button>';
                    html += '</div></div></div>';
                });
            }
            searchResults.innerHTML = html;
            searchResults.classList.add('show');
        },
        error: function (error) {
            console.log(error);
        }
    });
});


function searchProduct(event) {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của nút submit

    var input = document.getElementById("myInput");
    var searchText = input.value.trim();

    if (searchText !== "") {
        var encodedSearchText = encodeURIComponent(searchText);
        var baseUrl = window.location.origin;
        var url = baseUrl + "/product-search/" + encodedSearchText;
        window.location.href = url;
    }
}
