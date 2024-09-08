<?php
// load file model 
include "models/PageModel.php"; 
class PageController extends PageModel {
          // kế thừa class PageModel
            use PageModel;
          // Liêt kê 
        public function index() {
          // gọi ham de lấy dữ liệu
          $data =$this ->modelRead();
          $address=$this ->modelGetAddress();
          // load view
          $this->loadView("PageView.php",["data"=>$data,"address"=>address]);
        }
        //createPage 
        public function createCartPage(){
          if (isset($_SESSION["customer_id"])){
            $this->modelpage();
            $_SESSION ["countcart"]=$this ->modelPage();
            header ("location:index.php?controller=page");
          } else {
            $_SESSION["success"] ="hãy nhập số serial cần tìm";
            $url=$_SESSION['url'];
            header ("localhost:$url");
          }
        }
      }
?>
