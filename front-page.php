<?php
// The file defines the static home page behaviours.

// Grab the header.
get_header(); ?>

<!-- site-content -->
<div class="content-wrapper">

<div class="site-content"><?php

	if (have_posts()) :
		while (have_posts()) : the_post();
			
		the_content();
	
		endwhile;
		// What to do when there's no content.
		else :
			echo '<p>No content found!</p>';
	endif;?>

</div><!-- /site-content -->

<?php
// Grab the footer.
get_footer();
?>