<?php get_header(); ?>
<div id="main">
<div id="content">
	<?php the_post(); ?>

	<div class="post_path">
		<?php _e('<span class="glyphicon glyphicon-home"></span>', 'iDiary'); ?> <a class="first_home" rel="nofollow" title="<?php _e('Go to homepage', 'iDiary'); ?>" href="<?php echo home_url('/'); ?>"><?php _e('Home', 'iDiary'); ?></a>
		&raquo; <?php the_category(' &raquo; ', 'multiple'); ?> &raquo; <?php the_title(); ?>
	</div>
	<div <?php post_class('post post_s'); ?> id="post-<?php the_ID(); ?>">
		<?php the_title( '<h1 class="title title_s">', '</h1>' ); ?>
		<div id="scroll_s_p" class="p_meta_s_t">
			<span class="glyphicon glyphicon-time"></span><?php echo get_the_date(); ?>
			<span class="glyphicon glyphicon-user"></span> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php the_author(); ?></a>
			<?php edit_post_link( __( 'Edit', 'iDiary' ), '<span class="glyphicon glyphicon-log-out"></span>', '' ); ?>
			<?php if (comments_open()) : ?>
				<span class="glyphicon glyphicon-eye-open"></span><span class="p_comment_s"> <a href="#respond" title="<?php _e('Go to respond', 'iDiary'); ?>" rel="nofollow"><?php _e('Leave a comment', 'iDiary'); ?></a><?php comments_number('(0)', '(1)', '(%)'); ?></span>
				<span class="glyphicon glyphicon-pencil"></span><span class="p_comment_s"> <a href="#comments" title="<?php _e('Go to comments', 'iDiary'); ?>" rel="nofollow"><?php _e('Go to comments', 'iDiary'); ?></a></span>
			<?php endif; ?>
			<span class="jtxs_bg"></span>
		</div>
		<div class="entry" id="entry_font">
			<?php the_content(); ?>
			<?php wp_link_pages('before=<div class="wp_link_pages"><strong>'. __('Pages:', 'iDiary') . '</strong>&after=</div>&next_or_number=number&pagelink=<span class="page_number">%</span>'); ?>
		</div>
		<div id="wzbq">
		<li><span class="glyphicon glyphicon-info-sign"></span> 用BY-NC-SA发布,固定链接:<a href="<?php the_permalink() ?>" data-toggle="tooltip" title="Some tooltip text!" rel="bookmark" title="本文固定链接 <?php the_permalink() ?>"><?php the_permalink() ?></a>
		</div>
		<div id="social">
	<div class="social-main">
		<span class="like">
	         <a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" title="我赞" class="favorite<?php if(isset($_COOKIE['ality_like_'.$post->ID])) echo ' done';?>"><i class="icon-zan"></i>喜欢 <i class="count">
	            <?php if( get_post_meta($post->ID,'ality_like',true) ){
					echo get_post_meta($post->ID,'ality_like',true);
				} else {
					echo '0';
				}?></i>
	        </a>
		</span>
		<span class="comment-s"><i class="icon-comment"></i><?php comments_popup_link( '抢沙发', '还有板凳', '评论 % ' ); ?></span>
		<span class="share-s"><a href="#share" id="share-main-s" title="分享"><i class="icon-share"></i>分享</a></span>
	</div>
	<div class="clear"></div>
</div>


		<div class="wenzhengdi">
		<div class="p_meta1">
			<?php _e('<span class="glyphicon glyphicon-folder-open"></span>', 'iDiary'); ?> <?php the_category(', '); ?>
			<?php _e('<span class="glyphicon glyphicon-tag"></span>', 'iDiary'); ?> <?php the_tags('', ', ', ''); ?>
		</div>
		<div id="nav_below">
			<p class="nav-previous"><?php previous_post_link( '%link ', '<span class="glyphicon glyphicon-circle-arrow-left"></span> %title' ); ?></p>
			<p class="nav-next"><?php if (get_next_post()) { next_post_link( ' %link', '%title <span class="glyphicon glyphicon-circle-arrow-right"></span>' ); } else { _e('(This is the latest article)', 'iDiary'); } ?></p>
		</div></div>
	</div>
<div class="wenzhengdi">
	<?php comments_template( '', true ); ?>
</div>
</div><!--content-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>