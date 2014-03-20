		<!-- Footer -->
		<footer id="footer-container">
			<div class="wrapper">
				<div class="footer-column">
					<a href="<?php echo home_url(); ?>" title="Tillbaka till Digitaliseringskommissionen">
						<img src="<?php echo get_template_directory_uri(); ?>/img/digikom_footerlogo.png" alt="Digitaliseringskommissionens Startsida" width="184" height="32" class="logo" />
					</a>
					<p>
						Målet för regeringens it-politik är att Sverige ska vara bäst i världen på att tillvarata digitaliseringens möjligheter. Digitaliseringskommissionen är en tillfällig myndighet med självständigt uppdrag fram till 31 december 2015 att arbeta för att det it-politiska målet blir verklighet.
					</p>
					<p>
						<?php /*Copyright &copy; 2013 | */ ?><a href="https://www.facebook.com/digitaliseringskommissionen" class="facebook" title="Digitaliseringskommissionen p&aring; Facebook">Facebook</a> | <a href="https://twitter.com/digikommission" class="twitter" title="Digitaliseringskommissionen p&aring; Twitter">Twitter</a>
					</p>
				</div>
				<div class="footer-column right-column">
					<nav id="site-nav-footer" role="navigation">
					    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</nav>
				</div>
				<div id="footer-copy">
					<a href="http://oddalice.se" title="Till Odd Alice"><div class="oa-footer-logo"></div></a>
				</div>
			</div>
		</footer>
		
		<?php 
			wp_footer();  
			if(isset($_COOKIE['cookieLaw'])) {
		?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-45894908-1', 'digitaliseringskommissionen.se');
		  ga('send', 'pageview');
		
		</script>
		<?php } ?>
	</body>
</html>