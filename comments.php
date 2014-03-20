<div id="comments">
<?php 
	// Password protected?
	if ( post_password_required() ) : ?>
		<p class="nopassword">
			<?php _e( 'This post is password protected. Enter the password to view any comments.', 'oacore' ); ?>
		</p>
</div>
<?php
		// Stop comments.php from being processed
		return;
	endif;
?>

<?php 
	// There are comments
	if ( have_comments() ) : ?>
		<h3 id="comments-headline"><?php _e('Comments','oacore'); ?></h3>
		<h4 id="comments-title">
			<?php printf( _n( 'One svar p&aring; %2$s', '%1$s svar p&aring; %2$s', get_comments_number(), 'oacore' ),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' ); ?>
		</h4>

<?php 
	// Do we need pagination?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<div class="navigation">
		    <div class="nav-previous">
		    	<?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older comments', 'oacore' ) ); ?>
		    </div>
		    <div class="nav-next">
		    	<?php next_comments_link( __( 'Newer comments <span class="meta-nav">&rarr;</span>', 'oacore' ) ); ?>
		    </div>
		</div>
<?php endif; ?>

		<ol class="commentlist">
		    <?php
		    	// Loop comments, dictaded by oacore_comment() from functions.php
		    	wp_list_comments('callback=oacore_comment');
		    ?>
		</ol>

<?php 
	// Do we need pagination?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<div class="navigation">
		    <div class="nav-previous">
		    	<?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older comments', 'oacore' ) ); ?>
		    </div>
		    <div class="nav-next">
		    	<?php next_comments_link( __( 'Newer comments <span class="meta-nav">&rarr;</span>', 'oacore' ) ); ?>
		    </div>
		</div>
<?php endif; ?>

<?php 
	// There were no comments
	else :

		// Comments were closed
		if ( ! comments_open() ) : ?>
			<p class="nocomments">
				<?php _e( 'Sorry, comments are closed.', 'oacore' ); ?>
			</p>
		<?php endif;
	
	// Wrap up have_comments()
	endif;
?>

<?php 
	// The comment form
	comment_form( array(
		'comment_field' => '<p><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
		'comment_notes_after' => '',
	) ); 
?>

</div>