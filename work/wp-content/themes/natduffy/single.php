<?php get_header();?>
<div id="main">
	<div id="content">
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	        <div class="post" id="post-<?php the_ID(); ?>">
            
            <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			      <div class="entry">
              <?php the_content(__('Continue Reading &#187;')); ?>
              <?php wp_link_pages(); ?>

	          	        </div>
      <?php endwhile; else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

      
	</div>
