<?php 
/**
 * 
 * The template for displaying the standard footer.
 */
?>

<?php

	$icons = kraft_get_option( 'footer-social-icon' );	
	
	$footer_layout_switch = kraft_get_option( 'footer-layout-switch' );
	
	$footer_layout_class = 'vc_container';
	
	if( $footer_layout_switch == 1 ) {
		$footer_layout_class = 'container-fluid';
	}
	
	if( !empty( $icons ) ) {
		$icons = $icons[ 'Footer icons' ];
	}
	
	$footer_text = '&#169; 2017 Kraft';
?>



<!-- Footer -->
<footer id="footer" class="footer standard">
	<div class="vc_container flex-container footer-content">
		<div class="footer-block">
			<h4>Termin & Beratung</h4>
			<p>Kontaktiere uns telefonisch, per Whatsapp oder Mail.</p>
			<p>Telefon: +41 44 450 64 00<br>Whatsapp: +41 79 900 04 04<br>E-Mail: worldsend@worldsend.ch</p>
		</div>
		<div class="footer-block">
			<h4>Öffnungszeiten</h4>
			<p>Dienstag bis Freitag<br>12:00 – 19:00</p>
			<p>Samstag<br>10:00 – 17:00</p>
		</div>
		<div class="footer-block">
			<h4>Adresse & Anfahrt</h4>
			<p>Word's End Tattoo<br>Steinstrasse 50<br>8003 Zürich</p>
			<p><a href="https://goo.gl/maps/j3mpGusoaNP2" target="_blank" rel="noopener">Google Maps anzeigen</a></p>
			<p><a href="https://www.sbb.ch/de/kaufen/pages/fahrplan/fahrplan.xhtml?nach=8003+Z%C3%BCrich+Steinstrasse+50" target="_blank" rel="noopener">SBB Fahrplan anzeigen</a></p>
		</div>
	</div>

	<div class="vc_container footer-bottom">
		<!-- <div class="copyright">
			<p><?php echo wp_kses( kraft_get_option( 'footer-copyright', $footer_text ), array( 'a' =>  array( 'href' => array(),'target' => array() ) ) );  ?>	</p>
		</div> -->
				<?php if ( kraft_get_option( 'footer-social', 0 ) == 1 && count( $icons ) > 1 ) { 				
					$social_link_target = '';
					$footer_social_target = kraft_get_option( 'footer-social-target', '_blank' );			
					if( $footer_social_target == '_blank' ) {
						$social_link_target = 'target="_blank"';
					}					
				?>
				<div class="footer-socials">
					<?php
						foreach ( $icons as $icon => $name ) {
							if ( $icon !== reset( $icons ) ) {
								$url = 'url-' . $icon;
					?>		
					<?php if ( kraft_get_option( 'footer-social-type' ) == 1 ) { ?>				
					    <a href="<?php echo kraft_get_social_url( $url ); ?>"  <?php echo esc_attr( $social_link_target ); ?> >
							<i class="fa fa-<?php echo esc_attr( $icon ); ?>"></i>
						</a>		
					<?php } 
					else {
					?>					
						<a href="<?php echo kraft_get_social_url( $url ); ?>"  <?php echo esc_attr( $social_link_target ); ?> ><?php echo esc_html( $icons[ $icon ] ); ?></a>
					<?php } ?>			
					<?php }} ?>							
				</div>
				<?php } ?>		
	</div>

</footer>





<!-- Footer Ends -->
