<?php
// The file defines all index page behaviours.

// Grab the header.
get_header(); ?>

<!-- site-content -->
<div class="content-wrapper"><?php

	//  Begin loop through all posts.
	if (have_posts()) :
		while (have_posts()) : the_post();
	
		// Reference to the content.php file. Post layout is pulled from content.php.
		get_template_part('content', get_post_format());
	
		endwhile;
	
		// What to do when there's no content.
		else :
			echo '<p>No content found!</p>';
		
	endif; ?>
	
</div><!-- /content-wrapper -->

<?php
// Grab the footer.
get_footer();
?>