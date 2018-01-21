<?php 
add_action('wp_ajax_get_portfolio', 'get_portfolio');
add_action('wp_ajax_nopriv_get_portfolio', 'get_portfolio');

function get_portfolio() {
if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$offset = $_POST['offset'];
	$posts_per_page = $_POST['loadStep'];
	$args = [
		'post_type' => 'post',
		'offset' => $offset,
		'posts_per_page' => $posts_per_page,
	];
	$query = new WP_Query($args); 
		if( $query->have_posts() ){
			while( $query->have_posts() ){ $query->the_post();

				get_template_part( 'template-parts/content', 'portfolio-item' );

			}
			wp_reset_postdata(); // сбрасываем переменную $post
		} else {
			//echo 'Записей нет.';
		}
		
}
if($_SERVER['REQUEST_METHOD'] === 'GET') {
	echo 'Ожидаю POST';
}
wp_die();
}




