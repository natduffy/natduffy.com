<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		<div id="posts">
		<?php while (have_posts()) : the_post(); ?>
			<div class="post">
			<?php if(is_single()) { ?>
				<div class="title">
					<h2><?php the_time('l jS F Y'); ?></h2>
					<span class="date">by <?php the_author(); ?></span>
				</div>
			<?php } else { ?>
				<div class="title">
					<h2><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>
					<span class="date"><?php the_time('d M Y'); ?></span>
				</div>
			<?php } ?>
				<div class="entry">
					<?php the_content('Keep reading&hellip;'); ?>
					<?php wp_link_pages(); ?>
					<?php the_tags('<p>Tags: ',', ','</p>'); ?>
				</div>
			</div>
			<div class="sep">&middot; &middot; &middot; &loz; &loz; &loz; &middot; &middot; &middot;</div>
			<?php comments_template(); ?>
		<?php endwhile; ?>
			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
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
	<?php else : ?>
	<!-- No Posts Found -->
	<?php endif; ?>

<?php get_footer(); ?>