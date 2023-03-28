
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
                            <a href="./user/register.html"> ĐĂNG KÝ </a> <br></br> 
                        </li>
                        <br></br>
                        <li>
                            <a href="./user/login.html"> ĐĂNG NHẬP </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </secsion>

    
    <!-----------------------------------------------slide--------------------------------------------->
    <section class="sliders">
        <div class="aspect-ratio-169">
            <img src="images/slider_1.webp" alt="">
            <img src="images/slider_2.webp" alt="">
            <img src="images/slider_3.webp" alt="">
            <img src="images/slider_4.webp" alt="">
        </div>
        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>

    <!-- -------------------------------cartegory----------------------------- -->
    <section class="cartegory">
        <!-- <div class="container">
            <br>
            <div class="cartegory-top row">
                <br><p>Trang chủ</p> <span>&#10230;</span> <p>Áo-QUẦN</p> <span>&#10230;</span> <p>Hàng mới về</p>
            </div>
        </div> -->
        <div class="container">
            <div class="cartegory-right row">
                <div class="cartegory-right-top-item">  
                    <p>LỰA ÁO Ở ĐÂY NÈ !!!</p>
                </div>
                        <!-- <div class="cartegory-right-top-item">
                            <select name="" id="">
                                <option value="">Sắp xếp</option>
                                <option value="">Giá cao đến thấp</option>
                                <option value="">Giá thấp đến cao</option>
                            </select>
                        </div> -->
                </div>
                    <div class="cartegory-right-content row">
                        <?php
                            include "class/product_class.php";
                        ?>
                        <?php
                            $product = new product;
                            $show_product = $product ->show_product();
                        ?>
                        <?php
                        if($show_product){$i=0;
                            while($result = $show_product->fetch_assoc ()) {$i++;
                        ?>
                        <div class ='container-product'  align-content: center;>
                        <tr>
                            <a href="product.php"><img src="./images/<?php echo $result['product_img'] ?>" alt="Product Image"></a>

                            <!-- <img src="./images/<?php echo $result['product_img'] ?>" href=""> -->
                            <div style= "text-align:center;">
                            <h1><?php echo $result['product_name'] ?></h1>
                            <p> Giá: <?php echo $result['product_price'] ?><sup>đ</sup></p>
                            <a class="btn"href="product_detail.php?product_id=<?php echo $result["product_id"]; ?>">View detail</a>
                            </div>
                        </tr>
                        </div>
                        <?php   
                        }
                        }
                        ?>
                    </div>
                </div>
        </div>
    </section>

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
    <script src="js/slider.js"></script>
    <script src="js/script.js"></script>



</body>
</html>
