<?php 

?>


<?php

/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action( 'et_after_main_content' );

if ( 'on' === et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;



if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>
	
	    <footer id="main-footer">

		<?php pre_footer();?>
		<?php get_sidebar( 'footer' ); ?>

		<?php footerLogo()?>

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
					<!-- 55OVER34 START -->
					<?php custom_footer_links()?>
					<!-- 55OVER34 END -->
					<div class="container clearfix">

				<!-- 55OVER34 -->
				<!-- COMMENTED OUT THIS SECTION -->
				<!-- TODO: -->
				<?php
					// if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
					// 	get_template_part( 'includes/social_icons', 'footer' );
					// }

					// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
					// echo et_core_fix_unclosed_html_tags( et_core_esc_previously( et_get_footer_credits() ) );
					// phpcs:enable
				?>

				<!-- 55OVER34 -->
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>

</body>
</html>
