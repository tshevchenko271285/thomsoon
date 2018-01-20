<?php 
function thomsoon_route($str) {
	switch($str) {

		case 'title_animate' : get_template_part( 'template-parts/content', 'title-animate' ); break;
		case 'portfolios' : get_template_part( 'template-parts/content', 'portfolios' ); break;
		case 'title_page' : get_template_part( 'template-parts/content', 'title' ); break;
		case 'title_categoryes_text' : get_template_part( 'template-parts/content', 'title-categoryes-text' ); break;
		case 'contact_form' : get_template_part( 'template-parts/content', 'contact-form' ); break;

		default : echo 'Not template for ' . $str;
	}
}
