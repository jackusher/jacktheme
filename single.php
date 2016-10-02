<?php
// single.php defines what to do with single post pages.

// Grab the header.
get_header(); ?>

<!-- content-wrapper -->
<div class="content-wrapper">

	<!-- post-wrapper -->
	<div class="post-wrapper">

		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
	
			// Reference to the content.php file. Post layout is pulled from content.php. If there are any special post types, e.g. galleries, the second argument pushes requests to the correct content-*.php file.
			// *if* logic: If the post is non-formatted, go to content-single.php. If the post is formatted, then go to respective content-*.php.
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
			
	</div><!-- /post-wrapper -->
	
</div><!-- /content-wrapper -->

<?php	
// Grab the footer.	
get_footer();
?>