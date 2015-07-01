<?php $options = get_option('smamo_theme_options'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title><?php wp_title('·', true, 'right'); ?></title>
		<meta name="description" content="Velkommen til B.P. Biotransport ApS. Vi arbejder med levering og forabejdning af tømmer og flis i helt store mængder.">
		<meta name="keywords" content="B.P. Biotransport. BP Biotransport, biobrændsel, transport, levering, lastbil, chauffør  ">
    <?php wp_head();  ?>
    </head>

<body <?php body_class(); ?>>


<!-- BEGIN: contentcontainer -->	
	<div id="contentcontainer">

	<!-- BEGIN: header -->
			<header id="header"> 
                <div class="header-img" style="background-image:url(<?php echo $options['header_image_upload'] ?>);"></div>
				<a class="logo" href="<?php bloginfo('url') ?>"><img alt="BP Biotransport" src="<?php echo $options['logo_upload'] ?>"></a>
				
				<?php get_template_part('components/top','menu'); ?>
			</header>
			<main class="box-main">