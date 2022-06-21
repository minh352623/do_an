<div class="row">
    <div class="row frmtitle">
        <H1>THÊM MỚI SẢN PHẨM</H1>
    </div>
    <div class="row frmcontent">
        <?php if (isset($data['thongbao']) && $data['thongbao'] != "") {
            echo '<h2>' . $data['thongbao'] . '</h2>';
        }
        ?>
        <form action="<?php echo _WEB_HOST_ROOT . '/Admin/addProduct' ?>" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <label class="form-label" for="">Danh mục</label>

                <br>
                <select class="form-select" name="iddm" id="">
                    <?php
                    foreach ($data['danhmuc'] as $item) {

                        echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10 form-groups">
                <label class="form-label" for="">Tên sản phẩm</label>
                <br>
                <input class="form-control" type="text" required name="tensp">
            </div>
            <div class="row mb10">
                <label class="form-label" for="">Giá</label>
                <br>
                <input class="form-control" type="text" required name="giasp">
            </div>
            <div class="row mb10">
                <label class="form-label" for="">Hình</label>

                <br>
                <input class="form-control" type="file" required name="hinhsp">
            </div>
            <div class="row mb10">
                <label class="form-label" for="">Mô tả</label>

                <br>
                <textarea class="form-control" required name="motasp"></textarea>
            </div>
            <!-- <div class="row mb10">
                Danh mục sản phẩm<br>
                <input type="text" required name="danhmucsp">
            </div> -->
            <div class="row mb10">
                <input style="width:70px" type="submit" name="themmoisp" value="THÊM MỚI">
                <input style="width:70px" type="reset" value="NHẬP LẠI">
                <a style="width:70px" href="<?php echo _WEB_HOST_ROOT . '/Admin/sanpham' ?>"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>