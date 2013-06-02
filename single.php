<?php get_header(); ?>
<div class="pageContent" id="post-<?php the_ID(); ?>">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content('Read the rest of this entry &raquo;'); ?>
<?php if ( !in_category('7') ) { ?>
  <h4>Categories:</h4>
  <p><?php the_category(', ') ?></p>
<? } ?>
<p><?php the_time('F jS, Y') ?></p>
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
<?php get_footer(); ?>
