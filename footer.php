</div><!--.wrapper_inner-->
</div><!--#wrapper--></div>


<div id="footer">

<?php if ( is_home()&&!is_paged() ){ ?>
<div id="links">
	<ul>
		<?php wp_list_bookmarks('title_li=&categorize=0&orderby=id'); ?>
		<li><a href="<?php echo stripslashes(get_option('cx_link_url')); ?>" title="友情链接">更多链接</a></li>
	</ul>
</div>
<?php } ?>
	
</div>


<?php wp_footer(); ?>
<div id="copyright"><div class="footer_inner">
			<?php _e('Copyright', 'iDiary'); ?> &copy; <?php echo date("Y"); ?> <a href="<?php echo esc_url( home_url('/') ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
			<span class="sepa">|</span> <?php printf(__('%1$s   %2$s', 'iDiary'), '<a href="http://hokyin.com" title="iDiary Theme">iDiary Theme</a>', 'is An elegant design'); ?>. <script src="http://s4.cnzz.com/stat.php?id=1253534176&web_id=1253534176" language="JavaScript"></script>
<div class="top"><a href="javascript:scroll(0,0)"><span class=" glyphicon glyphicon-chevron-up"></span></a></div>
    </div></div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-hover-dropdown.min.js"></script>
</body>
</html>