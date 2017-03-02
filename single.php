<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Gaston_County_Theme
 */

get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>
	<section class="sub-page__heading">
      <h1>news &amp; events</h1>
    </section>
    <section class="post">
      <div class="inner">
        <div class="post__content">
          <hr><?php the_title( '<span class="post__title">', '</span>' ); ?>
          <hr>
        </div>
        <?php if ( '' != get_the_post_thumbnail() ) : ?>
			<div class="post__media">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'gastoncounty-featured-image', array( 'class' => 'img-r' ) ); ?>
				</a>
			</div>
		<?php endif; ?>
        <div class="post__content">
          <div class="row"><span class="left post__author">by <?php the_author_posts_link(); ?></span><span class="right post__date"><?php echo get_the_date( 'n/j/y' ); ?></span></div>
          <?php the_content(); ?>
          <div class="row">
            <div class="post__tags left">
            	<?php $categories = get_the_category();
				$separator = ' ';
				$output = '';
				if ( ! empty( $categories ) ) { ?>
	              <h6>Posted in:</h6>
	              <ul class="h-list">
	              	<?php foreach( $categories as $category ) {
				        $output .= '<li><a class="tag" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a></li>' . $separator;
				    }
				    echo trim( $output, $separator ); ?>
	              </ul>
				<?php } ?>
            </div>
            <div class="post__share right">
              <h6>Share:</h6>
              <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
	    <?php // If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) : ?>
			<section class="post__comments">
		      <div class="inner">
		        <div class="post__content">
		          <?php comments_template(); ?>
		        </div>
		      </div>
		    </section>
		<?php endif; ?>
	<?php endwhile; ?>

<?php
get_footer();
