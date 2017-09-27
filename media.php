<?php /* Template Name: Media */ ?>

<?php get_header(); ?>

<section class="page-content">
<!--
	<header class="page-header">
		<div class="container">
			<h1><?php the_title() ?></h1>
		</div>
	</header>
-->
	<div class="container">
		<div class="primary-content">

			<section class="media-cat images">
				<h2>Images</h2>
				<?php the_content(); ?>
			</section> 

			<section class="media-cat videos">
				<h2>Videos</h2>
				<?php $args = array('category_name' => 'video', 'posts_per_page' => 100 ); $query = new WP_Query( $args ); ?>
					<?php if( $query->have_posts() ): ?>
					<ul>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>"><img src="<?php video_thumbnail(); ?>" alt=""></a>
							</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				<?php wp_reset_query(); ?>
			</section>

			<section class="media-cat press">
				<h2>Press</h2>
				<?php $args = array('category_name' => 'press', 'posts_per_page' => 100 ); $query = new WP_Query( $args ); ?>
					<?php if( $query->have_posts() ): ?>
					<ul>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</section>

		</div>

		<div class="secondary-content">
			<?php dynamic_sidebar( 'blog-sidebar' ); ?>
		</div>
	</div>

</section>

<?php get_footer(); ?>
