<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH KHÁCH HÀNG</h1>
    </div>
    <form action="<?php echo _WEB_HOST_ROOT . '/Admin/list_acccount' ?>" method="post" class="form_filter mt-3">
        <div class="row">
            <div class="col-7">

            </div>
            <div class="col-3">

                <input class="form-control" type="text" name="keyword" placeholder="Tìm kiếm tài khoản">
            </div>
            <div class="col-2">

                <input class="form-control bg-primary" type="submit" name="filter_account" value='Tìm kiếm'>
            </div>

        </div>
    </form>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ KHÁCH HÀNG</th>
                    <th>TÊN KHÁCH HÀNG</th>
                    <th>EMAIL</th>
                    <th>SỐ ĐIỆN THOẠI</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ROLE</th>

                    <th></th>
                </tr>
                <?php
                if (!empty($data['accounts'])) {
                    $alert = "BẠN CÓ CHẮC CHẮN MUỐN XÓA";
                    foreach ($data['accounts'] as $item) {
                        $xoa = _WEB_HOST_ROOT . '/Admin/remove_account/' . $item['id'];
                        $sua = _WEB_HOST_ROOT . '/Admin/edit_account/' . $item['id'];

                        if ($item['role'] == 1) {
                            $role = "ADMIN";
                        } else {
                            $role = "KHÁCH HÀNG";
                        }
                        echo '<tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>' . $item['id'] . '</td>
                        <td>' . $item['name'] . '</td>
                        <td>' . $item['email'] . '</td>
                        <td>' . $item['sdt'] . '</td>
                        <td>' . $item['diachi'] . '</td>
                        <td>' .  $role . '</td>
                        <td>
                        <a href="' . $sua . '"><input type="button" value="Sữa" /></a>

                        ';
                        if ($item['id'] != $_SESSION['user']['id']) {

                            echo '
                            <a onclick="return confirm("' . $alert . '")"  href="' . $xoa . '"><input  type="button" value="Xóa" /></a>

                      ';
                        }


                        echo '  </td></tr>';
                    }
                }
                ?>


            </table>
        </div>
        <!-- <div class="row mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
        </div> -->
    </div>
</div>