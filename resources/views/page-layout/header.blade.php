<div class="headerpc fixed-top" id="myHeader">
    <div class="background-image"></div>
    <div class="col-xxl-12 col-md-12 row-test headermenu">
        <ul class="col-xxl-3 col-md-4 menuleft">
            <li class="col-xxl-4 col-md-4">
                <a href="/" id="trang-chu-link">
                    <p>TRANG CHỦ</p>
                </a>
            </li>
            <li class="col-xxl-4 col-md-4">
                <a href="{{route('Nga-min.index.section',['section' => 'gioi-thieu'])}}" id="gioi-thieu-link">
                    <p>GIỚI THIỆU</p>
                </a>
            </li>
            <li class="col-xxl-4 col-md-4">
                <a href="{{route('Nga-min.index.section',['section' => 'chia-se'])}}" id="dai-ly-link"><p>CHIA SẺ</p></a>
            </li>
        </ul>
        <div class="col-xxl-3 col-md-4 logominmin">
            <a href="/"><img src="{{asset('images/header/Group 903.svg')}}" class="logo-test col-xxl-11 col-md-11"></a>
        </div>
        <ul class="col-xxl-3 col-md-4 menuright">
{{--            <li class="col-xxl-3 col-md-3">--}}
{{--                <a href="{{asset('dai-ly')}}" id="dai-ly-link"><p>ĐẠI LÝ</p></a>--}}
{{--            </li>--}}
            <li class="col-xxl-4 col-md-4">
                <a href="{{route('Nga-min.index.section',['section' => 'hoi-dap'])}}" id="tin-tuc-link"><p>HỎI ĐÁP</p></a>
            </li>
            <li class="col-xxl-4 col-md-4">
                <a href="/tin-tuc" id="kien-thuc-link"><p>BLOG</p></a>
            </li>
            <li class="col-xxl-4 col-md-4">
                <a href="{{route('Nga-min.index.section',['section' => 'lien-he'])}}" id="lien-he-link"><p>LIÊN HỆ</p></a>
            </li>
        </ul>
    </div>
</div>

<div class="right-action">

{{--    <div><img src="{{asset('images/header/cart-no-num.png')}}" alt="" class="cart button-shake"  style="width: 70%"></div>--}}
    <br>
    <div><img src="{{asset('images/sec1/mess.png')}}" alt="" class="button-shake" style="width: 70%"></div>
</div>
<div class="overlay d-none">
    @include('page-layout.cart')
</div>
<div id="scrollUp" style="display: block;">
    <i class="fa fa-angle-up button-shake"></i>
</div>


<style>

    #scrollUp {
        text-align: center;
        bottom: 30px;
        cursor: pointer;
        display: none;
        position: fixed;
        right: 10px;
        z-index: 1200;
    }
    #scrollUp i {
        background-color: #59843d;
        height: 36px;
        font-size: 22px;
        width: 36px;
        color: #fff;
        line-height: 32px;
        transition: all .3s ease 0s;
        margin-left: 2px;
        border-radius: 4px;
        border: 2px solid white;
        filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.25));
    }

    .right-action {
        text-align: center;
        bottom: 30px;
        cursor: pointer;
        position: fixed;
        right: 20px;
        z-index: 1000;
    }


    @media only screen and (max-width: 800px) {
        #scrollUp{
            display: none !important;
        }

        .right-action {
            text-align: center;
            bottom: 10px;
            cursor: pointer;
            position: fixed;
            right: 1px;
            z-index: 999;
            width: 20%;
        }

        .overlay {
            height: 100vh;
            width: 100vw;
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1000 !important;
        }

        #popup {
            position: fixed;
            float: right;
            top: 5rem !important;
            right: 10% !important;
            width: 80% !important;

            background-color: white;
            border-radius: 23px;
            max-height: 800px;
            transform: none !important;
            z-index: 1000 !important;
        }
    }

    .mitr-medium {
        font-family: Mitr-Medium, Mitr, sans-serif;
    }

    .green-bg {
        background-color: #59843d;
    }

    .shadow-effect {
        filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.25));
    }


    .list-product .list-product-button {
        width: 300%;
        display: none;
    }

    .btn:hover {
        color: #59843D;
    }

    #popup {
        z-index: 9999 !important;
        position: fixed;
        top: 15vh;
        right: 15vw;
        /*transform: translate(-50%, -50%);*/
        width: 300px;
        background-color: white;
        border-radius: 23px;
        max-height: 800px;
    }

    .cart-product-list {
        max-height: 300px; /* Đặt chiều cao tối đa của phần tử */
        overflow-y: auto; /* Sử dụng thanh cuộn dọc khi nội dung vượt quá kích thước */
        overflow-x: hidden;
    }

    .cart-product-list::-webkit-scrollbar {
        width: 6px;
        border-radius: 23px; /* Border radius cho thanh cuộn trên Firefox */
        \ background-clip: padding-box;
    }

    .cart-product-list::-webkit-scrollbar-track {
        border-radius: 12px; /* Border radius cho thanh cuộn trên Firefox */
        margin-right: 2px;
        background-clip: padding-box;
    }

    .cart-product-list::-webkit-scrollbar-thumb {
        background-color: #888888;
        border-radius: 23px; /* Border radius cho thanh cuộn trên Firefox */
        margin-right: 2px;
    }

    /* Định dạng kiểu thanh cuộn trên Chrome, Edge và các trình duyệt mới */
    .cart-product-list::-moz-scrollbar {
        width: 6px;
        border-radius: 23px; /* Border radius cho thanh cuộn trên Chrome và Edge */

    }

    .cart-product-list::-moz-scrollbar-track {
        background-color: #f5f5f5;
        border-radius: 23px; /* Border radius cho thanh cuộn trên Chrome và Edge */
    }

    .cart-product-list::-moz-scrollbar-thumb {
        background-color: #888888;
        border-radius: 23px; /* Border radius cho thanh cuộn trên Chrome và Edge */
    }

    .close-icon {
        position: absolute;
        top: 0.2rem;
        right: 1rem;
        cursor: pointer;
        color: white;
    }

    .close-icon i {
        font-size: 1rem;
    }

    .close-icon i:hover {
        color: orange;
        cursor: pointer;
    }

    .cancel-item:hover {
        color: orange;
        cursor: pointer;
    }

    .plus {
        cursor: pointer;
    }

    .subtraction {
        cursor: pointer;
    }

    .cart-img {
        object-fit: cover;
        height: 5rem;
    }

    .cart {
        cursor: pointer;
        transform: translate(2px, 0);
    }

    .cart-circle {
        width: 18px;
        height: 18px;
        border-radius: 100%;
        position: relative;
        display: inline-block;
        vertical-align: middle;
        background: white;
    }

    .cart-circle:before,
    .cart-circle:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    /* PLUS */
    .cart-circle.plus:before,
    .cart-circle.plus:after {
        background: #59843d;
    }

    .cart-circle.plus:before {
        width: 2px;
        margin: 4px auto;
    }

    .cart-circle.plus:after {
        margin: auto 4px;
        height: 2px;
        box-shadow: none;
    }

    /* MINUS */
    .cart-circle.minus:before {
        background: #59843d;
        margin: auto 4px;
        height: 2px;
    }

    .lds-dual-ring {
        display: inline-block;
        transform: translate(37%, 120%);
        width: 80px;
        height: 80px;
    }

    .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 64px;
        height: 64px;
        margin: 8px;
        border-radius: 50%;
        border: 6px solid #dfc;
        border-color: #59843d transparent #59843d transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }

    @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }


    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>

<div class="headermb fixed-top">
    <div class="background-image-mb"></div>
    <div class="inline-container justify-content-center align-items-center">
        <a href="{{asset('/')}}"><img src="{{asset('images/header/Group 903.svg')}}" class="logomb"></a>
        <img src="{{asset('images/header/Group 34.png')}}" class="menu">
    </div>
    <nav>
        <ul class="hide iconmb">
            <button class="close-btn"><img src="{{asset('images/header/close-btn.png')}}" class="btn-close-img">
            </button>
            <li class="contact linetop">
                <a href="#" class="linktext aniUtil_dramatic ani_fadeIn"><p
                        class="textlink textlinktop">TRANG CHỦ</p></a>
            </li>
            <li class="contact linemenu">
                <a href="{{route('Nga-min.index.section',['section' => 'gioi-thieu'])}}" class="linktext aniUtil_dramatic ani_fadeIn"><p
                        class="textlink">GIỚI
                        THIỆU</p></a>
            </li>
            <li class="contact linemenu">
                <a href="{{route('Nga-min.index.section',['section' => 'chia-se'])}}" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">CHIA SẺ</p></a>
            </li>
            <li class="contact linemenu">
                <a href="{{route('Nga-min.index.section',['section' => 'hoi-dap'])}}" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">HỎI ĐÁP</p></a>
            </li>
            <li class="contact linemenu">
                <a href="/tin-tuc" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">Blog</p></a>
            </li>
            <li class="contact linemenu">
                <a href="{{route('Nga-min.index.section',['section' => 'lien-he'])}}" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">LIÊN HỆ</p>
                </a>
            </li>
        </ul>
    </nav>
</div>

<script>
    $(document).ready(function() {
        // Ẩn nút "Scroll Up" ban đầu
        $('#scrollUp').hide();

        // Kiểm tra sự kiện cuộn trang
        $(window).scroll(function() {
            // Kiểm tra vị trí cuộn của trang
            if ($(this).scrollTop() > 0) {
                // Nếu không ở đầu trang, hiển thị nút "Scroll Up"
                $('#scrollUp').fadeIn();
            } else {
                // Nếu ở đầu trang, ẩn nút "Scroll Up"
                $('#scrollUp').fadeOut();
            }
        });

        // Sự kiện khi nhấp vào nút "Scroll Up"
        $('#scrollUp').click(function() {
            // Di chuyển lên đầu trang
            $('html, body').animate({ scrollTop: 0 }, 369);
            return false;
        });
    });

    $(document).ready(function () {
        $('.list-product').hover(
            function () {
                $(this).find('.list-product-button').slideDown(300); // Hiển thị từ từ khi di chuột vào
            },
            function () {
                $(this).find('.list-product-button').slideUp(300); // Ẩn từ từ khi di chuột ra
            }
        );
        $('.cart').on('click touchstart', function () {
            $('.popup').removeClass('d-none');
            $('.overlay').removeClass('d-none');
        });

        $('.close-icon').on('click touchstart', function () {
            $('.popup').addClass('d-none');
            $('.overlay').addClass('d-none');
        });

    });
    $(document).ready(function () {
        const menu = $('.menu');
        const close = $('.close-btn')
        const hiddenList = $('.hide');
        const navLinks = $('nav ul li a');
        const navMenu = $('nav ul');

        // Thêm trình nghe sự kiện click cho menu element
        menu.on('click', function () {
            // Toggle class "hide" trên phần tử ul
            hiddenList.toggleClass('hide');
        });
        close.on('click', function () {
            // Toggle class "hide" trên phần tử ul
            hiddenList.toggleClass('hide');
        });

        // Thêm trình nghe sự kiện click cho mỗi liên kết trong danh sách
        navLinks.on('click', function () {
            hiddenList.addClass('hide'); // Thêm class 'hide' để ẩn danh sách
        });
    });
    $(window).scroll(function myScrollPCFunction() {
        var header = $('.headerpc');
        var background = header.find('.background-image');
        var scrollTop = $(window).scrollTop();
        var opacity = 1 - (scrollTop / $(window).height()); // Tính toán độ mờ dựa trên vị trí cuộn

        background.css('opacity', Math.max(opacity, 0.7)); // Giới hạn opacity tối thiểu là 0.7
    });
    $(window).scroll(function myScrollMBFunction() {
        var headermb = $('.headermb');
        var background = headermb.find('.background-image-mb');
        var scrollTop = $(window).scrollTop();
        var opacity = 1 - (scrollTop / $(window).height()); // Tính toán độ mờ dựa trên vị trí cuộn

        background.css('opacity', Math.max(opacity, 0.5)); // Giới hạn opacity tối thiểu là 0.7
    });
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

</script>

<script>
    $(document).ready(function() {
        var url = window.location.href;
        var regex = /\/thong-tin\/([^\/]+)/; // Regex để bắt phần cuối của URL sau "thong-tin/"

        var match = url.match(regex);

        if (match) {
            var section = match[1]; // Lấy phần cuối của URL

            var targetElement = $('.' + section); // Sửa đổi đây để chọn thẻ có lớp tương ứng
            console.log(targetElement)
            window.location.href = '#' + section;


        }
    });


</script>
