<?php get_header(); ?>

<div id="outer-wrap">

	<!-- Main site -->
	<div id="main-container">
		<?php get_template_part( 'nav', 'breadcrumb' ); ?>
	    <div id="main" class="wrapper">
	    	
	    <?php 
	    	// Get the first post for the page header
	    	if ( have_posts() ) : the_post();
	    ?>
	    	
			<!-- Section header -->
			<header class="page-header">
			    <h1 class="page-title author-title">
			    	<?php printf( __( 'Author Archives: %s', 'oacore' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
			    </h1>
			    <div class="author-description">
			    	<?php echo get_avatar(  get_the_author_meta( 'ID' ), 64, '', get_the_author_meta( 'display_name' ) ); ?>
			    	<p><?php the_author_meta( 'description' ); ?></p>
			    </div>
			</header>
	    	
	    	<!-- Content -->
	    	<div id="content-container">
			<?php
				// Rewind posts
				rewind_posts();
				
				// Navigation top
	    		get_template_part( 'nav', 'top' );
						
				// The basic loop
				while ( have_posts() ) : the_post(); 
				
				// Load the appropriate content template
				get_template_part( 'content', get_post_format() );
				
				// End the loop
				endwhile;
				
				// Navigation top
	    		get_template_part( 'nav', 'bottom' );
	    		
				// We're done
				else : endif; 
			?>
	    	</div>
	    	
	    	<!-- Sidebar -->
			<?php get_sidebar(); ?>
	    
	    </div>
	</div>

</div>

<?php get_footer(); ?>