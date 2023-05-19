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
                <button type="button" class="blue-button2 pointer">Explore Now</button>
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

    <section class="section-pets-grid-4-2">

        <?php
        $arrow_right = get_field('arrow_right', 'options');
        ?>

        <p class="title-p">Whats new?</p>
        <div class="block-header">
            <h3>Take a look at some of our pets</h3>
            <button type="button" class="transparent-button2 pointer button-with-icon">
                <span>View more</span>
                <?php
                if ($arrow_right) {
                ?>
                    <img class="padding-left-10" src="<?php echo $arrow_right['url']; ?>" alt="<?php echo $arrow_right['alt']; ?>" title="<?php echo $arrow_right['title']; ?>">
                <?php
                }
                ?>
            </button>
        </div>

        <?php get_template_part('templates/block', 'pets-two-rows'); ?>

    </section>

    <section class="middle-banner">

        <div class="middle-banner-content">

            <?php
            $figure1 = get_field('figure1');
            $figure2 = get_field('figure2');
            ?>

            <?php if ($figure1) : ?>
                <img id="middle-banner-figure1" src="<?php echo $figure1['url']; ?>" alt="<?php echo $figure1['alt']; ?>" title="<?php echo $figure1['title']; ?>">
            <?php endif; ?>


            <?php if ($figure2) : ?>
                <img id="middle-banner-figure2" src="<?php echo $figure2['url']; ?>" alt="<?php echo $figure2['alt']; ?>" title="<?php echo $figure2['title']; ?>">
            <?php endif; ?>


            <div class="middle-banner-content-image">

                <?php
                $middle_banner_photo = get_field('middle_banner_photo');
                if ($middle_banner_photo) : ?>
                    <img id="middle-banner-photo" src="<?php echo $middle_banner_photo['url']; ?>" alt="<?php echo $middle_banner_photo['alt']; ?>" title="<?php echo $middle_banner_photo['title']; ?>">
                <?php endif; ?>

            </div>



            <div class="middle-banner-content-text">

                <p class="banner-title1">One more friend</p>
                <p class="banner-title2">Thousands more fun!</p>
                <p class="banner-p">
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
                    <button type="button" class="blue-button2 pointer">Explore Now</button>
                </div>

            </div>
        </div>

    </section>


    <section class="section-goods-grid-4-2">

        <?php
        $arrow_right = get_field('arrow_right', 'options');
        ?>

        <p class="title-p">Hard to choose right products for your pets?</p>
        <div class="block-header">
            <h3>Our Products</h3>
            <button type="button" class="transparent-button2 pointer button-with-icon">
                <span>View more</span>
                <?php
                if ($arrow_right) {
                ?>
                    <img class="padding-left-10" src="<?php echo $arrow_right['url']; ?>" alt="<?php echo $arrow_right['alt']; ?>" title="<?php echo $arrow_right['title']; ?>">
                <?php
                }
                ?>
            </button>
        </div>

        <?php get_template_part('templates/block', 'goods-two-rows'); ?>

    </section>


    <section class="section-sellers margin-bottom-50">

        <?php
        $arrow_right = get_field('arrow_right', 'options');
        ?>


        <div class="block-header">
            <div class="inline-text">
                <p class="title-p">Proud to be part of</p>
                <h3 class="padding-left-10">Pet Sellers</h3>
            </div>
            <button type="button" class="transparent-button2 pointer button-with-icon">
                <span>View all our sellers</span>
                <?php
                if ($arrow_right) {
                ?>
                    <img class="padding-left-10" src="<?php echo $arrow_right['url']; ?>" alt="<?php echo $arrow_right['alt']; ?>" title="<?php echo $arrow_right['title']; ?>">
                <?php
                }
                ?>
            </button>
        </div>

        <div class="flex-list">
            <?php
            $sellers = get_field('sellers_list');

            if ($sellers) :
                foreach ($sellers as $seller) {

                    $image = $seller['sellers_image'];

                    if ($image) {
                        echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" title="' . $image['title'] . '">';
                    }
                }
            endif;
            ?>
        </div>


    </section>



    <section class="middle-banner-type2 margin-bottom-60">

        <div class="middle-banner-content-type2">

            <?php
            $figure3 = get_field('figure3');
            $figure4 = get_field('figure4');
            ?>

            <?php if ($figure3) : ?>
                <img id="middle-banner-figure3" src="<?php echo $figure3['url']; ?>" alt="<?php echo $figure3['alt']; ?>" title="<?php echo $figure3['title']; ?>">
            <?php endif; ?>


            <?php if ($figure4) : ?>
                <img id="middle-banner-figure4" src="<?php echo $figure4['url']; ?>" alt="<?php echo $figure4['alt']; ?>" title="<?php echo $figure4['title']; ?>">
            <?php endif; ?>


            <div class="middle-banner-content-image">

                <?php
                $middle_banner_photo_2 = get_field('middle_banner_photo_2');
                if ($middle_banner_photo_2) : ?>
                    <img id="middle-banner-photo" src="<?php echo $middle_banner_photo_2['url']; ?>" alt="<?php echo $middle_banner_photo_2['alt']; ?>" title="<?php echo $middle_banner_photo_2['title']; ?>">
                <?php endif; ?>

            </div>



            <div class="middle-banner-content-text">

                <?php
                $pawprint = get_field('pawprint', 'options');
                ?>

                <p class="banner-title1">Adoption <?php if ($pawprint) { ?>
                        <img src="<?php echo $pawprint['url']; ?>" alt="<?php echo $pawprint['alt']; ?>" title="<?php echo $pawprint['title']; ?>">

                    <?php } ?>
                </p>
                <p class="banner-title2">We Need Help. So Do They.</p>
                <p class="banner-p">
                    Adopt a pet and give it a home,</br>
                    it will be love you back unconditionally.
                </p>
                <div>

                    <button type="button" class="transparent-button pointer">View Intro
                        <?php
                        if ($video_icon) :
                        ?>
                            <img src="<?php echo $video_icon['url']; ?>" alt="<?php echo $video_icon['alt']; ?>" title="<?php echo $video_icon['title']; ?>">
                        <?php endif; ?>

                    </button>
                    <button type="button" class="blue-button2 pointer">Explore Now</button>
                </div>

            </div>
        </div>

    </section>

    <section class="blog-posts">

        <?php
        $arrow_right = get_field('arrow_right', 'options');
        ?>

        <p class="title-p">You already know ?</p>
        <div class="block-header">
            <h3>Useful pet knowledge</h3>
            <button type="button" class="transparent-button2 pointer button-with-icon">
                <span>View more</span>
                <?php
                if ($arrow_right) {
                ?>
                    <img class="padding-left-10" src="<?php echo $arrow_right['url']; ?>" alt="<?php echo $arrow_right['alt']; ?>" title="<?php echo $arrow_right['title']; ?>">
                <?php
                }
                ?>
            </button>
        </div>

       

    </section>

</div>


<?php
get_footer();
?>