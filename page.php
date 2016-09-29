<?php
// page.php defines what to do with pages if they don't have their own page-*.php file.

// Grab the header.
get_header(); ?>

<!-- site-content -->
<div class="content-wrapper">

	<?php
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>
	
		<!-- Definte the article class for page layout and content. -->
		<article class="page">
		
			<!-- Bringing in the basic content blocks (title and content). -->
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
				
		</article><!-- /post page -->
	
		<?php endwhile;
	
		// What to do if there's no content.
	else :
		echo '<p>No content found!</p>';
		
	endif; ?>
	
</div><!-- /content-wrapper -->

<?php
// Grab the footer.
get_footer();
?>