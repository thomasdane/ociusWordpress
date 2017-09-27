<?php get_header(); ?>

<section class="page-content">

	<?php if (have_posts()) while (have_posts()): the_post(); ?>
	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

  <div class="header-wrap"> 
			<header class="page-header">
			<div class="container">
				<h1><?php the_title() ?></h1>
			</div>
		</div>
	</header>

	<div class="container">

		<div class="primary-content">
			<article>
				<?php the_content(); ?>

				<?php if(is_page(122)): ?>
					<?php get_template_part('templates/management') ?>
				<?php endif; ?>

			</article>
		</div>
		<?php get_sidebar(); ?>
	</div>

</section>

<?php endwhile; ?>

<?php get_footer(); ?>

