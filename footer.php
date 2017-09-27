	<footer class="primary">
		<div class="container">
			<?php wp_nav_menu( array(
				'theme_location' => 'menu_footer',
				'container'       => 'nav',
				'container_class'       => 'menu-secondary',
				'menu_class'      => 'menu-secondary',
				'menu_id'         => 'menu-secondary',
			)); ?>
			<div class="details">
				<a class="img-wrap" href="/">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="" class="logo">
				</a>
				<?php the_field('address', 'option') ?>
				<div class="social">
					<a class="button social icon-facebook" href="https://www.facebook.com/<?php the_field('facebook_url', 'option') ?>"></a>
					<a class="button social icon-twitter" href="https://twitter.com/<?php the_field('twitter_username', 'option') ?>"></a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</footer>

	<?php wp_footer(); ?>

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	// paste in code from Google Analytics

	ga('create', '[google-analytics-code]', 'auto');
	ga('require', 'displayfeatures');
	ga('send', 'pageview');

	</script>

</div>
</body>
</html>
