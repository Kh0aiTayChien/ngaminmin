<div class="sec2-NM" id="">
    <div class="row-test">
        <div class="col-xxl-4 col-md-5 containersec2-NM">
            <p class="text2sec2-GT-test">Nga đã tự mình học hỏi và chế biến ra loại bột ngũ cốc mong muốn. Khi sử dụng
                thì đạt hiệu quả ngoài mong đợi, đêm nào không uống là con nhay cả đêm không ngủ được, còn nếu uống ngũ
                cốc thì xong là con ngủ ngon. Vì thế Nga chia sẻ lại với mọi người xung quanh. Các mẹ sau khi sử dụng có
                hiệu quả còn mong muốn hợp tác kinh doanh cùng.</p>
            <p class="text2sec2-GT-test">Thời gian đầu chưa có vốn nên không dễ dàng để vận hành và rất dễ nản. Nhưng
                Nga vẫn giữ vững niềm tin bước tiếp, dần dần từng bước một để đi qua khó khăn bằng những kinh nghiệm đã
                tích lũy ngày trước.</p>
            <p class="text2sec2-GT-test">Tên gọi thương hiệu được lấy cảm hứng từ tên con trai yêu quý của Nga.</p>
            <p class="text2sec2-GT-test">Min Min Care không chỉ là một thương hiệu ngũ cốc dinh dưỡng đơn thuần, mà còn
                là niềm hy vọng, niềm tin vào sự phát triển và thịnh vượng. Bởi chính trải nghiệm và mong muốn của Nga,
                sản phẩm luôn luôn được nâng cao nhằm mang đến giải pháp dinh dưỡng toàn diện chuyên biệt.</p>
        </div>
        <div class="col-xxl-4 col-sm-5 containersec2-GT-test">
            <img src="{{asset('images/nga-min/sec2/Asset 2.png')}}"
                 class="containersec2-GT-test col-xxl-3 col-sm-5 imgsec2-NM">
        </div>
    </div>
</div>

<div class="sec2mb-NM" id="">
    <p class="contentsec2mb-GT">Nga đã tự mình học hỏi và chế biến ra loại bột ngũ cốc mong muốn. Khi sử dụng thì đạt
        hiệu quả ngoài mong đợi, đêm nào không uống là con nhay cả đêm không ngủ được, còn nếu uống ngũ cốc thì xong là
        con ngủ ngon. Vì thế Nga chia sẻ lại với mọi người xung quanh. Các mẹ sau khi sử dụng có hiệu quả còn mong muốn
        hợp tác kinh doanh cùng.</p>
    <p class="contentsec2mb-GT">Thời gian đầu chưa có vốn nên không dễ dàng để vận hành và rất dễ nản. Nhưng
        Nga vẫn giữ vững niềm tin bước tiếp, dần dần từng bước một để đi qua khó khăn bằng những kinh nghiệm đã
        tích lũy ngày trước.</p>
    <img src="{{asset('images/nga-min/sec2/Asset 2.png')}}"
         class="col-11 imgsec2-mb-NM">
    <br>
    <p class="contentsec2mb-GT">Tên gọi thương hiệu được lấy cảm hứng từ tên con trai yêu quý của Nga.</p>
    <p class="contentsec2mb-GT">Min Min Care không chỉ là một thương hiệu ngũ cốc dinh dưỡng đơn thuần, mà còn là niềm
        hy vọng, niềm tin vào sự phát triển và thịnh vượng. Bởi chính trải nghiệm và mong muốn của Nga, sản phẩm luôn
        luôn được nâng cao nhằm mang đến giải pháp dinh dưỡng toàn diện chuyên biệt.</p>
</div>

<script>

    // Hàm tính toán và đặt chiều rộng theo tỷ lệ màn hình điện thoại
    function setIframeWidthsec2NM() {
        var screenWidth = $(window).width();
        var iframe = $('#youtube-iframe-sec2-NM');
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
    $(window).on('load resize', setIframeWidthsec2NM);
</script>
