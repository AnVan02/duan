<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>

<!-- giới thiệu chung -->
<div class="pabout-history">
        <div class="container">
            <div class="pabout-history-head pabout-head">
                <h2>Lịch sử hình thành và phát triển</h2>
            </div>
            <div class="pabout-history-icons">
                <!-- Các biểu tượng và năm -->
                <!-- Lặp lại cấu trúc này cho mỗi năm -->
                <div class="pabout-history-icon">
                    <div class="pabout-history-icon-year">1990</div>
                    <div class="pabout-history-icon-image">
                        <img src="//theme.hstatic.net/200000889805/1001271222/14/pabout_history_item_icon_1.png?v=1089" alt="1996">
                    </div>
                </div>
                <div class="pabout-history-icon">
                    <div class="pabout-history-icon-year">2000</div>
                    <div class="pabout-history-icon-image">
                        <img src="//theme.hstatic.net/200000889805/1001271222/14/pabout_history_item_icon_1.png?v=1089" alt="1996">
                    </div>
                </div>
                <div class="pabout-history-icon">
                    <div class="pabout-history-icon-year">2023</div>
                    <div class="pabout-history-icon-image">
                        <img src="//theme.hstatic.net/200000889805/1001271222/14/pabout_history_item_icon_1.png?v=1089" alt="1996">
                    </div>
                </div>
                <div class="pabout-history-icon">
                    <div class="pabout-history-icon-year">2008</div>
                    <div class="pabout-history-icon-image">
                        <img src="//theme.hstatic.net/200000889805/1001271222/14/pabout_history_item_icon_1.png?v=1089" alt="1996">
                    </div>
                </div>
                <div class="pabout-history-icon">
                    <div class="pabout-history-icon-year">2015</div>
                    <div class="pabout-history-icon-image">
                        <img src="//theme.hstatic.net/200000889805/1001271222/14/pabout_history_item_icon_1.png?v=1089" alt="1996">
                    </div>
                </div>
                <div class="pabout-history-icon">
                    <div class="pabout-history-icon-year">2023</div>
                    <div class="pabout-history-icon-image">
                        <img src="//theme.hstatic.net/200000889805/1001271222/14/pabout_history_item_icon_1.png?v=1089" alt="1996">
                    </div>
                </div>
                <!-- Thêm các mục khác tương tự -->
            </div>
            <div class="pabout-history-contents">
                <!-- Nội dung từng năm -->
                <div class="pabout-history-content">
                    <div class="pabout-history-content-border">
                        <div class="pabout-history-content-text">
                            <div class="pabout-history-content-text-banner">
                                <img src="//theme.hstatic.net/200000889805/1001271222/14/pabout_history_item_banner_1.png?v=1089" alt="1996">
                            </div>
                            <div class="pabout-history-content-text-data">
                                <div class="pabout-history-content-year"><strong>1990</strong></div>
                                <div class="pabout-history-content-data">1990: Đây là điểm đầu tiên được đặt ra.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Lặp lại cấu trúc này cho mỗi mục khác -->
            </div>
        </div>
    </div>

    <!-- ccs -->
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f4f8;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.pabout-history-head {
    text-align: center;
    margin-bottom: 30px;
}

.pabout-head h2 {
    color: #0056b3;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-bottom: 2px solid #0056b3;
    display: inline-block;
    padding-bottom: 10px;
}

.pabout-history-icons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 30px 0;
    position: relative;
    border-top: 2px solid #0056b3;
    border-bottom: 2px solid #0056b3;
    padding: 20px 0;
}

.pabout-history-icon {
    text-align: center;
    position: relative;
}

.pabout-history-icon-year {
    color: #0056b3;
    font-weight: bold;
    margin-bottom: 10px;
}

.pabout-history-icon-image img {
    width: 80px;
    height: 80px;
    border: 3px solid #0056b3;
    border-radius: 50%;
    object-fit: cover;
}

.pabout-history-contents {
    margin-top: 40px;
}

.pabout-history-content {
    margin-bottom: 30px;
}

.pabout-history-content-border {
    background-color: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
}

.pabout-history-content-text-banner img {
    width: 200px;
    border-radius: 8px;
    margin-right: 20px;
}

.pabout-history-content-text-data {
    flex: 1;
}

.pabout-history-content-year {
    color: #0056b3;
    font-size: 24px;
    margin-bottom: 10px;
}

.pabout-history-content-data {
    color: #333;
    line-height: 1.6;
}

    </style>