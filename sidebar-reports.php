<aside id="sidebar-container">
    <ul id="sidebar-widgets">
		<?php
		global $id;
		global $post;
		
		if( $post->post_parent != 0 ){
			$parent = get_post_ancestors($id);
			$workingID = end($parent);
			
		} else {
			$workingID = $id;
		}
		
		if ( !is_page() ) {
			$args = array(
				'depth'        => 0,
				'show_date'    => '',
				'date_format'  => get_option('date_format'),
				'child_of'     => $workingID,
				'exclude'      => '',
				'include'      => '',
				'title_li'     => '',
				'echo'         => 0,
				'authors'      => '',
				'sort_column'  => 'menu_order, post_title',
				'link_before'  => '',
				'link_after'   => '',
				'walker'       => '',
				'post_type'    => 'reports',
			        'post_status'  => 'publish' 
			);			
		} else {
			$args = array(
				'depth'        => 1,
				'show_date'    => '',
				'date_format'  => get_option('date_format'),
				'child_of'     => 0,
				'exclude'      => '',
				'include'      => '',
				'title_li'     => '',
				'echo'         => 0,
				'authors'      => '',
				'sort_column'  => 'menu_order, post_title',
				'link_before'  => '',
				'link_after'   => '',
				'walker'       => '',
				'post_type'    => 'reports',
			        'post_status'  => 'publish' 
			);
		}
		
		$list = wp_list_pages($args);
		
		echo '<li>';
		?>
		<ul class="menu">
		<?php
		if( 'reports' == get_post_type() ){
			echo '<div class="left-nav-link"><a href="/rapport/">&larr; Tillbaka till rapporter</a></div>';
			_e('<h3 class="widget-title">'.get_the_title($workingID).' - Innehållsförteckning</h3>','oacore');
			echo '<li class=""><a href="'.get_permalink($workingID).'">'.get_the_title($workingID).'</a><ul class="children">';
			
		} else {
			_e('<h3 class="widget-title">Rapporter</h3>','oacore');
		}
		print_r($list);
		echo '</ul></li>' ;
		
		
		//dynamic_sidebar( 'pages-right-column' ); 
		?>
    </ul>
</aside>