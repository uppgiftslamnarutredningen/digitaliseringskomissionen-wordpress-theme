<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( is_singular() ) { ?>
	<header class="entry-header">
		<h1 class="entry-title">
    		<?php the_title(); ?>
		</h1>
        <p class="post-meta">
            <?php the_time( 'j F, Y' ); ?>
        </p>
    </header>
	<?php } else { ?> 
	    <h2 class="entry-title">
    		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'oacore' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
    			<?php the_title(); ?>
	    	</a>
    	</h2>
        <p class="post-meta">
            <?php the_time( 'j F, Y' ); ?>
        </p>
    <?php } ?>
    <?php
    	// For archives and search results, use the_excerpt()
    	if ( is_home() || is_front_page() || is_archive() || is_search() ) : ?>
    	<div class="entry-summary">
    	    <?php the_excerpt(); ?>
    	</div>
    <?php 
    	// For everything else
    	else : ?>
    	<div class="entry-content">
    	    <?php the_content(); ?>
    	    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'oacore' ), 'after' => '</div>' ) ); ?>
    	</div>
    <?php endif; 
    	// Comments only on single posts
/*    	if ( is_singular() ) {
    		comments_template( '', true ); 
    	} */
    ?>
</article>