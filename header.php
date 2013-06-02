<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?>: <?php wp_title(); ?></title>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<script type="text/javascript" src="/scripts/various.js"></script>
<!--[if lte IE 6]>
<script type="text/javascript" src="/scripts/drop_down.js"></script>
<![endif]-->
<?php remove_filter('wp_head','ec3_action_wp_head'); ?>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="/stylesheets/menu.css" type="text/css" media="screen" />
<!--[if lte IE 7]>
<link rel="stylesheet" href="/stylesheets/ie_menu.css" type="text/css" media="screen" />
<![endif]-->
</head>
<body>
<div id="contentwrap" class="clearfix">
<div id="right">
<div id="topMenu">
<ul id='horizontalNav'>
<?php wp_list_pages('sort_column=menu_order&child_of=79&depth=0&title_li='); ?>
</ul>
</div>

