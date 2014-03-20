<?php get_header(); ?>

<div id="outer-wrap">

	<!-- Main site -->
	<div id="main-container">
		<?php get_template_part( 'nav', 'breadcrumb' ); ?>
	    <div id="main" class="wrapper">

	    	
	    	<!-- Content -->
	    	<div id="content-container">
	    	<?php 
	    		// Navigation top
	    		get_template_part( 'nav', 'top' );

				// 404 Page Not Found or empty archives etc.
				if ( !have_posts() ) : ?>
				<div id="post-0" class="post error404 not-found">
					<h1 class="entry-title">
						<?php _e( 'Not Found', 'oacore' ); ?>
					</h1>
					<div class="entry-content">
						<p><?php _e( 'Sorry, there is nothing here. You might want to try and search for whatever it was you were looking for?', 'oacore' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				</div>
			<?php 
				endif;
				
				// The basic loop
				while ( have_posts() ) : the_post(); 
				
				// Load the appropriate content template
				get_template_part( 'content', get_post_format() );
				
				// End the loop
				endwhile;
				
	    		// Navigation top
	    		get_template_part( 'nav', 'bottom' );
			?>
	    	</div>
	    	
	    	<!-- Sidebar -->
			<?php get_sidebar(); ?>
	    
	    </div>
	</div>

</div>

<?php get_footer(); ?>