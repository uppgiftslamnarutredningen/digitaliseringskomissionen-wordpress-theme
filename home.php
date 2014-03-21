<?php get_header(); ?>

<div id="branches-container">
	<ul>
		<?php
		dynamic_sidebar( 'home-page' ); ?>
	</ul>
</div>

<div id="news-container">
	<ul>
	<?php
		query_posts( 'showposts=3' );
		// The basic loop
		while ( have_posts() ) : the_post(); 
		
		// Load the appropriate content template
		get_template_part( 'content', 'home' );
		
		// End the loop
		endwhile;
	?>
		<li class="more-news">
			<a href="/nyheter" title="Visa fler nyheter">Visa fler nyheter</a>
		</li>
	</ul>
</div>

<?php get_footer(); ?>