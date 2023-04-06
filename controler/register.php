<?php
  // Kết nối đến cơ sở dữ liệu
  $conn = mysqli_connect("localhost", "root", "", "website_ivydemo");

  // Kiểm tra kết nối
  if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
  }

  // Lấy thông tin từ form đăng ký
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Kiểm tra xem mật khẩu và xác nhận mật khẩu có khớp hay không
  if ($password != $confirm_password) {
    echo "Mật khẩu và xác nhận mật khẩu không khớp.";
  } else {
    $hashed_password = md5($password);

    // Thêm thông tin người dùng vào bảng "users"
    $sql = "INSERT INTO tb_user (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    


    // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
    
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Thêm thông tin người dùng vào bảng "users"
    //$sql = "INSERT INTO tb_user (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    
    if (mysqli_query($conn, $sql)) {
      echo "Đăng ký tài khoản thành công.";
    ?>
    <a href="login.html">Quay lại đăng nhập</a>
<?php
    } else {
      echo "Đăng ký tài khoản thất bại: " . mysqli_error($conn);
    }
  }

  // Đóng kết nối
  mysqli_close($conn);

?>
