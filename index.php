<?php get_header(); ?>

<div class="container">
	<div class="post">


	<?php $args = array(
						'posts_per_page' => 1,
						'order' => 'DEC',
					); ?>
	<?php $query = new WP_Query( $args );?>

	<?php if( $query->have_posts() ) : ?>		
		<?php while( $query->have_posts() ) : $query->the_post(); ?>

				<div class="post-title">
				<a href="<?php echo get_permalink(); ?>">
					<?php the_title(); ?>
				</a>
				</div>
			
     	
        <span class="author-name">
			<a href="#">
				<?php echo get_the_author_meta('display_name'); ?>
			</a>
				
		</span>

		<span class="date">	
					<a href="#">
						<?php echo get_the_date(); ?>
					</a>
	
		</span>	

		<span class="tags">
					<?php 

						if( get_the_tags() > 0){
							$tags = get_the_tags();
								foreach($tags as $tag ) {
									echo "<a href=".'google.com'.">";
									echo $tag->name;
									echo " , </a>";
							}
						}
					?>
		</span>	

		

			<div class="post-img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
				

			</div>
			

			
				<p>
					<?php echo get_the_excerpt(); ?>							
				</p>
				<div class="read-more">
					<a href="<?php the_permalink(); ?>" >More</a>
				</div>
			

		<?php endwhile ?>
	<?php endif ?>
	</div><!---Post div close-->
</div><!---Container div close-->

	
	
<?php get_footer(); ?>