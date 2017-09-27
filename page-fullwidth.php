<?php /* Template Name: Full Width */ ?>

<?php get_header(); ?>

<section class="page-content fullwidth">
<!--
/*
	<?php if (have_posts()) while (have_posts()): the_post(); ?>
	
	<?php if (has_post_thumbnail()){
			$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID,'full') );
		}else{
			$feat_image = '../img/bg-overlay.png';
		}	
	?>
	<header class="page-header" style="background-image: url(<?php echo $feat_image; ?>);">
		<?php if (has_post_thumbnail()){ echo '<div class="overlay"></div>'; } ?>
		<div class="page-header-container">
			
			<h1><?php the_title() ?></h1>
			<div class="underline"></div>
		</div>
	</header>
*/
-->
	<div class="container">

		<div class="primary-content">
			<article>
				<?php the_content(); ?>
			</article>
		</div>

	</div>

</section>

<?php endwhile; ?>

<?php get_footer(); ?>

