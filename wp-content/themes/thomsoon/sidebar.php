<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thomsoon
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="ajax-sidebar">
	

  <div class="home-sidebar" style="background-image:url('<?php echo get_template_directory_uri() ?>/img/home-sidebar.jpg')" id="hero">

    <div class="parallax-option" data-jkit="[parallax:strength=0.8;axis=both]">
      <div class="parallax parallax1">
      	<img src="<?php echo get_template_directory_uri() ?>/img/business-card-2.png">
      </div>
    </div>
    <div class="parallax-option" data-jkit="[parallax:strength=0.3;axis=both]">
      <div class="parallax parallax1">
      	<img src="<?php echo get_template_directory_uri() ?>/img/business-card.png">
      </div>
    </div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
  </div>

</div>