<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ronin_theme
 */

get_header();
?>

<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
  <div class="container">
    <div class="banner_content text-center">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'ronin_theme' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>

    </div>
  </div>
      </div>
</section>


	<div class="container">
		<div id="primary" class="row">
			<main id="content" class="col-sm-8">


		<?php if ( have_posts() ) : ?>



			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

				</main>
				<aside class="col-lg-4">
          <div class="blog_right_sidebar">
					       <?php get_sidebar(); ?>
          </div>
				</aside>

			</div>
		</div>



<?php
get_footer();
