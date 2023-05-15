<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">

    <?php
    $icon = get_field('search_icon', 'options');
    if ($icon) :
    ?>

        <input type="submit" id="searchsubmit" value=" " <?php bg($icon) ?>>
       
    <?php endif ?>

    <input required type="text" value="" name="s" id="s" placeholder="Search something here!">

</form>