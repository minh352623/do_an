<div class="container info-user">
    <form class=" p-5" action="<?php echo _WEB_HOST_ROOT . '/Admin/update_edit_user' ?>" method="post" enctype="multipart/form-data">
        <?php
        if (isset($data['thongbao'])) {

            echo '<h2 class="px-5 py-3 bg-success rounded">' . $data['thongbao'] . '</h2>';
        }
        ?>
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div>
                    <label for="exampleFormControlInput1" class="form-label fs-3">Phân Quyền</label>
                    <select name="role" class="form-select" aria-label="Default select example">
                        <option class="fs-6" value="0" <?php echo $data['info']['role'] == 0 ? 'selected' : "" ?>>Khách hàng</option>
                        <option class="fs-6" value="1" <?php echo $data['info']['role'] == 1 ? 'selected' : "" ?>>Admin</option>

                    </select>
                </div>

            </div>
            <div class="col-lg-6 mb-5">
                <div>
                    <label for="exampleFormControlInput1" class="form-label fs-3">Email</label>
                    <input type="email" name="email" value="<?php echo isset($data['info']) ? $data['info']['email'] : ""  ?>" required style="margin-top:4px !important" class=" form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>

            </div>
            <div class="col-lg-6 mb-5">
                <div>
                    <label for="exampleFormControlInput1" class="form-label fs-3">Họ Tên</label>
                    <input type="text" value="<?php echo isset($data['info']) ? $data['info']['name'] : ""  ?>" name="fullname" required style="margin-top:4px !important" class=" form-control" id="exampleFormControlInput1" placeholder="Nguyễn Văn A...">
                </div>

            </div>
            <div class="col-lg-6 mb-5">
                <div>
                    <label for="exampleFormControlInput1" class="form-label fs-3">Địa Chỉ </label>
                    <input type="text" value="<?php echo isset($data['info']) ? $data['info']['diachi'] : ""  ?>" name="address" required style="margin-top:4px !important" class=" form-control" id="exampleFormControlInput1" placeholder="Tổ, Phường/Xã, Quận/HUyện, Tỉnh/Thành Phố">
                </div>

            </div>
            <div class="col-lg-6 mb-5">
                <div>
                    <label for="exampleFormControlInput1" class="form-label fs-3">Số Điện Thoại</label>
                    <input type="text" name="phone" value="<?php echo isset($data['info']) ? $data['info']['sdt'] : ""  ?>" required style="margin-top:4px !important" class=" form-control" id="exampleFormControlInput1" placeholder="0123456789">
                </div>

            </div>
            <div class="col-lg-6 mb-5">
                <div>
                    <label for="exampleFormControlInput1" class="form-label fs-3">Ảnh Đại Diện</label>
                    <input type="file" name="avatar" style="margin-top:4px !important" class=" form-control" id="exampleFormControlInput1">
                    <?php if (isset($data['info']) && $data['info']['image']) {
                        echo '<img class="mt-5 avatar_update_edit" src="' . _WEB_HOST_ROOT . '/uploads/' . $data['info']['image'] . '">';
                    } else {
                    } ?>
                </div>

            </div>
            <div class="col-lg-6 mb-5">
                <div>
                    <label for="exampleFormControlInput1" class="form-label fs-3">Giới Thiệu</label>
                    <textarea type="text" name="about" style="margin-top:4px !important;resize:none" class=" form-control" id="exampleFormControlInput1" placeholder="Giới Thiệu..."><?php echo isset($data['info']) ? $data['info']['about'] : ""  ?></textarea>
                </div>

            </div>
        </div>
        <div class="col-lg-12 text-end">
            <input type="hidden" name="id" value="<?php echo isset($data['info']) ? $data['info']['id'] : "" ?>">
            <input type="submit" class="btn btn-primary px-5 py-3 fs-4 bg-primary" name="update_info" value="Cập Nhật">
        </div>

    </form>
</div>