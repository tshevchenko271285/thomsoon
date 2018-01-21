<?php 
	$data['nuber_of_posts'] = get_sub_field('number_of_posts') ? get_sub_field('number_of_posts') : 6;
	$data['number_of_load'] = get_sub_field('number_of_load') ? get_sub_field('number_of_load') : false;
	$data['load_more'] = get_sub_field('load_more') ? get_sub_field('load_more') : false;
$args = [
	'post_type' => 'post',
	'posts_per_page' => $data['nuber_of_posts']
];
$query = new WP_Query($args);
if( $query->have_posts() ){ ?>
	<ul class="portfolio-grid">
	<?php while( $query->have_posts() ){ $query->the_post(); 
		get_template_part( 'template-parts/content', 'portfolio-item' );
	}
	wp_reset_postdata(); ?>
	</ul>
	<?php if ($data['load_more']): ?>
		<div id="loadMore" class="loadMore-portfolios" data-load="<?php echo $data['number_of_load']; ?>">
			<i class="fa fa-angle-down fa-5x" aria-hidden="true"></i>
		</div>
	<?php endif ?>
<?php 
} 
else echo 'Записей нет.';
?>
	<!--Portfolio grid-->

