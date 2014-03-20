<?php get_header(); ?>

<!-- Section header -->
<header class="page-header">
    <h1 class="page-title">
    <?php 
    	// Daily archives
    	if ( is_day() ) : 
	        printf( __( 'Daily Archives: %s', 'oacore' ), '<span>' . get_the_date() . '</span>' );
	    
	    // Monthly archives
	    elseif ( is_month() ) :
        	printf( __( 'Monthly Archives: %s', 'oacore' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'oacore' ) ) . '</span>' );
		
		// Yearly archives
		elseif ( is_year() ) :
        	printf( __( 'Yearly Archives: %s', 'oacore' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'oacore' ) ) . '</span>' );
        
        // Category archives
        elseif ( is_category() ) :
        	// _e( 'Category: ', 'oacore' );
        	_e( '<span>' . single_cat_title() . '</span>' );
        	
        // Tag archives
        elseif ( is_tag() ) :
        	// _e( 'Tag: ', 'oacore' );
        	_e( '<span>' . single_tag_title() . '</span>' );
        
        // Custom taxonomies archives
        elseif ( is_tag() ) :
        	// _e( 'Browsing: ', 'oacore' );
        	_e( '<span>' . single_term_title() . '</span>' );
    
    	// Everything else
    	else :
        	_e( 'Archives', 'oacore' );
    	
    	endif; 
    ?>
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