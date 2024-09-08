<?php
class PageModel {
    // Các phương thức lấy dữ liệu
    public function modelsoserial() {
        // Logic để lấy số serial từ database
        $con=connection :: getInstance ();
        $query =$conn ->query("select*from soserial order by createdate desc limmit 10");
        // lay tat ca ket qua tra ve
        $_REQUEST =$query ->fetchAll();
        return $result;
        
    }

    public function modelmahang() {
        // Logic để lấy mã hàng từ database
        $conn =connection :: getInstance();
        $query =$conn->query ("select*from mahang order by creatrdate desc limmit 10");
        // lay tat ca ket qua tra ve
        $_REQUEST =$query->fetchAll() ;
        return $result;  
    }

    public function modeltenhang() {
        // Logic để lấy tên hàng từ database
        $conn =connectio :: getInstance();
        $query =$conn ->query("select*from tenhang order by creatrdate desc limit 20");
        // 
        $_REQUEST =$query ->fetchAll();
        return $result;
    }

    public function modelngayxuat() {
        // Logic để lấy ngày xuất từ database
        $conn =connectio :: getInstence();
        $query =$conn ->querty("select*from ngayxuat order by creatrdate desc limit 20");
        //
        $_REQUEST=$query ->fetchAll();

        return $result;
        
    }

    public function modelthoihanbh() {
        // Logic để lấy thời hạn bảo hành từ database\
        $conn = connection :: getInstance ();
        $query =$conn ->query ("select * from thoihanbh order by creatrdate desc limit 20");
        // lat tat ca cac ket qua tra ve
        $_REQUEST = $query ->fetchAll();
        return $result;
    }
}
?>
