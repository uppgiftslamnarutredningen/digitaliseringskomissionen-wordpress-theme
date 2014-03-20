<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">
    		<?php the_title(); ?>
		</h1>
        <p class="post-meta">
            <?php the_time( 'j F, Y' ); ?>
        </p>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'oacore' ), 'after' => '</div>' ) ); ?>
    </div>
    <footer class="entry-meta">
    	<div class="entry-postmeta">
    	<?php
    		// Tags
    		the_tags( __( 'Tagged with ', 'oacore' ), ', ' );
    	?>
    	</div>
	    <h3 class="meta-name"><?php _e( 'Written by', 'oacore' ); ?> <span><?php the_author_meta( 'display_name' ); ?></span></h3>
    </footer>
    <?php comments_template( '', true ); ?>
</article>