<div class="row">
    <div class="row frmtitle mb10 mb-3">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="<?php echo _WEB_HOST_ROOT . '/Admin/list_bill' ?>" method="post" class="form_filter pr-4">
        <div class="row mb-3">
            <div class="col-lg-2">
                <a href="<?php echo _WEB_HOST_ROOT . '/Admin/list_bill' ?>" class="btn w-100  btn-info">Tất cả</a>

            </div>
            <div class="col-lg-2">
                <a href="<?php echo _WEB_HOST_ROOT . '/Admin/filter_bill/0' ?>" class="btn w-100  btn-warning">Đơn chờ duyệt</a>

            </div>
            <div class="col-lg-2">
                <a href="<?php echo _WEB_HOST_ROOT . '/Admin/filter_bill/1' ?>" class="btn w-100  btn-primary">Đang vận chuyển</a>

            </div>
            <div class="col-lg-2">
                <a href="<?php echo _WEB_HOST_ROOT . '/Admin/filter_bill/2' ?>" class="btn w-100  btn-success">Đã nhận</a>

            </div>

            <div class="col-lg-3">
                <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm đơn hàng">
            </div>
            <div class="col-lg-1">
                <input class="btn btn-primary bg-primary form-control" type="submit" name="filter_bill" value='Tìm kiếm'>
            </div>
        </div>


    </form>
    <div class="row frmcontent pt-0">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>GÁ TRỊ ĐƠN HÀNG</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    <TH>THAO TÁC</TH>

                </tr>
                <?php
                if (!empty($data['listBill'])) {
                    foreach ($data['listBill'] as $item) {

                        $detail = _WEB_HOST_ROOT . '/Admin/detail_bill/' . $item['id'];
                        $kh = 'Tên: ' . $item['name_user'] . '<br/> Địa chỉ: ' . $item['address'] . '<br/>Email: ' . $item['email'] . '<br/>Số điện thoại: ' . $item['tel'] . '';
                        $ttdh = billStatus(
                            $item['bill_status']
                        );
                        if ($item['bill_status'] == 0) {
                            $color = 'warning';
                        } else if ($item['bill_status'] == 1) {
                            $color = 'primary';
                        } else {
                            $color = 'success';
                        }
                        echo '<tr >
                        <td><input type="checkbox" name="" id="" /></td>
                        <td class="fs-6">Ma-' . $item['id'] . '</td>
                        <td class="fs-6  text-start">' . $kh . '</td>
                        <td class="my_bill_total fs-6">' . product_price($item['tongdon']) . '</td>
                        <td class="my_bill_status fs-6 text-' . $color . '">' . $ttdh . '</td>

                        <td>
                            <a href="' . $detail . '"><input type="button" class="btn btn-primary bg-secondary" value="Xem chi tiết" /></a>
                        </td>
                    </tr>';
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