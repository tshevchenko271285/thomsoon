<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thomsoon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--Preloader-->
<div class="preloader" id="preloader">
    <div class="item">
      <div class="spinner">
      </div>
    </div>
</div>
<div class="opacity-nav">
    <div class="menu-index" id="buttons" style="z-index:999999">
    <i class="fa  fa-close"></i>
    </div>
	<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => '',
			'container'       => false,
			'menu_class'      => 'menu-fullscreen',
		) );
	?>
</div>
  <!--Header-->
<header id="fullscreen">

    <?php if ( has_custom_logo() ) : ?>

	<div class="logo" id="full">
		<a class="ajax-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php the_custom_logo(); ?>
		</a>
	</div>

    <?php else : ?>

	<div class="logo" id="full">
		<a class="ajax-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php bloginfo( 'name' ); ?>
		</a>
	</div>

    <?php endif ?>
      
	<div class="menu-index" id="button">
	<i class="fa fa-bars"></i>
	</div>

</header>

<div class="clear"></div>
