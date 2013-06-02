<?php
/*
Template Name: Site Index
*/
?>
<?php get_header(); ?>
<div class="pageContent" id="post-<?php the_ID(); ?>">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php endwhile; ?>
<?php else : ?>
<h1>Not Found</h1>
<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
<ul>
<? wp_list_pages('sort_column=menu_order,post_title&exclude=22,44&title_li=' ); ?>
</ul>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>