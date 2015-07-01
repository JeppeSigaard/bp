<?php 
add_post_type_support( 'page', 'excerpt' );

/* Scripts and styles */
require 'functions/scripts.php'; 
require 'functions/styles.php'; 
/* Menus*/
require 'functions/menus.php'; 

/* post types */
require 'functions/post-types/galleri.php'; 
require 'functions/post-types/truck.php'; 
require 'functions/post-types/slides.php'; 

/* Billeder */
require 'functions/images.php';


/* */
require 'functions/meta-box/index.php'; 

/* */
require 'functions/costumizer.php'; 

?>