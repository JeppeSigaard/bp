<?php while(have_posts()): the_post(); ?>		
<article <?php post_class(); ?>>
<?php get_template_part('components/post','title'); ?>

<?php if(has_post_thumbnail()) : ?>
<div class="box-full full-img">
    <?php the_post_thumbnail(); ?>
</div>

<?php endif; ?>

<?php the_content(); ?>
<?php endwhile; ?>
</article>