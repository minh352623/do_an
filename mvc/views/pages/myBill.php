<div class="main">
    <div class="container pt-5">
        <h2 class="title_mybill text-center mb-5">
            ĐƠN HÀNG CỦA BẠN
        </h2>
        <div class="container_mybill">
            <table class="my_bill">
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


                            echo ' <tr>';
                            echo '<td><a href="' . _WEB_HOST_ROOT . '/MyBill/DetailBill/' . $item['id'] . '">Ma-' . $item['id'] . '</a></td>';
                            echo '<td>' . product_price($item['tongdon']) . '</td>';
                            echo '<td>' . billStatus($item['bill_status']) . '</td>';
                            echo '<td>' . $item['ngaydat'] . '</td>';
                            echo '<td><a href="' . _WEB_HOST_ROOT . '/MyBill/DetailBill/' . $item['id'] . '" class="view_bill">View</a></td>';
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