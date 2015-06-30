<?php 
/* template name: En alsidig vognpark */ 
$vogne = new WP_Query(array(

    'post_type' => 'vogn',
    'posts_per_page' => -1
));

get_header();

?>

<div class="box-full">				
    <h2>En alsidig vognpark</h2>
</div>		
        <div id="slidecontainer">	
            <div class="slide">
                <img src="<?php echo get_template_directory_uri() ?>/statics/slide-4-bpbiotransport.png"
                    alt="BP Biotransport har lastbiler, anhængere, trailere, containere, flishugger, chauffører" />
                <div class="caption" style="bottom:0">
                    <a title="BP Biotransport" href="#">
                        <h1>Har du brug for hjælp til transport? </h1>
                        Fra april til september er store dele
                        af vores alsidige vognpark disponibel
                        til udlejning med chauffør. Kontakt
                        BP Biotransport.
                    </a>
                </div> 
            </div> 
        </div> 

        <div class="box-two-third">
            <div class="video-wrap">
                <iframe src="http://player.vimeo.com/video/70171197" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 
            </div>		
        </div> <!-- END: box-full -->
        
        <?php while ( $vogne->have_posts() ): $vogne->the_post(); ?>
        <div class="box-third">				
            <h1><?php the_title(); ?></h1>
            <?php if( has_post_thumbnail()) : ?>
            <p><?php the_post_thumbnail(); ?></p>
            <?php endif; ?>
            <p>	
               <?php the_content(); ?>
            </p>
        </div> <!-- END: box-full -->

        <?php endwhile; ?>

<?php get_footer(); ?>