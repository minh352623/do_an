<div class="main">
    <div class="container pt-5 mt-5 info-user">
        <form class="p-5" action="<?php echo _WEB_HOST_ROOT . '/User/update_edit' ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label fs-3">Email</label>
                        <input type="email" name="email" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['email'] : ""  ?>" required style="margin-top:4px !important" class=" form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                </div>
                <div class="col-lg-6 mb-5">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label fs-3">Họ Tên</label>
                        <input type="text" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['name'] : ""  ?>" name="fullname" required style="margin-top:4px !important" class=" form-control" id="exampleFormControlInput1" placeholder="Nguyễn Văn A...">
                    </div>

                </div>
                <div class="col-lg-6 mb-5">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label fs-3">Địa Chỉ </label>
                        <input type="text" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['diachi'] : ""  ?>" name="address" required style="margin-top:4px !important" class=" form-control" id="exampleFormControlInput1" placeholder="Tổ, Phường/Xã, Quận/HUyện, Tỉnh/Thành Phố">
                    </div>

                </div>
                <div class="col-lg-6 mb-5">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label fs-3">Số Điện Thoại</label>
                        <input type="text" name="phone" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['sdt'] : ""  ?>" required style="margin-top:4px !important" class=" form-control" id="exampleFormControlInput1" placeholder="0123456789">
                    </div>

                </div>
                <div class="col-lg-6 mb-5">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label fs-3">Ảnh Đại Diện</label>
                        <input type="file" name="avatar" style="margin-top:4px !important" class=" form-control" id="exampleFormControlInput1">
                        <?php if (isset($_SESSION['user']) && $_SESSION['user']['image']) {
                            echo '<img class="mt-5 avatar_update_edit" src="' . _WEB_HOST_ROOT . '/uploads/' . $_SESSION['user']['image'] . '">';
                        } else {
                        } ?>
                    </div>

                </div>
                <div class="col-lg-6 mb-5">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label fs-3">Giới Thiệu</label>
                        <textarea type="text" name="about" style="margin-top:4px !important;resize:none" class=" form-control" id="exampleFormControlInput1" placeholder="Giới Thiệu..."><?php echo isset($_SESSION['user']) ? $_SESSION['user']['about'] : ""  ?></textarea>
                    </div>

                </div>
            </div>
            <div class="col-lg-12 text-end">
                <input type="hidden" name="id" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['id'] : "" ?>">
                <input type="submit" class="btn btn-primary px-5 py-3 fs-4 " name="update_info" value="Cập Nhật">
            </div>

        </form>
    </div>
</div>