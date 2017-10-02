<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()): the_post(); ?>

	<header class="homepage-header">
		
		<div class ="front-page">
			<div class ="header-slider">
			</div>
		<?php the_content(); ?>
		</div>
		<div class="container">	
<!-- DISABLED UGLY DEPRECATED LNIKS
			<section class="page-links">
				<?php
					$links = get_field('page_link');
					foreach($links as $link) { ?>
						<div class="page-link <?php echo (count($links) == 2) ? 'two' : 'three'; ?>-links">
							<a href="<?php echo ($link['page_link']); ?>">
								<div class="img-wrap">
									<img src="<?php echo ($link['image']['sizes']['page-link']); ?>">
								</div>
								<div class="text">
									<h5><?php echo($link['title']); ?></h5>
									<p class="content"><?php echo($link['content']); ?></p>
								</div>
							</a>
						</div>
				<?php } ?>
			</section>
-->
		</div>
		<div class="clear"></div>
	</header>

	<section class="container homepage-blocks">

		<?php if( have_rows('layout') ): while ( have_rows('layout') ) : the_row(); ?>

			<?php if( get_row_layout() == 'large_feature' ):?>

				<!-- Large Feature -->
				<div class="large-feature homepage-block">
					<?php $image = get_sub_field('image'); ?>

					<div class="text">
						<h2><?php the_sub_field('title'); ?></h2>
						<p><?php the_sub_field('content') ?></p>
						<a class="button-secondary icon-right-open" href="<?php the_sub_field('page_link') ?>"><?php the_sub_field('button_text') ?></a>
					</div>

					<div class="image">
						<img src="<?php echo $image['sizes']['large-feature']; ?>" alt="<?php echo $image['alt']; ?>" href="<?php the_sub_field('page_link') ?>"/>
						<span><?php echo $image['caption']; ?></span>
						<div class="image-border"></div>
					</div>
					<div class="clear"></div>
				</div>

			<?php elseif ( get_row_layout() == 'small_feature' ): ?>

				<!-- Small Feature -->
				<div class="small-feature homepage-block">
					<?php $image = get_sub_field('image'); ?>

					<div class="text">
						<h2><a href="<?php the_sub_field('page_link') ?>"><?php the_sub_field('title'); ?></h2>
						<p class="content"><?php the_sub_field('content') ?></p>
						<!-- <a href="<?php the_sub_field('page_link') ?>"><span class="button icon-right-open"><?php the_sub_field('button_text') ?></span></a> -->
					</div>

					<div class="image">
						<a href="<?php the_sub_field('page_link') ?>"><img src="<?php echo $image['sizes']['small-feature']; ?>" alt="<?php echo $image['alt']; ?>" />
						<div class="image-border"></div>
					</div>
					<!-- <span><?php echo $image['caption']; ?></span> -->

					<div class="clear"></div>
				</div>

			<?php endif; ?>

		<?php endwhile; endif; ?>

		<section class="homepage-sidebar">
			<?php get_sidebar(); ?>
		</section>

	</section>

<?php endwhile; ?>

<?php get_footer(); ?>
