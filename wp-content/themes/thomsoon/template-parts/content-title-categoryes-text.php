<?php 
	$data['title'] = get_sub_field('title') ? get_sub_field('title') : '';
	$data['text'] = get_sub_field('text') ? get_sub_field('text') : false;

	$args = array(
		'taxonomy' => 'category',
		'hide_empty' => false,
	);
	$cat_str = '';
	$terms = get_terms( $args );
	foreach ($terms as $key => $cat) {
		if($key !== 0) 
			$cat_str .= " | ";
		$cat_str .= $cat->name;
	} 
?>
<div class="text-intro">

	<?php if ( strlen( $data['title'] ) ): ?>
		<h1><?php echo $data['title'] ?></h1>
	<?php endif ?>

	<div class="one-column">
		<p> <?php echo $cat_str ?> </p>
	</div>

	<div class="two-column">
		<?php echo $data['text']; ?>
	</div>      

</div>
<div class="clear"></div>