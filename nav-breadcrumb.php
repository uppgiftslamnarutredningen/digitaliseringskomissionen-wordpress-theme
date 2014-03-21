		<div class="breadcrumb">
		    <a href="<?php echo home_url(); ?>" title="<?php _e( 'Tillbaka till ', 'oacore' ); bloginfo( 'title' ); ?>"><?php bloginfo( 'title' ); ?></a> &raquo; 
		    <?php
		    	global $post;
		    
				if( get_post_type() != 'post' ){
					$obj = get_post_type_object( get_post_type() );	
					if ( is_single() ) { the_category(' '); echo $obj->labels->singular_name; echo ' &raquo; '; }
				}
				
				//print_r($obj);
		    
		    	if ( is_single() || is_page() ) { the_title(); }
		    ?>
		</div>
