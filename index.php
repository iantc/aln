<?php get_header(); ?>
<div class="newsIndex">
<?php if (have_posts()) : ?>
<h1>News</h1>
<?php while (have_posts()) : the_post(); ?>
<div class="posthead" id="post-<?php the_ID(); ?>">
<div style="text-align:right;"><em><?php the_time('F jS, Y') ?></em></div>
<h4 class="postindexitem" style="width:350px;">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
<? the_content(); ?>
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
<?php if(wp_list_pages("child_of=".$post->ID."&echo=0")) { ?>
  <ul class="child-pages" style="padding-top:4px; margin-top:0px;color:#444">
  <? wp_list_pages("title_li=&child_of=$id&sort_column=post_title");?>
  </ul>
<? } ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>