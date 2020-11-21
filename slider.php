<?php 
// the query
$the_query = new WP_Query( array( 'category_name' => 'Cat C' ) ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
    <div class="flexslider">
                        <ul class="slides">
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) :$the_query->the_post();  ?>
        <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
    <li>
				<?php the_post_thumbnail('slider'); // Declare pixel size you need inside the array ?>
    </li>
        <?php endif; ?>
    <?php endwhile; ?>
    <!-- end of the loop -->
                        </ul>
    </div>
    
 
    <?php wp_reset_postdata(); ?>
 
<?php endif; ?>