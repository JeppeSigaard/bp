<?php /* Template name: Forside */ get_header(); ?>			
<?php get_template_part('components/front','slides'); ?>
<?php while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>