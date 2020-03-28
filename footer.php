<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">


				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>

							<?php //do_action('reviews_markup'); ?>
						<p id="footer-info">Copyright &copy; <?php echo date("Y"); ?> <a href="//www.gaslamp.org/">Gaslamp Quarter Association</a> | <a href="//www.gaslamp.org/contact">614 5th Avenue, Suite E, San Diego, CA 92101</a> | All Rights Reserved.<br />
The official website for the historic <a href="//www.gaslamp.org/">San Diego Gaslamp Quarter</a>, featuring <a href="//www.gaslamp.org/shops/">shopping</a>, <a href="//www.gaslamp.org/dine/">dining</a>, <a href="//www.gaslamp.org/play/">nightlife</a>, and <a href="//www.gaslamp.org/events/">events</a>.</p>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>


</div>

</body>
</html>