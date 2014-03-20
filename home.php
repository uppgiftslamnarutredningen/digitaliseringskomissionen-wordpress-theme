<?php get_header(); ?>

<div id="branches-container">
	<ul>
		<?php
		dynamic_sidebar( 'home-page' );
		
		/*
		?>
		<li id="branch-1" class="branch">
			<div class="wrapper">
				<a href="/uppdraget/" title="Uppdraget">
					<div class="branch-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/agenda.png" width="73" height="72" alt="Uppdraget" />
					</div>
					<h3 class="branch-heading">Uppdraget</h3>
				</a>
				<p class="branch-description">Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla.</p>
			</div>
		</li>
		<li id="branch-2" class="branch">
			<div class="wrapper">
				<a href="/signatar/" title="Signat&auml;r">
					<div class="branch-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/signatar.png" width="55" height="55" alt="Signat&auml;r" />
					</div>
					<h3 class="branch-heading">Signat&auml;r</h3>
				</a>
				<p class="branch-description">Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla.</p>
			</div>
		</li>
		<li id="branch-3" class="branch">
			<div class="wrapper">
				<a href="/agenda/" title="Agenda">
					<div class="branch-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/agenda.png" width="59" height="73" alt="Agenda" />
					</div>
					<h3 class="branch-heading">Agenda</h3>
				</a>
				<p class="branch-description">Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla.</p>
			</div>
		</li>
		<?php */ ?>
	</ul>
</div>

<div id="news-container">
	<ul>
	<?php
		query_posts( 'showposts=3&category_name=nyheter' );
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