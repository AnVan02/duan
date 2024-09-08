<?php 
	//load file layout.php
	$this->layoutPath = "Layout.php";
 ?>

<?php

require_once ('vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\IOFactory;

// Database connection
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "sanpham"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["import"])) {
    // Check if file was uploaded
    if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES["file"]["tmp_name"];
        
        // Load the Excel file
        $spreadsheet = IOFactory::load($fileTmpPath);
        $worksheet = $spreadsheet->getActiveSheet();
        $data = $worksheet->toArray();

        // Prepare the SQL statement
    
        $stmt = $conn->prepare("INSERT INTO sanpham (SoSerial, MaHang, TenHang, NgayXuat, ThoiHanBH) VALUES (?, ?, ?, ?, ?)");
        if ($stmt === false){
            die("Error preparing statement: " . $conn->error);
        }

        // Loop through the rows (skipping the header row)
        foreach ($data as $key => $row) {
            if ($key === 0) { // Assuming the first row is the header
                continue;
            }

            $so_serial = $conn->real_escape_string($row[0]);
            $mahang = $conn->real_escape_string($row[1]);
            $tenhang = $conn->real_escape_string($row[2]);
            $ngayxuat = $conn->real_escape_string($row[3]);
            $thoihanbh = $conn->real_escape_string($row[4]);
            // upload code 
            $required_columns = [
                'SoSerial', 'MaHang', 'TenHang','NgayXuat', 'ThoiHanBH'
            ];
            
            // Chỉ số cột theo thứ tự trong cơ sở dữ liệu
            $column_indices = [
                'SoSerial' => 0,
                'MaHang' => 1,
                'TenHang' => 2,
                'NgayXuat' => 3,
                'ThoiHanBH' => 4,
                
            ];

            // Bind parameters and execute the statement
            $stmt->bind_param("sssss", $so_serial, $mahang, $tenhang, $ngayxuat, $thoihanbh);
            if (!$stmt->execute()) {
                echo "Error: " . $stmt->error . "<br>";
            }
        }

        $stmt->close();
        $conn->close();

        echo "<script>alert('Cập nhập dữ liệu thành công!'); window.location.href='index.php';</script>";
    } else {
        echo "Error uploading file.";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <title>Import dữ liệu</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        
        .container {
            background-color: #E5E9F0; /* Màu nền của container */
            padding: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            color: #495057; /* Màu của nhãn (label) */
        }
        .form-control {
            border-color: #FFFF66; /* Màu viền của ô nhập liệu */
        }
        .btn-primary {
            background-color: #0099FF; /* Màu nền của nút */
            border-color: #007bff; /* Màu viền của nút */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Màu nền của nút khi hover */
            border-color: #004085; /* Màu viền của nút khi hover */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Nhập dữ liệu Excel</h2>
        <form action="import.php" method="post" enctype="multipart/form-data">
        <div class="col-md-4 ">
     <!-- <img src="public/images/2.png" height="200px" width="350px"> --> 
        </div>
            <div class="form-group">
                <label for="fileInput">Chọn file Excel </label>
                <input type="file" class="form-control" name="file" id="fileInput" required>
            </div>

            <button type="submit" class="btn btn-primary" name="import">Import</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

