<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title><?php wp_title(true,'|','right'); ?></title>
		<meta name="description" content="Velkommen til B.P. Biotransport ApS. Vi arbejder med levering og forabejdning af tømmer og flis i helt store mængder.">
		<meta name="keywords" content="B.P. Biotransport. BP Biotransport, biobrændsel, transport, levering, lastbil, chauffør  ">
    <?php wp_head();  ?>
    </head>

<body <?php body_class(); ?>>


<!-- BEGIN: contentcontainer -->	
	<div id="contentcontainer">

	<!-- BEGIN: header -->
			<div id="header"> 
                <div class="header-img"></div>
				<a class="logo" href="<?php bloginfo('url') ?>"><img alt="BP Biotransport" src="<?php echo get_template_directory_uri();  ?>/statics/logo-bp-biotransport.png"></a>
				
				<?php get_template_part('components/top','menu'); ?>
			</div> <!-- END: header -->
			<main class="box-main">