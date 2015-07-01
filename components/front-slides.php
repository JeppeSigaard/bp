<?php 

$slides = new WP_Query(array(
    'post_type' => 'slide',
    'posts_per_page' => -1,
));

?>
<div id="slidecontainer">
<?php while($slides->have_posts()) : $slides->the_post(); remove_filter( 'the_content', 'wpautop' );?>

    <div <?php post_class('slide') ?>>
        <?php the_post_thumbnail('full'); ?>
        <?php if(!empty(get_the_content())) : ?>
        <div class="caption">
            <?php the_content(); ?>
        </div>
        <?php endif; ?>
    </div> 

<?php endwhile; wp_reset_postdata(); add_filter( 'the_content', 'wpautop' );?>
    <div class="slidenav">
        <a href="#" class="prev"></a>
        <a href="#" class="next"></a>
    </div>	
</div>