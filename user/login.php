<?php
    // Bắt đầu phiên
    session_start();

    // Thay các thông tin cần thiết vào các giá trị sau
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "website_ivydemo";

    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error) {
        die("Kết nối đến cơ sở dữ liệu không thành công: " . $con->connect_error);
    }
    // Kiểm tra thông tin đăng nhập
    if ($stmt = $con->prepare('SELECT id, password FROM tb_user WHERE username = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        // Lưu trữ kết quả để kiểm tra xem tài khoản có tồn tại trong cơ sở dữ liệu hay không.
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();
            if (password_verify($_POST['password'], $password)) {
            
                if (session_status() == PHP_SESSION_ACTIVE) {
                    session_regenerate_id();
                }
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;

                //Ghi log vào database
                $datetime = date('Y-m-d H:i:s');
                if ($stmt2 = $con->prepare('INSERT INTO login_logs (user_id, login_time) VALUES (?, ?)')) {
                    $stmt2->bind_param('is', $id, $datetime);
                    $stmt2->execute();
                    $stmt2->close();
                }
                header('Location: welcome.html');
            } else {
                echo 'Sai mật khẩu';
            }
        } else {
            echo 'Tài khoản không tồn tại';
        }
        $stmt->close();
    }
?>
