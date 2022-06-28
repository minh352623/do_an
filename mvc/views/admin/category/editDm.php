<div class="row">
    <div class="row frmtitle">
        <H1>CẬP NHẬT DANH MỤC HÀNG HÓA</H1>
    </div>
    <?php if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo '<h4 style-"padding:6px;background-color:green;color:#fff;">' . $data['thongbao'] . '</h4>';
    }
    ?>
    <div class="row frmcontent">
        <form action="<?php echo _WEB_HOST_ROOT . '/Admin/updateDm' ?>" method="post">
            <div class="row mb10">
                Mã loại<br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                Tên loại<br>
                <input type="text" value="<?php echo isset($data['one_dm']) ? $data['one_dm']['name'] : ''; ?>" required name="tenloai">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php echo  isset($data['one_dm']) ? $data['one_dm']['id'] : "" ?>">
                <input style="width:150px" type="submit" name="update" value="CẬP NHẬT">


                <input style="width:150px" type="reset" value="NHẬP LẠI">
                <a style="width:150px" href="<?php echo _WEB_HOST_ROOT . '/Admin/danhmuc' ?>"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>