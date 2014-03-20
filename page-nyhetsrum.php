<?php
/*
Template Name: Nyhetsrum
*/

 get_header(); ?>

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

<script type="text/javascript" charset="utf-8" id="mnd-script"> document.domain = /([a-z0-9-]+\.((co|org|gov)\.\w{2}|\w+))$/i.exec(location.hostname)[0];
 (function(){var s=document.createElement("script");s.type="text/javascript";s.async=true;s.src="//digitaliseringskommissionen.mynewsdesk.com/javascripts/mynewsdesk_hosted_iframe_v1_1.js";var i=document.getElementsByTagName('script')[0];i.parentNode.insertBefore(s,i);})();</script>	    
	    </div>
	</div>

</div>

<?php get_footer(); ?>