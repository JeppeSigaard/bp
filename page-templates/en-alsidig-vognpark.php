<?php /* template name: En alsidig vognpark */ get_header();?>
<?php while(have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
<?php get_template_part('components/post','title'); ?>
<?php the_content(); ?>   
<?php get_template_part('components/list','trucks'); ?>
</article>
<?php endwhile; get_footer(); ?>