<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>

<div class="row widthContent">
					<div class="col-lg-6 col-md-12 col-12 wrapbox-content-left">
						<div class="box-info-contact d-none">
							<h2>Thông tin liên hệ</h2>
							<div class="wrapbox-contact">
								<ul class="infoList-contact row">
									<li class="col-md-12 col-xs-12">
										<span><i class="fa fa-map-marker"></i></span>
										<p><strong>Địa chỉ</strong><br>Tầng 4, tòa nhà Flemington, số 182, đường Lê Đại Hành, phường 15, quận 11, Tp. Hồ Chí Minh.</p>
									</li>
									<li class="col-md-12 col-xs-12">
										<span><i class="fa fa-phone"></i></span>
										<p><a class="cta-clicktocall" href="tel:1900000XXX" rel="noopener"><strong>Điện thoại</strong><br>1900.000.XXX</a></p>
									</li>
								</ul>
								<ul class="infoList-contact row">
									<li class="col-md-12 col-xs-12">
										<span><i class="fa fa-calendar"></i></span>
										<p><strong>Thời gian làm việc</strong><br>Thứ 2 đến Thứ 6:  từ 8h đến 18h;<br> Thứ 7 và Chủ nhật:  từ 8h00 đến 17h00</p>
									</li>
									<li class="col-md-12 col-xs-12">
										<span><i class="fa fa-envelope-o"></i></span>
										<p><strong>Email</strong><br> hi@theswan.abc</p>
									</li>
								</ul>
							</div>

						</div> 
						<div class="box-send-contact">
							<h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
							<p>Đăng ký để trở thành Nhà Cung Cấp/ Đại lý của Mai Hoàng.</p>
							<div id="col-left contactFormWrapper">
								<form accept-charset="UTF-8" action="/contact" class="contact-form" method="post">
<input name="form_type" type="hidden" value="contact">
<input name="utf8" type="hidden" value="✓">

								
								<div class="contact-form">
									<div class="row">
										<div class="col-sm-6 col-xs-12">
											<div class="input-group">
												<input required="" type="text" name="contact[name]" class="form-control" placeholder="Tên của bạn" aria-describedby="basic-addon1">
											</div>
										</div>
                    <div class="col-sm-6 col-xs-12">
											<div class="input-group">
                        <select name="contact[infor]" id="infro_contact_page">


                  <option hidden="">Bạn muốn trở thành</option>        
                          <option value="Nhà cung cấp">Nhà cung cấp</option>
                          <option value="Đại lý">Đại lý</option>
                        </select>
											</div>
										</div>
										<div class="col-sm-6 col-xs-12">
											<div class="input-group">
												<input required="" type="text" name="contact[email]" class="form-control" placeholder="Email của bạn" aria-describedby="basic-addon1">
											</div>
										</div>
										<div class="col-sm-6 col-xs-12">
											<div class="input-group">
												<input pattern="[0-9]{10,12}" required="" type="text" name="contact[phone]" class="form-control" placeholder="Số điện thoại của bạn" aria-describedby="basic-addon1">
											</div>
										</div>
										<div class="col-sm-12 col-xs-12">
											<div class="input-group">
												<textarea required="" name="contact[content]" class="page-body-val" placeholder="Nội dung"></textarea>
                        <input class="detailPr" name="contact[body]" type="hidden">
												<div class="sitebox-recaptcha ">
													This site is protected by reCAPTCHA and the Google
													<a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a> 
													and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
												</div>	
											</div>
										</div>
										<div class="col-sm-12 col-xs-12">
											<button class="button dark cta-submitform">Gửi cho chúng tôi</button>
										</div>
									</div>
								</div>
								
<input id="8d22c3e05ad543af84f3d2246cc9eef2" name="g-recaptcha-response" type="hidden" value="03AFcWeA6X2wmTN62cr4YnmdsopjcCxmCp61kpxK6kmv9um0OgnX0VlzRJClzK3n9Sv1vzPJNqbXBr8SjCkif9Q6eJjQaocZeCvXRsSOlg7ZPlx-OEzZ2RxCbzt3GNi4dWT-IQI5-PFnnjhq4kImVT_6WU8VGr-Vm5NOQL6DYii1xlD7UEfXMSuW9yTxdtYssi1xowJkDYcgJvcOSm5SdN1k0REZ0ojNrm8Nsbq6uSJH5FxlHQu37I2lMtWgO0C3_AEqGUpws6jGk30eOc7Wq0QW508XC7lACBmu76Lp5pWj8aEzTKykYrO53v2Kc5sCnsZUikKotT-q0W5TtL5DpRYkRUAKBZ_QpQBWj3XY9YttxDhRj-gvqFpKX2dHafbjho1_ok9mhZed1yK6BHrEp3or9RkjsygIORXYpDPPGMLrEjuJLyvFz_s5eQFy-TAiLxTPhM52cCMvKPVp2pjRV8YKjwoFwNvTo2VMNxdLGc9g63r30NBx9uGuPc1SRhxSnKhBn-VVgs83_9Dx4SpUfbA-uzTn0lRFEhGTgXcOzF57IGYmvceoxfoWo9qgmRwz5nD1bXJdqt6a2dXDmCWyy905_9j3iCqu5Ex9KTh5j0tbZ6zXNyE59tHe1SBW1gHlrpLBeiaKf4ouaXs-ObbH5JqP_VttYd6XYzYkM4uLcjwYsqroMYL7ts1-zVtTmVeVTbrN7wYVyFSnvEZYVbFNDbhi2MyM4ToP4o0hlkEAIwZs32Zwrj9em-LzzNKlvb5Xx0UpFxDl_of6ZtVgocUya05rCAHkfiXvUQjkme4yNzNvn5kqUgBeF1tuX3N03jlF8bGXeZL9lJSh21E_dskRN5R1jJryOd8bHAKA"><script src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('8d22c3e05ad543af84f3d2246cc9eef2').value = token;});});</script></form>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-12 wrapbox-content-right">
							
						</div>
				</div>
               <style>
                    /* Container cho toàn bộ nội dung */
.row.widthContent {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
}

/* Phần bên trái */
.wrapbox-content-left {
    padding: 0 15px;
}

.box-info-contact {
    margin-bottom: 30px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.box-info-contact h2 {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
}

.wrapbox-contact ul.infoList-contact {
    list-style: none;
    padding: 0;
    margin: 0;
}

.wrapbox-contact ul.infoList-contact li {
    margin-bottom: 15px;
}

.wrapbox-contact ul.infoList-contact li span {
    display: inline-block;
    margin-right: 10px;
}

.wrapbox-contact ul.infoList-contact li p {
    margin: 0;
    color: #555;
    font-size: 1rem;
}

.wrapbox-contact ul.infoList-contact li a {
    color: #007bff;
    text-decoration: none;
}

.wrapbox-contact ul.infoList-contact li a:hover {
    text-decoration: underline;
}

.box-send-contact {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.box-send-contact h2 {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 15px;
}

.box-send-contact p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 20px;
}

.contact-form {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.contact-form .input-group {
    margin-bottom: 15px;
}

.contact-form .form-control,
.contact-form .page-body-val {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.contact-form .form-control::placeholder,
.contact-form .page-body-val::placeholder {
    color: #888;
}

.contact-form button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
}

.contact-form button:hover {
    background-color: #0056b3;
}

.sitebox-recaptcha {
    font-size: 0.875rem;
    color: #666;
    margin-top: 10px;
}

               </style>