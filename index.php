<?php

/*

  Template name: Home

*/

get_header();?>

<header id="home-navbar">
  <nav>
    <?php get_template_part('template-parts/navbar'); ?>
  </nav>
</header>

<div class="banner">
  <div>
    <h1><?php the_field ('banner_title'); ?></h1>
    <h2><?php the_field ('banner_subtitle'); ?></h2>
  </div>
</div>

<section id="why-section" class="narrow-container">
  <h2 data-aos="fade-up" data-aos-duration="1000"><?php the_field ('why_staying_with_us_title'); ?></h2>
  <div class="reasons-staying" data-aos="fade-up" data-aos-duration="1000">
    <?php
    if( have_rows('reasons_for_staying') ):
      while( have_rows('reasons_for_staying') ) : the_row(); ?>
        <div>
          <img src="<?php the_sub_field ('reason_photo'); ?>" alt="">
          <h3><?php the_sub_field ('reason_title'); ?></h3>
          <p><?php the_sub_field ('reason_text'); ?></p>
        </div>
      <?php endwhile;
    endif;
    ?>
  </div>
  <?php
    $link = get_field('more_about_us_button');
    if( $link ):
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
      <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
</section>

<section id="apartments-preview-section" data-aos="fade-up" data-aos-duration="1000">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <?php
          if( have_rows('apartments_caroussel') ):
            while( have_rows('apartments_caroussel') ) : the_row(); ?>
              <div>
                <img src="<?php the_sub_field ('carousel_image1'); ?>" alt="">
              </div>
            <?php endwhile;
          endif;
        ?>
      </div>
      <div class="carousel-item">
        <?php
          if( have_rows('apartments_caroussel') ):
            while( have_rows('apartments_caroussel') ) : the_row(); ?>
              <div>
                <img src="<?php the_sub_field ('carousel_image2'); ?>" alt="">
              </div>
            <?php endwhile;
          endif;
        ?>
      </div>
      <div class="carousel-item">
        <?php
          if( have_rows('apartments_caroussel') ):
            while( have_rows('apartments_caroussel') ) : the_row(); ?>
              <div>
                <img src="<?php the_sub_field ('carousel_image3'); ?>" alt="">
              </div>
            <?php endwhile;
          endif;
        ?>
      </div>
      <div class="carousel-item">
        <?php
          if( have_rows('apartments_caroussel') ):
            while( have_rows('apartments_caroussel') ) : the_row(); ?>
              <div>
                <img src="<?php the_sub_field ('carousel_image4'); ?>" alt="">
              </div>
            <?php endwhile;
          endif;
        ?>
      </div>
      <div class="carousel-item">
        <?php
          if( have_rows('apartments_caroussel') ):
            while( have_rows('apartments_caroussel') ) : the_row(); ?>
              <div>
                <img src="<?php the_sub_field ('carousel_image5'); ?>" alt="">
              </div>
            <?php endwhile;
          endif;
        ?>
      </div>
      <div class="carousel-item">
        <?php
          if( have_rows('apartments_caroussel') ):
            while( have_rows('apartments_caroussel') ) : the_row(); ?>
              <div>
                <img src="<?php the_sub_field ('carousel_image6'); ?>" alt="">
              </div>
            <?php endwhile;
          endif;
        ?>
      </div>
      <div class="carousel-item">
        <?php
          if( have_rows('apartments_caroussel') ):
            while( have_rows('apartments_caroussel') ) : the_row(); ?>
              <div>
                <img src="<?php the_sub_field ('carousel_image7'); ?>" alt="">
              </div>
            <?php endwhile;
          endif;
        ?>
      </div>
      <div class="carousel-item">
        <?php
          if( have_rows('apartments_caroussel') ):
            while( have_rows('apartments_caroussel') ) : the_row(); ?>
              <div>
                <img src="<?php the_sub_field ('carousel_image8'); ?>" alt="">
              </div>
            <?php endwhile;
          endif;
        ?>
      </div>
      <div class="carousel-item">
        <?php
          if( have_rows('apartments_caroussel') ):
            while( have_rows('apartments_caroussel') ) : the_row(); ?>
              <div>
                <img src="<?php the_sub_field ('carousel_image9'); ?>" alt="">
              </div>
            <?php endwhile;
          endif;
        ?>
      </div>
      <div class="carousel-item">
        <?php
          if( have_rows('apartments_caroussel') ):
            while( have_rows('apartments_caroussel') ) : the_row(); ?>
              <div>
                <img src="<?php the_sub_field ('carousel_image10'); ?>" alt="">
              </div>
            <?php endwhile;
          endif;
        ?>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="apartment-preview-info">
    <div>
      <h2><?php the_field ('our_apartments_title'); ?></h2>
      <p><?php the_field ('our_apartments_text'); ?></p>
      <?php
      $link = get_field('apartments_button_home');
      if( $link ):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>

<section id="reviews-section" class="narrow-container" data-aos="fade-up" data-aos-duration="1000">
  <h2>What our guests are saying</h2>
  <?php do_action( 'wprev_pro_plugin_action', 1 ); ?>
</section>

<?php get_footer(); ?>
