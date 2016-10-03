<?php
// The file defines all index page behaviours.

// Grab the header.
get_header(); ?>

<!-- content-wrapper -->
<div class="content-wrapper">

	<div id="recent-wrapper"><!-- The container masonry element. All mason blocks go in here. -->
	
	<?php // Arguments for the WP query to pull in the latest post from each category.
	$categories = get_categories();
	
	foreach ( $categories as $category ) {
		$args = array( // Running the query arguments through each category on the site.
			'cat' => $category->term_id,
			'post_type' => 'post',
			'posts_per_page' => '1'
		);
	
	$query = new WP_Query( $args ); // Running the new WP_Query using the arguments defined above.
	
	if ( $query->have_posts() ) { ?>
		
		<div id="recent-post">
			<?php while ( $query->have_posts() ) {
		
				$query->the_post();
				?>
			
			<!-- post-thumbnail behaviour. Creating a div for the image, and calling a pre-defined image size. Putting a link in. -->
			<div class="recent-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('masonry-thumbnail'); ?></a>
			</div><!-- /recent-thumbnail -->
			
			<div class="recent-info">
				<p class="recent-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				<span class="subtle-category">Posted in
					<?php
					$categories = get_the_category();
					$separator = ", ";
					$output = '';
					if ($categories) {
						foreach ($categories as $category) {
							$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
						}
						echo trim($output, $separator);
					}
					?>
				</span>
			</div><!-- /recent-info -->

			<?php } // endwhile ?>
	
		</div><!-- /recent-item --><?php
	
	} // endif
	
	} // end foreach category script.
	
	// Use reset to restore original query.
	wp_reset_postdata(); ?>

</div><!-- /recent-wrapper -->

	<div id="cats-wrapper" class="blog-wrapper">

	<section id="cats-list-tile" class="blog-title">
		<h2>the blog sections</h2>
	</section>

	<section id="cats-list">
		<?php wp_list_categories( array(
			'title_li' => ''
		)); ?>
	</section>
	
</div><!-- /cats-wrapper -->

	<div id="cats-blurb-wrapper" class="blog-wrapper">

	<section id="cat-blurb-title" class="blog-title">
		<h2>what's it all about?</h2>
	</section>

	<section id="cat-blurb">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut aliquet nunc. Quisque eu nulla scelerisque, mattis tortor vel, auctor elit. Maecenas sodales nunc in eros luctus venenatis. Vestibulum ullamcorper lectus ac orci volutpat, sed dapibus elit condimentum. Cras sit amet fermentum lectus. Nunc tempus eros arcu, a tincidunt ante gravida ut. In convallis nec tortor non ornare. Duis id tortor sit amet nunc ultrices pellentesque eu ac dui. Vivamus finibus, ligula et vehicula porta, est eros vehicula lacus, in interdum dui quam nec sapien. Nulla ut porta enim. Nunc ultrices sed sapien at tempus. Integer porta turpis eu lorem dapibus pharetra. Integer sed urna sed orci volutpat malesuada eget vitae tellus. Sed ex elit, posuere porttitor nunc non, maximus tempor ipsum.</p>
	</section>	

</div>
	
</div><!-- /content-wrapper -->

<?php
// Grab the footer.
get_footer();
?>