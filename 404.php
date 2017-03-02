<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Gaston_County_Theme
 */

get_header(); ?>

	<section class="sub-page__heading">
      <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gastoncounty' ); ?></h1>
    </section>
    <section class="page__summary">
      <div class="inner">
      	<p style="text-align:center;"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try another search?', 'gastoncounty' ); ?></p>
      </div>
    </section>
    <section class="page__details">
      <div class="inner">
        <main class="middle-content" style="text-align:center;">
			<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			    <div>
			        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
			        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
			        <input type="submit" id="searchsubmit" class="btn btn--primary" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
			    </div>
			</form>
        </main>
      </div>
    </section>

<?php
get_footer();
