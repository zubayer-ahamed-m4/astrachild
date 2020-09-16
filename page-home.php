<?php get_template_part( 'includes/header' ); ?>

    <?php get_template_part( 'includes/search' ); ?>

    <!-- Body content -->
    <section class="body-section">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                
                                <!-- Product section -->
                                <div class="col-md-12 product-section">
                                    <h1>Best Selling Products</h1>
                                    <div class="row">
                                        <?php
                                            $bestSellerProducts = new WP_Query(array(
                                                'post_type'         => 'product',
                                                'posts_per_page'    =>  3,
                                                'meta_key'          => 'total_sales',
                                                'orderby'           => 'meta_value_num',
                                                'order'             => 'DESC'
                                            ));

                                            if($bestSellerProducts->have_posts()){
                                                while($bestSellerProducts->have_posts()){
                                                    $bestSellerProducts->the_post();
                                                    $_product = wc_get_product( get_the_ID() );
                                        ?>

                                        <div class="product-card">
                                            <div class="product-card-thumbnail">
                                                <?php  echo get_percentage_to_sale_badge($_product); ?>
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="product image">
                                            </div>
                                            <div class="product-card-body">
                                                <div class="product-title">
                                                    <a href="<?php echo get_the_permalink(); ?>"><h1><?php echo astrachild_excerptProductTitle(get_the_title()); ?></h1></a>
                                                </div>
                                                <div class="product-author-category">
                                                    by <a href="#">Zubayer Ahamed</a> in <a href="#">Wordpress</a> 
                                                </div>
                                            </div>
                                            <div class="product-card-footer">
                                                <div class="product-footer"><i class="fab fa-html5"></i> HTML</div>
                                                <div class="product-footer"><i class="fas fa-heart"></i> 50</div>
                                                <div class="product-footer"><i class="fas fa-cloud-download-alt"></i> 20</div>
                                                <div class="product-footer">
                                                    <button type="button" class="product-price-button">
                                                        <?php echo $_product->get_price_html(); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <?php   
                                                }
                                            } else {
                                                echo "No products available in the system";
                                            }
                                            wp_reset_query();
                                        ?>

                                    </div>
                                </div>
                                

                                <!-- Product section -->
                                <div class="col-md-12 product-section">
                                    <h1>Hot under $40</h1>
                                    <div class="row">
                                        <div class="product-card">
                                            <div class="product-card-thumbnail">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/product/product.png" alt="product image">
                                            </div>
                                            <div class="product-card-body">
                                                <div class="product-title">
                                                    <h1>Product Title</h1>
                                                </div>
                                                <div class="product-author-category">
                                                    by <a href="#">Zubayer Ahamed</a> in <a href="#">Wordpress</a>
                                                </div>
                                            </div>
                                            <div class="product-card-footer">
                                                <div class="product-footer"><i class="fab fa-html5"></i> HTML</div>
                                                <div class="product-footer"><i class="fas fa-heart"></i> 50</div>
                                                <div class="product-footer"><i class="fas fa-cloud-download-alt"></i> 20</div>
                                                <div class="product-footer">
                                                    <button type="button" class="product-price-button">$50</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card">
                                            <div class="product-card-thumbnail">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/product/product.png" alt="product image">
                                            </div>
                                            <div class="product-card-body">
                                                <div class="product-title">
                                                    <h1>Product Title</h1>
                                                </div>
                                                <div class="product-author-category">
                                                    by <a href="#">Zubayer Ahamed</a> in <a href="#">Wordpress</a>
                                                </div>
                                            </div>
                                            <div class="product-card-footer">
                                                <div class="product-footer"><i class="fab fa-html5"></i> HTML</div>
                                                <div class="product-footer"><i class="fas fa-heart"></i> 50</div>
                                                <div class="product-footer"><i class="fas fa-cloud-download-alt"></i> 20</div>
                                                <div class="product-footer">
                                                    <button type="button" class="product-price-button">$50</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card">
                                            <div class="product-card-thumbnail">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/product/product.png" alt="product image">
                                            </div>
                                            <div class="product-card-body">
                                                <div class="product-title">
                                                    <h1>Product Title</h1>
                                                </div>
                                                <div class="product-author-category">
                                                    by <a href="#">Zubayer Ahamed</a> in <a href="#">Wordpress</a>
                                                </div>
                                            </div>
                                            <div class="product-card-footer">
                                                <div class="product-footer"><i class="fab fa-html5"></i> HTML</div>
                                                <div class="product-footer"><i class="fas fa-heart"></i> 50</div>
                                                <div class="product-footer"><i class="fas fa-cloud-download-alt"></i> 20</div>
                                                <div class="product-footer">
                                                    <button type="button" class="product-price-button">$50</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Product section -->
                                <div class="col-md-12 product-section">
                                    <h1>New Best Sellers</h1>
                                    <div class="row">
                                        <div class="product-card">
                                            <div class="product-card-thumbnail">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/product/product.png" alt="product image">
                                            </div>
                                            <div class="product-card-body">
                                                <div class="product-title">
                                                    <h1>Product Title</h1>
                                                </div>
                                                <div class="product-author-category">
                                                    by <a href="#">Zubayer Ahamed</a> in <a href="#">Wordpress</a>
                                                </div>
                                            </div>
                                            <div class="product-card-footer">
                                                <div class="product-footer"><i class="fab fa-html5"></i> HTML</div>
                                                <div class="product-footer"><i class="fas fa-heart"></i> 50</div>
                                                <div class="product-footer"><i class="fas fa-cloud-download-alt"></i> 20</div>
                                                <div class="product-footer">
                                                    <button type="button" class="product-price-button">$50</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card">
                                            <div class="product-card-thumbnail">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/product/product.png" alt="product image">
                                            </div>
                                            <div class="product-card-body">
                                                <div class="product-title">
                                                    <h1>Product Title</h1>
                                                </div>
                                                <div class="product-author-category">
                                                    by <a href="#">Zubayer Ahamed</a> in <a href="#">Wordpress</a>
                                                </div>
                                            </div>
                                            <div class="product-card-footer">
                                                <div class="product-footer"><i class="fab fa-html5"></i> HTML</div>
                                                <div class="product-footer"><i class="fas fa-heart"></i> 50</div>
                                                <div class="product-footer"><i class="fas fa-cloud-download-alt"></i> 20</div>
                                                <div class="product-footer">
                                                    <button type="button" class="product-price-button">$50</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card">
                                            <div class="product-card-thumbnail">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/product/product.png" alt="product image">
                                            </div>
                                            <div class="product-card-body">
                                                <div class="product-title">
                                                    <h1>Product Title</h1>
                                                </div>
                                                <div class="product-author-category">
                                                    by <a href="#">Zubayer Ahamed</a> in <a href="#">Wordpress</a>
                                                </div>
                                            </div>
                                            <div class="product-card-footer">
                                                <div class="product-footer"><i class="fab fa-html5"></i> HTML</div>
                                                <div class="product-footer"><i class="fas fa-heart"></i> 50</div>
                                                <div class="product-footer"><i class="fas fa-cloud-download-alt"></i> 20</div>
                                                <div class="product-footer">
                                                    <button type="button" class="product-price-button">$50</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_template_part( 'includes/footer' ); ?>