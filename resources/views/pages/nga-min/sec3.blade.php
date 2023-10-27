<div class="sec3-NM">
    <div class="row-test">
        <img src="{{asset('images/nga-min/sec3/34.jpg')}}" class="col-xxl-4 col-md-5 imgsec3-NM">
        <div class="col-xxl-4 col-md-5 containersec2-GT-test">
            <p class="header1sec3-NM"></p>
            <p class="header2sec3-NM">NHƯNG ÁNH SÁNG ĐÓ</p>
            <p class="header3sec3-NM">Không tạo bởi một người</p>
            <p class="text2sec2-GT-test">
                Để có được ngày hôm nay thì Nga có sự ủng hộ và hỗ trợ rất nhiều từ chồng, người thân trong gia đình,
                bạn bè, nhân công sản xuất và những đại lý nhà phân phối.
            </p>
            <p class="text2sec2-GT-test">
                Mọi người đã giúp đưa sản phẩm tới gần hơn với người tiêu dùng và đồng hành trong hành trình suốt 7 năm
                với Min Min Care.
            </p>
            <p class="text2sec2-GT-test">
                Vì vậy Nga muốn gửi lời cảm ơn chân thành tới tất cả mọi người.
            </p>
        </div>

    </div>
</div>

<div class="sec3mb-NM">
    <p class="header1sec3-NM"></p>
    <p class="header2sec3-NM">NHƯNG ÁNH SÁNG ĐÓ</p>
    <p class="header3sec3-NM">Không tạo bởi một người</p>
    <p class="contentsec2mb-GT">Để có được ngày hôm nay thì Nga có sự ủng hộ và hỗ trợ rất nhiều từ chồng, người thân
        trong gia đình, bạn bè, nhân công sản xuất và những đại lý nhà phân phối</p>
    <p class="contentsec2mb-GT">Mọi người đã giúp đưa sản phẩm tới gần hơn với người tiêu dùng và cũng đồng hành trong
        hành trình suốt <span class="bold-text">7 năm với Min Min Care.</span></p>
    <p class="contentsec2mb-GT">Vì vậy Nga muốn gửi lời cảm ơn chân thành tới tất cả mọi người.</p>
    <img src="{{asset('images/nga-min/sec3/34.jpg')}}" class="col-11">
</div>

<script>
    function setIframeWidthsec3NM() {
        var screenWidth = $(window).width();
        var iframe = $('#youtube-iframe-sec3-NM');
        var aspectRatio = 16 / 9; // Tỷ lệ màn hình mong muốn (16:9)
        var targetWidth = Math.floor(screenWidth * 0.9); // Giả sử sử dụng 80% chiều rộng của màn hình

        // Tính toán chiều cao dựa trên tỷ lệ màn hình
        var targetHeight = Math.floor(targetWidth / aspectRatio);

        // Đặt chiều rộng và chiều cao mới cho iframe
        iframe.css({
            width: targetWidth + 'px',
            height: targetHeight + 'px'
        });
    }

    // Gọi hàm setIframeWidth khi trang web được tải và khi thay đổi kích thước màn hình
    $(window).on('load resize', setIframeWidthsec3NM);
</script>
