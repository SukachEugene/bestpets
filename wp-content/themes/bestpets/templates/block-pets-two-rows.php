<?php

$args = array(
    'post_type' => 'product',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'pets'
        )
    ),
    'posts_per_page' => 8
);

$pets = get_posts($args);


foreach ($pets as $pet) {

    $product_id = $pet->ID;
    $product = wc_get_product($product_id);

    $gene = $product->get_attribute('gene');
    $age = $product->get_attribute('age');

    $product_image = get_the_post_thumbnail($product_id);
    $product_title = $pet->post_title;
    $link = get_permalink($product_id);


?>
    <div>
        <?php
        if (!empty($product_image)) {
            echo $product_image;
        }
        ?>
    </div>
<?php

    echo '<a href="' . $link . '">' . $product_title . '</a>';

    // var_dump($pet);
}



?>