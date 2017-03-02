<?php
/**
 * Template Name: Park Page
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

    <?php if (get_field('hero_image')): ?>
    <header class="business-park__hero tech-park" style="background: url('<?php the_field('hero_image'); ?>') no-repeat top center;">
      <div class="business-park__sub-head">
        <h1><?php the_title(); ?></h1>
      </div>
    </header>
    <?php else: ?>
    <section class="sub-page__heading">
      <h1><?php the_title(); ?></h1>
    </section>
    <?php endif; ?>
    <section class="breadcrumb__wrap">
      <div class="inner">
        <?php if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb('<span class="h-list breadcrumbs">','</span>');
    } ?>
      </div>
    </section>
    <?php if (get_field('page_summary')): ?>
    <section class="business__summary">
      <?php if( have_rows('downloads') ): ?>
      <form class="site-downloads" id="site-downloads" action="<?php bloginfo('stylesheet_directory'); ?>/download.php" method="post">
        <div class="site-downloads__btn">additional site downloads &nbsp;<span class="fa fa-caret-down" aria-hidden="true"></span></div>
        <ul class="site-downloads__toggles v-list">
          <?php while ( have_rows('downloads') ) : the_row(); ?>
          <li class="toggle">
            <label class="toggle__button">
              <input type="checkbox" name="items[]" value="<?php the_sub_field('download_file'); ?>">
              <div class="toggle__switch"></div>
            </label><span class="toggle__label"><?php the_sub_field('download_name'); ?></span>
          </li>
          <?php endwhile; ?>
          <li class="row">
            <input class="btn btn--primary left" type="submit" value="Download" form="site-downloads" name="formSubmit">
            <!--<input class="btn btn--primary right" type="submit" value="save all" form="site-downloads" name="save-all">-->
          </li>
        </ul>
      </form>
      <?php endif; ?>
      <div class="inner">
        <?php the_field('page_summary'); ?>
      </div>
    </section>
    <?php endif; ?>
    <?php if(get_field('add_property_information')): ?>
    <section class="business-park__details">
      <div class="inner">
        <aside class="business-park__sidebar">
          <div class="content-block"><span class="block-heading">property information</span><?php if( have_rows('overview') ): ?><span class="property-information__header accordion-header">overview</span>
            <ul class="property-information v-list accordion accordion--active">
              <?php while ( have_rows('overview') ) : the_row(); ?>
              <li><span class="pi__label"><?php the_sub_field('label'); ?> </span><span class="pi__stats"><?php the_sub_field('content'); ?></span></li>
              <?php endwhile; ?>
            </ul><?php endif; ?><?php if( have_rows('utilities') ): ?><span class="property-information__header accordion-header">utilities</span>
            <ul class="property-information v-list accordion">
              <?php while ( have_rows('utilities') ) : the_row(); ?>
              <li><span class="pi__label"><?php the_sub_field('label'); ?> </span><span class="pi__stats"><?php the_sub_field('content'); ?></span></li>
            <?php endwhile; ?>
            </ul><?php endif; ?><?php if( have_rows('transportation') ): ?><span class="property-information__header accordion-header">transportation</span>
            <ul class="property-information v-list accordion">
              <?php while ( have_rows('transportation') ) : the_row(); ?>
              <li><span class="pi__label"><?php the_sub_field('label'); ?> </span><span class="pi__stats"><?php the_sub_field('content'); ?></span></li>
              <?php endwhile; ?>
            </ul><?php endif; ?>
          </div>
          <?php if( have_rows('additional_images') ): ?>
          <div class="content-block">
            <h4 class="block-heading">additional images</h4>
            <div class="block-body">
              <ul class="thumbnail-gallery" id="thumbnails">
                <?php while ( have_rows('additional_images') ) : the_row(); ?>
                <li><a class="lb_img" href="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('image_name'); ?>"><img class="img-r" src="<?php the_sub_field('image'); ?>"></a></li>
                <?php endwhile; ?>
              </ul>
            </div>
          </div>
          <?php endif; ?>
        </aside>
        <main class="business-park__content">
          <?php the_content();

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;

          ?>
        </main>
      </div>
    </section>
    <?php else: ?>
    <section class="page__details">
      <div class="inner">
        <main class="middle-content">
          <?php the_content();

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;

          ?>
        </main>
      </div>
    </section>
    <?php endif; ?>

    <?php endwhile; // End of the loop. ?>

<?php
get_footer();