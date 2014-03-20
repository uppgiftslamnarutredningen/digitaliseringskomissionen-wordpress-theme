<?php get_header(); ?>

<!-- Section header -->
<header class="page-header">
    <h1 class="page-title">
	<?php
		_e('Kalendarium','oacore');
		echo ' &rarr; ';
		the_title();
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
				// Single content template
				get_template_part( 'content', 'calendar' );

			?>
	    	</div>
	    	
	    	<!-- Sidebar -->
			<?php get_sidebar( get_post_format() ); ?>
	    
	    </div>
	</div>

</div>

<?php get_footer(); ?>