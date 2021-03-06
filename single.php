 <?php get_header(); ?>

	 <!-- Start the Loop. -->
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	 	<section class="breadcrumbs">
	 		<p><span><a href="/">Home</a></span> // <span><?php the_title(); ?></span></p>
	 	</section>		

		<article class="post single">
			<div class="post-inner">
			 	<h1><?php the_title(); ?></h1>

			 	<div class="meta">
				 		<span class="genericon genericon-time"></span> <span class="meta-info"><?php the_date(); echo ' '; the_time(); ?></span>
				 		<span class="genericon genericon-user"></span> <span class="meta-info"><?php the_author(); ?></span>
				 		<span class="genericon genericon-tag"></span> <span class="meta-info"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' ';} ?></span>
 					</div>

			 	<section class="post-content">
			 		<?php the_content(); ?>
			 	</section>
			</div>
		</article>

		<!-- 
			SHARE?
		 -->

	 <?php endwhile; else : ?>
	 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	 <?php endif;

	 get_footer();
