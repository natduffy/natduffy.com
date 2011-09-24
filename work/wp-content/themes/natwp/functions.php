<?php

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="title">',
		'after_title' => '</div>',
	));
}

function dd_get_page_link_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) :
		return get_permalink( $page->ID );
	else :
		$page = get_page_by_path($page_slug.'s');
		if ($page) :
			return get_permalink( $page->ID );
		else :
			return "#";
		endif;
	endif;
}

function dd_comment_link() {
	global $post;
	if($post->comment_count==0){
		$o = "<a href='".get_permalink()."#respond' title='".wp_specialchars(strip_tags(the_title('', '', false)),1)."' class='commentslink zero'>";
			$o .= $post->comment_count;
		$o .= " comments</a>";
	} else if($post->comment_count==1){
		$o = "<a href='".get_permalink()."#respond' title='".wp_specialchars(strip_tags(the_title('', '', false)),1)."' class='commentslink zero'>";
			$o .= $post->comment_count;
		$o .= " comment</a>";
	} else {
		$o = "<a href='".get_permalink()."#comments' title='".wp_specialchars(strip_tags(the_title('', '', false)),1)."' class='commentslink'>";
			$o .= $post->comment_count;
		$o .= " comments</a>";
	}
	echo $o;
}

?>