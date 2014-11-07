<?php get_header(); global $iDiary_theme_options; ?>

<div id="main">
    <div id="content1">

<?php if (have_posts()) : ?>

	<?php if ( is_home() || is_front_page() ){
		if ($paged > 1 ) { ?>
			<div class="archive_title">
				<?php echo __('All posts', 'iDiary') . '<span class="archive_page"> | '. sprintf(__('Page %s','iDiary'), $paged) .'</span>'; ?>
				<span class="jtxs_bg"></span>
			</div>
		<?php }
	} ?>

	<?php if (is_search()) : ?>
		<div class="post_path">
			<?php _e('You are here:', 'iDiary'); ?> <a class="first_home" rel="nofollow" title="<?php _e('Go to homepage', 'iDiary'); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home', 'iDiary'); ?></a> &raquo; <?php echo sprintf(__('<h1>Search Results for %s</h1>','iDiary'), get_search_query()); ?>
		</div>
		<div class="archive_title">
			<?php echo sprintf(__('Search Results for %s','iDiary'), get_search_query()); ?>
			<?php if ($paged > 1) echo '<span class="archive_page"> | '. sprintf(__('Page %s','iDiary'), $paged) .'</span>'; ?>
		</div>
		
	<?php endif; ?>

	<?php while (have_posts()) : the_post();?>
	<div class="list-group">
<div class="p_meta list-group-item">
				<?php if ( $paged<2 && is_sticky() ) {
					echo '<span class="sticky_mark">'. __('<span class="label label-danger">Hot</span>', 'iDiary') . '</span>';
				} ?>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( get_the_time() ); ?>" rel="bookmark"><span class="glyphicon glyphicon-time"></span> <?php echo get_the_date(); ?></a>
				 <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"> <span class="glyphicon glyphicon-user"></span> <?php the_author(); ?></a>
				 <a> <span class="glyphicon glyphicon-folder-open"></span>  <?php the_category(', '); ?></a>
				 <?php edit_post_link( __( '<span class="glyphicon glyphicon-log-out"></span> Edit', 'iDiary' ), '', '' ); ?>
				<span id="views-li"class="label label-success">
  围观<span class="badge"><?php if(function_exists('the_views')) { echo ' '; the_views(); } ?></span>
				
				吐槽<p class="p_comment"><span class="badge"><?php comments_popup_link('0', '1', '%'); ?></span></p></span>
			</div>
		<div class="list-group-item" <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
			<?php the_title( '<h2 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			<div class="entry">
				<?php if ( $iDiary_theme_options['excerpt_check']=='true' ) { the_excerpt(__('read more','iDiary')); } else { the_content(__('read more','iDiary')); } ?>
			</div>
			
		</div>
    </div>
	<?php endwhile; ?>

<?php else: ?>

	<div class="post">
		<h2 class="title"><?php _e('Error 404 - Not Found', 'iDiary'); ?></h2>
		<div class="entry">
			<p><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'iDiary'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>

<?php endif; ?>

<?php vt_nav(); ?>


</div><!--content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>