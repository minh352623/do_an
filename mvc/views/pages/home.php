<div class="main">
    <div class="title_main">
        <div class="row">


            <div class="col-xl-4 col-sm-12 p-0">
                <div class="bg-color1"><a href="">Free Shipping đơn hàng nguyên giá</a></div>
            </div>
            <div class="col-xl-4 col-sm-12 p-0">
                <div class="bg-color2"><a href="">Bảo hành trọn đời</a></div>
            </div>
            <div class="col-xl-4 col-sm-12 p-0">
                <div class="bg-color3"><a href="">Chính sách thẻ thành viên</a></div>
            </div>


        </div>
    </div>
    <div class="slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div data-aos="flip-right" data-aos-duration="1500" class="swiper-slide"><a href=""><img src="<?php echo _WEB_HOST_TEMPLATE . '/image/banner1.webp"' ?>" alt=""></a></div>
                <div data-aos="flip-right" data-aos-duration="1500" class="swiper-slide"><a href=""><img src="<?php echo _WEB_HOST_TEMPLATE . '/image/banner2.jpg"' ?>" alt=""></a></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="banner mt-5 container-sm">
        <div class="container__banner">
            <div class="row">
                <div class="col-lg-4 text-center" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-easing="linear" data-aos-duration="800">
                    <div class="item_banner">
                        <div class="row">
                            <div class="col-12 text-center ">
                                <a href="" class="image_item">
                                    <img src="<?php echo _WEB_HOST_TEMPLATE . '/image/bot_bn1.png' ?>" alt="">
                                </a>
                                <a class="image_item mt-5">
                                    <img src="<?php echo _WEB_HOST_TEMPLATE . '/image/bot_bn2.png' ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-easing="linear" data-aos-duration="800">
                    <div class="item_banner">
                        <a class="image_item">
                            <img src="<?php echo _WEB_HOST_TEMPLATE . '/image/bot_bn3.png' ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 text-center" data-aos="fade-left" data-aos-anchor-placement="bottom-bottom" data-aos-easing="linear" data-aos-duration="800">
                    <div class="item_banner">
                        <div class="row">
                            <div class="col-12">
                                <a class="image_item">
                                    <img src="<?php echo _WEB_HOST_TEMPLATE . '/image/bot_bn4.png' ?>" alt="">
                                </a>
                                <a class="image_item mt-5">
                                    <img src="<?php echo _WEB_HOST_TEMPLATE . '/image/bot_bn5.png' ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="produca_new product_Sale">
        <h1>SẢN PHẨM SALE</h1>
        <div class="products container">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php
                            if (isset($data['product']) && $data['product']) {
                                $keymain = 0;
                                foreach ($data['product'] as $key => $item) {
                                    if ($key < 7) {

                                        if ($key == $keymain) {
                                            echo '<div class="col-lg-4">
                                            <div class="item_sale item_sale-left">
                                                <div class="sale_img">
                                            <img src="' . _WEB_HOST_ROOT . '/uploads/' . $item['image'] . '" alt="">
                                                    <div class="overlay_sale">
            
                                                        <p class="price">' . product_price($item['price'])  . '</p>
                                                        <div class="add-to-cart cart_sale">
                                                            <a href=""><i class="fa fa-bag-shopping"></i></a>
            
                                                        </div>
                                                        <p class="info_item_sale">' . $item['name'] . '</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                <div class="row h-100">';
                                        } else {
                                            echo '
                                            <div class="col-lg-4 margin">
                                            <div class="item_sale">
                                                <div class="sale_img h-60">
                                               <img src="' . _WEB_HOST_ROOT . '/uploads/' . $item['image'] . '" alt="">
                                                    <div class="overlay_sale">
    
                                                        <p class="price">' . product_price($item['price'])  . '</p>
                                                        <div class="add-to-cart cart_sale  cart_sale_child">
                                                            <a href=""><i class="fa fa-bag-shopping"></i></a>
    
                                                        </div>
                                                        <p class="info_item_sale">' . $item['name'] . '</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            ';
                                        }
                                    }
                                    $keymain += 7;
                                }
                                echo '   </div>
                                </div>';
                            }
                            ?>



                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <?php
                            if (isset($data['product']) && $data['product']) {

                                $keymain = 7;
                                foreach ($data['product'] as $key => $item) {
                                    if ($key >= 7 && $key < 14) {

                                        if ($key == $keymain) {

                                            echo '<div class="col-lg-4">
                                            <div class="item_sale item_sale-left">
                                                <div class="sale_img">
                                                    <img src="' . _WEB_HOST_ROOT . '/uploads/' . $item['image'] . '" alt="">
                                                    <div class="overlay_sale">
            
                                                        <p class="price">' . product_price($item['price'])  . '</p>
                                                        <div class="add-to-cart cart_sale">
                                                            <a href=""><i class="fa fa-bag-shopping"></i></a>
            
                                                        </div>
                                                        <p class="info_item_sale">' . $item['name'] . '</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                <div class="row h-100">';
                                        } else {
                                            echo '
                                            <div class="col-lg-4 margin">
                                            <div class="item_sale">
                                                <div class="sale_img h-60">
                                                <img src="' . _WEB_HOST_ROOT . '/uploads/' . $item['image'] . '" alt="">
                                                    <div class="overlay_sale">
    
                                                        <p class="price">' . product_price($item['price'])  . '</p>
                                                        <div class="add-to-cart cart_sale  cart_sale_child">
                                                            <a href=""><i class="fa fa-bag-shopping"></i></a>
    
                                                        </div>
                                                        <p class="info_item_sale">' . $item['name'] . '</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            ';
                                        }
                                    }
                                }
                                $keymain += 7;
                                echo '   </div>
                                </div>';
                            }
                            ?>



                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="produca_new">
        <h1>SẢN PHẨM MỚI NHẤT</h1>
    </div>

    <div class="produca mt-5">
        <div class="row ">
            <?php
            if (isset($data['product']) && $data['product']) {
                foreach ($data['product'] as $item) {
                    echo '<div data-aos="fade-left"
                    data-aos-anchor-placement="bottom-bottom" data-aos-easing="linear"
                    data-aos-duration="800" class="col-24 produca_item mt-5">
                    <a href="' . _WEB_HOST_ROOT . '/Product/Detail/' . $item['id'] . '"><img src="' . _WEB_HOST_ROOT . '/uploads/' . $item['image'] . '" alt=""></a>
                    <div class="info-ticket ticket-news">new</div>
                  
                    <div class="tittle_produca mt-2">
                        <a href="">' . $item['name'] . '</a>
                    </div>
                    <div class="pricebox mt-4">
                        <span class="price">' . product_price($item['price'])  . '</span>
                    </div>
                    <div class="add-to-cart">
                        <a href=""><i class="fa fa-bag-shopping"></i></a>
    
                    </div>
                  
    
                </div>';
                }
            }
            ?>


        </div>
        <div class="link-product text-center mt-5">
            <a href="<?php echo _WEB_HOST_ROOT . '/Product' ?>" class="all-product">Xem tất cả</a>
        </div>
    </div>




    <div class="gallery mt-5">

        <div class="row mt-5">
            <div class="col-3 box_gallery">
                <a href="">
                    <img src="<?php echo _WEB_HOST_TEMPLATE . '/image/option_shop1.jpg' ?>" alt="">
                </a>
                <div class="content__gallery">

                    <p>WOMEN’S SHORT & JEAN</p>
                    <a href="">SHOP NOW</a>
                </div>

            </div>
            <div class="col-3 box_gallery">
                <a href=""><img src="<?php echo _WEB_HOST_TEMPLATE . '/image/option_shop2.jpg' ?>" alt=""></a>
                <div class="content__gallery">

                    <p>MEN’S SHORT & JEAN</p>
                    <a href="">SHOP NOW</a>
                </div>
            </div>
            <div class="col-3 box_gallery">
                <a href=""><img src="<?php echo _WEB_HOST_TEMPLATE . '/image/option_shop3.jpg' ?>" alt=""></a>
                <div class="content__gallery">

                    <p>WOMEN’S SHORT & JEAN</p>
                    <a href="">SHOP NOW</a>
                </div>
            </div>
            <div class="col-3 box_gallery">
                <a href=""><img src="<?php echo _WEB_HOST_TEMPLATE . '/image/option_shop4.jpg' ?>" alt=""></a>
                <div class="content__gallery">

                    <p>WOMEN’S SHORT & JEAN</p>
                    <a href="">SHOP NOW</a>
                </div>
            </div>

        </div>

    </div>


</div>