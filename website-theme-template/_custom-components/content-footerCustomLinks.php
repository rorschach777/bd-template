


<div class="footer-custom-container">
	<!-- TODO: PASS DYNAMIC CONENT FROM CMS -->
	 <div class="footer-custom-list">
		<p>&copy;2019 Aspen Grove Landscape Companies</p>
		<ul>
			<li><a href="">CONTACT US</a></li>
			<li><a href="">VISIT US ON SOCIAL MEDIA</a></li>
		</ul>
	</div>
	<div class="et-social-icons-wrapper">
	<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
					// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
					echo et_core_fix_unclosed_html_tags( et_core_esc_previously( et_get_footer_credits() ) );
					// phpcs:enable
				?>
	</div>
</div>