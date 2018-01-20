<?php 
	$data['title'] = get_sub_field('title') ? get_sub_field('title') : '';
	$data['text'] = get_sub_field('text') ? get_sub_field('text') : false;
	$data['animates'] = get_sub_field('animates') ? get_sub_field('animates') : false;

	if( is_array( $data['animates'] ) ) {
		$titleAnimate = [];
		$firstTitle = false;
		foreach ($data['animates'] as $item) {
			if( !$firstTitle ){
				$firstTitle = $item['text'];
				continue;
			}
			$titleAnimate[] .= $item['text'];
		}
	}
?>
<script type="text/javascript">
	var titleAnimate = <?php echo json_encode($titleAnimate); ?>;
</script>
<div class="text-intro" id="site-type">

	<h1><?php echo $data['title'] ?></h1>
	<h1 class="typewrite"><span><?php echo $firstTitle; ?></span></h1> <!--Change on script.js-->
	<p><?php echo $data['text'] ?></p>

</div>