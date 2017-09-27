<section class="management">
	<?php if( have_rows('manager') ): while ( have_rows('manager') ) : the_row();
	$name = get_sub_field('manager_title');
	$bio = get_sub_field('manager_bio');
	$image = get_sub_field('manager_image');
	?>
	<article class="manager">
		<?php if ($image): ?>
			<div class="img-wrap">
				<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
		<?php endif; ?>
		<div class="text">
			<h3 class="name"><?php echo $name; ?></h3>
			<p class="bio"><?php echo $bio; ?></p>
		</div>
	</article>
	<?php endwhile; else : ?>

	<p>No managers found</p>

	<?php endif; ?>
</section>
