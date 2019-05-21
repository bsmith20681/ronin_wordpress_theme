<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ronin_theme
 */

?>

<article class="row blog_item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-md-3">
     <div class="blog_info text-right">
			 <?php if ( 'post' == get_post_type() ) : ?>
          <div class="post_tag">
						<?php the_category($separator, $parents, $post_id) ?>
          </div>
          <ul class="blog_meta list">
              <li><?php the_author(); ?> <i class="lnr lnr-user"></i></li>
              <li><?php the_date(); ?> <i class="lnr lnr-calendar-full"></i></li>
              <li><?php comments_number(0, 1, '%') ?> <i class="lnr lnr-bubble"></i></li>
          </ul>
				<?php endif; ?>
      </div>
 	</div>
	 <div class="col-md-9">
	    <div class="blog_post">
				<?php if ( has_post_thumbnail() ) { ?>
	        <?php the_post_thumbnail('medium_large'); ?>
				<?php } ?>
	        <div class="blog_details">
	            <h2>
								<?php
									if ( is_singular() ) :
										the_title('<h1 class="entry-title">', '</h1>');
									else :
										the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
									endif;
								 ?>
							</h2>
	            <p>
								<?php the_excerpt(); ?>
							</p>
	            <a href="<?php the_permalink(); ?>" class="blog_btn">View More</a>
	        </div>
	    </div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
