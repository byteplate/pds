<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gaston_County_Theme
 */

get_header(); ?>

	<?php if ( is_home() && ! is_front_page() ) : ?>
		<section class="sub-page__heading">
			<h1><?php single_post_title(); ?></h1>
		</section>
	<?php else: ?>
		<section class="sub-page__heading">
			<h1>News &amp; Events</h1>
		</section>
	<?php endif; ?>

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
    <section class="news-categories__posts">
    	<?php if ( have_posts() ) : ?>
      		<div class="inner">
      		<?php while ( have_posts() ) : the_post(); ?>
        	<div class="event">
        		<a href="<?php the_permalink(); ?>"><div class="event__img"><?php if ( has_post_thumbnail() ):
        				the_post_thumbnail( 'gastoncounty-featured-image' );
        			else: ?>
        				<div style="height:40px;"></div>
        			<?php endif; ?><span class="event__date"><?php echo get_the_date( 'm/j' ); ?></span></div></a>
          		<h3 class="gamma"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          		<p class="event__description"><?php the_excerpt(); ?></p><span class="event__author">By <?php the_author_posts_link(); ?></span>
        	</div>
    		<?php endwhile; ?>
      		</div>
      		<div class="inner">
		      	<?php the_posts_pagination( array(
				    'mid_size' => 3,
				    'prev_text' => __( '&laquo;', 'gastoncounty' ),
				    'next_text' => __( '&raquo;', 'gastoncounty' ),
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
      	<?php else :

			get_template_part( 'components/post/content', 'none' );

		endif; ?>
    </section>

<?php
get_footer();
