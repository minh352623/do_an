<div class="main">
    <div class="image_about">
        <img src="<?php echo _WEB_HOST_TEMPLATE . '/image/product_banner.webp' ?>" alt="">
        <div class="image_content">
            <h2><?php echo $data['path'] ?></h2>
            <div class="path_page">
                <span>Trang chủ</span><span> / </span>
                <span><?php echo $data['path'] ?></span>
            </div>
        </div>
    </div>
    <div class="container pt-5 container_about">
        <div class="row pt-5">
            <div class="col-lg-6">
                <video loop autoplay muted id="bg-video-2">
                    <source src="../../live/public/image/Knight - 31210.mp4" type="video/mp4" />

                </video>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="my-3 fs-1 font-weight-bold" style="font-weight:bold;">Dự án Web bán quần áo</h2>
                    <h3 class="fs-4 my-4">Đây là dự án cá nhân được xây dựng bằng những công nghệ.</h3>
                    <ul>
                        <li class="my-3"><i class="fa-brands fa-php"></i> PHP</li>
                        <li class="my-3"><i class="fa-brands fa-js"></i> Juery Ajax</li>
                        <li class="my-3"><i class="fa-brands fa-bootstrap"></i> Bootrap 5</li>
                    </ul>
                </div>
                <a class="link_contact" href="<?php echo _WEB_HOST_ROOT . '/Contact' ?>">Liên hệ</a>
            </div>
        </div>
    </div>
</div>