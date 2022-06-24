<div class="main">
    <div class="container pt-5 mt-5 info-user">

        <div class="row mt-3">
            <div class="col-lg-3 info_left" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="1000">

                <div class="info_image">
                    <img src="<?php echo isset($data['info']) && $data['info']['image'] != "" ? _WEB_HOST_ROOT . '/uploads/' . $data['info']['image'] : "https://ss-images.saostar.vn/wp700/pc/1613810558698/Facebook-Avatar_3.png" ?>" alt="">
                </div>
                <div class="info_name mt-4">
                    <h3><?php echo isset($data['info']) ? $data['info']['name'] : "" ?></h3>
                </div>
                <div class="info_email">
                    <h3><?php echo isset($data['info']) ? $data['info']['email'] : "" ?></h3>
                </div>
                <div class="edit_info mt-4 mb-4">
                    <a class="btn btn-primary edit_info_link px-5" href=" <?php echo _WEB_HOST_ROOT . '/User/edit' ?>">Edit</a>
                </div>

            </div>
            <div class="col-lg-9 info_right" data-aos="fade-down-left" data-aos-easing="linear" data-aos-duration="1000">
                <div class="info_detail pb-5">
                    <div class="info_detail_share info_tq">
                        <h2>Thông Tin</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptas veritatis minima. Quaerat dolorum minus reprehenderit, impedit magni harum fuga id repudiandae! Eaque laboriosam provident obcaecati sit hic et est.</p>
                    </div>
                    <div class="info_detail_share info_about">
                        <h2>Giới thiệu</h2>
                        <p><?php echo isset($data['info']['about']) ? $data['info']['about'] : "" ?></p>
                    </div>
                    <div class="info_detail_share info_contact ">
                        <h2>Liên hệ</h2>
                        <div class="info_contact_detail mb-4">
                            <div class="info_contact_name info_contact_child mt-3">
                                <span>Fullname</span>
                                <span><?php echo isset($data['info']['name']) ? $data['info']['name'] : "" ?></span>
                            </div>
                            <div class="info_contact_email info_contact_child mt-3">
                                <span>Email</span>
                                <span><?php echo isset($data['info']['email']) ? $data['info']['email'] : "" ?></span>
                            </div>
                            <div class="info_contact_tel info_contact_child mt-3">
                                <span>Sô điện thoại</span>
                                <span><?php echo isset($data['info']['sdt']) ? $data['info']['sdt'] : "" ?></span>
                            </div>
                            <div class="info_contact_address info_contact_child mt-3">
                                <span>Địa chỉ</span>
                                <span><?php echo isset($data['info']['diachi']) ? $data['info']['diachi'] : "" ?></span>
                            </div>
                        </div>
                        <video loop autoplay muted id="bg-video-2">
                            <source src="../../live/public/image/Laptop - 61037.mp4" type="video/mp4" />

                        </video>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>