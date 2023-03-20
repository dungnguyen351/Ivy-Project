<?php

// Thông tin cấu hình kết nối CSDL
$servername = "localhost"; // Tên server
$username = "root"; // Tên đăng nhập
$password = ""; // Mật khẩu (để trống)
$dbname = "website_ivydemo"; // Tên database được tạo

// Tạo kết nối đến CSDL
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
