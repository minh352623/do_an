<div class="main ">
    <div class="container pt-5">
        <form action="<?php echo _WEB_HOST_ROOT . '/Payment/bill' ?>" method="post">

            <div class="row">
                <div class="col-lg-8">
                    <div class="cart_status">
                        <ul>
                            <li class="active">Giỏ hàng</li>
                            <li class="active">Đặt hàng</li>
                            <li>Thanh toán</li>
                            <li>Hoàn thành đơn</li>
                        </ul>
                    </div>
                    <div class="check_address_pay mt-5">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="check_address">
                                    <h2>Địa chỉ giao hàng</h2>
                                    <div class="info_address">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input required type="text" name="name" value="<?php echo  isset($_SESSION['user']['name']) ? $_SESSION['user']['name'] : "" ?>" placeholder="Họ Tên" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <input required type="text" name="tel" value="<?php echo  isset($_SESSION['user']['sdt']) ? $_SESSION['user']['sdt'] : "" ?>" placeholder="Số Điện Thoại" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <input required type="text" name="email" value="<?php echo  isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : "" ?>" placeholder="Email" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <input required type="text" name="address" value="<?php echo  isset($_SESSION['user']['diachi']) ? $_SESSION['user']['diachi'] : "" ?>" placeholder="Địa chỉ" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <h2>Phương thức giao hàng</h2>
                                <div class="modal_payment">
                                    <h3><span><i class="fa-solid fa-circle-check"></i></span> Chuyển phát nhanh</h3>
                                    <input type="hidden" name="modal" value="1">
                                </div>
                            </div>
                            <div class="col-lg-12 mt-5">
                                <h2>Phương thức thanh toán</h2>
                                <div class="method_payment">
                                    <h3><span><i class="fa-solid fa-circle-check"></i></span> Thanh toán khi giao hàng</h3>
                                    <input type="hidden" name="payment" value="1">
                                </div>
                            </div>
                        </div>
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
                                    <th>Tổng Tiền</th>

                                </tr>
                            </thead>
                            <tbody class="body_cart_page">
                                <?php if (isset($_SESSION['cart'])) {

                                    foreach ($_SESSION['cart'] as $item) {
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
                                                <span class="num_cart">' . $item['soluong'] . '</span>
                                            </div>
    
    
                                        </div>
                                    </td>
                                    <td class="total_cart">' . product_price($item['price'] * $item['soluong']) . '</td>
                                </tr>
                                    ';
                                    }
                                }  ?>

                            </tbody>
                        </table>
                    </div>
                    <a class="cart_prev mt-5" href=" <?php echo  _WEB_HOST_ROOT . '/Product' ?>">Tiếp tục mua sắm</a>

                </div>
                <div class="col-lg-4">
                    <div class="cart_summary">
                        <h3>Tóm Tắt Đơn Hàng</h3>
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
                            <span>Phí Vận Chuyển</span>
                            <span class="cart_blod tamtinh">0 đ</span>
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

                    <div class="login_cart_box cart_page_box">
                        <input class="login_cart" type="submit" name="bill" value="Hoàn Thành">
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>