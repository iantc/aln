<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<div id="mission">
</div>
<div id="frontpageContainer">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>">
<?php the_content('Read the rest of this entry &raquo;'); ?>
<p align="right"><em><?php the_modified_date('F jS, Y') ?></em></p>
</div>
<?php endwhile; ?>
<div class="navigation">
<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
</div>
<?php else : ?>
<h1>Not Found</h1>
<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
<div id="pageFooter">
</div>
<?php get_footer(); ?>
