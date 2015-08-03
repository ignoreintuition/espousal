<?php
/**
 * The template for displaying all single posts.
 *
 * @package espousal
 */

get_header(); ?>

<div class="row">
	<div class="col-lg-6 col-xs-12 col-lg-push-3">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part( 'content', 'single' ); ?>
	
				<?php espousal_post_nav(); ?>
	
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
	
			<?php endwhile; // end of the loop. ?>
	
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
	<div class="col-lg-3 col-xs-6 col-lg-pull-6">
		<?php get_sidebar( 'left' ); ?>
	</div>
	<div class="col-lg-3 col-xs-6">
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php get_footer(); ?>
