<?php get_header(); ?>

<!-- Section header -->
<header class="page-header">
    <h1 class="page-title">
	<?php
		$category = get_the_category(); 
		echo $category[0]->cat_name;
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
				
				// Single content template
				get_template_part( 'content', 'single' );
				
				// End the loop
				endwhile;
			?>
	    	</div>
	    	
	    	<!-- Sidebar -->
			<?php get_sidebar( get_post_format() ); ?>
	    
	    </div>
	</div>

</div>

<?php get_footer(); ?>