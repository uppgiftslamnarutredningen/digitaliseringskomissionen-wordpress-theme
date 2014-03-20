<?php get_header(); ?>

<!-- Section header -->
<header class="page-header">
    <h1 class="page-title">
	<?php _e( 'There&rsquo;s Nothing Here', 'oacore' ); ?>
    </h1>
</header>

<div id="outer-wrap">

	<!-- Main site -->
	<div id="main-container">
		<?php get_template_part( 'nav', 'breadcrumb' ); ?>
	    <div id="main" class="wrapper">

	    	<!-- Content -->
	    	<div id="content-container">
				<article id="post-0" class="post error404 not-found">
					<h1>
					<?php _e( 'There&rsquo;s Nothing Here', 'oacore' ); ?>
				    </h1>
				    <div class="entry-content">
				        <p><?php _e( 'Sorry, but we can&rsquo;t seem to find what you&rsquo;re looking for. That&rsquo;s a shame, it was probably something awesome. Do try and search for it, will you?', 'oacore' ); ?></p>
						<?php get_search_form(); ?>
				    </div>
				</article>
	    	</div>
	    	
	    	<!-- Sidebar -->
			<?php get_sidebar( '404' ); ?>
	    
	    </div>
	</div>

</div>

<?php get_footer(); ?>