<?php

get_header(); ?>

<!-- content-wrapper -->
<div class="content-wrapper">

	<div id="recent-wrapper">
	
	<?php $categories = get_categories();
	
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
	
		</div><!-- /recent-post --><?php
	
	} // endif
	
	} // end foreach
	
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
            <p>Writings is a place for all of my thoughts, whether eloquent or gibberish. <a href="http://jackusher.co.uk/category/advertising/">Advertising</a> will contain my thoughts and feelings on brand campaigns. You'll also find my experiences with marketing, ads, and their digital cousins. <a href="http://jackusher.co.uk/category/projects/">Projects</a> contains information on what I'm doing at the moment. It's the best place to keep an eye on what I'm up to, or I used to be up to.</p>
		</section>	

	</div><!-- /cats-blurb-wrapper -->
	
</div><!-- /content-wrapper -->

<?php
get_footer();
?>