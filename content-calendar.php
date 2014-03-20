<?php
// 404 Page Not Found or empty archives etc.
if ( !have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h2 class="entry-title">
			Ingenting hittades
		</h2>
		<div class="entry-content">
			<p>H&auml;r finns visst ingenting. Du kanske ska f&ouml;rs&ouml;ka att s&ouml;ka efter det du letade efter?</p>
			<?php get_search_form(); ?>
		</div>
	</div>
<?php endif; ?>

<?php 
// Start looping calender events
$last_event_month = -1;
while ( have_posts() ) : the_post(); 
	
	// New month in the loop
	//$event_date_timestamp = (int)get_post_meta(get_the_ID(), '_calendar_date_timestamp', true);
	// Convert to Unix time
	$event_date_timestamp = strtotime( get_post_meta( get_the_ID(), '_digikom_meta_box_date', true ) );
	$event_year = date("o", $event_date_timestamp);
	$event_month = date("M", $event_date_timestamp);
	$event_day = date("j", $event_date_timestamp);
	
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_home() || is_front_page() || is_archive() || is_search() ) {

		if ( $event_month != $last_event_month ) {
			?>
			<h2 class="calendar-header-date">
				<?php echo mb_convert_case( date_i18n('F Y', $event_date_timestamp), MB_CASE_TITLE ); ?>
			</h2>
			<?php
		}
		
		if ( has_post_thumbnail() ) {
			echo '<div class="featured-archive">';
			the_post_thumbnail('thumbnail');
			echo '</div>';
		} 
		
		} ?>
		<div class="calendar-content-column">
			<h3 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h3>
			<span class="date"><?php echo $event_day.' '.$event_month.' '.$event_year; ?></span>
			<?php if ( get_post_meta(get_the_ID(), 'calendar_time', true) ): ?>
				<span><?php echo get_post_meta(get_the_ID(), 'calendar_time', true) ?></span>
			<?php endif; ?>			
			<?php
			// For archives and search results, use the_excerpt()
			if ( is_home() || is_front_page() || is_archive() || is_search() ) : ?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>
			<?php 
			// For everything else
			else : ?>
				<div class="entry-content">
					<?php
					if ( has_post_thumbnail() ) {
						echo '<div class="featured">';
						the_post_thumbnail();
						echo '</div>';
					}
					the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">Sidor:', 'after' => '</div>' ) ); ?>
				</div>
			<?php endif; ?>
		</div>
		<div style="clear: both;"></div>
	</article>
	<?php 
	
	$last_event_month = $event_month;
endwhile; 
?>

<?php
// When possible, display navigation at the bottom
if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-below" class="navigation">
		<div class="nav-previous">
			<?php next_posts_link( '<span class="meta-nav">&larr;</span> Bl&auml;ddra bak&aring;t' ); ?>
		</div>
		<div class="nav-next">
			<?php previous_posts_link( 'Bl&auml;ddra fram&aring;t <span class="meta-nav">&rarr;</span>' ); ?>
		</div>
	</div>
<?php endif; ?>