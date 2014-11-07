<?php get_header(); ?>
<div id="main">
<div id="content">
	<div class="post">
		<h2 class="title title_page"><?php _e('Error 404 - Not Found', 'iDiary'); ?></h2>
		<div class="entry">
			<p><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'iDiary'); ?></p>
			<?php get_search_form(); ?>
		</div><!--entry-->
	</div><!--post-->
</div><!--content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>