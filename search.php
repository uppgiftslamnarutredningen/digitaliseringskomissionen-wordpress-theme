<?php get_header(); ?>

<!-- Section header -->
<header class="page-header">
    <h1 class="page-title">
    	<?php printf( __( 'Search results for %s', 'oacore' ), '<span>' . get_search_query() . '</span>' ); ?>
    </h1>
</header>

<div id="outer-wrap">

	<!-- Main site -->
	<div id="main-container">
	<?php get_template_part( 'nav', 'breadcrumb' ); ?>
	    <div id="main" class="wrapper">
	    	
	    	<!-- Content -->
	    	<div id="content-container">
			<?php
				// The basic loop
				if ( have_posts() ) : while ( have_posts() ) : the_post(); 
				
				// Load the appropriate content template
				get_template_part( 'content', get_post_format() );
				
				// End the loop
				endwhile;

				// Navigation top
	    		get_template_part( 'nav', 'bottom' ); 

				// No results
				else : 
			?>
				
				<!-- Nothing found message -->
				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title">
				    		<?php _e( 'Nothing Found', 'oacore' ); ?>
						</h1>
				    </header>
				    <div class="entry-content">
				        <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'oacore' ); ?></p>
						<?php get_search_form(); ?>
				    </div>
				</article>
				
			<?php endif; ?>
	    	</div>
	    	
	    	<!-- Sidebar -->
			<?php get_sidebar( 'search' ); ?>
	    
	    </div>
	</div>

</div>

<?php get_footer(); ?>