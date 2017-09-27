<?php get_header(); ?>

<section class="page-content">

	<header class="page-header">
		<div class="container">
			<?php if (is_search()) { ?>
			<h1>Search Results for: <?php echo get_query_var('s'); ?></h2>
			<?php } elseif (is_home()) { ?>
			<h1><a href="<?php $bloginfo = get_bloginfo('url'); ?>"><?php echo get_the_title(30); ?></a></h1>
			<?php } elseif (is_category()) { ?>
			<h1><?php $cat = get_category(get_query_var('cat'),false); print_r($cat->name); ?></h1>
			<?php } ?>
			</div>
		</header>

		<div class="container">

			<div class="primary-content">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post();  ?>
				<article class="post">
					<!-- Image -->
					<div class="img-wrap">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<!-- Title -->
					<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
					<!-- Date -->
					<p class="date"><?php the_date(); ?></p>
					<!-- Excerpt -->
					<?php the_excerpt(); ?>
					<!-- Read More -->
					<a class="button read-more" href="<?php the_permalink() ?>">Read More</a>
				</article>
			<?php endwhile; ?>

			<div class="pagination">
				<?php next_posts_link( __( '<div class="nav-previous">Older posts <span class="meta-nav">&larr;</span></div>', 'twentyten' ) ); ?>
				<?php previous_posts_link( __( '<div class="nav-next">Newer posts <span class="meta-nav">&rarr;</span></div>', 'twentyten' ) ); ?>
			</div>
		</div>

	<?php else : ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

	<?php get_sidebar(); ?>

</div>

</section>

<?php get_footer(); ?>
