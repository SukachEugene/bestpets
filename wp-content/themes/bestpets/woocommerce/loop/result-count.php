<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<p class="woocommerce-result-count">
    
<?php

$attribute_slug = 'breed'; 
$terms = get_terms( array(
    'taxonomy' => 'pa_' . $attribute_slug,
    'hide_empty' => false,
) );

// get all attribute values on array
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    $attribute_values = array();

    foreach ( $terms as $term ) {
        $attribute_values[] = $term->name;
    }
}

// get filter from url
$breed = isset($_GET['wpf_filter_breed']) ? $_GET['wpf_filter_breed'] : '';
// change string to array
$array = explode("|", $breed);

// sanitaze values in array
foreach ($array as &$value) {
    $value = str_replace("_", " ", $value);
    $value = str_replace("-", " ", $value);
}

// create caption depends of case
if ($breed == '' || count($array) == count($attribute_values)) {
    echo '<span class="filter-breed-title">All Dogs</span>';
} else if (count($array) == 1) {
    echo '<span class="filter-breed-title">' . $array[0] .' Dogs</span>';
} else if (count($array) == 2) {
    echo '<span class="filter-breed-title">' . $array[0] . ' <span class="lovercase-text">and</span> ' . $array[1] . ' Dogs</span>';
} else if (count($array) > 3){
    echo '<span class="filter-breed-title">Mixed Filtered Dogs</span>';
} else {
    echo '<span class="filter-breed-title">';

    foreach ($array as $filter) {

        if ( $filter != end($array)) {
        echo $filter. ', ';
        } else {
        echo '<span class="lovercase-text">and</span> ' .$filter. ' Dogs';
        }
    
    }
    
    echo '</span>';
}


if ($total === 1) {
    echo '<span class="filter-title-count">' . $total . ' puppy</span>';
} else {
    echo '<span class="filter-title-count">' . $total . ' puppies</span>';
}

?>

</p>
