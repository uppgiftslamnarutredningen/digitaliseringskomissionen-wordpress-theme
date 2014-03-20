<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">
    		<?php the_title(); ?>
		</h1>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'oacore' ), 'after' => '</div>' ) ); ?>
    </div>
</article>