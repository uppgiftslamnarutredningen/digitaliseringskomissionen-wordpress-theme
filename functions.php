<?php

/* THEME SETUP
   Set up basic theme functionality here */
   
function oacore_setup() {

	// Localization
	load_theme_textdomain( 'oacore', get_template_directory() . '/lang' );

	// Add RSS feed links to <head>
	add_theme_support( 'automatic-feed-links' );

	// Register menus
	register_nav_menu( 'main-menu', __( 'Main Menu', 'oacore' ) );
	
	add_theme_support( 'post-thumbnails' ); 

}
add_action( 'after_setup_theme', 'oacore_setup' );

/* FORCE SSL FOR ALL PAGES */
function wpse_force_ssl()
{
    if ( is_ssl() )
        return;

    wp_redirect(
        'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] 
    );
    exit;
}
add_action( 'plugins_loaded', 'wpse_force_ssl' );

/* EXCERPTS */
function oa_excerpt_length( $length ) {
	return 21;
}

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '">L&auml;s mer</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


add_filter( 'excerpt_length', 'oa_excerpt_length' );

/* QUEUE SCRIPTS
   Queue JavaScripts and stylesheets here */

function oacore_scripts() {

    // Register scripts
    wp_register_script( 'jsgeneral', get_template_directory_uri() . '/js/general.js', array( 'jquery' ) ); 

    // Enqueue scripts
    wp_enqueue_script( 'jquery' ); // stock jquery
    wp_enqueue_script( 'jsgeneral' ); // js/general.js

}  
add_action( 'wp_enqueue_scripts', 'oacore_scripts' );


/* SIDEBARS
   Register widget areas here,
   archives will try to get sidebar-[postformat].php,
   single.php and page.php will try to get sidebar-single.php */

function oacore_widgets_init() {

	// Primary right column
	register_sidebar( array(
	    'name' => __( 'Primary Right Column', 'oacore' ),
	    'id' => 'primary-right-column',
	    'description' => __( 'The primary right column.', 'oacore' ),
	    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	    'after_widget' => '</li>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>'
	) );
	
	// Press right column
	register_sidebar( array(
	    'name' => __( 'Press Right Column', 'oacore' ),
	    'id' => 'press-right-column',
	    'description' => __( 'When the category is Press, this sidesbar is used.', 'oacore' ),
	    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	    'after_widget' => '</li>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>'
	) );

	// Page right column
	register_sidebar( array(
	    'name' => __( 'Pages Right Column', 'oacore' ),
	    'id' => 'pages-right-column',
	    'description' => __( 'On a Page this sidesbar is used.', 'oacore' ),
	    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	    'after_widget' => '</li>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>'
	) );

	// Home page coliúmns
	register_sidebar( array(
	    'name' => __( 'Home page', 'oacore' ),
	    'id' => 'home-page',
	    'description' => __( 'On a Page this sidesbar is used.', 'oacore' ),
	    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	    'after_widget' => '</li>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>'
	) );

}
add_action( 'widgets_init', 'oacore_widgets_init' );

// Register post type - Calendar
register_post_type('calendar', array(
	'labels' => array(
		'name' => 'Kalendarium',
	    'singular_name' => 'Kalendarium',
		'add_new' => 'L&auml;gg till h&auml;ndelse',
	    'add_new_item' => 'L&auml;gg till en ny h&auml;ndelse',
    	'edit_item' => 'Redigera h&auml;ndelser',
    	'new_item' => 'Ny h&auml;ndelse',
	    'view_item' => 'Visa h&auml;ndelse',
    	'search_items' => 'S&ouml;k h&auml;ndelse',
	    'not_found' =>  'Inga h&auml;ndelser hittades',
    	'not_found_in_trash' => 'Inga ph&auml;ndelser hittades i papperskorgen'
    	),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'taxonomies' => array('post_tag'),
	'hierarchical' => false,
	'has_archive' => true,
	'rewrite' => array('slug' => 'kalendarium'),
	'query_var' => true,
	'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
));

// Register post type - Calendar
register_post_type('reports', array(
	'labels' => array(
		'name' => 'Rapporter',
	    'singular_name' => 'Rapport',
		'add_new' => 'L&auml;gg till rapport',
	    'add_new_item' => 'L&auml;gg till en ny rapport',
    	'edit_item' => 'Redigera raopport',
    	'new_item' => 'Ny rapport',
	    'view_item' => 'Visa rapport',
    	'search_items' => 'S&ouml;k rapporter',
	    'not_found' =>  'Inga rapporter hittades',
    	'not_found_in_trash' => 'Inga rapporter hittades i papperskorgen'
    	),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'page',
	'hierarchical' => true,
	'has_archive' => false,
	'rewrite' => array('slug' => 'rapporter'),
	'query_var' => true,
	'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
));

/* COMMENTS
   Callback function for comments */
function oacore_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>" class="comment-body">
      <div class="comment-author vcard">
         <?php echo get_avatar($comment,$size='32',$default='<path_to_url>' ); ?>
         <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

      <?php comment_text() ?>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
<?php }

?>