<div id="topnav">
<a href="#" class="top-nav-toggle">Menu</a>
<?php

$defaults = array(
	'theme_location'  => 'main_menu',
	'menu'            => '',
	'container'       => 'false',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'false',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => null,
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul>%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?>
</div>