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
    <div class="container pt-5 ">
        <h2 class="text-center mb-4" style="font-size:5rem;">Liên Hệ</h2>

        <div class="row mt-5 mb-5 container_main contact-us">
            <div class="col-lg-8 p-5 mr-4">
                <h2 class="font-weight-bold mb-5" style="font-size:2.5rem;font-weight:bold">Gửi liên hệ cho chúng tôi</h2>

                <?php
                if (isset($data['thongbao']) && $data['thongbao'] != "") {
                    if (isset($data['type']) && $data['type'] != "") {

                        echo '<h3 class="bg-' . $data['type'] . ' p-3 rounded text-light">' . $data['thongbao'] . '</h3>';
                    }
                }

                ?>
                <form action="<?php echo _WEB_HOST_ROOT . '/Contact/Submit' ?>" method="post" class="form__contact">
                    <div class="row">
                        <div class="col-lg-6" mb-2>

                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="fs-3 form-label">Email </label>
                                    <input type="email" name="email" style="margin-top:4px !important" class="form-control mt-1" placeholder="Email..." id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" mb-2>

                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="fs-3 form-label">Họ tên</label>
                                    <input type="text" name="fullname" style="margin-top:4px !important" class="form-control mt-1" placeholder="Họ và tên..." id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2">

                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="fs-3 form-label">Chủ đề</label>
                                    <input type="text" name="topic" style="margin-top:4px !important" placeholder="Chủ đề muốn đề cập..." class="form-control mt-1" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2">

                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="fs-3 form-label">Nội dung</label>
                                    <textarea type="email" name="message" rows="6" placeholder="Nội dung..." style="margin-top:4px !important" class="form-control mt-1" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            <input type="submit" value="Gửi liên hệ" class="form-control bg-success text-light fs-2 submit_contact" name="contact_action">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 p-5 text-light" style="background-color: #333333;">
                <div class="contact_author contact-address">
                    <h2 class="font-weight-bold" style="font-weight:bold">Địa chỉ liên hệ của chúng tôi</h2>
                    <ul class="address fs-4">
                        <li><i class="fa fa-paper-plane"></i><span>Địa chỉ: </span>Ninh Kiều,Cần Thơ</li>
                        <li><i class="fa fa-phone"></i><span>Hotline: </span>0111111112</li>
                        <li class="email"><i class="fa fa-envelope"></i><span>Email: </span><a href="mailto:congminh352623@gmail.com">congminh352623@gmail.com</a></li>
                    </ul>
                    <ul class="social fs-4">
                        <li class="active"><a href="https://www.facebook.com/profile.php?id=100007993909213"><i class="fa-brands fa-facebook"></i>Like Us facebook</a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i>Follow Us twitter</a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i>Follow Us linkedin</a></li>
                        <li><a href="#"><i class="fa-brands fa-behance"></i>Follow Us behance</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-100">

            <iframe class="w-100" src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.841518408624!2d105.76842661471194!3d10.02993369283066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zxJDhuqFpIGjhu41jIEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1656253320650!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>