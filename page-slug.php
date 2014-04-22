<?php get_header(); ?>

<main>

<?php get_template_part('parts/headers'); ?>

<section class="row sidebar">
	
	<div class="column one">
		
		<?php while ( have_posts() ) : the_post(); ?>
		
		<article>
			<?php the_content(); ?>
		</article>
		
		<?php endwhile; ?>
		
	</div>
	
</section>

<section id="" class="row halves">
	
	<div class="column one">
		<article>
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-1-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</article>
	</div>
	<div class="column two">
		<article>
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-1-2', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</article>
	</div>
	
	
</section>

</main>

<?php get_footer(); ?>