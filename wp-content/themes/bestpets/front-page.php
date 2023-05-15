<?php
get_header()
?>

<section class="head-banner">

        <div class="head-banner-content">

            <div class="head-banner-content-text">

                <h1>One more friend</h1>
                <h2>Thousands more fun!</h2>
                <p>
                    Having a pet means you have more joy, a new friend, a happy person who will
                    always be with you to have fun. We have 200+ different pets that can meet
                    your needs!
                </p>
                <div>
                    <button type="button" class="transparent-button pointer">View Intro</button>
                    <button type="button" class="blue-button pointer">Explore Now</button>
                </div>

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