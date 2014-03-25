
<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				
				<?php

				

				

				?>

				<nav class="nav-single">
					<?php $next_post = get_next_post();
					if (!empty( $next_post )): ?>
					  	<span class="nav-next boxLayout"><a href="<?php echo get_permalink( $next_post->ID ); ?>">&larr;&nbsp;<?php echo $next_post->post_title; ?></a></span>
					<?php endif; ?>

					<?php $prev_post = get_previous_post();
					if (!empty( $prev_post )): ?>
					  	<span class="nav-previous boxLayout"><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?>&nbsp;&rarr;</a></span>
					<?php endif; ?>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>