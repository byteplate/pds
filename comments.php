<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PDS_Theme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'pds' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'pds' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'pds' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'pds' ) ); ?></div>

			</div>
		</nav>
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'pds' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'pds' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'pds' ) ); ?></div>

			</div>
		</nav>
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'pds' ); ?></p>
	<?php
	endif;

	$fields =  array(
	  'author' =>
	    '<div class="row"><span class="comment-form__label">' . __( 'Name', 'domainreference' ) . '<i>*</i></span> ' .
	    ( $req ? '' : '' ) .
	    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
	    '" class="comment-form__input"' . $aria_req . ' /></div>',

	  'email' =>
	    '<div class="row"><span class="comment-form__label">' . __( 'Email', 'domainreference' ) . '<i>*</i></span> ' .
	    ( $req ? '' : '' ) .
	    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	    '" class="comment-form__input"' . $aria_req . ' /></div>',

	  'url' =>
	    '<div class="row"><span class="comment-form__label">' . __( 'Website', 'domainreference' ) . '</span>' .
	    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
	    '" class="comment-form__input" /></div>',
	);
	$comments_args = array(
        // change the title of send button 
        'label_submit'=>'Submit',
        // change the class of send button 
        'class_submit'=>'btn btn--primary',
        // redefine your own textarea (the comment body)
        'comment_field' => '<div class="row"><span class="comment-form__label">' . _x( 'Comment', 'noun' ) . '</span><div class="comment-form__input"><textarea id="comment" name="comment" aria-required="true"></textarea></div></div>',
        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
	);

	comment_form($comments_args);

	//comment_form();
	?>

</div><!-- #comments -->