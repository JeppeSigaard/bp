<?php /* Template name: Forside */ get_header(); ?>			
<?php get_template_part('components/front','slides'); ?>
<?php while(have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
<?php the_content(); ?>
<?php endwhile; ?>
</article>
<?php get_footer(); ?>