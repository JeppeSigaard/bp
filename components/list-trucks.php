<?php 
$vogne = new WP_Query(array(

    'post_type' => 'vogn',
    'posts_per_page' => -1
));

while ( $vogne->have_posts() ): $vogne->the_post(); 

?>

<div class="box-third">				
    <h1><?php the_title(); ?></h1>
    <?php if( has_post_thumbnail()) : ?>
    <p><?php the_post_thumbnail(); ?></p>
    <?php endif; ?>
    <p>	
       <?php the_content(); ?>
    </p>
</div> <!-- END: box-full -->

<?php endwhile; wp_reset_postdata();?>