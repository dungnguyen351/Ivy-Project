<?php
    session_start();
    if(isset($_SESSION["name"])) {
        $username = $_SESSION["name"];
        echo "<span id='username'>Xin chào, $username</span>"; 
?>
        <div id="login-message">
            <i id="login-icon" class="fa fa-check-circle-o" aria-hidden="true"></i>
            <h1>Đăng nhập thành công</h1>
        </div>

<?php  
    } else {
        echo "Đăng nhập thất bại";
    }
?>
