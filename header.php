<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<meta charset="utf-8">

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.png" type="image/png">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- Facebook Meta -->
	<meta property="og:image" content="<?php the_preview_image(); ?>">
	<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta property="og:description" content="<?php the_description(); ?>">
	<meta property="og:url" content="<?php the_permalink(); ?>">
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<meta property="og:type" content="blog"/>

	<!-- Typekit Asynchronous -->
	<script type="text/javascript">
	(function(d) {
		var config = {
			kitId: 'agd1kws',
			scriptTimeout: 3000
		},
		h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	})(document);
	</script>
	<style> .wf-loading h1 { font-family: "droid-sans"; visibility: hidden; } .wf-active h1 { visibility: visible; } </style>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="wrap">
		<div id="fb-root"></div>
		<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1424558524485585&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>

		<header class="primary" id="header-primary">
			<div class="container">
				<a class="img-wrap" href="/">
					<img style="margin-top:8px;" src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/05/ocius-logo.png" alt="" class="logo">
				</a>
				<a href="#"id="show-menu" class="mobile-menu icon-menu"></a>
				<?php wp_nav_menu( array(
					'theme_location' => 'menu_primary',
					'container'       => 'nav',
					'container_class' => 'main-menu',
					'menu_class'      => 'menu-primary',
					'menu_id'         => 'menu-primary',
					)); ?>
				</div>
				<div class="clear"></div>
			</header>
