<?php
// The file defines all index page behaviours.

// Grab the header.
get_header(); ?>

<!-- site-content -->
<div class="content-wrapper">

<div class="blog-articles clearfix"><?php

$cats   = get_categories();
$query  = new WP_Query;

foreach ( $cats as $cat ) :
    $query->query( array(
        'cat'                 => $cat->term_id,
        'posts_per_page'      => 1,
        'no_found_rows'       => true,
        'ignore_sticky_posts' => true,
    )); ?>

    <?php while ( $query->have_posts() ) : $query->the_post() ?>

		<?php get_template_part('content', get_post_format()); ?>

    <?php endwhile ?>

<?php endforeach ?>

</div><!-- /blog-articles -->
	
</div><!-- /content-wrapper -->

<?php
// Grab the footer.
get_footer();
?>