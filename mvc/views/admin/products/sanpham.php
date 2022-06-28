<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <form action="<?php echo _WEB_HOST_ROOT . '/Admin/sanpham' ?>" method="post" class="form_filter mt-3">
        <div class="row">

            <div class="col-4">
                <select class="form-select" name="iddm" id="">
                    <option value="0">Tất cả danh mục</option>
                    <?php
                    foreach ($data['cates'] as $item) {

                        echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                    }
                    ?>
                </select>

            </div>
            <div class="col-6">

                <input class="form-control" type="text" name="keyword" placeholder="Tìm kiếm theo danh mục">
            </div>
            <div class="col-2">

                <input class="form-control bg-primary" type="submit" name="filter_sp" value='Tìm kiếm'>
            </div>

        </div>
    </form>
    <div class="row frmcontent">
        <div class="row mb10">

            <a style="display: inline-block; width: 70px;" href="<?php echo _WEB_HOST_ROOT . '/Admin/viewAddPro' ?>"><input type="button" value="Nhập thêm" /></a>
        </div>
        <div class="row mb10 frmdsloai">
            <table>

                <tr>
                    <th></th>
                    <th>MÃ SẢN PHẨM</th>
                    <TH style="width:25%;height:100px;">HÌNH</TH>
                    <th>TÊN SẢN PHẨM</th>
                    <TH>GIÁ</TH>
                    <TH>LƯỢT XEM</TH>
                    <th></th>
                </tr>
                <?php
                global $path_img;
                if (!empty($data['products'])) {

                    foreach ($data['products'] as $item) {
                        // $img = '../' . $path_img  . $item['image'];
                        $img = _WEB_HOST_ROOT . '/uploads/' . $item['image'];
                        // if (is_file($img)) {
                        $hinh = '<img  src="' . $img . '">';
                        // }
                        $xoa = _WEB_HOST_ROOT . '/Admin/deleteProduct/' . $item['id'];
                        $sua = _WEB_HOST_ROOT . '/Admin/editProduct/' . $item['id'];


                        echo '<tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>' . $item['id'] . '</td>
                        <td class="admin_hinh">' . $hinh . '</td>
                        <td>' . $item['name'] . '</td>
                        <td>' . $item['price'] . '</td>
                        <td>' . $item['view'] . '</td>

                        <td>
                            <a href="' . $sua . '"><input type="button" value="Sửa" /></a>
                            <a href="' . $xoa . '"><input type="button" value="Xóa" /></a>
                        </td>
                    </tr>';
                    }
                }

                ?>


            </table>
        </div>

    </div>
</div>