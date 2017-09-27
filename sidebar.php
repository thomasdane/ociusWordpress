<?php if (is_front_page()) { ?>

	<section class="homepage-sidebar">
		<?php if ( is_active_sidebar( 'home-sidebar' ) ) : ?>
			<?php dynamic_sidebar( 'home-sidebar' ); ?>
		<?php endif; ?>
	</section>

<?php } elseif (is_page()) { ?>

	<div class="secondary-content">
		<?php if ( is_active_sidebar( 'page-sidebar' ) ) : ?>
			<?php dynamic_sidebar( 'page-sidebar' ); ?>
		<?php endif; ?>

		<?php if( have_rows('sidebar_content') ): while ( have_rows('sidebar_content') ) : the_row();
		$title = get_sub_field('sidebar_title');
		$content = get_sub_field('sidebar_content');
		?>
		<aside class="widget page-sidebar">
			<div class="text">
				<h6 class="title"><?php echo $title; ?></h6>
				<p class="content"><?php echo $content; ?></p>
			</div>
			<div class="clear"></div>
		</aside>
		<?php endwhile; else : ?>

		<?php endif; ?>
	</div>

<?php } elseif (is_home() || is_single() || is_category() ) { ?>

	<div class="secondary-content">
		<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
			<?php dynamic_sidebar( 'blog-sidebar' ); ?>
		<?php endif; ?>
	</div>

<?php } else { ?>

<?php } ?>

<div class="clear"></div>
