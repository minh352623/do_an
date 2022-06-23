<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/bootstrap.min.css' ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/base.css' ?>">

    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/style.css' ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/product.css' ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/cart.css' ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/DetailProduct.css' ?>">



    <title>Ivy Modal</title>
</head>

<body>

    <div class="app">
        <div class="containers">
            <div class="header">
                <!-- header may tinh -->
                <div class="header_pc d-none d-sm-block">
                    <div class="row">
                        <div class="col-5">
                            <div class="left_logo">
                                <ul>
                                    <li><a href="<?php echo _WEB_HOST_ROOT . '/Home' ?>">Trang chủ</a>

                                    </li>
                                    <li><a href="<?php echo _WEB_HOST_ROOT . '/Product' ?>">Sản phẩm</a>

                                    </li>
                                    <li><a href="">Về Chúng Tôi</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="logo">
                                <a href="">
                                    <!-- <img src="https://hinhanhonline.com/Images/Album/Hinhanhdongvatsinhdong/hinh-anh-dong-vat-sinh-dong-de-thuong-hinhanhonline-0.jpg" alt=""> -->
                                </a>
                            </div>
                        </div>

                        <div class="col-5 d-flex justify-content-end align-items-center">
                            <div class="icon_shop">
                                <div class="search">
                                    <button><img src="<?php echo _WEB_HOST_TEMPLATE . '/image/icons8-search-50.png' ?>" alt=""></button>
                                    <input type="text" placeholder="TÌM KIẾM SẢN PHẨM">
                                </div>
                                <div class="right_icon">
                                    <a href=""><i class="fa fa-headphones"></i></a>
                                    <span id="js__box_user"><i class="fa fa-user"></i>
                                        <ul class="option_user">
                                            <li><a href="">Cập nhật thông tin</a></li>
                                            <li><a href="<?php echo _WEB_HOST_ROOT . '/MyBill' ?>">Đơn hàng của bạn</a></li>

                                            <li><a href="">Quên mật khẩu</a></li>

                                            <li><a href="Login/Out">Thoát</a></li>
                                            <li><a href="Admin">Đăng nhập admin</a></li>

                                        </ul>
                                    </span>
                                    <a class="js__formcart"><i class="fa fa-bag-shopping"></i>
                                        <?php
                                        if (isset($_SESSION['cart'])) {
                                            $number = 0;
                                            foreach ($_SESSION['cart'] as $item) {
                                                $number += $item['soluong'];
                                            }
                                            echo '<span>' . $number . '</span>';
                                        }
                                        ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header mobile   -->
                <div class="header_mobile d-block d-sm-none">
                    <div class="row">
                        <div class="list_menu-mobile">
                            <a href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                            <a href=""><img src="./image/logo.png" alt=""></a>
                            <a href="javascript:void(0)"><i class="fa fa-bag-shopping"></i>
                                <span class="number_cart">3</span>
                            </a>

                        </div>
                    </div>
                </div>

            </div>