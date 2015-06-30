<?php get_header();?>
<?php while(have_posts()): the_post(); ?>		
<article <?php post_class(); ?>>
<div class="box-full">				
    <h1 class="post-title"><?php the_title() ?></h1>
</div>
<?php if(has_post_thumbnail()) : ?>
<div class="box-full full-img">
    <?php the_post_thumbnail(); ?>
</div>
<?php endif; ?>
<?php the_content(); ?>

<?php endwhile; ?>
</article>

<?php get_footer(); ?>
