    <?php zilla_content_end(); ?>

    <?php if( !is_page_template('template-portfolio.php') ) { ?>
		<!-- END #content -->
		</div>
	<?php } ?>
	
	<!--BEGIN .footer-outer -->
	<div class="footer-outer">

		<?php zilla_footer_before(); ?>
			
		<!-- BEGIN #footer -->
		<div id="footer">
		    
		    <?php zilla_footer_start(); ?>

		    <?php zilla_nav_before(); ?>
		    <?php if( has_nav_menu( 'footer-menu' ) ) {
		        wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => 'div', 'container_id' => 'footer-nav', 'depth' => 1 ) ); 
		    } ?>
			<?php zilla_nav_after(); ?>
		    
			<p class="copyright">&copy; <?php _e('Copyright ', 'zilla'); echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></p>
			
		
		
		    <?php zilla_footer_end(); ?>
		    
		<!-- END #footer -->
		</div>
		
		<?php zilla_footer_after(); ?>
	
	<!--END .footer-outer -->	
	</div>

	<a href="#" id="back-to-top"></a>
<script type="text/javascript">
	$(document).ready(
function()
{
$('#parallax').jparallax(
{xtravel: '15%', ytravel: '20%',yorigin:0,xorigin:0},
{xtravel: '30%', ytravel: '30%',yorigin:.5,xorigin:0},
{xtravel: '20%', ytravel: '10%',yorigin:.5,xorigin:-.1},
{frameDuration:40},
);
}
); 
</script>
			
	<!-- <?php echo 'Ran '. $wpdb->num_queries .' queries '. timer_stop(0, 2) .' seconds'; ?> -->
<!--END body-->
</body>
<!--END html-->
</html>