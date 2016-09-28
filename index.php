<?php
// The file defines all index page behaviours.

// Grab the header.
get_header(); ?>

<!-- site-content -->
<div class="content-wrapper"><?php

	if (have_posts()) :
		while (have_posts()) : the_post();
			
		the_content();
	
		endwhile;
		// What to do when there's no content.
		else :
			echo '<p>No content found!</p>';
	endif;?>
	
</div><!-- /content-wrapper -->

<?php
// Grab the footer.
get_footer();
?>