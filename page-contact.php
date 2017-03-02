<?php
/**
 * Template Name: Contact Page
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
    <!--<section class="breadcrumb__wrap">
      <div class="inner">
        <?php if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb('<span class="h-list breadcrumbs">','</span>');
    } ?>
      </div>
    </section>-->
    <?php if (get_field('page_summary')): ?>
    <section class="page__summary">
      <div class="inner">
        <?php the_field('page_summary'); ?>
      </div>
    </section>
    <?php endif; ?>
    <section class="page-details contact-section">
      <section class="middle-content">
          <?php the_content();

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      ?>
      </section>
    </section>

    <?php endwhile; // End of the loop. ?>

<?php
get_footer();