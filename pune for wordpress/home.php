<?php
/*
Template Name: home
*/

// … остальной код шаблона

?>

<?php get_header(); ?>


      <main class="page">
        <div class="bg page__bg">
        <img src="<?php the_field('background', 24); ?>" >

          <!-- <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/images/main-image.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/images/main-image.jpg" alt="Rapchik Pune"></picture> -->
          <div class="bg__gradient"></div>
        </div>
        <section class="main page__main">
          <div class="main__container">
            <div class="main__body">
              <div class="main__caption">
                <span> <?php the_field('caption-main', 24) ?> </span>
              </div>
              <div class="main__title">
                <h1>
                <?php the_field('big_title', 24) ?> <br>
                  <span><?php the_field('big_title_span', 24) ?></span>
                </h1>
              </div>
            </div>
            <a href="#" class="main__scroll" data-scrollto=".fort">
              <span> Scroll down </span>
              <svg>
                <use xlink:href="#arrow-down"></use>
              </svg>
            </a>
            <div class="main__side">
              <span> Follow us </span>
              <a target='_blank' href="<?php the_field('instagram', 24)?>">
                <svg>
                  <use xlink:href="#instagram"></use>
                </svg>
              </a>
              <a target='_blank' href="<?php the_field('twitter', 24)?>">
                <svg>
                  <use xlink:href="#twitter"></use>
                </svg>
              </a>
              <a target='_blank' href="<?php the_field('facebook', 24)?>">
                <svg>
                  <use xlink:href="#facebook"></use>
                </svg>
              </a>
            </div>
          </div>
        </section>
        <section class="fort page__fort">
          <div class="fort__container">
            <div class="fort__body">
              <div class="fort__image">
                <img src="<?php the_field('fort_image', 24); ?>" >
                <!-- <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/images/rajgad-fort.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/images/rajgad-fort.jpg" alt="rajgad-fort"></picture> -->
              </div>
              <div class="text-block-common fort__text-block">
                <div class="text-block-common__caption">
                  <span> <?php the_field('fort-caption', 24); ?> </span>
                </div>
                <div class="text-block-common__title">
                  <h2><?php the_field('fort-title', 24); ?></h2>
                </div>
                <div class="text-block-common__text">
                  <p>
                  <?php the_field('fort-text', 24); ?>
                  </p>
                </div>
                <a href="#" class="text-block-common__link">
                  <span> read more </span>
                  <svg>
                    <use xlink:href="#arrow"></use>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="page__slider slider">
          <div class="slider__container swiper-container">
            <div class="slider__wrapper swiper-wrapper">
                
<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,

]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<!-- Вывод постов, функции цикла: the_title() и т.д. -->
    <div class="slide slider__slide swiper-slide">
      <div class="slide__image">
          <?php the_post_thumbnail(array("1460", "985")); ?>

                  <!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/slide.jpg" alt="Shreemant Dagdusheth Halwai Ganpati Mandir"> -->
                </div>
                <div class="slide__text-block">
                  <div class="slide__caption">
                    <span> <?php the_field('slide_caption') ?></span>
                  </div>
                  <div class="slide__title">
                    <h2><?php the_title(); ?></h2>
                  </div>
                  <div class="slide__text">
                    <p>
                    <?php the_content(); ?>
                    </p>
                  </div>
                  <a href="#" class="slide__link">
                    <span>read more</span>
                    <svg>
                      <use xlink:href="#arrow"></use>
                    </svg>
                  </a>
                </div>
            </div>

		<?php 
	}
} 

wp_reset_postdata(); // Сбрасываем $post
?>
            </div>
            <div class="slider__navigation">
              <div class="slider__button slider__button_next">
                <svg>
                  <use xlink:href="#angle"></use>
                </svg>
              </div>
              <div class="slider__button slider__button_prev">
                <svg>
                  <use xlink:href="#angle"></use>
                </svg>
              </div>
            </div>
          </div>
        </section>
        <section class="culture page__culture">
          <div class="culture__container">
            <div class="culture__body">
              <div class="text-block-common culture__text-block">
                <div class="text-block-common__caption">
                  <span><?php the_field('culture-caption', 24); ?></span>
                </div>
                <div class="text-block-common__title">
                  <h2><?php the_field('culture-title', 24); ?></h2>
                </div>
                <div class="text-block-common__text">
                  <p>
                  <?php the_field('culture-text', 24); ?>
                  </p>
                </div>
                <a href="#" class="text-block-common__link">
                  <span> read more </span>
                  <svg>
                    <use xlink:href="#arrow"></use>
                  </svg>
                </a>
              </div>
              <div class="culture__image">
                <img src="<?php the_field('culture-image', 24); ?>">
                <!-- <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/images/culture.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/images/culture.jpg" alt="culture"></picture> -->
              </div>
            </div>
          </div>
        </section>
      </main>

 <?php get_footer(); ?>