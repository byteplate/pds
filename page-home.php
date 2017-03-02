<?php
/**
 * Template Name: Home Page
 * 
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gaston_County_Theme
 */

get_header(); ?>

    <!--<header class="main-header">
      <div class="hero__outer">
        <div class="hero__left-polygon"></div>
        <div class="hero__right-polygon"></div>
        <div class="hero__inner">
          <div class="hero__content-wrap">
            <div class="hero__content">
              <?php if (get_field('hero_title')): ?>
                <h3><?php the_field('hero_title'); ?></h3>
              <?php endif; ?>
              <?php if (get_field('hero_text')): ?>
                <?php the_field('hero_text'); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </header>-->
    <section>
      <?php putRevSlider( 'home' ); ?>
    </section>
    <section class="section-featured">
      <div class="inner">
        <main class="featured">
          <ul class="featured__tabs">
            <?php if (get_field('featured_box_1_title')): ?>
            <li class="featured__tab featured__tab--active" data-tab="tab-1">
              <div class="tab__btn"></div><span><?php the_field('featured_box_1_title'); ?></span>
            </li>
            <?php endif; ?>
            <?php if (get_field('featured_box_2_title')): ?>
            <li class="featured__tab" data-tab="tab-2">
              <div class="tab__btn"></div><span><?php the_field('featured_box_2_title'); ?></span>
            </li>
            <?php endif; ?>
            <?php if (get_field('featured_box_3_title')): ?>
            <li class="featured__tab" data-tab="tab-3">
              <div class="tab__btn"></div><span><?php the_field('featured_box_3_title'); ?></span>
            </li>
            <?php endif; ?>
            <?php if (get_field('featured_box_4_title')): ?>
            <li class="featured__tab" data-tab="tab-4">
              <div class="tab__btn"></div><span><?php the_field('featured_box_4_title'); ?></span>
            </li>
            <?php endif; ?>
          </ul>
        </main>
        <aside class="inner">
          <?php if (get_field('featured_box_1_title')): ?>
          <div class="featured__content featured__content--active" id="tab-1">
                <h2><?php the_field('featured_box_1_title'); ?></h2>
                <div class="row">
                  <div class="featured__img"><?php if (get_field('featured_box_1_image')): ?><img class="img-r" src="<?php the_field('featured_box_1_image'); ?>" alt="<?php the_field('featured_box_1_title'); ?>"><?php endif; ?></div>
                  <div class="featured__body">
                    <?php if (get_field('featured_box_1_text')): ?><?php the_field('featured_box_1_text'); ?><?php endif; ?><?php if (get_field('featured_box_1_link')): ?><a class="btn btn--primary btn--wide" href="<?php the_field('featured_box_1_link'); ?>">learn more &raquo;</a><?php endif; ?>
                  </div>
                </div>
          </div>
          <?php endif; ?>
          <?php if (get_field('featured_box_2_title')): ?>
          <div class="featured__content" id="tab-2">
                <h2><?php the_field('featured_box_2_title'); ?></h2>
                <div class="row">
                  <div class="featured__img"><?php if (get_field('featured_box_2_image')): ?><img class="img-r" src="<?php the_field('featured_box_2_image'); ?>" alt="<?php the_field('featured_box_2_title'); ?>"><?php endif; ?></div>
                  <div class="featured__body">
                    <?php if (get_field('featured_box_2_text')): ?><?php the_field('featured_box_2_text'); ?><?php endif; ?><?php if (get_field('featured_box_2_link')): ?><a class="btn btn--primary btn--wide" href="<?php the_field('featured_box_2_link'); ?>">learn more &raquo;</a><?php endif; ?>
                  </div>
                </div>
          </div>
          <?php endif; ?>
          <?php if (get_field('featured_box_3_title')): ?>
          <div class="featured__content" id="tab-3">
                <h2><?php the_field('featured_box_3_title'); ?></h2>
                <div class="row">
                  <div class="featured__img"><?php if (get_field('featured_box_3_image')): ?><img class="img-r" src="<?php the_field('featured_box_3_image'); ?>" alt="<?php the_field('featured_box_3_title'); ?>"><?php endif; ?></div>
                  <div class="featured__body">
                    <?php if (get_field('featured_box_3_text')): ?><?php the_field('featured_box_3_text'); ?><?php endif; ?><?php if (get_field('featured_box_3_link')): ?><a class="btn btn--primary btn--wide" href="<?php the_field('featured_box_3_link'); ?>">learn more &raquo;</a><?php endif; ?>
                  </div>
                </div>
          </div>
          <?php endif; ?>
          <?php if (get_field('featured_box_4_title')): ?>
          <div class="featured__content" id="tab-4">
                <h2><?php the_field('featured_box_4_title'); ?></h2>
                <div class="row">
                  <div class="featured__img"><?php if (get_field('featured_box_4_image')): ?><img class="img-r" src="<?php the_field('featured_box_4_image'); ?>" alt="<?php the_field('featured_box_4_title'); ?>"><?php endif; ?></div>
                  <div class="featured__body">
                    <?php if (get_field('featured_box_4_text')): ?><?php the_field('featured_box_4_text'); ?><?php endif; ?><?php if (get_field('featured_box_4_link')): ?><a class="btn btn--primary btn--wide" href="<?php the_field('featured_box_4_link'); ?>">learn more &raquo;</a><?php endif; ?>
                  </div>
                </div>
          </div>
          <?php endif; ?>
        </aside>
      </div>
    </section>
    <section class="section-welcome">
      <?php if (get_field('welcome_title')): ?>
        <h2<?php if (get_field('welcome_background_image')): ?> style="background:url('<?php the_field('welcome_background_image'); ?>'); background-size:cover; background-position:center;"<?php endif; ?>><?php the_field('welcome_title'); ?></h2>
      <?php endif; ?>
      <div class="inner welcome__body">
        <?php if (get_field('welcome_text')): ?>
          <?php the_field('welcome_text'); ?>
        <?php endif; ?>
      </div>
    </section>
    <!--<section class="section-interactive-map">
      <?php
      while ( have_posts() ) : the_post();

        the_content();

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>
    </section>-->
    
    
<?php
get_footer();