<?php 
	//load file layout.php vao day
	$this->layoutPath = "Layout.php";
	unset($_SESSION["error"]);
 ?> 
	<!-- Banner -->
		<div class="banner">
		<div class="container">
			<div class="row">
			<div class="col-lg-12 mb-3">
		
<!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="assets/upload/logo/ai.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/upload/logo/on4.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/upload/logo/on2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/upload/logo/on3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div> -->

			<!-- <div class="row p-2">
				<h4>Từ khóa gợi ý:  </h4>&nbsp;&nbsp;
				<?php foreach($dataSubCategories as $sub):?>
					<div class="mr-2 mb-2">
						<div class="align-items-center" >
							<div class="banner_category">
								<a class="btn btn-outline-info" href="index.php?controller=products&action=listbycategory&category_name=<?php echo $sub->name ?>">
									<?php echo $sub->name ?></a>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			</div> -->
			</div>
		</div>
	</div>
	<!-- big logo -->
	<div class="inner">
    <div class="section-title text-center">
        <span class="section-title-border"></span>
    </div>
    <div class="grid">
        <div id="owl-brands-slider" class="owl-carousel owl-theme">
            <div class="item">
                <a href="controller=products&action=listbycategory&category_name=LEXAR" class="text-center"><img src="assets/upload/logo/14.png" alt="KINGSTON"></a>
            </div>
			<div class="item">
                <a href="index.php?controller=products&action=listbycategory&category_name=PHILIPS" class="text-center"><img src="assets/upload/logo/13.png" alt="PHILIPS"></a>
            </div>
            <div class="item">
                <a href="index.php?controller=products&action=listbycategory&category_name=AOC" class="text-center"><img src="assets/upload/logo/2.png" alt="AOC"></a>
            </div>
		  <div class="item">
                <a href="index.php?controller=products&action=listbycategory&category_name=VGA%20INTEL" class="text-center"><img src="assets/upload/logo/3.png" alt="INTEL"></a>
            </div>
		  <div class="item">
                <a href="index.php?controller=products&action=listbycategory&category_name=ASROCK" class="text-center"><img src="assets/upload/logo/4.png" alt="AROCK"></a>
            </div>
			<div class="item">
                <a href="index.php?controller=products&action=listbycategory&category_name=LEXAR" class="text-center"><img src="assets/upload/logo/6.png" alt="LAXAR"></a>
            </div>
		  
		  <div class="item">
                <a href="index.php?controller=products&action=listbycategory&category_name=AMD" class="text-center"><img src="assets/upload/logo/7.png" alt="AMD"></a>
            </div>
		  <div class="item">
                <a href="index.php?controller=products&action=listbycategory&category_name=G.SKILL" class="text-center"><img src="assets/upload/logo/9.png" alt="G.SKILL"></a>
            </div>
		  <div class="item">
                <a href="index.php?controller=products&action=listbycategory&category_name=PALIT" class="text-center"><img src="assets/upload/logo/10.jpg" alt="PALIT"></a>
            </div>
		  <div class="item">
                <a href="index.php?controller=products&action=listbycategory&category_name=POWERCOLOR" class="text-center"><img src="assets/upload/logo/11.png" alt="POWERCOLOR"></a>
            </div>
		  <div class="item">
                <a href="index.php?controller=products&action=listbycategory&category_name=ASUS" class="text-center"><img src="assets/upload/logo/12.png" alt="ASUS"></a>
            </div>
		 
		 
            <!-- Thêm các item tương tự cho các đối tác khác -->
        </div>
    </div>
    </div>
   <!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <style>
		.owl-carousel .item img {
    
    max-height: 100px; /* Chiều cao cố định cho logo */
    width: auto; /* Chiều rộng tự động để giữ tỷ lệ */
    margin: 0 auto; /* Căn giữa logo */
    display: block; /* Hiển thị logo dưới dạng khối để dễ dàng căn giữa */
    background: white;
}
    </style>

    <script>
$(document).ready(function(){
    $("#owl-brands-slider").owlCarousel({
        loop: true, // Vòng lặp liên tục
        margin: 10, // Khoảng cách giữa các item
        nav: true, // Hiển thị nút điều hướng
        autoplay: true, // Tự động chuyển slide
        autoplayTimeout: 3000, // Thời gian chờ giữa các slide (3 giây)
        navText: ["",""], // Xóa nội dung của các nút "Prev" và "Next"
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});

</script>
</div>
	<!-- new post -->
	<div class="blog-container">
        <div class="image-container">
            <img src="assets/upload/logo/on6.jpg" alt="Blog Image">
        </div>
        <div class="text-container">
            <h4>🔥THÔNG BÁO CHÍNH THỨC TỪ CÔNG TY CỔ PHẦN TIN HỌC VIẾT SƠN🔥</h4>
            <p>
			Kể từ ngày 25/07/2024 tập đoàn Achieva Technology SDN BHD chính thức trở thành Nhà Phân Phối khu vực của Intel ( Intel Authorized Distributor)  tại thị trường Việt Nam.
			Được sự ủy thác và tín nhiệm từ tập đoàn Achieva: 
			Công Ty Cổ Phần Tin Học Viết Sơn  chính thức trở thành đối tác đại diện , với mục tiêu thúc đẩy hoạt động kinh doanh và phân phối sản phẩm Intel tại thị trường Việt Nam.
			Chúng tôi cam kết sẽ luôn mang lại những giá trị tốt nhất cho tất cả Quý đối tác kinh doanh cũng như Quý Khách Hàng đã lựa chọn sản phẩm Intel và Công ty Viết Sơn
			#Vietson #Intel
            </p>--------------------------------------------------------
			<p>VIẾT SƠN - Leading Distributor in the Internet of Every things</p>
			<p>🏠 150Ter Bùi Thị Xuân, P. Phạm Ngũ Lão, Q.1, TP.HCM</p>
			<p>🏠 Chi nhánh HN : tầng 4, số 1 Thái Hà- Trung Liệt, Đống Đa, Hà Nội.</p><div class="red_button deal_ofthe_week_button"><a href="index.php?controller=news&action=newsdetail&id=8">Xem thêm</a></div>
        </div>
    </div>
    <style>
	body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #ffff;
}

.blog-container {
    display: flex;
    max-width: 1200px;
    margin: 50px auto;
    background-color: #ffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

.image-container {
    flex: 1;
    max-width: 50%;
}

.image-container img {
    width: 100%;
    height: auto;
    display: block;
}

.text-container {
    flex: 1;
    padding: 20px;
}

.text-container h1 {
    margin-top: 0;
    font-size: 28px;
}

.text-container p {
    line-height: 1.6;
    margin-bottom: 20px;
}
    </style>
	<!-- New Arrivals -->
	<!-- Deal of the week -->

	<div class="deal_ofthe_week mt-2">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5">
					<div class="deal_ofthe_week_img">
						<img src="assets/upload/products/Asus/1.png" alt="">
					</div>
				</div>
				<div class="col-lg-7 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center">
						<div class="section_title">
							<h2>Giá tốt nhất trong tuần</h2>
						</div>

						<!-- <ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">03</div>
								<div class="timer_unit">Day</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">15</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">45</div>
								<div class="timer_unit">Mins</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">23</div>
								<div class="timer_unit">Sec</div>
							</li>
						</ul> -->
						<div class="red_button deal_ofthe_week_button"><a href="index.php?controller=products&action=listbycategory&category_name=MÁY%20BỘ%20ROSA">Liên hệ ngay</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<!-- Best Sellers -->
	<div class="blog-container">
    <div class="text-container">
        <h1>CPU AMD Ryzen 9 7900X3D</h1>
    <p>
	CPU AMD Ryzen 9 7900X3D là mẫu CPU hàng đầu của AMD Ryzen thời điểm hiện tại. Thuộc vào thế hệ AMD Ryzen™ 7000 Series Desktop Processors, chiếc CPU AMD Ryzen này mang lại hiệu năng xử lý vượt trội cho bộ PC của bạn.    
	</p>
	<div class="red_button deal_ofthe_week_button"><a href="index.php?controller=products&action=listbycategory&category_name=MÁY%20BỘ%20ROSA">Liên hệ ngay</a></div>
    </div>
    <div class="image-container">
        <img src="assets/upload/products/name (41).jpg" alt="Blog Image">
    </div>
</div>
<style>
	.blog-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.text-container {
    flex: 2;
    margin-right: 20px; /* Khoảng cách giữa văn bản và ảnh */
}

.image-container {
    flex: 1;
}

img {
    max-width: 100%;
    height: auto;
}

</style>



	<!-- Benefit -->

	<div class="benefit mt-2">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content mr-1">
							<h6>Bảo hành 1 năm</h6>
							<p>Sản phẩm chính hãng với bảo hành tối thiểu 1 năm</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content mr-1">
							<h6>Thanh toán dễ dàng</h6>
							<p>Có nhiều cách thanh toán</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>30 ngày đổi trả hàng</h6>
							<p>Có thể đổi trả hàng bị lỗi trong 30 ngày</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Thời gian làm việc</h6>
							<p>8h sáng - 17h30 chiều</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blogs -->

	<div class="blogs mt-4">
		<div class="container ">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h3>Tin tức</h3>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<?php foreach($dataNews as $news):?>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(assets/upload/news/<?php echo $news->photo; ?>)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h5 class="blog_title"><?php echo $news->name;?></h5>
							<span class="blog_meta">viết bởi: <?php echo $news->createdby?><br/>
							Ngày <?php echo Date_format(Date_create($news->createdate), "d/m/Y");?></span>
							<a class="blog_more" href="index.php?controller=news">Xem chi tiết</a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<div class="col-md-2 float-right p-2 mr- font-italic text-right font-weight-bold"><a class="blog_more " href="index.php?controller=news">Xem thêm >>></a></div>
		</div>
	</div>
