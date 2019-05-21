<?php
/* Template Name: Full-Width Template */


//Advanced Custom Fields
  //Contact Us Page
  $street_address     = get_field('street_address');
  $city_and_state     = get_field('city_and_state');
  $phone_number       = get_field('phone_number');
  $hours_of_operation = get_field('hours_of_operation');
  $email              = get_field('email');
  $email_message      = get_field('email_message');

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

  get_header();
?>


<!--================Home Banner Area =================-->

<?php if (has_post_thumbnail() ) { ?>

  <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
          <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
      <div class="banner_content text-center">
        <h2><?php the_title(); ?></h2>
        <div class="page_link">
          <a href="index.html">Home</a>
          <a href="contact.html">CONTACT</a>
        </div>

      </div>
    </div>
        </div>
  </section>

<?php } else { ?>

<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
  <div class="container">
    <div class="banner_content text-center">
      <h2><?php the_title(); ?></h2>
      <div class="page_link">
        <a href="index.html">Home</a>
        <a href="contact.html">CONTACT</a>
      </div>

    </div>
  </div>
      </div>
</section>

<?php } ?>
<!--================End Home Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6><?php echo $street_address; ?></h6>
                        <p><?php echo $city_and_state; ?></p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><?php echo $phone_number; ?></h6>
                        <p><?php echo $hours_of_operation; ?></p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#"><?php echo $email; ?></a></h6>
                        <p><?php echo $email_message ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">

              <?php while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

              <?php endwhile; ?>

            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->

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
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
          </ul>
        </aside>
      </div>
    </div>
  </div>
</footer>
<!--================End Footer Area =================-->



<?php get_footer(); ?>
