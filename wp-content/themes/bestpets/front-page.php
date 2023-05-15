<?php
get_header()
?>

<section class="head-banner">

    <?php
    $video_icon = get_field('video_icon', 'options');
    $figure1 = get_field('figure1', 'options');
    $figure2 = get_field('figure2', 'options');
    $figure3 = get_field('figure3', 'options');
    $figure4 = get_field('figure4', 'options');
    $figure5 = get_field('figure5', 'options');
    $figure6 = get_field('figure6', 'options');
    $figure7 = get_field('figure7', 'options');
    $figure8 = get_field('figure8', 'options');
    ?>

    <div class="head-banner-content">

        <?php if ($figure1) : ?>
            <img id="head-banner-figure1" src="<?php echo $figure1['url']; ?>" alt="<?php echo $figure1['alt']; ?>" title="<?php echo $figure1['title']; ?>">
        <?php endif; ?>

        <?php if ($figure3) : ?>
            <img id="head-banner-figure3" src="<?php echo $figure3['url']; ?>" alt="<?php echo $figure3['alt']; ?>" title="<?php echo $figure3['title']; ?>">
        <?php endif; ?>



        <div class="head-banner-content-text">

            <?php if ($figure2) : ?>
                <img id="head-banner-figure2" src="<?php echo $figure2['url']; ?>" alt="<?php echo $figure2['alt']; ?>" title="<?php echo $figure2['title']; ?>">
            <?php endif; ?>

            <h1>One more friend</h1>
            <h2>Thousands more fun!</h2>
            <p>
                Having a pet means you have more joy, a new friend, a happy person who will
                always be with you to have fun. We have 200+ different pets that can meet
                your needs!
            </p>
            <div>

                <button type="button" class="transparent-button pointer">View Intro
                    <?php
                    if ($video_icon) :
                    ?>
                        <img src="<?php echo $video_icon['url']; ?>" alt="<?php echo $video_icon['alt']; ?>" title="<?php echo $video_icon['title']; ?>">
                    <?php endif; ?>

                </button>
                <button type="button" class="blue-button pointer">Explore Now</button>
            </div>

        </div>

        <div class="head-banner-content-image">

        <?php if ($figure4) : ?>
            <img id="head-banner-figure4" src="<?php echo $figure4['url']; ?>" alt="<?php echo $figure4['alt']; ?>" title="<?php echo $figure4['title']; ?>">
        <?php endif; ?>

        <?php if ($figure5) : ?>
            <img id="head-banner-figure5" src="<?php echo $figure5['url']; ?>" alt="<?php echo $figure5['alt']; ?>" title="<?php echo $figure5['title']; ?>">
        <?php endif; ?>

        <?php if ($figure6) : ?>
            <img id="head-banner-figure6" src="<?php echo $figure6['url']; ?>" alt="<?php echo $figure6['alt']; ?>" title="<?php echo $figure6['title']; ?>">
        <?php endif; ?>


        <?php if ($figure7) : ?>
            <img id="head-banner-figure7" src="<?php echo $figure7['url']; ?>" alt="<?php echo $figure7['alt']; ?>" title="<?php echo $figure7['title']; ?>">
        <?php endif; ?>

        <?php if ($figure8) : ?>
            <img id="head-banner-figure8" src="<?php echo $figure8['url']; ?>" alt="<?php echo $figure8['alt']; ?>" title="<?php echo $figure8['title']; ?>">
        <?php endif; ?>

        <?php 
        $head_banner_image = get_field('head_banner_image', 'options');
        if ($head_banner_image) : ?>
            <img id="head-banner-image" src="<?php echo $head_banner_image['url']; ?>" alt="<?php echo $head_banner_image['alt']; ?>" title="<?php echo $head_banner_image['title']; ?>">
        <?php endif; ?>

        </div>

    </div>

</section>

<section class="section-pets">


</section>

<div class="container">

    <h1>TEST</h1>

    <?php

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1
    );
    $products = get_posts($args);

    var_dump($products)

    ?>

</div>


<?php
get_footer();
?>