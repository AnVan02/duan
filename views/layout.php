<!DOCTYPE html>
<html lang="en">
<title>Viết Sơn</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/bootstrap.min.css">
<link href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="assets/styles/responsive.css">
<?php if(isset($_SESSION["message"])):?>
	<script>
		function message() {
		window.alert("<?php echo $_SESSION["message"];?>");
		}
	</script>
<?php endif;?>
<head>

<body class="h-100" style="background-image: ">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
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
</div>

<?php if(isset($_SESSION["message"])) {echo 'onload="message()"';unset($_SESSION["message"]);}?>


<div class="super_container container h-100">
	<!-- Header -->
	<header class="header trans_300">
		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container col-2 col-lg-3 float-left">
							<a href="index.php"><span></span></a>
							<img src="assets/images/logo VS_new.png" alt="Logo" style="max-width: 90%; height: auto;">
						</div>
						<div class="col-lg-9 col-10 float-right">
							<nav class="navbar row "> 
								<from method="post" class="col-lg-8 col-1 float-left" action="" onchange="search()">
									<div class="navbar-search input-group  input-group-lg">
										<input type="text" class="form-control" id="searchbox" placeholder="Nhập tên sản phẩm cần tìm..." name="search">
										<div class="input-group-append" >
											<a id="btnsearch">
											<input type="submit" value="Tìm kiếm" class="btn btn-outline-primary btn-lg"></a>
										</div>
									</div>
								<!-- header -->
				<div class="row p-2">
						<div class="nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
							<ul class="header_nav">
								<li><a href="index.php">Trang chủ</a></li>
								<li><a href="index.php?controller=home&action=aboutus">Giới thiệu</a></li>
								<li><a href="index.php?controller=news">Tin tức</a></li>
								<li><a href="index.php?controller=products">Sản phẩm</a></li>
								<li><a href="index.php?controller=home&action=check">Check Serial</a></li"> 

							</ul>
			
							<style>
.header_nav {
    list-style-type: none; /* Loại bỏ ký hiệu bullet */
    margin: 0;
    padding: 0;
    display: flex; /* Hiển thị các mục trên một dòng */
    justify-content: space-between; /* Dàn đều các mục */
    background-color: #fff; /* Màu nền trắng */
    font-family: Arial, sans-serif; /* Font chữ */
    font-size: 14px; /* Kích thước chữ */
}

.header_nav li {
    padding: 10px 15px; /* Khoảng cách giữa các mục */
}

.header_nav a {
    color: #333; /* Màu chữ */
    text-decoration: none; /* Loại bỏ gạch chân */
    transition: color 0.3s; /* Thêm hiệu ứng chuyển màu chữ khi hover */
}

.header_nav a:hover {
    color: #007bff; /* Màu chữ khi hover */
}


/* Tùy chỉnh các icon giỏ hàng và người dùng */
.header_icons {
    display: flex;
    align-items: center;
    margin-left: 20px;
}

.header_icons img {
    width: 24px;
    height: 24px;
    margin-left: 10px;
    cursor: pointer;
}


							</style>
						</div>
					</div>
						

				</from>
				
		
		<script>
			function search(){
			var x=document.getElementById("searchbox").value;
			x='index.php?controller=products&action=btnsearch&search='+x;
			document.getElementById("btnsearch").setAttribute("href", x); 
		}
	</script>
								<div class="col-lg-4 col-1">
									<ul class="navbar_user navbar-search">
										<li class="account">
											<div class="top_nav_right">
												<ul class="top_nav_menu">
													
													<!--  My Account -->

													<li class="account">
														<a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
														<ul class="account_selection" style="width: 120px;">
                                                        <?php if(isset($_SESSION['customer_id'])):?>
															<li style="width: 120px;line-height: 20px;color:#FF6347;"><p class="font-italic main_color m-0" >Xin chào:</p>
																<a href="index.php?controller=customers&action=update&id=<?php echo $_SESSION['customer_id'];?>">
																	<!--<i class="fa fa-user"></i> <span>Tài khoản</span> -->
																	<span><?php if(!empty($_SESSION['customer_name'])) echo $_SESSION['customer_name']; else echo $_SESSION['customer_phone'];?></span>
																</a>
															</li>
															<li style="width: 120px;">
																<a href="index.php?controller=orders">
																	<span>Lịch sử giao dịch</span>
																</a>
															</li>
															<li style="width: 120px;">
																<a href="index.php?controller=login&action=logout">
																	<i class="fa fa-sign-out"></i> <span>Đăng xuất</span>
																</a>
															</li>
                                                        <?php else:?>
															<li><a href="index.php?controller=login&action=login"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a></li>
															<li><a href="index.php?controller=customers&action=register"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng kí</a></li>
                                                        <?php endif;?>
														</ul>
													</li>
												</ul>
											</div>
										</li>
										<li class="checkout">
											<a href="index.php?controller=carts">
												<i class="fa fa-shopping-cart" aria-hidden="true"></i>
												<?php if(!empty($_SESSION["countcart"])):?>
													<span id="checkout_items" class="checkout_items">
														<?php echo $_SESSION["countcart"];?>
													</span>
												<?php endif;?>
											</a>
										</li>
									</ul>
								</div>
								<div class="hamburger_container col-6 float-right">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						Tài khoản
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
					<?php if(isset($_SESSION['customer_id'])):?>
							<li>
								<a href="index.php?controller=customers&action=update&id=<?php echo $_SESSION['customer_id'];?>">
									<span><p class="font-italic main_color m-0" >
										<?php if(!empty($_SESSION['customer_name'])) echo $_SESSION['customer_name']; else echo $_SESSION['customer_phone'];?></p> 
									</span>
								</a>
							</li>
							<li>
								<a href="index.php?controller=orders">
									<span>Lịch sử giao dịch</span>
								</a>
							</li>
							<li>
								<a href="index.php?controller=login&action=logout">
									<i class="fa fa-sign-out"></i> <span>  Đăng xuất</span>
								</a>
							</li>
						<?php else:?>
							<li><a href="index.php?controller=login&action=login"><i class="fa fa-sign-in" aria-hidden="true"></i>  Đăng nhập</a></li>
							<li><a href="index.php?controller=customers&action=register"><i class="fa fa-user-plus" aria-hidden="true"></i>  Đăng kí</a></li>
							
						<?php endif;?>
					</ul>
				</li>
			
				<li class="menu_item"><a href="index.php">Trang chủ</a></li>
				<li class="menu_item"><a href="index.php?controller=carts">Giỏ hàng 
					<?php if(!empty($_SESSION["countcart"])):?>
						<div class="hamburger_menu_checkout float-right">
							<span id="checkout_items" class="checkout_items">
								<?php echo $_SESSION["countcart"];?>
							</span>
						</div>
					<?php endif;?></a>
				</li>
				
				<li class="menu_item"><a href="index.php?controller=news">Tin tức</a></li>
				<li class="menu_item"><a href="#">Giới thiệu</a></li>
				<li class="menu_item">
					<div class="input-group">
					  <input type="search" class="form-control rounded" placeholder="Nhập sản phầm cần tìm..." aria-label="Search" aria-describedby="search-addon" />
					  <button type="button" class="btn btn-outline-primary">Tìm</button>
						

					</div>
				</li>
			</ul>
		</div>
		
	</div>
	<!-- Main content -->
	 
    <section style="margin-top: 100px;">
        <?php echo $this->view; ?>
    </section>
    
    <!-- /.content -->
	 
	<div class="bottom-0">
	<!-- Newsletter -->

		<div class="newsletter mt-5 container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Nhận tin tức</h4>
						<p>Theo dõi để nhận ưu đãi mới nhất của chúng tôi</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Nhập email của bạn" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Footer -->
<footer class="footer">
	<div id="footer-wp">
    <div id="foot-body">
        <div class="wp-inner clearfix">
            <div class="block" id="info-company">
                
                <h4 class="title"> CÔNG TY CỔ PHẦN TIN HỌC Viết Sơn </h4>
                <p class="desc">CÔNG TY CỔ PHẦN TIN HỌC VIẾT SƠN luôn cung cấp luôn là sản phẩm chính hãng có thông tin rõ ràng, chính sách ưu đãi cực lớn cho khách hàng có thẻ thành viên.</p>
                <!-- <img src="assets/images/logo VS_new.png" alt=""> -->
                <div id="payment">
                </div>
            </div>
            <div class="block menu-ft" id="info-shop">
                <h4 class="title">Thông tin cửa hàng</h4>
                
                <ul class="list-item">
                    <li>
                        <p>(028)39293770 - (028)39293765 </p>
                    </li>
                    <li>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=support@gmail.com" title="">support@gmail.com</a>
                    </li>

                    <b>CHI NHÁNH HÀ NỘI</b>
                    <li>
                        <p>Tầng 4, Tòa nhà Viet Tower, số 01 phố Thái Hà, P.Trung Liệt, Q. Đống Đa, TP Hà Nội</p>
                    </li>
                    
                    <b>TRỤ SỞ CHÍNH & TTBH HCM</b>
                    <li>
                        <p>150 Ter, đường Bùi Thị Xuân, phường Phạm Ngủ Lão, Quận 1, TP. Hồ Chí Minh</p>
                    </li>
                   
                </ul>
            </div>
            <div class="block menu-ft policy" id="info-shop">
                <h4 class="title">Chính sách mua hàng</h4>
                <ul class="list-item">
                    <li>
                        <a href="/" title="">Quy định - chính sách</a>
                    </li>
                    <li>
                        <a href="/" title="">Chính sách bảo hành - đổi trả</a>
                    </li>
                    <li>
                        <a href="/" title="">Chính sách hội viện</a>
                    </li>
                    <li>
                        <a href="/" title="">Giao hàng - lắp đặt</a>
                    </li>
                    <li>
                        <a href="/" title="">Chính sách thanh toán </a>
                    </li>
                    <!-- <div class="thumb">
                        <img src="public/images/1.png" alt="">
                    </div>  -->
                </ul>
            </div>
                

            <div class="block" id="newfeed">
                <h4 class="title">Bảng tin</h4>
                <p class="desc">Đăng ký để nhận tin tức ưu đãi sớm nhất từ chúng tôi</p>
                <div id="form-reg">
                    <form method="POST" action="">
                        <input type="email" name="email" id="email" placeholder="Nhập email tại đây">
                        <button type="submit" id="sm-reg">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  <div id="foot-bot">
        <div class="wp-inner">
        <p style="color: #FFFFFF">&copy; <span id="current-year"><script>document.write (new Date().getFullYear());</script> Bản quyền thuộc về CÔNG TY CỔ PHẦN TIN HỌC</span> <a href="https://vietsontdc.vn/" ref="nofollow" style="color: #FFFFFF" target="_blank">VIẾT SƠN</a></p>
        </div>
    </div>
					</div>
    <style>
	/*FOOTER*/
#footer-wp #foot-body{ padding: 50px 0px;}
#footer-wp #foot-body .block{ float: left; width: 25%; padding-left: 30px;}
#footer-wp #foot-body .block:first-child{ padding-left: 0;}
#info-company .title{
    font-size: 28px;
    font-family: "Arial", "sans-serif", "important";
    font-weight: normal;
    color: #da1818;
    text-transform: uppercase;
    margin-bottom: 25px;
}
#info-company .desc, #newfeed .desc{
    font-family: 'Roboto Light';
    text-align: justify;
    color: #6d6d6d;
    margin-bottom: 25px;
}
.menu-ft .title, #newfeed .title{
    font-size: 20px;
    margin-bottom: 25px;
}
.menu-ft .list-item li{ margin-bottom: 10px;}
.menu-ft .list-item li:last-child{ margin-bottom: 0;}
.menu-ft .list-item li p{
    position: relative;
    color: #000;
    font-family: 'Roboto Light';
    padding-left: 25px;
}
.menu-ft .list-item li:nth-child(1) p:before, .menu-ft .list-item li:nth-child(2) p:before, .menu-ft .list-item li:nth-child(3) p:before{
    position: absolute;
    font-family: 'FontAwesome';
    top: 0;
    left: 0;
}
.menu-ft .list-item li:nth-child(1) p:before{ content: '\f041';}
.menu-ft .list-item li:nth-child(2) p:before{ content: '\f095';}
.menu-ft .list-item li:nth-child(3) p:before{ content: '\f0e0';}
#info-shop .list-item li a{
    position: relative;
    color: #000;
    font-family: 'Roboto Light';
    padding-left: 20px;
}
#info-shop .list-item li a:before{
    position: absolute;
    content: '';
    top: 50%;
    left: 0;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: #da1818;
    transform: translateY(-50%);
}
#form-reg #email{
    display: block;
    width: 100%;
    padding: 6px 10px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
}
#form-reg #sm-reg{
    display: block;
    width: 100%;
    background: #da1818;
    border: none;
    outline: none;
    padding: 10px 0px;
    text-transform: uppercase;
    color: #fff;
    font-family: 'Roboto Medium';
    line-height: normal;
}
#form-reg #sm-reg:hover{ background: #c10f0f;}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: #999;
    font-family: 'Roboto Light';
    font-size: 13px;
}
::-moz-placeholder { /* Firefox 19+ */
    color: #999;
    font-family: 'Roboto Light';
    font-size: 13px;
}
:-ms-input-placeholder { /* IE 10+ */
    color: #999;
    font-family: 'Roboto Light';
    font-size: 13px;
}
:-moz-placeholder { /* Firefox 18- */
    color: #999;
    font-family: 'Roboto Light';
    font-size: 13px;
}
#foot-bot{
    background: #da1818;
    text-align: center;
    padding: 10px 0px;
}
#foot-bot #copyright{
    color: #fff;
    line-height: normal;
    font-family: 'Roboto Light';
}
    </style>
    

</div>
</div>

			</div>
		</footer>
	</div>
</div>

		<div class=" float-right " style=" z-index:2;position: fixed;right:5px;bottom: 50px;" data-toggle="modal" data-target="#dialog1">
			<img style="width: 150px;" src="assets/upload/user/rosa.gif">
			
		</div>
<div class="modal fade" id="dialog1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="p-3 float-right"><i class="fa fa-times float-right" data-dismiss="modal" aria-hidden="true"></i></div>
            <div class="modal-header p-0">
				<div class="container text-center h-100">
					<h4 class="text-white-50 mb-5">Liên hệ với chúng tôi</h4>
				</div>
			</div>
            <div class="modal-body pt-0">
				<form id="review_form" method="post" class="mt-3"
				action="index.php?controller=feedbacks&action=createFeedbacks"> 
				<div>
					<h5>Thông tin cá nhân</h5>
					<input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" 
					value="<?php echo isset($_SESSION['customer_name'])?$_SESSION['customer_name']:'';?>">
					<input id="review_email" class="form_input input_email" type="email" name="email"  placeholder="Email*" required="required" 
					value="<?php echo isset($_SESSION['customer_email'])?$_SESSION['customer_email']:'';?>">
					<a href="https://zalo.me/0909613837" target="_blank">Liên hệ qua Zalo</a>

				</div>
				<div>
					<h5>Góp ý của bạn:</h5>
					
					<textarea  id="content" class="input_review" name="content"  placeholder="Nội dung" rows="4" required data-error="Please, leave us a review."></textarea>
					
				</div>
				<div class="text-left text-sm-right">
					<button type="submit" class="red_button review_submit_btn trans_300" >Gửi đi </button>
					
				</div>
				</form>
            </div>
        
        </div>
    </div>
</div>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/styles/bootstrap4/popper.js"></script>
<script src="assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="assets/plugins/easing/easing.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/products_carts.js"></script>

</body>

</html>
