<?php 
/**
 * Template Name: Projects
 */
get_header(); ?>

<!--Content-->

<div class="content" id="ajax-content">


<?php 

while ( have_posts() ) : the_post();

        // check if the flexible content field has rows of data
        if( have_rows('page') ):
        	
             // loop through the rows of data
            while ( have_rows('page') ) : the_row();

				thomsoon_route( get_row_layout() );

            endwhile;

        else :

            // no layouts found

        endif;
endwhile; // End of the loop.

?>
</div>
<?php// get_sidebar(); ?>
<?php
get_footer();
