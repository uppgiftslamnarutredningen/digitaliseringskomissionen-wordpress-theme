<?php get_header(); ?>

<!-- Section header -->
<header class="page-header">
    <h1 class="page-title">
    <?php 
    	// Title
    	_e('Kalendarium','oacore');
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
				// Look for loop-calendar.php, fallback to loop.php
				get_template_part( 'content', 'calendar' );
				
	    	?>
	    	</div>
	    
	    	<!-- Sidebar -->
			<?php get_sidebar(); ?>
	    
	    </div>
	</div>

</div>

<?php get_footer(); ?>