<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>

	<h2 class="comments-title">
		<?php
			printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), ' iDiary' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
		?>
	</h2>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
	<?php vt_nav(); ?>	
		
	</nav><!-- #comment-nav-above -->
	<?php endif; // Check for comment navigation. ?>

	<ol class="comment-list">
		<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size'=> 34,
			) );
		?>
	</ol><!-- .comment-list -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		
		<nav id="comments-navi">
		  <?php paginate_comments_links('prev_text=«&next_text=»');?>
        </nav>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', ' iDiary' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				<?php if ( $user_ID ) : ?>
				<div class="user_avatar">
					<?php echo get_avatar( get_the_author_email(), '32' ); ?>
					登录者：<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>
					<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出"><?php print ' 退出'; ?></a>
				</div>
					<?php elseif ( '' != $comment_author ): ?>
					<div class="author_avatar">
						<?php echo get_avatar($comment_author_email, $size = '32');  ?>
						<?php printf ('欢迎 <strong>%s</strong>', $comment_author); ?> 再次光临
						<a href="javascript:toggleCommentAuthorInfo();" id="toggle-comment-author-info"> 修改信息</a>
						<script type="text/javascript" charset="utf-8">
							//<![CDATA[
							var changeMsg = " 修改信息";
							var closeMsg = " 关闭";
							function toggleCommentAuthorInfo() {
								jQuery('#comment-author-info').slideToggle('slow', function(){
									if ( jQuery('#comment-author-info').css('display') == 'none' ) {
									jQuery('#toggle-comment-author-info').text(changeMsg);
									} else {
									jQuery('#toggle-comment-author-info').text(closeMsg);
									}
								});
							}
							jQuery(document).ready(function(){
								jQuery('#comment-author-info').hide();
							});
							//]]>
						</script>
					</div>
					<?php endif; ?>

				<?php if ( ! $user_ID ): ?>
				<div id="comment-author-info">
				<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
  <input type="text" name="author" id="author" class="form-control" placeholder="Username" value="<?php echo $comment_author; ?>">
</div>

<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
  <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $comment_author_email; ?>">
</div>

<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
  <input type="text" name="url" id="url" class="form-control" placeholder="Website" value="<?php echo $comment_author_url; ?>">
</div>

					
				</div>
				<?php endif; ?>

		        <p class="comment-tool">
		        	<a class="tool-img" href='javascript:embedImage();' title="插入图片"><i class="icon-img"></i></a>
		        	<a class="smiley" href="" title="插入表情"><i class="icon-smiley"></i></a>
		        	<span class="smiley-box"><?php get_template_part( 'inc/smiley' ); ?></span>
		        </p>

		        <p><textarea class="comment-form-comment form-control" id="comment" name="comment" rows="4" tabindex="4"></textarea></p>

				<p class="form-submit">
					<input id="submit" class="btn btn-success" name="submit" type="submit" tabindex="5" value="提&nbsp;交"/>
					<input id="reset" class="btn btn-warning" name="reset" type="reset" tabindex="6" value="<?php esc_attr_e( '重&nbsp;写' ); ?>" />
					<?php comment_id_fields(); do_action('comment_form', $post->ID); ?>
				</p>
			</form>

</div><!-- #comments -->
