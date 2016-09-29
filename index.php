<?php
// The file defines all index page behaviours.

// Grab the header.
get_header(); ?>

<!-- site-content -->
<div class="content-wrapper">

<div class="blog-articles"><?php
	
	$args = array(
		'cat' => 4,
		'posts_per_page' => 2
	);
	
	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
				echo "<h2>" . get_category_by_slug( $catname )->name . "</h2>";
				get_template_part('content', get_post_format());
		}
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	} ?>
	
</div><!-- /blog-articles -->	
	
</div><!-- /content-wrapper -->

<?php
// Grab the footer.
get_footer();
?>