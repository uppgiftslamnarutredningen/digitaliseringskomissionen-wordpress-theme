<aside id="sidebar-container">
    <ul id="sidebar-widgets">
<?php 
	if ( is_category( 'nyheter' ) || in_category( 'nyheter' ) ) {
		dynamic_sidebar( 'press-right-column' );
	} else {
		dynamic_sidebar( 'primary-right-column' ); 
	}
?>
    </ul>
</aside>