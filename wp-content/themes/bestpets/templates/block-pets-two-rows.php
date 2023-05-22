<?php

// $args = array(
//     'post_type' => 'product',
//     'tax_query' => array(
//         array(
//             'taxonomy' => 'product_cat',
//             'field' => 'slug',
//             'terms' => 'pets'
//         )
//     ),
//     'posts_per_page' => 8,
//     'order' => 'ASC',
//     'orderby' => 'modified'
// );

// $pets = get_posts($args);


$pets = get_field('pets');

?>

<div class="pets-grid-4-2">

    <?
    foreach ($pets as $pet) {

        $product_id = $pet->ID;
        $product = wc_get_product($product_id);

        $gene = $product->get_attribute('gene');
        $age = $product->get_attribute('age');
        $_SKU = $product->get_sku();
        $price = $product->get_price();
        $formatted_price = number_format($price, 0, ',', '.');

        $product_image = get_the_post_thumbnail($product_id);
        $product_title = $pet->post_title;
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

            echo '<a class="pet-name" href="' . $link . '">' . $_SKU . ' - ' . $product_title . '</a>';
            echo '<div class="pet-attributes">Gene: <span class="bold padding-left-5">' . $gene . 
            '</span><span class="padding-left-10 padding-right-10">&#8226</span>Age: <span class="bold padding-left-5">' 
            . $age . '</span></div>';
            
            echo '<div class="bold pet-price-container">' . $formatted_price . ' UAH <a href="' . esc_url($add_to_cart_url) . '" data-quantity="1" class="take-button">TAKE</a></div>';

            // echo '';
            
            ?>
            </div>

        </div>
    <?php
    }
    ?>

</div>