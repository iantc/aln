<?php get_header(); ?>
<div class="pageContent">
<h1>Posts</h1>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>">
<h3>
<?php the_title(); ?> 
<?php if ( in_category('7') ) { ?>
[Event]
<? } ?>
</h3>
<?php if ( in_category('7') ) { ?>
<div style="float:right">[updated: <?php the_time('F jS, Y') ?>]</div>
<? } ?>
<?php the_content('Read the rest of this entry &raquo;'); ?>
<br />
<?php if ( !in_category('7') ) { ?>
  <h4>Categories:</h4>
  <p><?php the_category(', ') ?></p>
<p><?php the_time('F jS, Y') ?></p>
<? } ?>
</div>
<?php endwhile; ?>
</div>
<div class="navigation">
<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
<?php else : ?>
<h1>Not Found</h1>
<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
