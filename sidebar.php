<div id="left">
<div id="logobox" onclick="MM_goToURL('parent','/');return document.MM_returnValue">
</div>

<ul id='nav'<?=(!is_page('44') ? "style=\"padding: 5px 20px 40px 30px;\"" : "");?>>
<? if (!is_page('44')) { ?>
  <li><a href="/">Home</a></li>
<? } ?>
<?php wp_list_pages('sort_column=menu_order&child_of=78&depth=0&title_li=' ); ?>
</ul>
<?php 	/* Widgetized sidebar, if you have the plugin installed. */
if (  !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<div class="layerone">
<div class="layertwo">
<h3>categories</h3>
<ul>
<?php wp_list_categories('show_count=0&title_li='); ?>
</ul>
</div>
</div>
<div class="layerone">
<div class="layertwo">
<h3>meta</h3>
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<?php wp_meta(); ?>
</ul>
</div>
</div>
<?php endif; ?>
</div>
</div>
