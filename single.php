<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()): the_post(); ?>

	<header class="page-header">
		<div class="container">
			<h1><a href="<?php $bloginfo = get_bloginfo('url'); ?>"><?php echo get_the_title(30); ?></a></h1>
		</div>
	</header>

<section class="page-content">
	<div class="container">

		<div class="primary-content single">
			<article class="post">
				<div class="post-content">
					<h2 class="title"><?php the_title() ?></h2>
					<p class="date"><?php the_date(); ?></p>
					<p class="author"><?php the_author(); ?></p>
					<?php the_content(); ?>
					<div class="clear"></div>
						<?php get_template_part('templates/share') ?>
					</div>
				</div>
			</article>
			<?php get_sidebar(); ?>
		</div>

		<?php if (function_exists('wp_pagenavi')) : ?>
		<div class="pagination">
			<?php wp_pagenavi(); ?>
		</div>
		<?php endif; ?>

	</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>

