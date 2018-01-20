<?php 
/**
 * Template Name: Projects
 */
get_header(); ?>

<!--Content-->

<div class="content" id="ajax-content">
<ul class="portfolio-grid">

<?php 

while ( have_posts() ) : the_post();

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
endwhile; // End of the loop.

?>
</ul>
</div>
<?php// get_sidebar(); ?>
<?php
get_footer();

