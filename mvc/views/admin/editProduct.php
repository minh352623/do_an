<?php


print_r($data['product']);
if (isset($data['product']['image'])) {
    extract($data['product']);
    $link = _WEB_HOST_ROOT . '/uploads/' . $data['product']['image'];
    $image2 = '<img style="width:150px;" src="' . $link . '">';
}

?>
<div class="row">
    <div class="row frmtitle">
        <H1>THÊM MỚI SẢN PHẨM</H1>
    </div>
    <div class="row frmcontent">
        <?php if (isset($data['thongbao']) && $data['thongbao'] != "") {
            echo '<h2>' . $data['thongbao'] . '</h2>';
        }
        ?>
        <form action="<?php echo _WEB_HOST_ROOT . '/Admin/updateProduct' ?>" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <label class="form-label" for="">Danh mục</label>

                <br>
                <select class="form-select" name="iddm" id="">
                    <?php
                    foreach ($data['danhmuc'] as $item) {
                        if ($item['id'] == $data['product']['iddm']) {
                            echo '<option selected value="' . $item['id'] . '">' . $item['name'] . '</option>';
                        } else {

                            echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10 form-groups">
                <label class="form-label" for="">Tên sản phẩm</label>
                <br>
                <input class="form-control" value="<?php echo isset($name) ? $name : "" ?>" type="text" name="tensp">
            </div>
            <div class="row mb10">
                <label class="form-label" for="">Giá</label>
                <br>
                <input class="form-control" value="<?php echo isset($price) ? $price : "" ?>" type="text" name="giasp">
            </div>
            <div class="row mb10">
                <label class="form-label" for="">Hình</label>

                <br>
                <input class="form-control" type="file" value="<?php echo isset($image) ? $image : "" ?>" name="hinhsp">
                <?php echo $image2 ?>
            </div>
            <div class="row mb10">
                <label class="form-label" for="">Mô tả</label>

                <br>
                <textarea class="form-control" name="motasp"><?php echo isset($description) ? $description : "" ?></textarea>
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $data['product']['id'] ?>">
                <input style="width:70px" type="submit" name="updatesp" value="CẬP NHẬT">
                <input style="width:70px" type="reset" value="NHẬP LẠI">
                <a style="width:70px" href="<?php echo _WEB_HOST_ROOT . '/Admin/sanpham' ?>"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>