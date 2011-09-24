<?php get_header();?>

<div id="main">
  <div id="headerdescription">
  <p>I am a Seattle-based interactive strategist/producer who works with creative advertisers to make their campaigns succeed in the digital space. Providing services in strategy, planning, execution and measurement, I sell, plan and manage projects soup to nuts, including responsive websites, display advertising and social media engagements. Here are a few work examples. Please <a href="mailto:natduffy@gmail.com">drop me a line</a> if you'd like to learn more.</p>
  </div>
	<div id="content">
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	        <div class="post" id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          	<div style="margin-bottom: 80px; border-bottom-width: 5px; border-bottom-style: dotted; border-bottom-color: #eae8e8;"

	<div class="entry">
              <?php the_content(__('Continue Reading &#187;')); ?>
              <?php wp_link_pages(); ?>
	</div>
	
      <?php endwhile; else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
      <p align="center"><?php posts_nav_link(' - ','&#171; Newer','Older &#187;') ?></p>
	</div>

	</body>