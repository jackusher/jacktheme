<article class="post <?php post_class(); ?> clearfix">
    
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	
	<section class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in		
		<?php		
		$categories = get_the_category();
		$separator = ", ";
		$output = '';
		if ($categories) {			
			foreach ($categories as $category) {			
				$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;				
			}			
			echo trim($output, $separator);			
		}			
		?>			
	</section>
		
	<?php // the_post_thumbnail('banner-image'); ?>
	
	<?php the_content(); ?>
	
</article><!-- /post -->