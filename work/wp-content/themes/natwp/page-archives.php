<?php/*
	Template Name: Archives (Do Not Use Manually)
*/?>

<?php get_header(); ?>
		
	<div id="archive" class="post archive">
		
		<div class="title">
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>
		</div>
		
		<?php
			$posts = query_posts('showposts=-1');

			if (have_posts()) :

				echo "<ul>"; $x=0;

				while (have_posts()) : the_post();

					if($thism != get_the_time('M')) {
						if($x!=0) echo "</ul><ul>"; $x++;
						echo "<li id='blogArchive-".get_the_time('m-Y')."' class='month-title'><a href='".get_month_link(get_the_time('Y'),get_the_time('m'))."'>".get_the_time('F')." ".get_the_time('Y')."</a></li>";
					}
				?>
				<?php $thism = get_the_time('M'); ?>
					<li>
						<span class="date"><?php echo get_the_time('d M'); ?></span>
						<span><a href="<?php the_permalink(); ?>" title="<?php echo wp_specialchars(strip_tags(the_title('', '', false)),1); ?>"><?php the_title(); ?></a></span>
					</li>

				<?php endwhile; ?>

				</ul>
				<!-- Navigation -->

			<?php else : ?>

				<!-- No Posts Found -->

		<?php endif; ?>

	</div>
	
<?php get_footer(); ?>