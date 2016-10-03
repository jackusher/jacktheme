<!--
content-archive.php contains the post article elements for category archive pages.
-->

<article class="list-post"><!-- Start of looped post content. -->

	<div class="archive-thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-archive-thumbnail'); ?></a>
	</div><!-- /recent-thumbnail -->
				
	<div class="blog-info"><!-- Post titles and excerpts. -->
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	</div><!-- /blog-info -->
			
</article><!-- /post -->