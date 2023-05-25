<?php
get_header()
?>

<?php $page_id = get_option('woocommerce_shop_page_id');
?>

<div class="container">

    <section class="shop-top-banner margin-bottom-35">

        <?php
        echo get_hansel_and_gretel_breadcrumbs();
        ?>


        <div class="shop-top-banner-content">

            <?php
            $figure1 = get_field('figure1', $page_id);
            ?>

            <?php if ($figure1) : ?>
                <img id="shop-top-banner-figure1" src="<?php echo $figure1['url']; ?>" alt="<?php echo $figure1['alt']; ?>" title="<?php echo $figure1['title']; ?>">
            <?php endif; ?>


            <div class="shop-top-banner-image">

                <?php
                $shop_top_banner_photo = get_field('shop_top_banner_photo', $page_id);
                if ($shop_top_banner_photo) : ?>
                    <img id="shop-top-banner-photo" src="<?php echo $shop_top_banner_photo['url']; ?>" alt="<?php echo $shop_top_banner_photo['alt']; ?>" title="<?php echo $shop_top_banner_photo['title']; ?>">
                <?php endif; ?>

            </div>



            <div class="shop-top-banner-content-text">

                <p class="banner-title1">One more friend</p>
                <p class="banner-title2">Thousands more fun!</p>
                <p class="banner-p">
                    Having a pet means you have more joy, a new friend, a happy person who will
                    always be with you to have fun. We have 200+ different pets that can meet
                    your needs!
                </p>
                <div class="shop-top-banner-buttons-container">

                    <button type="button" class="transparent-button3 pointer">View Intro
                        <?php
                        $video_icon = get_field('video_icon2', 'options');
                        if ($video_icon) :
                        ?>
                            <img src="<?php echo $video_icon['url']; ?>" alt="<?php echo $video_icon['alt']; ?>" title="<?php echo $video_icon['title']; ?>">
                        <?php endif; ?>

                    </button>
                    <button type="button" class="white-button pointer">Explore Now</button>
                </div>

            </div>
        </div>

    </section>

    <section>

        <?php
        if (woocommerce_product_loop()) {
        ?>

            <div class="shop-products-layout-head">
                <div class="shop-products-layout-head-title-filter">Filter</div>

                <div class="shop-products-layout-head-sorting">
                    <?php
                    do_action('woocommerce_before_shop_loop');
                    ?>
                </div>

            </div>

            <?php

            // woocommerce_product_loop_start();
            ?>
            <div class="shop-products-layout">
                <div class="shop-filter">
                    <?php
                    echo do_shortcode('[wpf-filters id=1]');
                   

                    ?>
                </div>

                <?php
                 woocommerce_product_loop_start();
                 ?>

                <div class="pets-grid-3">
                    <?php

                    if (wc_get_loop_prop('total')) {

                        while (have_posts()) {
                            the_post();

                            do_action('woocommerce_shop_loop');

                            wc_get_template_part('content', 'product');
                        }
                    }
                    ?>
                </div>
            </div>
        <?php

            woocommerce_product_loop_end();

            do_action('woocommerce_after_shop_loop');
        } else {

            do_action('woocommerce_no_products_found');
        }

        ?>

    </section>


</div>

<?php
get_footer();
?>