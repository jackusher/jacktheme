<?php
// The file defines the static home page behaviours.

// Grab the header.
get_header(); ?>

<!-- content-wrapper -->
<div class="content-wrapper clearfix"><?php

	if (have_posts()) :
		while (have_posts()) : the_post();
			
		the_content();
	
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