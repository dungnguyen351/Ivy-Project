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
$product_id="";
if(isset($_GET["product_id"]))
{
    $product_id =$_GET["product_id"];
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6648d6ecb3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/mainstyle.css">
    <title>Ivy-Project</title>
</head>
<body>
    <secsion class="top">
        <div class="container">
            <div class="row">
                <div class="top-logo">
                    <a href="index.php">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="top-menu-items">
                    <ul>
                        <li><a href="">Đây là website bán chuyên - Mọi thông tin vui lòng liên hệ: 0799982374 </a>
                            
                        </li>
                    </ul>
                </div>
                <div class="top-menu-icons">
                    <ul>
                        <li> 
                            <input  type="text" placeholder=" Tìm kiếm">
                            <i class="fas fa-search"> </i>
                        </li>
                        <li> 
                            <a class="fa fa-user-secret"> </a>
                        </li>
                        <li> 
                        <a href="./cart.php" class="fa fa-shopping-cart"></a>
                        </li>
                        <li>
                            <a href="./user/register.html">ĐĂNG KÝ</a> | <a href="./user/login.html">ĐĂNG NHẬP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </secsion>
    <br></br>
    <br></br>
    <br></br>
    <br></br>

    <h1 style="text-align:center;">CHI TIẾT SẢN PHẨM </h1>
    
        <div class="" style="text-align:center;">
            <?php
    
            $select_products = mysqli_query($conn,"SELECT * FROM tbl_product WHERE product_id= $product_id");
                    if (mysqli_num_rows($select_products)>0) {
                        while($fetch_products=mysqli_fetch_assoc($select_products)){
                            ?>
                         
                        <div class="product_detail_img">
                            <img src="./images/<?php echo $fetch_products['product_img']; ?>"style ="width:30%;">
                        </div>   
                        <div>
                            <form method="POST" action="addcart.php?product_id=<?php echo $fetch_products['product_id'] ?>">
                                <div>
                                    <h3><?php echo $fetch_products['product_name']; ?></h3>
                                    <div class="price">Price:<?php echo $fetch_products['product_price']; ?> VND</div>
                                    <div class="desc"><?php echo $fetch_products['product_desc'];?> </div>
                                </div>

                                <button class="btn"<?php echo $fetch_products["product_id"]; ?>>Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                        
                        <?php
                            }
                        }          ?> 
                        
            

        </div>
    
    <!-----------------------------------------------footer--------------------------------------------->
    <section class="footer">
        <div class="footer-container">
            <p>Tải ứng dụng</p>
            <div class="app-google">
                <a href=""><img src="images/apple.jpg" alt=""></a>
                <a href=""><img src="images/chplay.png" alt=""></a>
            </div>
            <p>Nhận bản tin</p>
            <div class="input-email">
                <input type="text" placeholder="Nhập email của bạn...">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div class="footer-items">
                <li><a href=""><img src="images/BoCongThuong.png" alt=""></a></li>
                <li><a href=""><img src="" alt=""></a>Liên hệ</li>
                <li><a href=""><img src="" alt=""></a>Tuyển dụng</li>
                <li><a href=""><img src="" alt=""></a>Giới thiệu</li>
                <li>
                    <a href="" class="fab fa-facebook-f"></a>
                    <a href="" class="fab fa-twitter"></a>
                    <a href="" class="fab fa-youtube"></a>
                </li>
            </div>
            <div class="footer-text">
                <p>
                    Công ty TNHH MTV Ivy với số đăng ký kinh doanh: 121212121212 <br>
                Địa chỉ đăng ký: 978 Trần Hưng Đạo, Phường 7, Quận 5, TP.Hồ Chí Minh, Việt Nam <br>
                Hotline : <b>079 998 2374</b> 
                </p>
            </div>
            <div class="footer-bottom">
                @Ivy ALL right reserved
            </div>
        </div>
    </section>
</body>
</html>



