<?php get_header(); ?>

<!-- Section header -->
<header class="page-header">
    <h1 class="page-title">
    <?php 
		_e('Rapporter', 'oacore');
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
			<?php get_sidebar('reports'); ?>
	    
	    </div>
	</div>

</div>

<?php get_footer(); ?>