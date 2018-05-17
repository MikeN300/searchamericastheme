<?php
/*
 * Template Name: Basic One Column
 */
get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area container">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();


					the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );


					// Include the page content template.
		/*			get_template_part( 'content', 'page' ); */

				endwhile;
			?>

	</div><!-- #primary -->
	<?php //get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
// get_sidebar();
get_footer();
