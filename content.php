<!--
content.php contains the main post article elements for post lists (index, article etc.), and single posts. Further types are marked by content-*.php.
-->

<article class="post <?php if ( has_post_thumbnail() ) { ?> has-thumbnail clearfix<?php } ?>"><!-- Start of looped post content. -->
			
	<div class="blog-artcat"><!-- Post categories. -->
		<span>
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
	</div><!-- /blog-artcat -->
				
	<div class="blog-info"><!-- Post titles and excerpts. -->
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4><?php
		the_excerpt(); ?>
	</div><!-- /blog-info -->
			
</article><!-- /post -->