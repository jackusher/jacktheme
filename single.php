<?php

get_header(); ?>

<!-- content-wrapper -->
<div class="content-wrapper">

	<?php
	if (have_posts()) :
		while (have_posts()) : the_post();
	
		// Reference to content.php.
		if (get_post_format() == false) {
			get_template_part('content', 'single');
		} else {
			get_template_part('content', get_post_format());
		}
	
		endwhile;
	
	// What to do if there are no posts.
	else :
		echo '<p>No content found</p>';
	
	endif; ?>
	
</div><!-- /content-wrapper -->

<?php
get_footer();
?>