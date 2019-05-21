<?php
/*
  Template Name: Home Page
*/

//Advanced Custom Fields
    //Hero Section
    $hero_name                  = get_field('hero_name');
    $hero_subheader             = get_field('hero_subheader');
    $button_text                = get_field('button_text');

    //About Myself Section
    $about_myself_title         = get_field('about_myself_title');
    $about_myself_description   = get_field('about_myself_description');

    //Blog Section
    $blog_header                = get_field('blog_header');
    $blog_subheader             = get_field('blog_subheader');

    //Features Section
    $features_header            = get_field('features_header');
    $features_subheader         = get_field('features_subheader');

    //Testimonial Section
    $testimonial_title          = get_field('testimonial_title');
    $testimonial_subtitle       = get_field('testimonial_subtitle');

    //Footer
    $about_me                = get_field('about_me');
    $about_me_description    = get_field('about_me_description');
    $newsletter              = get_field('newsletter');
    $newsletter_description  = get_field('newsletter_description');
    $follow_me               = get_field('follow_me');
    $follow_me_description   = get_field('follow_me_description');
    $facebook_button         = get_field('facebook_button');
    $twitter_button          = get_field('twitter_button');
    $dribble_button          = get_field('dribble_button');
    $behance_button          = get_field('behance_button');




get_header(); ?>

<!--================Home Banner Area =================-->
<section class="home_banner_area">
      <div class="banner_inner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="home_left_img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/banner/home-left-1.png" alt="">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="banner_content">
          <h5>This is me</h5>
          <h2><?php echo $hero_name ?></h2>
          <p><?php echo $hero_subheader ?></p>
          <a class="banner_btn" href="/blog"><?php echo $button_text ?></a>
        </div>
      </div>
    </div>
  </div>
      </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Welcome Area =================-->
<section class="welcome_area p_120">
  <div class="container">
    <div class="row welcome_inner">
      <div class="col-lg-6">
        <div class="welcome_text">
          <h4><?php echo $about_myself_title; ?></h4>
          <p><?php echo $about_myself_description; ?></p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="tools_expert">
          <h3>Tools Expertness</h3>
          <div class="skill_main">
        <div class="skill_item">
          <h4>After Effects <span class="counter">85</span>%</h4>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="skill_item">
          <h4>Photoshop <span class="counter">90</span>%</h4>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="skill_item">
          <h4>Illustrator <span class="counter">70</span>%</h4>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="skill_item">
          <h4>Sublime <span class="counter">95</span>%</h4>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="skill_item">
          <h4>Sketch <span class="counter">75</span>%</h4>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Welcome Area =================-->

<!--================Latest Blog Area =================-->
<section class="latest_blog_area p_120">
  <div class="container">
    <div class="main_title">
      <h2><?php echo $blog_header ?></h2>
      <p><?php echo $blog_subheader ?></p>
    </div>
    <div class="row latest_blog_inner">
      <?php
        foreach( get_field('featured_posts') as $post ):
          setup_postdata( $post );
       ?>
      <div class="col-lg-4">
        <div class="l_blog_item">
          <div class="l_blog_img">
            <?php the_post_thumbnail('medium'); ?>
          </div>
          <div class="l_blog_text">
            <div class="date">
              <a href="#"><?php the_date(); ?>  |  <?php the_author(); ?></a>
            </div>
            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            <p><?php the_excerpt(); ?></p>
          </div>
        </div>
      </div>
      <?php
        wp_reset_postdata();
        endforeach;
      ?>

    </div>
  </div>
</section>
<!--================End Latest Blog Area =================-->


<!--================Feature Area =================-->
<section class="feature_area p_120">
  <div class="container">
    <div class="main_title">
      <h2><?php echo $features_header ?></h2>
      <p><?php echo $features_subheader ?></p>
    </div>
    <div class="feature_inner row">
      <?php $loop = new WP_Query( array( 'post_type' => 'services', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <i class="<?php the_field('features_details_image')?>"></i>
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
          </div>
        </div>
      <?php endwhile;?>
    </div>
  </div>
</section>
<!--================End Feature Area =================-->

<!--================Testimonials Area =================-->
<section class="testimonials_area p_120">
  <div class="container">
    <div class="main_title">
      <h2><?php echo $testimonial_title ?></h2>
      <p><?php echo $testimonial_subtitle ?></p>
    </div>
    <div class="testi_inner">
  <div class="testi_slider owl-carousel">

    <?php $loop = new WP_Query( array( 'post_type' => 'testimonials', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="item">
        <div class="testi_item">
          <p><?php the_field('testimonial')?></p>
          <h4><?php the_field('customer_name') ?></h4>
          <a href="#"><i class="fa fa-star"></i></a>
          <a href="#"><i class="fa fa-star"></i></a>
          <a href="#"><i class="fa fa-star"></i></a>
          <a href="#"><i class="fa fa-star"></i></a>
          <a href="#"><i class="fa fa-star-half-o"></i></a>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
    </div>
  </div>
</section>
<!--================End Testimonials Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area p_120">
  <div class="container">
    <div class="row footer_inner">
      <div class="col-lg-5 col-sm-6">
        <aside class="f_widget ab_widget">
          <div class="f_title">
            <h3><?php echo $about_me; ?></h3>
          </div>
          <p><?php echo $about_me_description; ?></p>
          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
        </aside>
      </div>
      <div class="col-lg-5 col-sm-6">
        <aside class="f_widget news_widget">
          <div class="f_title">
            <h3><?php echo $newsletter; ?></h3>
          </div>
          <p><?php echo $newsletter_description; ?></p>
          <div id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                          <div class="input-group d-flex flex-row">
                                <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                            </div>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
        </aside>
      </div>
      <div class="col-lg-2">
        <aside class="f_widget social_widget">
          <div class="f_title">
            <h3><?php echo $follow_me; ?></h3>
          </div>
          <p><?php echo $follow_me_description; ?></p>
          <ul class="list">
            <li><a href="<?php echo $facebook_button['url'] ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php echo $twitter_button['url'] ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php echo $dribble_button['url'] ?>"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="<?php echo $behance_button['url'] ?>"><i class="fa fa-behance"></i></a></li>
          </ul>
        </aside>
      </div>
    </div>
  </div>
</footer>
<!--================End Footer Area =================-->

<?php get_footer(); ?>
