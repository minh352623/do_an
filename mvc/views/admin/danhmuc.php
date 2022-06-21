<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH DANH MỤC</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th>Thao Tác</th>
                </tr>
                <?php
                if (!empty($data['listdm'])) {

                    foreach ($data['listdm'] as $item) {
                        $sua = _WEB_HOST_ROOT . '/Admin/editdm/' . $item['id'];
                        $xoa = _WEB_HOST_ROOT . '/Admin/deletedm/' . $item['id'];

                        echo '<tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>' . $item['id'] . '</td>
                        <td>' . $item['name'] . '</td>
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
        <div class="row mb10">

            <a href="<?php echo _WEB_HOST_ROOT . '/Admin/addDm' ?>"><input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>