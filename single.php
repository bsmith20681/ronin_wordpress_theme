<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ronin_theme
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="blog_area single-post-area p_120">
		<div class="container">
				<div class="row">
						<div class="col-lg-8 posts-list">
								<div class="single-post row">
										<div class="col-lg-12 d-flex justify-content-end">
												<div class="feature-img">
													<?php if ( has_post_thumbnail() ) { ?>
														<?php the_post_thumbnail('large'); ?>
													<?php } ?>
												</div>
										</div>
										<div class="col-lg-3  col-md-3">
												<div class="blog_info text-right">
														<div class="post_tag">
															<div class="post_tag">
																<?php the_category($separator, $parents, $post_id) ?>
										          </div>
														</div>
														<ul class="blog_meta list">
									              <li><?php the_author(); ?> <i class="lnr lnr-user"></i></li>
									              <li><?php the_date(); ?> <i class="lnr lnr-calendar-full"></i></li>
									              <li><?php comments_number(0, 1, '%') ?> <i class="lnr lnr-bubble"></i></li>
									          </ul>
												</div>
										</div>
										<div class="col-lg-9 col-md-9 blog_details">
												<h2><?php the_title(); ?></h2>
												<p class="excert">
														<?php the_content(); ?>
												</p>
										</div>
								</div>
						</div>
						<div class="col-lg-4">
							<div class="blog_right_sidebar">
									<aside class="single_sidebar_widget search_widget">
										<?php get_sidebar(); ?>
									</aside>
							</div>
					</div>
				</div>
		</div>
</section>
<?php endwhile; endif; ?>

<?php
get_footer(); ?>
