<?php
/**
 * The template for displaying search results pages.
 *
 * @package espousal
 */

get_header(); ?>

<div class="row">
	<div class="col-lg-6 col-xs-12 col-lg-push-3">
		<section id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
			<?php if ( have_posts() ) : ?>
	
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'espousal' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
					?>
	
				<?php endwhile; ?>
	
				<?php espousal_paging_nav(); ?>
	
			<?php else : ?>
	
				<?php get_template_part( 'content', 'none' ); ?>
	
			<?php endif; ?>
	
			</main><!-- #main -->
		</section><!-- #primary -->
	</div>
	<div class="col-lg-3 col-xs-6 col-lg-pull-6">
		<?php get_sidebar( 'left' ); ?>
	</div>
	<div class="col-lg-3 col-xs-6">
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php get_footer(); ?>
