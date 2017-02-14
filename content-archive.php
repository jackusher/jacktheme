<article class="list-post <?php post_class(); ?>">

	<div class="archive-thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-archive-thumbnail'); ?></a>
	</div><!-- /archive-thumbnail -->
				
	<div class="blog-info"><!-- Post titles and excerpts. -->
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	</div><!-- /blog-info -->
			
</article><!-- /list-post -->