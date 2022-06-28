<div class="main">
    <div class="container pt-5">
        <h2 class="title_mybill text-center mb-5">
            ĐƠN HÀNG CỦA BẠN
        </h2>
        <div class="container_mybill">
            <div class="row mb-3">
                <div class="col-lg-2">
                    <a href="<?php echo _WEB_HOST_ROOT . '/MyBill' ?>" class="btn w-100 py-3 fs-4 btn-info">Tất cả</a>

                </div>
                <div class="col-lg-2">
                    <a href="<?php echo _WEB_HOST_ROOT . '/MyBill/filter/0' ?>" class="btn w-100 py-3 fs-4 btn-warning">Đơn chờ duyệt</a>

                </div>
                <div class="col-lg-2">
                    <a href="<?php echo _WEB_HOST_ROOT . '/MyBill/filter/1' ?>" class="btn w-100 py-3 fs-4 btn-primary">Đang vận chuyển</a>

                </div>
                <div class="col-lg-2">
                    <a href="<?php echo _WEB_HOST_ROOT . '/MyBill/filter/2' ?>" class="btn w-100 py-3 fs-4 btn-success">Đã nhận</a>

                </div>

                <div class="col-lg-3">
                    <input type="text" style="margin-top:0 !important" class="mt-0 form-control " placeholder="Tìm đơn hàng" name="keuwork">
                </div>
                <div class="col-lg-1">
                    <input type="submit" class="btn btn-secondary w-100  py-3 fs-4" value="Tìm kiếm" name="filter_bill">
                </div>
            </div>

            <table class=" my_bill text-center">
                <thead>

                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Tổng giá trị</th>
                        <th>Tình trạng đơn hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    if (isset($data['bills'])) {


                        foreach ($data['bills'] as $item) {
                            if ($item['bill_status'] == 0) {
                                $color = 'warning';
                            } else if ($item['bill_status'] == 1) {
                                $color = 'primary';
                            } else {
                                $color = 'success';
                            }

                            echo ' <tr class="px-3">';
                            echo '<td><a href="' . _WEB_HOST_ROOT . '/MyBill/DetailBill/' . $item['id'] . '">Ma-' . $item['id'] . '</a></td>';
                            echo '<td class="my_bill_total">' . product_price($item['tongdon']) . '</td>';
                            echo '<td class="my_bill_status text-' . $color . '">' . billStatus($item['bill_status']) . '</td>';
                            echo '<td >' . $item['ngaydat'] . '</td>';
                            echo '<td><a href="' . _WEB_HOST_ROOT . '/MyBill/DetailBill/' . $item['id'] . '" class="view_bill">Xem chi tiết</a></td>';
                            echo '</tr>';
                        }
                    }

                    ?>

                </tbody>

            </table>
            <?php
            if (empty($data['bills']) || $data['bills'] == "") {
                echo '<h2 class="text-center mt-5">Bạn chưa có đơn hàng nào. <a href="' . _WEB_HOST_ROOT . '/Product">Mua ngay nào</a>.</h2>';
            } ?>
        </div>
    </div>



</div>