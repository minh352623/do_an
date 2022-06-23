<div class="main ">
    <div class="container pt-5">
        <h1 class="mb-5">CẢM ƠN BẠN ĐÃ ĐẶT HÀNG CỦA CHÚNG TÔI</h1>
        <form action="<?php echo _WEB_HOST_ROOT . '/Payment/bill' ?>" method="post">

            <div class="row">
                <div class="col-lg-8">
                    <div class="cart_status">
                        <ul>
                            <li class="active">Giỏ hàng</li>
                            <li class="active">Đặt hàng</li>
                            <li class="active pay">Thanh toán</li>
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
                                                <p><?php echo $data['bill']['name_user'] ?></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p><?php echo $data['bill']['tel'] ?></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p><?php echo $data['bill']['email'] ?></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p><?php echo $data['bill']['address'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <h2>Phương thức giao hàng</h2>
                                <div class="modal_payment">
                                    <h3><span><i class="fa-solid fa-circle-check"></i></span> <?php echo $data['bill']['ptgh'] == 1 ? " Chuyển phát nhanh" : "" ?></h3>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-5">
                                <h2>Phương thức thanh toán</h2>
                                <div class="method_payment">
                                    <h3><span><i class="fa-solid fa-circle-check"></i></span><?php echo $data['bill']['pttt'] == 1 ? " Thanh toán khi giao hàng" : "" ?> </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart_list">
                        <h2 class="cart_title">
                            <?php
                            if (isset($data['detailBill'])) {
                                $sumNUmber = count($data['detailBill']);
                            }
                            ?>
                            Đơn hàng của bạn <span class="update_sl"><?php echo isset($sumNUmber) ? $sumNUmber : "0" ?></span><span> Sản Phẩm</span>
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
                                <?php if (isset($data['detailBill'])) {
                                    foreach ($data['detailBill'] as $item) {
                                        echo '
                                    <tr data-id2="' . $item['id_pro'] . '">
                                    <td>
                                        <a href=""><img src="' . _WEB_HOST_ROOT . '/uploads/' . $item['image'] . '" alt=""></a>
                                        <span class="name_item_cart">' . $item['name_pro'] . '</span>
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
                            if (isset($data['detailBill'])) {
                                $sumNUmber = count($data['detailBill']);
                                $moneySum = 0;
                                foreach ($data['detailBill'] as $item) {
                                    $moneySum += $item['tongtien'];
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
                        <!-- <div class="cart_summary-note">
                            <span><i class="fa-solid fa-check"></i> </span>
                            <span>Đơn hàng của bạn được miễn phí ship</span>
                        </div> -->
                    </div>


                </div>
            </div>
        </form>

    </div>
</div>