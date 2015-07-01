<?php /* template name: Galleri */ get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
<?php get_template_part('components/post','title'); ?>
<?php get_template_part('components/gallery','items'); ?>
</article>
<?php endwhile; get_footer(); ?>