<?php get_header();?>
<div id="main">
	<div id="content">
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	        <div class="post" id="post-<?php the_ID(); ?>">
            <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			      <div class="entry">
              <?php the_content(__('Continue Reading &#187;')); ?>
              <?php wp_link_pages(); ?>
              <?php $sub_pages = wp_list_pages( 'sort_column=menu_order&depth=1&title_li=&echo=0&child_of=' . $id );?>
              <?php if ($sub_pages <> "" ){?>
            </div>
	        </div>
	</div>
