<?php

add_action('wp_enqueue_scripts','smamo_do_styles');
function smamo_do_styles(){

    wp_enqueue_style( 'main', get_template_directory_uri().'/style/style.css', false, null, 'all' );

}
?>
