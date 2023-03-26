<?php
$servername='localhost';
$username="root";
$password="";
 
try
{
	$conn = mysqli_connect("localhost", "root", "", "website_ivydemo") or die('connection failed');
    $pdo=new PDO("mysql:host=$servername;dbname=website_ivydemo",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
    session_start();
    // Thay các thông tin cần thiết vào các giá trị sau
    // Kiểm tra thông tin đăng nhập
    if ($stmt = $conn->prepare('SELECT id, password FROM tb_user WHERE username = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        
        $stmt->execute();
        // Lưu trữ kết quả để kiểm tra xem tài khoản có tồn tại trong cơ sở dữ liệu hay không.
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();
            
            if (password_verify(md5($_POST['password']), md5($password))) {
            
                if (session_status() == PHP_SESSION_ACTIVE) {
                    session_regenerate_id();
                }
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;

                //Ghi log vào database
               
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
