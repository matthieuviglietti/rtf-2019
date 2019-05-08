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

					// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
					echo et_core_fix_unclosed_html_tags( et_core_esc_previously( et_get_footer_credits() ) );
					// phpcs:enable
				?>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
	<script type="text/javascript">
        tarteaucitron.user.analyticsUa = 'UA-XXXXXXXX-X';
        tarteaucitron.user.analyticsMore = function () { /* add here your optionnal ga.push() */ };
        (tarteaucitron.job = tarteaucitron.job || []).push('analytics');
        </script>
	<script type="text/javascript">

			if(typeof jQuery != 'undefined'){

			var pstr1 = ' Consentement au <a id="consent" href="/politique-de-confidentialite" target="_blank"><strong>traitement des données personnelles</strong></a> Décret-loi n. 196/2003';

			var pErrorMsg1 = 'Pour continuer, vous devez cocher la case de traitement des données personnelles.';

			var $2a = jQuery, pform1 = $2a(".et_bloom_optin form");
			$2a(function(){
			     if(pform1.length>0){
			     pform1.find("[class=et_bloom_submit_subscription]").before('<label class="bloom-privacy-wrap"><label class="bloom-privacy-inside"><input type="checkbox" id="pcheck1" />'+pstr1+'</label></label> ');
			     var psub1 = pform1.find("[class=et_bloom_submit_subscription]");
			     psub1.on('click', function(){
			         var pcheck1 = $2a("#pcheck1"),
			               pcheck1ed = pcheck1.is(":checked");
			         if(!pcheck1ed){
			            alert(pErrorMsg1)
			            return false;
			         }
			     });
			     }
			});
			}
			</script>
</body>
</html>
