<?php

$args = array(
    'post_type' => 'product',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'top-goods'
        )
    ),
    'posts_per_page' => 8,
    'order' => 'ASC',
    'orderby' => 'modified'
);

$goods_array = get_posts($args);
?>


<div class="pets-grid-4-2">

    <?
    foreach ($goods_array as $goods) {

        $product_id = $goods->ID;
        $product = wc_get_product($product_id);

        $type_goods = $product->get_attribute('product');
        $size = $product->get_attribute('size');
        $gift = $product->get_attribute('gift');
        $_SKU = $product->get_sku();
        $price = $product->get_price();

        $formatted_price = 'empty';
        if ($price) {
            $formatted_price = number_format($price, 0, ',', '.');
        }

        $product_image = get_the_post_thumbnail($product_id);
        $product_title = $goods->post_title;
        $link = get_permalink($product_id);

        $add_to_cart_url = $product->add_to_cart_url();
        $add_to_cart_text = $product->add_to_cart_text();


    ?>
        <div class="pet-single-product-card">
            <div class="pet-single-product-card-image-container">
                <?php
                if (!empty($product_image)) {
                    echo $product_image;
                }
                ?>
            </div>

            <div class="pet-single-product-card-text-container">
                <?php

                echo '<a class="pet-name" href="' . $link . '">' . $product_title . '</a>';
                echo '<div class="pet-attributes">Goods: <span class="bold padding-left-5">' . $type_goods .
                    '</span><span class="padding-left-10 padding-right-10">&#8226</span>Size: <span class="bold padding-left-5">'
                    . $size . '</span></div>';

                if ($formatted_price !== 'empty') {
                    echo '<div class="bold pet-price-container">' . $formatted_price . ' UAH <a href="' . esc_url($add_to_cart_url) . '" data-quantity="1" class="take-button">ADD</a></div>';
                }

                if ($gift) {
                ?>
                    <div class="gift-banner">
                        <?php
                        $gift_icon = get_field('gift', 'options');
                        if ($gift_icon) {
                        ?>
                            <img class="" src="<?php echo $gift_icon['url']; ?>" alt="<?php echo $gift_icon['alt']; ?>" title="<?php echo $gift_icon['title']; ?>">
                    <?php
                        }

                        echo '<span class="padding-left-10 padding-right-10">&#8226</span>' . $gift . '</div>';
                    }
                    ?>

                    </div>

            </div>
        <?php
    }
        ?>

        </div>