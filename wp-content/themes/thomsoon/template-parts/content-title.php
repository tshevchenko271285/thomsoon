<?php 
	$data['title'] = get_sub_field('title') ? get_sub_field('title') : "";
	$data['desc'] = get_sub_field('desc') ? get_sub_field('desc') : "";
?>
<div class="text-intro">

	<?php if ( strlen( $data['title'] ) ): ?>
		<h1><?php echo $data['title']; ?></h1>
	<?php endif ?>

	<?php if ( strlen( $data['desc'] ) ):  ?>
		<p><?php echo $data['desc']; ?></p>
	<?php endif ?>

</div>