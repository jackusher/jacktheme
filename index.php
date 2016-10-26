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
		
		<div id="recent-post" class="<?php post_class(); ?>">
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

		<section id="cats-list-title" class="section-title">
			<h2>the sections</h2>
		</section>

		<section id="cats-list">
			<?php wp_list_categories( array(
				'title_li' => ''
			)); ?>
		</section>
	
	</div><!-- /cats-wrapper -->

	<div id="cats-blurb-wrapper" class="blog-wrapper">

		<section id="cat-blurb-title" class="section-title">
			<h2>what's it all about?</h2>
		</section>

		<section id="cat-blurb">
			<p>Writings is a place for all of my thoughts, both those formed and those written down at 3am. 'Advertising' will be the most active section. Adverts currently spark so much contrasting opinion that I'd quite like to be in on the fun, so my thoughts and feelings on brand campaigns are in there. You'll also fine my experiences with marketing, ads, and their digital cousins.</p>
			<p>'Projects' contains information on what I'm doing at the moment, be it Wordpress or advertising-oriented. It's the best place to keep an eye on what I'm up to, or I used to be up to.</p>
			<p>'Thoughts' is the container of my general opinions. I'll be selective; little things do annoy me but I won't be tempted to vent about my supermarket shop. Overall, it's mostly design-oriented (thoughts on websites, layout, objects).</p>
		</section>	

	</div>
	
</div><!-- /content-wrapper -->

<?php
// Grab the footer.
get_footer();
?>