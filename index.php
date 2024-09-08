<?php
session_start();
// Load file Connection.php
include "application/Connection.php";    
// Load file Controller.php
include "application/Controller.php";    

$controller = isset($_GET["controller"]) ? $_GET["controller"] : "Home";
$action = isset($_GET["action"]) ? $_GET["action"] : "index";

// Tạo đường dẫn đến file controller
$fileController = "controllers/{$controller}Controller.php";
$classController = "{$controller}Controller";

// Kiểm tra xem file controller có tồn tại không
if (file_exists($fileController)) {
    include $fileController;
    
    // Kiểm tra xem lớp controller có tồn tại không
    if (class_exists($classController)) {
        $obj = new $classController();
        
        // Kiểm tra xem phương thức có tồn tại trong lớp không
        if (method_exists($obj, $action)) {
            $obj->$action();
        } else {
            echo "Error: Method '{$action}' does not exist in controller '{$classController}'.";
        }
    } else {
        echo "Error: Controller class '{$classController}' does not exist.";
    }
} else {
    echo "Error: Controller file '{$fileController}' does not exist.";
}
?>
