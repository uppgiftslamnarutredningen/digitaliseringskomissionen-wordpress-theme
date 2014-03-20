<li class="post-home">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<header class="entry-header">
    	    <h3 class="entry-title-home">
        		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( 'echo=1' ); ?>" rel="bookmark">
        			<?php the_title(); ?>
    	    	</a>
        	</h3>
            <p class="post-meta post-meta-home">
                <?php the_time( 'j F, Y' ); ?>
            </p>
        </header>
        <div class="entry-summary">
        	<?php the_excerpt(); ?>
        </div>
    </article>
</li>