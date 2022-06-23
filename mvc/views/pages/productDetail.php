<div class="main">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-5">
                <div class="product_detail-image">
                    <img src="<?php echo _WEB_HOST_ROOT . '/uploads/' . $data['product']['image'] . '' ?>" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="info_product-detail  ml-5">
                    <h2 class="product-detail_name "><?php echo $data['product']['name'] ?> </h2>
                    <div class="product_detail_rating mt-5">
                        <span class="product_detail_rating-start"><i class="fa-solid fa-star"></i></span>
                        <span class="product_detail_rating-start"><i class="fa-solid fa-star"></i></span>
                        <span class="product_detail_rating-start"><i class="fa-solid fa-star"></i></span>
                        <span class="product_detail_rating-start"><i class="fa-solid fa-star"></i></span>
                        <span class="product_detail_rating-start"><i class="fa-solid fa-star"></i></span>
                        <span>(0 đánh giá)</span>
                    </div>
                    <div class="product_detail_price mt-5"><?php echo product_price($data['product']['price']) ?></div>
                    <div class="product_detail_size mt-5">
                        <p>SIZE</p>
                        <span>S</span>
                        <span>M</span>
                        <span>L</span>

                    </div>
                    <div class="product_detail_number mt-5">
                        <h3>Số lượng</h3>
                        <div class="cart_list_left product_detail_number-list fs-3">
                            <div class="cart_item_left  cart_item_number fs-3">-</div>
                            <span class="num_cart fs-3">1</span>
                            <div class="cart_item_right cart_item_number fs-3">+</div>
                        </div>
                    </div>
                    <div class="product_detail_action mt-5">
                        <button class="product_detail_add" data-id="<?php echo $data['product']['id'] ?>">THÊM VÀO GIỎ</button>
                        <button class="product_detail_buy">MUA HÀNG</button>

                    </div>
                    <div class="product_detail_descriptoin mt-5">
                        <p>Giới thiệu</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic iste neque eos adipisci blanditiis, consectetur eveniet fugiat incidunt, soluta cum tenetur quas doloribus minima? Sapiente soluta laudantium temporibus. Dolorem, dolores!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <h2 class="fs-1">SẢN PHẨM CÙNG LOẠI</h2>
            <?php
            if (isset($data['productSames']) && $data['productSames']) {
                foreach ($data['productSames'] as $item) {
                    echo '<div  class="col-24 produca_item mt-5">
                    <a class="image_product-home" href="' . _WEB_HOST_ROOT . '/Product/Detail/' . $item['id'] . '"><img src="' . _WEB_HOST_ROOT . '/uploads/' . $item['image'] . '" alt=""></a>
                    <div class="info-ticket ticket-news">new</div>
                  
                    <div class="tittle_produca mt-2">
                        <a href="' . _WEB_HOST_ROOT . '/Product/Detail/' . $item['id'] . '">' . $item['name'] . '</a>
                    </div>
                    <div class="pricebox mt-4">
                        <span class="price">' . product_price($item['price'])  . '</span>
                    </div>
                    
                  
    
                </div>';
                }
            }
            ?>
            <!-- <div class="add-to-cart" data-id="' . $item['id'] . '">
                        <p ><i class="fa fa-bag-shopping"></i></p>
    
                    </div> -->
        </div>
    </div>
</div>