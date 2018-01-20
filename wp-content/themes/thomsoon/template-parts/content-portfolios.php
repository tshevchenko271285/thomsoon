<?php 
	$data['nuber_of_posts'] = get_sub_field('number_of_posts') ? get_sub_field('number_of_posts') : 6;
$args = [
	'post_type' => 'post',
	'posts_per_page' => $data['nuber_of_posts']
];
$query = new WP_Query($args);
if( $query->have_posts() ){ ?>
	<ul class="portfolio-grid">
	<?php while( $query->have_posts() ){ $query->the_post(); 
		$id = get_the_id();
		$cats = wp_get_object_terms( $id, 'category' );
		$cat_str = '';
		foreach ($cats as $key => $cat) {
			if($key !== 0) 
				$cat_str .= ", ";
			$cat_str .= $cat->name;
		} ?>

		 <li class="grid-item" data-jkit="[show:delay=3000;speed=500;animation=fade]">
			<?php the_post_thumbnail(); ?>
			<a class="ajax-link" href="<?php the_permalink(); ?>">  
				<div class="grid-hover">
					<h1><?php the_title(); ?></h1>					
					<p><?php echo $cat_str; ?></p>
				</div>
			</a>  
		</li>
	<?php
	}
	wp_reset_postdata(); ?>
	</ul>
<?php 
} 
else echo 'Записей нет.';
?>
	<!--Portfolio grid-->

