<?php
// The file defines all index page behaviours.

// Grab the header.
get_header(); ?>

<!-- content-wrapper -->
<div class="content-wrapper">

	<div class="recent-posts"><?php

	$cats   = get_categories();
	$query  = new WP_Query;

	foreach ( $cats as $cat ) :
		$query->query( array(
			'cat'                 => $cat->term_id,
        	'posts_per_page'      => 1,
    	    'no_found_rows'       => true,
        	'ignore_sticky_posts' => true,
    	));

    	while ( $query->have_posts() ) : $query->the_post();

			get_template_part('content', get_post_format());

    	endwhile;

	endforeach; ?>
	
	</div><!-- /recent-posts -->
	
</div><!-- /content-wrapper -->

<?php
// Grab the footer.
get_footer();
?>