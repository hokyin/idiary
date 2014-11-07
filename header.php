<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Hokyin,WordPress,css,jQuery,前端,设计" />
<meta name="description" content="HokYin是一个关于网页UI设计，前端开发，WordPress相关的博客，用于记录个人的学习及交流分享经验。，借此遇上一些志同道合的人!" />
    <title>Kayo&#039;s Blog | Practice Makes Perfect</title>

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>favicon.ico">
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
  </head>
  <body>
<div id="header">
  <nav class="navbar navbar-default navbar-fixed-top span7 text-center" role="navigation">
  <div class="container">
  <h1 class="site_title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"<?php echo $logo; ?> rel="home"><?php bloginfo('name'); ?></a>
			</h1>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>guestbook"><span class="glyphicon glyphicon-leaf"></span> Guestbook</a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about"><span class="glyphicon glyphicon-user"></span> About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list"></span> Works <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><span class="glyphicon glyphicon-headphones"></span> Music</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-cloud-download"></span> Download</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="form-group">
	<input type="text" class="form-control" placeholder="Search" value="<?php _e('Search ...', 'iDiary'); ?>" onfocus="if (this.value == '<?php _e('Search ...', 'iDiary'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('Search ...', 'iDiary'); ?>';}" name="s" id="s" /></div>
	<input type="submit" class="btn btn-default" id="searchsubmit" value="<?php _e('Google','iDiary'); ?>" />
</form>
      <ul class="nav navbar-nav navbar-right"><!--
        <li><a href="<?php echo wp_login_url();?>"><button type="button" class="btn btn-primary">Link</button></a></li><li><a href="<?php echo wp_logout_url();?>">Link2</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-paperclip"></span> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav></div>
