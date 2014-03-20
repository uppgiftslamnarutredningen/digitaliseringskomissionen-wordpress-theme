<?php
    // When possible, display navigation at the bottom
    if ( $wp_query->max_num_pages > 1 ) : ?>
    <div id="nav-below" class="navigation">
    	<div class="nav-previous">
    		<?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'oacore' ) ); ?>
    	</div>
    	<div class="nav-next">
    		<?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'oacore' ) ); ?>
    	</div>
    </div>
<?php endif; ?>