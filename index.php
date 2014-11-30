 <?php get_header(); ?>

	 <!-- Start the Loop. -->
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<article class="post">

		 	<!-- Display the Title as a link to the Post's permalink. -->
		 	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
		 	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


		 	<!-- Display the Post's content in a div box. -->
		 	<div class="entry">
		 		<?php the_content(); ?>
		 	</div>


		 	<!-- Display a comma separated list of the Post's Categories. -->
		 	<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
		 	
		</article>

	 <?php endwhile; else : ?>
	 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	 <?php endif;

	 get_footer();
