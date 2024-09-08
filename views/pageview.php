<?php 
	//load file layout.php
	$this->layoutPath = "Layout.php";
    $_SESSION['url']=$_SERVER["REQUEST_URI"];
 ?>
<!-- Đặt file này trong thư mục views -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="sidebar col-sm-12 col-lg-4">
                    <div class="sidebar_title row">
                        <h5>Nhập mã bảo hành</h5>
                    </div>
            <?php forech ($dataCategories as $Categories):?>
                <div class="col-3 col-lg-6">
                <a href="index.php?controller=pageCotroller<?php echo trim($categories->name); ?>">
                    <?php echo $categories ->name ?>
                </a>
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    <!-- Hiển thị dữ liệu tại đây -->
    <div class="border border-zinc-300 p-4 rounded mb-4">
      <form name="test" action="#" method="POST">
        <input name="search" type="text" placeholder="NHẬP MÃ SERIAL CẦN TÌM" class="border border-zinc-300 p-2 rounded w-full" />
        <hr class="mt-4">
        <div class="space-y-2 mt-3">
        <div class="flex justify-between">
     
      </form>
    </div>   
</div>

        <?php endforeach;?>
    </div>
</div>
