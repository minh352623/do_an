<div class="main">
    <div class="image_about">
        <img src="<?php echo _WEB_HOST_TEMPLATE . '/image/product_banner.webp' ?>" alt="">
        <div class="image_content">
            <h2><?php echo $data['path'] ?></h2>
            <div class="path_page">
                <span>Trang chủ</span><span> / </span>
                <span><?php echo $data['path'] ?></span>
            </div>
        </div>
    </div>
    <div class="main_product mt-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <div class="category_slidebar">
                        <h2>DANH MỤC</h2>
                        <div class="container_category mt-4">
                            <ul class="list_category">
                                <li class="item_category"> <a href="<?php echo _WEB_HOST_ROOT . '/Product' ?>" class="cate_link">Tất Cả</a></li>
                                <?php
                                if (isset($data['cate']) && $data['cate']) {
                                    foreach ($data['cate'] as $cate) {
                                        echo '
                                            <li class="item_category"><a href="' . _WEB_HOST_ROOT . '/Product/filter_cate/' . $cate['id'] . '" class="cate_link">' . $cate['name'] . '</a></li>
                                        
                                        ';
                                    }
                                }

                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="product_filter row d-flex">
                        <div class="col-lg-4">

                            <div class="filter_left">
                                <span class="filter_table"><i class="fa-solid fa-table-cells-large"></i></span>
                                <span class="filter_ul"><i class="fa-solid fa-list-ul"></i></span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="filter_right">
                                <form action="<?php echo _WEB_HOST_ROOT . '/Product/filterKey' ?>" method="post" class=" d-flex gap-2">
                                    <div class="form-floating" style="flex:1">
                                        <input type="text" name="keywork" class=" form-control input_margin w-100 fs-4" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput fs-3">Tìm sản phẩm</label>
                                    </div>
                                    <input type="submit" class="btn btn-secondary fs-5" name="filter_product" value="Tìm Kiếm">
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="produca">
                        <div class="row ">
                            <?php
                            if (isset($data['product']) && $data['product']) {
                                foreach ($data['product'] as $item) {
                                    echo '<div data-aos="fade-left"  class="col-4 produca_item mt-5">
                    <a href="' . _WEB_HOST_ROOT . '/Product/Detail/' . $item['id'] . '"><img src="' . _WEB_HOST_ROOT . '/uploads/' . $item['image'] . '" alt=""></a>
                  
                    <div class="tittle_produca mt-2">
                        <a href="">' . $item['name'] . '</a>
                    </div>
                    <div class="pricebox mt-4">
                        <span class="price">' . product_price($item['price'])  . '</span>
                    </div>
                    <div data-id="' . $item['id'] . '" class="add-to-cart">
                        <a hreff="' . _WEB_HOST_ROOT . '" href=""><i class="fa fa-bag-shopping"></i></a>
    
                    </div>
                  
    
                </div>';
                                }
                            } else {
                                echo '<h2 class="text-center mt-5 text-danger">Hiện Chúng Tôi Chưa Có Sản Phẩm Này!</h2>';
                            }
                            ?>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>