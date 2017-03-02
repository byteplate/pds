<?php
/**
 * Template Name: Data Library Page
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
 * @package PDS_Theme
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
    <section class="page__summary">
      <div class="inner">
        <?php the_field('page_summary'); ?>
      </div>
    </section>
    <?php endif; ?>
    <section class="page__details">
      <div class="inner">
        <?php if( have_rows('download_sections') ): ?>
        <form id="data-library" class="sticky-parent" action="<?php bloginfo('stylesheet_directory'); ?>/download.php" method="post">
        <aside class="page__sidebar make-sticky">
              <div class="content-block">
                <h4 class="block-heading">quick links</h4>
                <div class="block-body">
                  <ul class="v-list">
                    <?php while ( have_rows('download_sections') ) : the_row(); ?>
                    <li><a href="#<?php the_sub_field('section_shortname'); ?>"><?php the_sub_field('section_name'); ?></a></li>
                    <?php endwhile; ?>
                  </ul>
                </div>
              </div>
              <!--<div class="content-block">
                <h4 class="block-heading">my downloads</h4>
                <div class="block-body">
                  <ul class="v-list">
                    <li>
                      <input class="btn btn--primary" type="submit" value="view all downloads">
                    </li>
                  </ul>
                </div>
              </div>-->
            <div class="row">
              <input class="btn btn--primary left" type="submit" value="Download Selected Files" form="data-library" name="formSubmit">
            </div>
        </aside>
        <div class="page__content">
          <?php while ( have_rows('download_sections') ) : the_row(); ?>
          <div id="<?php the_sub_field('section_shortname'); ?>"></div>
              <div class="content-block">
                <h4 class="block-heading"><?php the_sub_field('section_name'); ?></h4>
                <div class="block-body">
                  <?php if( have_rows('downloads') ): ?>
                  <ul class="table-list">
                        <?php while ( have_rows('downloads') ) : the_row(); ?>
                        <li>
                          <label class="toggle__button">
                            <input type="checkbox" name="items[]" value="<?php the_sub_field('download_file'); ?>">
                            <div class="toggle__switch"></div>
                          </label><span class="toggle__label"><?php the_sub_field('download_name'); ?></span>
                        </li>
                        <?php endwhile; ?>
                  </ul>
                  <?php endif; ?>
                </div>
              </div>
          <div class="row"><a class="back-to-top right" href="#">back to top</a></div>
          <?php endwhile; ?>
        </div>
        </form>
        <?php endif; ?>
      </div>
    </section>

    <?php endwhile; // End of the loop. ?>

<?php
get_footer();