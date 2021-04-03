<?php header("X-UA-Compatible:IE=edge,chrome=1")?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
<meta name="author" content="">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php global $page, $paged; wp_title('1',true,'right');bloginfo('name');?></title>

	<link  href="<?php bloginfo('template_url');?>/images/favicon.ico"rel="shortcut icon">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/res-style.css" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/common.js"></script>

	<?php if(is_singular()) wp_enqueue_script('comment-reply');wp_head();?>
</head>
<body  <?php body_class();?>>
	<header>
		<nav class="w_1000">
			<ul>
						<li><a href="<?php bloginfo('url');?>/">Top</a> </li>
						<li><a href="<?php bloginfo('url');?>/service">service</a> </li>
						<li><a href="<?php bloginfo('url');?>/blog">Blog</a> </li>
						<li><a href="<?php bloginfo('url');?>/company">company</a> </li>
						<li><a href="<?php bloginfo('url');?>/contact">contact</a> </li>
			</ul>

		</nav>
		<div class="header_img_wrap">

		<div class="header_img w_1000">
			<div class="top page_head">今までになかった<br>感動体験を</div>
		</div>
		</div>
	</header>
	<div id="wrap">

	</div>
</body>
</html>