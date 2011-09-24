<?php get_header(); ?>

	<div id="posts">

		<div class="post">
			<div class="title">
				<h2>Page not found</h2>
			</div>
			<div class="entry">
				<p>Sorry, the post or page you were looking for cannot be found. It may have been renamed or removed, you can search for it in the search box at the top of the page.</p>
			</div>
		</div>
		<div class="months">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) { ?>
			<div class="title">Pages</div>
			<?php wp_page_menu(array('depth' => 1)); ?>
			<div class="title">
				<?php if (($archive_link = dd_get_page_link_by_slug('archive')) != '#') { ?><a href="<?php echo $archive_link; ?>">Archives</a><?php } else { ?>Archives<?php } ?>
			</div>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
			<?php } ?>
		</div>

	</div>

<?php get_footer(); ?>