<?php /* Template Name: Product Grid */ ?>

<?php get_header(); ?>

<section class="page-content fullwidth">

	<?php if (have_posts()) while (have_posts()): the_post(); ?>

		<header class="page-header">
			<div class="container">
				<h1><?php the_title() ?></h1>
			</div>
		</header>

		<div class="container">

			<div class="primary-content">
				<article>
					<?php the_content(); ?>
				</article>
				<section class="products">
					<?php if( have_rows('product_grid') ): while ( have_rows('product_grid') ) : the_row();
					$name = get_sub_field('product_title');
					$desc = get_sub_field('product_description');
					$spec = get_sub_field('product_specifications');
					$image = get_sub_field('product_image');
					?>
					<article class="product">
						<?php if ($image): ?>
							<div class="img-wrap">

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							</div>
						<?php endif; ?>
						<div class="text">
							<h2 class="name"><?php echo $name; ?></h2>
							<p class="description"><?php echo $desc; ?></p>
							<?php if($spec) { ?>
								<div class="specifications"><?php echo $spec; ?></div>
							<?php } ?>
							<?php if(have_rows('product_downloads')): ?>
								<h3>Downloads:</h3>
								<?php while (have_rows('product_downloads')): the_row();
								$title = get_sub_field('download_title');
								$upload = get_sub_field('download_file');
								$file_url = $upload['url']; ?>
								<a href="<?php echo $file_url; ?>" class="button-secondary"><?php echo $title; ?></a>
							<?php endwhile; endif; ?>
						</div>
						<div class="clear"></div>
					</article>
				<?php endwhile; else : ?>

				<p>No ferrys found</p>

			<?php endif; ?>
		</section>

	</div>

</div>

</section>

<?php endwhile; ?>

<?php get_footer(); ?>
