<?php get_header(); ?>
	<?php if (have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<h4><?php the_content(); ?></h4>
		
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>