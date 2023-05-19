<footer>

    <div class="footer-banner">

        <div class="container">


            <div class="footer-content">

                <div class="footer-form-container">

                    <h4>Register now so you don't miss our programs</h4>

                    <form action="#" method="POST">
                        <input type="email" name="email" placeholder="Enter your Email">
                        <button type="submit">Subcribe Now</button>
                    </form>

                </div>

                <div class="footer-links">

                    <?php
                    wp_nav_menu('footer-menu');
                    ?>

                    <div class="footer-links-social-medias">
                        <?php
                        $medias = get_field('social_medias', 'options');

                        foreach ($medias as $media) {
                            echo  '<a href="' . $media['social_media_link'] . '"><i class="' . $media['social_media_name'] .'"></i></a>';
                        }


                        ?>
                    </div>

                </div>

                <div class="footer-bottom-content">

                    <p>© 2022 Monito. All rights reserved.</p>

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

                    <p><span class="padding-rigt-30">Terms of Service</span> Privacy Policy</p>

                </div>

            </div>

        </div>

    </div>

</footer>


<?php
wp_footer();
?>

</body>

</html>