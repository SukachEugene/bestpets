<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sukach Eugene">
    <meta name="description" content="Site of Gericht reastaurant">
    <meta name="keywords" content="restaurant, food, dishes, delicious, chiefs cook, Gericht">

    <?php do_action('wp_head') ?>
</head>

<body <?php body_class() ?>>


    <header id="header">
<!-- 
        <div class="container">

            <div id="header"> -->


                <div>
                    <a href="<?php get_home_url() ?>" target="_self">

                        <?php
                        $logo = get_field('logo', 'options');
                        if ($logo) :
                        ?>

                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">

                        <?php endif; ?>
                    </a>

                </div>

                <div class="page-links">
                    <?php
                    wp_nav_menu(array('theme_location' => 'header-menu'));
                    ?>
                </div>

                <div>
                    <?php
                    get_search_form();
                    ?>

                    <button type="button" class="blue-button pointer">Join the community</button>
                </div>

                <div class="header-basket">
                    <i class="fa-sharp fa-solid fa-basket-shopping fa-xl pointer"></i>
                </div>

            <!-- </div>

        </div> -->

    </header>