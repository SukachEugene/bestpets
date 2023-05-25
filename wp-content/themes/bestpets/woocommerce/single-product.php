<?php
get_header();
?>

<?php
$product_image = get_the_post_thumbnail($product_id);

echo $product_image;
the_title();
?>

<?php
get_footer();
?>