
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6648d6ecb3.js" crossorigin="anonymous"></script>
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
<!-------------------------------------------------CART--------------------------------------------->
    <section class="cart">
        <div class="container">
            <div class="cart-top-wrap">
                <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                       <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="cart-top-adress cart-top-item">
                        <i class="fas fa-map-marker-alt "></i>
                     </div>
                     <div class="cart-top-payment cart-top-item">
                        <i class="fas fa-money-check-alt "></i>
                     </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cart-content row">
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>SL</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                        <tr>
                            <td><img src="images/AnyConv.com__Áo Sweater Acmé de la vie - ACME DE LA VIE X Smiley® BIKER SMILEY FRONT ARTWORK KNIT BEIGE.png" atl="" ></td>
                            <td><p>Áo Sweater Acmé de la vie - ACME DE LA VIE X Smiley® BIKER SMILEY FRONT ARTWORK KNIT BEIGE</p></td>
                            
                            <td><input type="number" value="1" min="1" ></td>
                            <td><p>1.200.000<sup>đ</sup></p></td>
                            <td><span>X</span></td>
                        </tr>
                        <tr>
                            <td><img src="images/AnyConv.com__Áo Sweater Acmé de la vie - ACME DE LA VIE X Smiley® BIKER SMILEY FRONT ARTWORK KNIT BEIGE.png" atl="" ></td>
                            <td><p>Áo Sweater Acmé de la vie - ACME DE LA VIE X Smiley® BIKER SMILEY FRONT ARTWORK KNIT BEIGE</p></td>
                            
                            <td><input type="number" value="1" min="1" ></td>
                            <td><p>1.200.000<sup>đ</sup></p></td>
                            <td><span>X</span></td>
                        </tr>
                    </table>
                </div>
                <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                        </tr>
                        <tr>
                            <td>TỔNG SẢN PHẨM</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>TỔNG TIỀN HÀNG</td>
                            <td><p>1.200.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td>TẠM TÍNH</td>
                            <td><p style="color:black; font-weight: bold;">1.200.000<sup>đ</sup></p></td>
                        </tr>
                    </table>
                    <div class="cart-content-right-button">
                        <button>
                            <a href="./index.php">TIẾP TỤC MUA SẮM</a>
                        </button>
                        <button>
                            <a href="./delivery.php">THANH TOÁN</a>
                        </button>
                        
                    </div>
                    <div class="cart-content-right-dangnhap">
                        <p>TÀI KHOẢN</p> <br>
                        <p>Hãy<a href=""> Đăng nhập </a>tài khoản của bạn để tích điểm thành viên</p>
                    </div>

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