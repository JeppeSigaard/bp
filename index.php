<?php 

/*-----------------------------*/
//·····························//
// BP tema til BP Biotransport //
//·····························//
/*-----------------------------*/

get_header(); 

if (is_page()) {require 'page-templates/page.php';}

if(is_404()){require 'page-templates/404.php';}

get_footer(); 

?>