<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php";
?>
    <?php
function dbconnect(){
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "vietson";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT  SoSerial, MaHang, TenHang, NgayXuat, ThoiHanBH FROM sanpham";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
    // if ($result->num_rows > 0) {
    //   // output data of each row
    //   while($row = $result->fetch_assoc()) {
    //     echo "SoSerial: ".$row["SoSerial"]."<br>";
    //         echo "MaHang: " . $row["MaHang"]. "<br>";
    //         echo "TenHang: " . $row["TenHang"]. "<br>";
    //         echo "NgayXuat: " . $row["NgayXuat"]. "<br>";
    //         echo "ThoiHanBH: " . $row["ThoiHanBH"]. "<br>";
    //         echo "------------------------------<br>";
    //   }
    // } else {
    //   echo "0 results";
    // }
};
?>
        <div class="main-content fl-right">
            <div class="section" id="detail-blog-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <p><h3 style="color:dodgerblue;">Tra cứu thông tin sản phẩm </h3> <span style="font-weight: bold; color: #FF0000;"></span></p>
                            </div>
                        </div>
                    </h3>
                </div>
                <div class="section-detail">
                    <span class="create-date">
                        <div class="border border-zinc-300 p-4 rounded mb-4">
                            <form name="test" action="#" method="POST">
                                <input name="search" type="text" placeholder="NHẬP MÃ SERIAL CẦN TÌM" class="border border-zinc-300 p-2 rounded w-full" style="width: 100%;"/>
                            </form>
                        </div>
                    </span>
                </div>
                <?php
            if (isset($_POST['search'])) {
                $search = $_POST['search'];
                $result = dbconnect();
                $flag = 0;

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        if ($row["SoSerial"] === $search) {
                            $flag = 1;

                            // Định dạng kết quả tìm kiếm với màu sắc và kiểu dáng
                            echo '<div style="border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; border-radius: 5px; background-color: #F9F9F9;">';
                            echo '<p><strong style="color:dodgerblue;">Số Serial:</strong> <span style="font-weight: bold; color: #FF0000;">' . htmlspecialchars($row["SoSerial"]) . '</span></p>';
                            echo '<p><strong style="color:dodgerblue;">Mã Hàng:</strong> <span style=" color: #000000;">' . htmlspecialchars($row["MaHang"]) . '</span></p>';
                            echo '<p><strong style="color:dodgerblue;">Tên sản phẩm:</strong> <span style=" color: #000000;">' . htmlspecialchars($row["TenHang"]) . '</span></p>';
                            echo '<p><strong style="color:dodgerblue;">Ngày Xuất:</strong> <span style=" color: #000000;">' . htmlspecialchars($row["NgayXuat"]) . '</span></p>';
                            echo '<p><strong style="color:dodgerblue;">Thời hạn bảo hành:</strong> <span style=" color: #000000;">' . htmlspecialchars($row["ThoiHanBH"]) . '</span></p>';
                            echo '</div>';
                        }
                    }
                }
                if ($flag == 0) {
                    echo '<p style="color: #FF0000; font-weight: bold;">Không tìm thấy <span style="color: #0000FF;">' . htmlspecialchars($search) . '</span> trong cơ sở dữ liệu</p>';
                }
            }
            ?>
            
        

              
            </div>
        </div>


    <style>
        header {
    
    text-align: center;
    padding-bottom: 20px;
}

        
    .bg-blue-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(37 99 235 / var(--tw-bg-opacity));
}
.py-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
}

.border-zinc-300 {
    --tw-border-opacity: 1;
}
.border {
    border-width: 1px;
}
.rounded {
    border-radius: 0.25rem;
}
</style>   
  