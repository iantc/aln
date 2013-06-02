<?php
/*
Template Name: Calendar Display
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?>: <?php wp_title(); ?></title>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="/stylesheets/menu.css" type="text/css" media="screen" />
<script type="text/javascript" src="/scripts/mootools.1.11.js"></script>
<script type="text/javascript" language="javascript">
window.addEvent('domready', function() {
var szNormal = 117, szSmall  = 100, szFull   = 219;
 
var kwicks = $$("#kwicks .kwick");
var fx = new Fx.Elements(kwicks, {wait: false, duration: 300, transition: Fx.Transitions.Back.easeOut});
kwicks.each(function(kwick, i) {
	kwick.addEvent("mouseenter", function(event) {
		var o = {};
		o[i] = {width: [kwick.getStyle("width").toInt(), szFull]}
		kwicks.each(function(other, j) {
			if(i != j) {
				var w = other.getStyle("width").toInt();
				if(w != szSmall) o[j] = {width: [w, szSmall]};
			}
		});
		fx.start(o);
	});
});
 
$("kwicks").addEvent("mouseleave", function(event) {
	var o = {};
	kwicks.each(function(kwick, i) {
		o[i] = {width: [kwick.getStyle("width").toInt(), szNormal]}
	});
	fx.start(o);
})
});
</script>
<script type="text/javascript" src="/scripts/various.js"></script>
<!--[if lte IE 7]>
<link rel="stylesheet" href="/stylesheets/ie_menu.css" type="text/css" media="screen" />
<![endif]-->
</head>
<body>
<div id="contentwrap" class="clearfix">
<div id="right">
<div id="topMenu">
<ul id='horizontalNav'>
<?php wp_list_pages('sort_column=menu_order&include=20,21,22&title_li=' ); ?>
</ul>
</div>
<div class="pageContent" id="post-<?php the_ID(); ?>">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content('Read the rest of this entry &raquo;'); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php ec3_get_calendar(); ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>