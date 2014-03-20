<?php get_header(); ?>

<!-- Section header -->
<header class="page-header">
    <h1 class="page-title">
    <?php
    	$parent_title = get_the_title($post->post_parent); 
		if( $post->post_parent ){
			echo '<span>'.$parent_title.' &rarr; </span>';
		}
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
				// The basic loop
				while ( have_posts() ) : the_post(); 
				
				// Single content template
				get_template_part( 'content', 'page' );
				
				//prev and next links
				echo '<span class="previous-link nav-link">';
				previous_post_link();
				echo '</span><span class="next-link nav-link">';
				next_post_link();
				echo '</span>';
				
				// End the loop
				endwhile;
			?>
	    	</div>
	    	
	    	<!-- Sidebar -->
			<?php get_sidebar( 'reports' ); ?>
	    
	    </div>
	</div>

</div>

<?php get_footer(); ?>