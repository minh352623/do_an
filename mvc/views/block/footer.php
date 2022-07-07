            <div class="footer mt-5">
                <div class="container-footer py-5">
                    <div class="row text-start">
                        <div class="col-lg-3 ">
                            <a href="<?php echo _WEB_HOST_ROOT . '/Home' ?>" class="image-logo">
                                <img src="<?php echo _WEB_HOST_TEMPLATE . '/image/logo_web.png' ?>" alt="">
                            </a>
                            <div class="footer-info py-3">
                                <div class=" my-3 footer-address">
                                    <span>Địa chỉ:</span>
                                    <span>Ninh kiều,Cần Thơ</span>
                                </div>
                                <div class=" my-3 footer-tel">
                                    <span>Số điện thoại:</span>
                                    <span>0123456789</span>
                                </div>
                                <div class=" my-3 footer-email">
                                    <span>Email:</span>
                                    <span>minh@gmail.com</span>
                                </div>
                            </div>
                            <div class="footer-social my-3">
                                <ul>
                                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-google"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-instagram-square"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 mt-2 ">
                            <h2 class="fs-1">Giới Thiệu</h2>
                            <div class="footer-about_list py-3">
                                <ul>
                                    <li class="my-3"><a href="">Về cửa hàng</a></li>
                                    <li class="my-3"><a href="">Tuyển dụng</a></li>
                                    <li class="my-3"><a href="">Hệ thống cửa hàng</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 mt-2 ">
                            <h2 class="fs-1">Liên hệ</h2>
                            <div class="footer-about_list py-3">
                                <ul>
                                    <li class="my-3"><a href="">Hotline</a></li>
                                    <li class="my-3"><a href="">Email</a></li>
                                    <li class="my-3"><a href="">Message</a></li>
                                    <li class="my-3"><a href="">Liên hệ</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="container-form">

                                <form action="" method="post" class="form_contact-footer">
                                    <h2>Nhân thông tin các chương trình của cửa hàng chúng tôi</h2>
                                    <div class="form-group mt-5">
                                        <input type="text" placeholder="Nhập đại chỉ email">
                                        <input type="button" class="register_footer" name="register_footer" value="Đăng ký">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <span class="py-5">©CNTTA7 All rights reserved</span>
            </div>

            <div class=" menu_mobile_modal d-block d-sm-none">

                <a href="" class="box_login">Đăng nhập</a>

                <ul>
                    <li><a href="#">Nữ<span class="icon_more">+</span></a>
                        <ul>
                            <li><a href="">Nữ menu</a></li>
                            <li><a href="">Nữ menu</a></li>
                            <li><a href="">Nữ menu</a></li>
                            <li><a href="">Nữ menu</a></li>
                            <li><a href="">Nữ menu</a></li>
                            <li><a href="">Nữ menu</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Nam<span class="icon_more">+</span></a>
                        <ul>
                            <li><a href="">Nam menu</a></li>
                            <li><a href="">Nam menu</a></li>
                            <li><a href="">Nam menu</a></li>
                            <li><a href="">Nam menu</a></li>
                            <li><a href="">Nam menu</a></li>
                            <li><a href="">Nam menu</a></li>
                        </ul>
                    </li>
                    <li><a href="">Trẻ em<span class="icon_more">+</span></a></li>
                    <li><a href="">Ưu đãi tháng 5<span class="icon_more">+</span></a></li>
                    <li><a href="">Bộ sưu tập<span class="icon_more">+</span></a></li>
                    <li><a href="">LIFESTYLE</a></li>
                    <li><a href="">About Us<span class="icon_more">+</span></a></li>
                </ul>
            </div>

            </div>
            </div>

            <!-- form hien gio hang -->

            <div class="form_cart">

                <div class="cart_container">
                    <div class="header_cart">
                        <h2>Giỏ hàng
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $number = 0;
                                foreach ($_SESSION['cart'] as $item) {
                                    $number += $item['soluong'];
                                }
                                echo '<span class="js__numberincart">' . $number . '</span>';
                            }
                            ?>

                        </h2>
                        <span class="btn_close"><i class="fa fa-close"></i></span>
                    </div>
                    <div class="body_cart">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $item) {
                                if (isset($item['id']) && $item['id']) {

                                    echo '<div class="product_item" data-id="' . $item['id'] . '">
                                <div class="product_item_img">
                                    <img src="' . _WEB_HOST_ROOT . '/uploads/' . $item['image'] . '" alt="">
                                </div>
                                <div class="product_item_text">
                                    <span>' . $item['name'] . '</span><br>
                                 
                        
                                    <div class="number_price">
                                        <div class="cart_list_left">
                                            <div hreff="' . _WEB_HOST_ROOT . '" class="cart_item_left cart_item_number">-</div>
                                            <span class="num_cart">' . $item['soluong'] . '</span>
                                            <div hreff="' . _WEB_HOST_ROOT . '" class="cart_item_right cart_item_number">+</div>
                                        </div>
                        
                                        <div class="price_cart">
                                            <span>' . $item['price'] . '<b>đ</b></span>
                                        </div>
                                    </div>
                        
                                </div>
                            </div>';
                                }
                            }
                        }

                        ?>




                    </div>

                    <div class="footer_cart">
                        <div class="total_price">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $money = 0;
                                foreach ($_SESSION['cart'] as $item) {
                                    if (isset($item['id']) && $item['id']) {

                                        $money += $item['soluong'] * $item['price'];
                                    }
                                }
                                echo '<span>Tổng cộng: <b>' . product_price($money) . '</b></span>';
                            }
                            ?>

                        </div>
                        <div class="login_cart_box">
                            <a class="login_cart" href="<?php echo _WEB_HOST_ROOT . '/Cart' ?>">Xem Giỏ Hàng</a>
                        </div>


                    </div>

                </div>

            </div>




            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    spaceBetween: 30,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                });
            </script>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

            <script>
                AOS.init();
            </script>
            <script src="<?php echo _WEB_HOST_TEMPLATE . '/js/jquery.min.js' ?>"></script>
            <script src="<?php echo _WEB_HOST_TEMPLATE . '/js/bootstrap.min.js' ?>"></script>
            <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js"></script>

            <script src="<?php echo _WEB_HOST_TEMPLATE . '/js/main.js' ?>"></script>
            <script src="<?php echo _WEB_HOST_TEMPLATE . '/js/footer.js' ?>"></script>

            <script src="<?php echo _WEB_HOST_TEMPLATE . '/js/boxmodal.js' ?>"></script>
            <script src="<?php echo _WEB_HOST_TEMPLATE . '/js/product.js' ?>"></script>


            </body>

            </html>