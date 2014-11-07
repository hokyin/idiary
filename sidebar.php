<div id="sidebar">

<?php if ( !dynamic_sidebar('primary-widget-area') ) : ?>

	<?php if ( is_singular() ) { ?>
		<div class="widget list-group">
			<h3 class="list-group-item"><?php _e('Recent Posts', 'iDiary'); ?></h3>
			<ul>
				<?php
				$myposts = get_posts('numberposts=5&offset=0&category=0');
				foreach($myposts as $post) : setup_postdata($post);
				?>
				<li class="list-group-item"><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php } else { ?>
		<div class="widget list-group">
			<h3 class="list-group-item"><?php _e('Random Posts', 'iDiary'); ?></h3>
			<ol>
				<?php
				$rand_posts = get_posts('numberposts=5&orderby=rand');
				foreach( $rand_posts as $post ) :
				?>
				<li class="list-group-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach; ?>
			</ol>
		</div>
	<?php } ?>

	<div class="widget list-group">
		<h3><?php _e('Archives', 'iDiary'); ?></h3>
		<ul class="list-group-item">
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ul>
	</div>


	<div id="float">
<ul>
<?php $rand_posts = get_posts('numberposts=7&orderby=rand');
foreach( $rand_posts as $post ) : ?>
   <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
   </li>
<?php endforeach; ?>
</ul>
</div>
<script>
function buffer(a,b,c){var d;return function(){if(d)return;d=setTimeout(function(){a.call(this),d=undefined},b)}}(function(){function e(){var d=document.body.scrollTop||document.documentElement.scrollTop;d>b?(a.className="div1 div2",c&&(a.style.top=d-b+"px")):a.className="div1"}var a=document.getElementById("float");if(a==undefined)return!1;var b=0,c,d=a;while(d)b+=d.offsetTop,d=d.offsetParent;c=window.ActiveXObject&&!window.XMLHttpRequest;if(!c||!0)window.onscroll=buffer(e,150,this)})();
</script>
<?php endif; ?>

<?php if ( is_singular() ) { if ( is_active_sidebar('singular-widget-area') ) dynamic_sidebar('singular-widget-area'); } ?>
<?php if (!is_singular()) { if ( is_active_sidebar('not-singular-widget-area') ) dynamic_sidebar('not-singular-widget-area'); } ?>
<?php if ( is_active_sidebar('footer-widget-area') ) dynamic_sidebar('footer-widget-area'); ?>

</div><!-- end: #sidebar -->
