<div class="post-share">
	<h5 class="share-heading">Share this post:</h5>

	<div class="post-tw">
		<a class="button-primary twitter icon-twitter" href="#share"
		data-share="twitter"
		data-url="<?php echo site_url(); ?>"
		data-message="<?php the_title() ?>"
		data-via="<?php the_field('twitter_username', 'option') ?>">Tweet</a>
	</div>

	<div class="post-fb">
		<a class="button-primary facebook icon-facebook" href="#share"
		data-share="facebook"
		data-message="<?php the_title() ?>"
		data-url="<?php echo site_url(); ?>"
		>Share</a>
	</div>
</div>

