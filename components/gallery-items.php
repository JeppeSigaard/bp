<?php 
$galleries = new WP_Query(array(
    'post_type' => 'galleri',
    'posts_per_page'    => -1,
    'orderby'  => 'menu_order',
    'order' => 'ASC',
));


while ($galleries->have_posts()) : $galleries->the_post();
$items = get_post_meta(get_the_ID(),'_images',false);
?>
<div class="box-full">			
    <h1><?php the_title(); ?></h1>
    <div class="gallery">
        <ul>
            <?php $i = 0; foreach($items as $item) :
                $img_src = false; 
                $size = 'small';
                $image_url_large = wp_get_attachment_image_src($item, 'full' );
                $image_url_small = wp_get_attachment_image_src($item, 'gallery-thumb' );
                $i++; if ($i == 1) {$img_src = $image_url_large[0]; $size = 'large'; } else {$img_src = $image_url_small[0]; }
            ?>
            <li>
                <a href="<?php echo $image_url_large[0] ?>" title="<?php the_title(); ?>" class="thumb-<?php echo $size ?>">
                    <img alt="<?php the_title(); ?>" src="<?php echo $img_src ?>" />
                </a>
            </li>
            
            <?php endforeach; ?>
        </ul>
    </div>

</div> <!-- END: box-full -->

<?php endwhile; wp_reset_postdata(); ?>