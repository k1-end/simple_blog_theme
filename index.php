<?php get_header(); ?>
<?php get_sidebar(); ?>

	<main role="main">
            
            <!-- Flexslider featured content -->
			
                <?php
                // Check if this is the front page and that it is not page 2 or higher
                if ( is_front_page() && !is_paged() ) {
                    // Add featured content slider
                    get_template_part('slider'); 
                }
                ?>

            <!-- END Flexslider featured -->
            <!-- section -->
            <section id="masonry-index">

                <?php get_template_part('loop'); ?>

            </section>
            <!-- /section -->
            <?php get_template_part('pagination'); ?>
	</main>


<?php get_footer(); ?>
