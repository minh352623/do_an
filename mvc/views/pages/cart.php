<div class="main ">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart_status">
                    <ul>
                        <li class="active">Giỏ hàng</li>
                        <li>Đặt hàng</li>
                        <li>Thanh toán</li>
                        <li>Hoàn thành đơn</li>
                    </ul>
                </div>
                <div class="cart_list">
                    <h2 class="cart_title">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $sumNUmber = count($_SESSION['cart']);
                        }
                        ?>
                        Giỏ hàng của bạn <span class="update_sl"><?php echo isset($sumNUmber) ? $sumNUmber : "0" ?></span><span> Sản Phẩm</span>
                    </h2>
                    <table class="cart_table">
                        <thead>
                            <tr>
                                <th width="30%">Tên Sản Phẩm</th>
                                <th width="25%" class="text-center">Giá</th>
                                <th width="15%">Số Lượng</th>
                                <th width="25%">Tổng Tiền</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody class="body_cart_page">
                            <?php if (isset($_SESSION['cart'])) {

                                foreach ($_SESSION['cart'] as $item) {
                                    if (isset($item['id']) && $item['id']) {

                                        echo '
                                    <tr data-id2="' . $item['id'] . '">
                                    <td>
                                        <a href=""><img src="' . _WEB_HOST_ROOT . '/uploads/' . $item['image'] . '" alt=""></a>
                                        <span class="name_item_cart">' . $item['name'] . '</span>
                                    </td>
                                    <td class="text-center">' . product_price($item['price']) . '</td>
                                    <td>
                                        <div class="number_price ">
                                            <div class="cart_list_left fs-3">
                                                <div hreff="' . _WEB_HOST_ROOT . '" class="cart_item_left cart_item_number">-</div>
                                                <span class="num_cart">' . $item['soluong'] . '</span>
                                                <div hreff="' . _WEB_HOST_ROOT . '" class="cart_item_right cart_item_number">+</div>
                                            </div>
    
    
                                        </div>
                                    </td>
                                    <td class="total_cart">' . product_price($item['price'] * $item['soluong']) . '</td>
                                    <td><span class="remove_item_cart" data-id="' . $item['id'] . '"><i class="fa-solid fa-trash-can"></i></span></td>
                                </tr>
                                    ';
                                    }
                                }
                            }  ?>

                        </tbody>
                    </table>
                </div>
                <a class="cart_prev mt-5" href=" <?php echo  _WEB_HOST_ROOT . '/Product' ?>">Tiếp tục mua sắm</a>
            </div>
            <div class="col-lg-4">
                <div class="cart_summary">
                    <h3>Tổng Tiền Giỏ Hàng</h3>
                    <div class="cart_summary-overview">
                        <span>Tổng sản phẩm</span>
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $sumNUmber = count($_SESSION['cart']);
                            $moneySum = 0;
                            foreach ($_SESSION['cart'] as $item) {
                                $moneySum += $item['total'];
                            }
                        }
                        ?>
                        <span class="update_cart_summary"><?php echo isset($sumNUmber) ? $sumNUmber : "0" ?></span>
                    </div>
                    <div class="cart_summary-overview">
                        <span>Tổng tiền hàng</span>
                        <span class="tthang"><?php echo isset($moneySum) ? product_price($moneySum) : "0" ?></span>
                    </div>
                    <div class="cart_summary-overview">
                        <span>Thành tiền</span>
                        <span class="cart_blod thanhtien"><?php echo isset($moneySum) ? product_price($moneySum) : "0" ?></span>
                    </div>
                    <div class="cart_summary-overview">
                        <span>Tạm tính</span>
                        <span class="cart_blod tamtinh"><?php echo isset($moneySum) ? product_price($moneySum) : "0" ?></span>
                    </div>
                    <div class="cart_summary-note">
                        <span><i class="fa-solid fa-check"></i> </span>
                        <span>Đơn hàng của bạn được miễn phí ship</span>
                    </div>
                </div>

                <?php
                if (isset($_SESSION['cart'])) {
                    if (!empty($_SESSION['cart'])) {
                        echo '<div class="login_cart_box cart_page_box">';
                        echo '<a class="login_cart" href=" ' . _WEB_HOST_ROOT . '/Payment' . '">Đặt Hàng</a>';
                        echo '</div>';
                    } else {
                        echo '<h3 style="color:#d73831;" class="mt-5">Bạn chưa có sản phẩm để đặt hàng. Mua ngay!</h3>';
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>