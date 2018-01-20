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

						<?php if ( isset(get_previous_post()->guid) ): ?>
							<div class="prev-button"><a class="ajax-link" href="<?php echo get_previous_post()->guid; ?>">Previous work</a></div>

						<?php else : ?>
							<div class="prev-button"><a class="ajax-link" style="opacity: 0.5">Previous work</a></div>
						<?php endif ?>		


						<?php if ( isset(get_next_post()->guid) ): ?>
							<div class="next-button"><a class="ajax-link" href="<?php echo get_next_post()->guid; ?>" >Next work</a>

						<?php else : ?>
						<div class="next-button"><a class="ajax-link" style="opacity: 0.5">Next work</a>
						<?php endif ?>
						
					</div>
					<!-- end pagination -->
				</div>
			</div>
		<?php endwhile; // End of the loop.
		?>
	
<?php
get_footer();
