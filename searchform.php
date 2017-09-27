<form role="search" method="get" id="searchform" class="searchform" action="/">
	<div>
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		<input type="text" value="<?php get_search_query(); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit" value=""><!-- <span class="absolute icon-search"></span> -->
	</div>
</form>
