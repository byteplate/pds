<?php
/**
 * Template Name: Section Intro Page
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

  <?php while ( have_posts() ) : the_post(); ?>

  <section class="sub-page__heading">
      <h1><?php the_title(); ?></h1>
    </section>
    <section class="breadcrumb__wrap">
      <div class="inner">
        <?php if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb('<span class="h-list breadcrumbs">','</span>');
    } ?>
      </div>
    </section>
    <?php if (get_field('page_summary')): ?>
    <section class="business__summary">
      <div class="inner">
        <?php the_field('page_summary'); ?>
      </div>
    </section>
    <?php endif; ?>
    <section class="business__intros">
      <div class="inner">

        <?php if( have_rows('sections') ): ?>

          <?php while ( have_rows('sections') ) : the_row(); ?>

            <div class="business-intro row">
              <div class="business-intro__logo"><?php if (get_sub_field('section_image')): ?><img class="img-r" src="<?php the_sub_field('section_image'); ?>"><?php endif; ?></div>
              <div class="business-intro__btn"><?php if (get_sub_field('section_link')): ?><a class="btn btn--primary right" href="<?php the_sub_field('section_link'); ?>">read more &raquo;</a><?php endif; ?></div>
              <div class="business-intro__desc">
                <?php if (get_sub_field('section_text')): ?><?php the_sub_field('section_text'); ?><?php endif; ?>
              </div>
            </div>
            <hr>

          <?php endwhile; ?>

        <?php endif; ?>

        <?php if( have_rows('secondary_sections') ): ?>

          <span class="heading-separator"><?php the_field('secondary_sections_title'); ?></span>

          <?php while ( have_rows('secondary_sections') ) : the_row(); ?>

            <div class="business-intro row">
              <div class="business-intro__logo"><?php if (get_sub_field('section_image')): ?><img class="img-r" src="<?php the_sub_field('section_image'); ?>"><?php endif; ?></div>
              <div class="business-intro__btn"><?php if (get_sub_field('section_link')): ?><a class="btn btn--primary right" href="<?php the_sub_field('section_link'); ?>">read more &raquo;</a><?php endif; ?></div>
              <div class="business-intro__desc">
                <?php if (get_sub_field('section_text')): ?><?php the_sub_field('section_text'); ?><?php endif; ?>
              </div>
            </div>
            <hr>

          <?php endwhile; ?>

        <?php endif; ?>

      </div>
    </section>

    <?php endwhile; // End of the loop. ?>

<?php
get_footer();