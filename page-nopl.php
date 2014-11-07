<?php
/*
Template Name: meiyoupinglun
*/
?>
<?php get_header(); ?>
<div id="main">
<div id="content">
	<?php the_post(); ?>

	<div class="post_path">
		<?php _e('<span class="glyphicon glyphicon-home"></span>', 'iDiary'); ?> <a class="first_home" rel="nofollow" title="<?php _e('Go to homepage', 'iDiary'); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home', 'iDiary'); ?></a>
		&raquo; <?php the_title(); ?>
	</div>
	<div class="post post_s" id="post-<?php the_ID(); ?>">
		<?php the_title( '<h1 class="title title_s">', '</h1>' ); ?>
		<div class="p_meta_s_t">
			<?php edit_post_link( __( 'Edit', 'iDiary' ), '[', ']' ); ?>
			<?php if (comments_open()) : ?>
				<span class="p_comment_s">&nabla; <a href="#respond" title="<?php _e('Go to respond', 'iDiary'); ?>" rel="nofollow"><?php _e('Leave a comment', 'iDiary'); ?></a><?php comments_number('(0)', '(1)', '(%)'); ?></span>
				<span class="p_comment_s">&oplus; <a href="#comments" title="<?php _e('Go to comments', 'iDiary'); ?>" rel="nofollow"><?php _e('Go to comments', 'iDiary'); ?></a></span>
			<?php endif; ?>
			<span class="jtxs_bg"></span>
		</div>
		<div class="entry">
			<?php the_content(); ?>
			<?php vt_nav(); ?>
		</div>
	</div>

</div><!--content-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
