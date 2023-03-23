<?php
// Kết nối đến cơ sở dữ liệu MySQL của bạn
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_ivydemo";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Truy vấn cơ sở dữ liệu để lấy dữ liệu từ bảng "products"
$sql = "SELECT * FROM tbl_product";
$result = $conn->query($sql);

// Hiển thị dữ liệu
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo  $row["product_img"] ."<br>".  $row["product_name"] ."<br>". $row["product_price"]. "<br>";
  }
} else {
  echo "Không có sản phẩm nào";
}

$conn->close();
?>