	<!-- Defining the footer class and content in this file. -->
	<footer class="site-footer">
		
		<section id="footer-contact" class="footer">
			<p>email: <a href="mailto:<?php bloginfo('admin_email'); ?>">info@jackusher.co.uk</a></p>
			<p>location: Durham and London, UK</p>
		</section><!-- /footer-contact -->
		
		<section id="footer-sitemap" class="footer">
			<nav class="site-nav">
				<?php
				$args = array(
					'theme_location' => 'footer'
				);
				wp_nav_menu( $args ); ?>
			</nav>
		</section>
		
		<!-- Creating the 'copyright' location for copyright info. -->
		<section id="footer-copyright" class="footer">
			<p>&copy; <?php bloginfo('name'); ?>, <?php echo date('Y');?></p>
		</section><!-- /footer-copyright -->
	
	</footer>

</div><!-- /container -->

<?php wp_footer(); ?>

</body>
</html>