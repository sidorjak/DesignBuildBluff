<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class='nav-buffer'></div>
			
			<div id="post-illus-one"></div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'content', get_post_format() ); ?>
				<div id='post-<?php echo get_the_ID(); ?>' class='post cf'>
					<h1 class='post-title'><?php the_title(); ?></h1>
					<p class='post-date'><?php echo get_the_date(); ?></p>
					<div class='post-content cf'><?php the_content(); ?></div>
					
					<div id='post-nav' class='cf'>
						<div id='prev-link'><?php previous_post_link( '%link', 'Previous', FALSE, '141', 'category' ); ?></div>
						<div id='next-link'><?php next_post_link( '%link', 'Next', FALSE, '141', 'category' ); ?></div>
					</div>
				
				</div>

				<?php /*
				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->
				
				<?php comments_template( '', true ); ?>
				*/ ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>