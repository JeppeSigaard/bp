<?php 
add_theme_support('post-thumbnails');

add_action( 'after_setup_theme', 'smamo_add_image_sizes' );
function smamo_add_image_sizes() {
    
    add_image_size('gallery-thumb',122,101,true);
    
}

?>