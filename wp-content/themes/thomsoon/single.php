<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package thomsoon
 */

get_header(); ?>

		<?php
		while ( have_posts() ) : the_post(); 
			$id = get_the_id();
			$cats = wp_get_object_terms( $id, 'category' );
			$cat_str = '';
			foreach ($cats as $key => $cat) {
				if($key !== 0) 
					$cat_str .= ", ";
				$cat_str .= $cat->name;
			} ?>
			<div class="content" id="ajax-content">
		        <div class="text-intro">
		          <h1><?php the_title(); ?></h1>
			          <div class="one-column">
			            <p><?php echo $cat_str; ?></p>
			          </div>
			          <div class="two-column">
			            <p><?php the_content();  ?></p>
			          </div>   
		                 				  
	                <div class="clear"></div>
	                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        			<?php 
	        			$gallery = get_field('gallery');
	        			if ( is_array( $gallery ) ) {
	        				foreach ($gallery as $image) {
	        					?>
	        						<img src="<?php echo $image['url']; ?>" width="100%"><br/><br/><br/><br/>
	        					<?php
	        				}
	        			}
        			?>
        			<!-- start pagination -->
					 <div class="prev-next">
						<?php previous_post_link('<div class="prev-button">%link</div>', 'Previous work'); ?>
						<?php next_post_link('<div class="next-button">%link</div>', 'Next work'); ?>		
					</div>
					<!-- end pagination -->
				</div>
			</div>
		<?php endwhile; // End of the loop.
		?>
	
<?php
get_footer();
