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
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/style.css' ?>">

    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/product.css' ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/cart.css' ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/DetailProduct.css' ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/user.css' ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/footer.css' ?>">




    <title>Cloth</title>
</head>

<body>

    <div class="app">
        <div class="containers">
            <div class="header">
                <!-- header may tinh -->
                <div class="header_pc d-none d-sm-block">
                    <div class="row ">
                        <div class="col-5 ">
                            <div class="left_logo ">
                                <ul>
                                    <li><a href="<?php echo _WEB_HOST_ROOT . '/Home' ?>">Trang chủ</a>

                                    </li>
                                    <li><a href="<?php echo _WEB_HOST_ROOT . '/Product' ?>">Sản phẩm</a>

                                    </li>
                                    <li><a href="<?php echo _WEB_HOST_ROOT . '/About' ?>">Về Chúng Tôi</a></li>
                                    <li><a href="<?php echo _WEB_HOST_ROOT . '/Contact' ?>">Liên hệ</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-2 ">
                            <div class="logo">
                                <a href="<?php echo _WEB_HOST_ROOT . '/Home' ?>" class="image-logo-header">
                                    <img src="<?php echo _WEB_HOST_TEMPLATE . '/image/logo_web.png' ?>" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-5  d-flex justify-content-end align-items-center">
                            <div class="icon_shop ">
                                <form action="<?php echo _WEB_HOST_ROOT . '/Product/filterKey_header' ?>" class="search d-flex" method="post">
                                    <div style="min-width:30px;" class="p-2" class="text-center"><img src="<?php echo _WEB_HOST_TEMPLATE . '/image/icons8-search-50.png' ?>" alt=""></div style="width:50px;">
                                    <input type="text" name="keywork_h" placeholder="TÌM KIẾM SẢN PHẨM">
                                    <input type="submit" style="visibility: hidden; max-width:10px" name="filter_product_header" value="Tìm Kiếm">
                                </form>
                                <div class="right_icon">
                                    <a href=""><i class="fa fa-headphones"></i></a>
                                    <span id="js__box_user">
                                        <?php if (isset($_SESSION['user'])) {
                                            if (isset($_SESSION['user']['image']) &&  $_SESSION['user']['image'] != "") {
                                                echo '<img src="' . _WEB_HOST_ROOT . '/uploads/' . $_SESSION['user']['image'] . '" >';
                                            } else {
                                                echo '<i class="fa fa-user">';
                                            }
                                        } else {

                                            echo '<i class="fa fa-user">';
                                        } ?>

                                        </i>
                                        <ul class="option_user">
                                            <li><a href="<?php echo _WEB_HOST_ROOT . '/User'  ?>">Thông tin cá nhân</a></li>
                                            <li><a href="<?php echo _WEB_HOST_ROOT . '/MyBill' ?>">Đơn hàng của bạn</a></li>

                                            <li><a href="">Quên mật khẩu</a></li>

                                            <li><a href="<?php echo _WEB_HOST_ROOT . '/Login/Out' ?>">Thoát</a></li>
                                            <?php
                                            if (isset($_SESSION['user'])) {
                                                if ($_SESSION['user']['role'] == 1) {

                                                    echo '<li><a href="' . _WEB_HOST_ROOT . '/Admin">Đăng nhập admin</a></li>';
                                                }
                                            }

                                            ?>

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