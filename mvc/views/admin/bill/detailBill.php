<div class="container">
    <div class="row frmtitle mb10">
        <h1>CHI TIẾT ĐƠN HÀNG</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <?php
            if (isset($data['thongbao']) && $data['thongbao'] != "") {

                echo '<h2 class="px-5 py-3 bg-success rounded">' . $data['thongbao'] . '</h2>';
            }
            ?>
            <form class="container-info-user" method="post" action="">
                <div>
                    <span>
                        Khách hàng:
                    </span>
                    <span><?php echo $data['bill'] ? $data['bill']['name_user'] : "" ?></span>
                </div>
                <div>
                    <span>
                        Sô điện thoại:
                    </span>
                    <span><?php echo $data['bill'] ? $data['bill']['tel'] : "" ?></span>
                </div>
                <div>
                    <span>
                        Địa chỉ:
                    </span>
                    <span><?php echo $data['bill'] ? $data['bill']['address'] : "" ?></span>
                </div>
                <div>
                    <span>
                        Phương thức thanh toán:
                    </span>
                    <span><?php
                            if ($data['bill']['pttt'] == 1) {
                                $pttt = 'Thanh toán khi giao hàng';
                            }
                            echo $data['bill'] ? $pttt : "" ?>
                    </span>
                </div>
                <div>
                    <span>
                        Phương thức giao hàng:
                    </span>
                    <span><?php
                            if ($data['bill']['ptgh'] == 1) {
                                $ptgh = 'Giao hàng nhanh';
                            }
                            echo $data['bill'] ? $ptgh : "" ?></span>
                </div>
                <div>
                    <span>
                        Tổng đơn:
                    </span>
                    <span><?php echo $data['bill'] ? product_price($data['bill']['tongdon']) : "" ?></span>
                </div>
                <div>
                    <span>
                        Ngày đặt:
                    </span>
                    <span><?php echo $data['bill'] ? $data['bill']['ngaydat'] : "" ?></span>
                </div>
                <div>
                    <span>
                        Trạng thái:
                    </span>
                    <select name="bill_status" class=" form-select" class="text-warning" aria-label="Default select example">
                        <option value="0" class="text-warning  border-warning" <?php echo $data['bill']['bill_status'] == 0 ? 'selected ' : "" ?>>Đang chờ duyệt</option>
                        <option value="1" class="text-success  border-success" <?php echo $data['bill']['bill_status'] == 1 ? 'selected ' : "" ?>>Đang giao hàng</option>
                        <option value="2" class="text-primary  border-peimary" <?php echo $data['bill']['bill_status'] == 2 ? 'selected ' : "" ?>>Đã nhận hàng</option>
                    </select>

                </div>
                <div class="d-flex justify-content-end">
                    <input type="hidden" name="id" value="<?php echo $data['bill']['id'] ?>">
                    <input type="submit" class="btn btn-primary bg-primary px-3" name="update_bill" value="Cập nhật">
                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="row frmcontent rounded m-auto">
                <div class="row mb10 frmdsloai m-auto rounded">
                    <table>
                        <tr class="rounded ">
                            <th></th>
                            <th width="25%">HÌNH SẢN PHẨM</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>GIÁ </th>
                            <th>SỐ LƯỢNG </th>
                            <TH>TỔNG TIỀN</TH>

                        </tr>
                        <?php
                        global $path_img;
                        if (!empty($data['detailBill'])) {

                            foreach ($data['detailBill'] as $item) {
                                // $img = '../' . $path_img  . $item['image'];
                                $img = _WEB_HOST_ROOT . '/uploads/' . $item['image'];
                                // if (is_file($img)) {
                                $hinh = '<img  src="' . $img . '">';
                                // }
                                $xoa = _WEB_HOST_ROOT . '/Admin/deleteProduct/' . $item['id'];
                                $sua = _WEB_HOST_ROOT . '/Admin/editProduct/' . $item['id'];


                                echo '<tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td class="admin_hinh">' . $hinh . '</td>
                        <td>' . $item['name_pro'] . '</td>
                        <td>' . product_price($item['price']) . '</td>
                        <td>' . $item['soluong'] . '</td>
                        <td>' . product_price($item['tongtien']) . '</td>


                       
                    </tr>';
                            }
                        }

                        ?>


                    </table>
                </div>
                <!-- <div class=" row mb10">
                            <input type="button" value="Chọn tất cả" />
                            <input type="button" value="Bỏ chọn tất cả" />
                            <input type="button" value="Xóa các mục đã chọn" />
                </div> -->
            </div>
        </div>
    </div>
</div>