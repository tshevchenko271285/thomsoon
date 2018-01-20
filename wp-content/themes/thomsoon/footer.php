<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thomsoon
 */
$copytext = get_field('copy_text', 'options') ? get_field('copy_text', 'options') : '';
$socials = get_field('socials', 'options') ? get_field('socials', 'options') : false;
?>
 <!--Footer-->

  <footer>

    <div class="footer-margin">
      	<?php if ( is_array( $socials ) ) : ?>
			<div class="social-footer">
				<?php foreach ($socials as $item): ?>
					<a href="<?php echo $item['url'] ?>"><i class="fa <?php echo $item['icon'] ?>"></i></a>
				<?php endforeach ?>
			</div>     
      	<?php endif ?>
      <div class="copyright"><?php echo $copytext ?></div>
      

    
    </div>


  </footer>
<?php wp_footer(); ?>

</body>
</html>
