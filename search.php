<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Gaston_County_Theme
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

	<section class="sub-page__heading">
		<h1><?php printf( esc_html__( 'Search Results for: %s', 'gastoncounty' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</section>

    <section class="news-categories">
      <div class="inner">
        <div class="row">
          <ul class="news-categories__list">
            <li><span class="news-categories__heading">categories</span></li>
    		    <?php $category_ids = get_all_category_ids();
    			  $args = array(
    			     'orderby' => 'id',
    			     'parent' => 0,
               		'number' => 3
    			  );
    			  $categories = get_categories( $args );
    			  foreach ( $categories as $category ) {
    			     echo '<li class="category-link"><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark">' . $category->name . '</a></li>';
    			  }
    		     ?>
            <li class="category-link sub-list__trigger"><a href="#0">More Categories <i class="fa fa-caret-down" aria-hidden="true"></i></a>
              <ul class="news-categories__sub-list">
                <?php $category_ids = get_all_category_ids();
                $args = array(
                   'orderby' => 'id',
                   'parent' => 0,
                   'number' => 20,
                   'offset' => 3
                );
                $categories = get_categories( $args );
                foreach ( $categories as $category ) {
                   echo '<li><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark">' . $category->name . '</a></li>';
                }
                 ?>
              </ul>
            </li>
          </ul>
        </div>
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
    <section class="news-categories__posts">
  		<div class="inner">
  		<?php while ( have_posts() ) : the_post(); ?>
    	<div class="event">
    		<a href="<?php the_permalink(); ?>"><div class="event__img"><?php if ( has_post_thumbnail() ):
    				the_post_thumbnail( 'gastoncounty-featured-image' );
    			else: ?>
    				<div style="height:40px;"></div>
    			<?php endif; ?></div></a>
      		<h3 class="gamma"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      		<p class="event__description"><?php the_excerpt(); ?></p>
    	</div>
		<?php endwhile; ?>
  		</div>
  		<div class="inner">
	      	<?php the_posts_pagination( array(
			    'mid_size' => 2,
			    'prev_text' => __( '&laquo;', 'textdomain' ),
			    'next_text' => __( '&raquo;', 'textdomain' ),
			) ); ?>
	        <!--<ul class="news-categories__pagination">
	          <li><a href="#0">&laquo;</a></li>
	          <li><a href="#0">1</a></li>
	          <li><a href="#0">2</a></li>
	          <li><a href="#0">3</a></li>
	          <li><a href="#0">4</a></li>
	          <li><a href="#0">5</a></li>
	          <li><a href="#0">&raquo;</a></li>
	        </ul>-->
      	</div>
    </section>

  	<?php else :

		get_template_part( 'components/post/content', 'none' );

	endif; ?>

<?php
get_footer();