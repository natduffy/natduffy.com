<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" version="-//W3C//DTD XHTML 1.1//EN" <?php language_attributes('xhtml') ?> >
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title(''); if(wp_title('',false)){ echo " | "; } bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="template" content="natwp" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php automatic_feed_links(); ?>
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_enqueue_script('dd-script',get_bloginfo('template_directory').'/script.js'); ?>
	<?php if (is_singular()) { wp_enqueue_script('comment-reply',false,array('jquery')); } ?>
	<?php wp_head(); ?>
</head>

<body>
<div id="wrapper">
	<div id="header">
	<?php if(is_single()) { ?>
		<div id="title">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<span>at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a> <a href="?s=%20" id="searchlink">Search for posts</a></span>
		</div>
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<h1>Find results for <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /> <input type="submit" id="searchsubmit" value="Search" /></h1>
			<span>at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a> <a href="?" id="cancelsearch">Cancel search</a></span>
		</form>
	<?php } else if(is_tag()) { ?>
		<div id="title">
			<h1>Posts Tagged '<?php single_tag_title(); ?>'</h1>
			<span>at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a> <a href="?s=%20" id="searchlink">Search for posts</a></span>
		</div>
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<h1>Find results for <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /> <input type="submit" id="searchsubmit" value="Search" /></h1>
			<span>at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a> <a href="?" id="cancelsearch">Cancel search</a></span>
		</form>
	<?php } else if(is_search()) { ?>
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/" style="display:block;">
			<h1>Results for <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /> <input type="submit" id="searchsubmit" value="Search" /></h1>
			<span>at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></span>
		</form>
	<?php } else { ?>
		<div id="title">
		<?php if(function_exists('tdwordcount_display')){ ?>
			<h1><a href="<?php bloginfo('url'); ?>"><?php tdwordcount_display(); echo " words about life"; ?></a><h1>
			<span><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a> <a href="?s=%20" id="searchlink">Search for posts</a></span>
		<?php } else { ?>
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<span><?php bloginfo('description'); ?> <a href="?s=%20" id="searchlink">Search for posts</a></span>
		<?php } ?>
		</div>
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<h1>Find results for <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /> <input type="submit" id="searchsubmit" value="Search" /></h1>
			<span>at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a> <a href="?" id="cancelsearch">Cancel search</a></span>
		</form>
	<?php } ?>
	</div>
	<div class="inner clearfix">