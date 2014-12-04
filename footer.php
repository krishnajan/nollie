<?php
/**
 * The template for displaying the footer.
 *
 * @package Nollie
 * @author Muffin group
 * @link http://muffingroup.com
 */
wp_ftdesc();
if( !is_404() && get_post_meta( get_the_ID(), 'mfn-post-recent-work', true ) ){
	get_template_part( 'includes/footer', 'portfolio' );
}
?>

<!-- #Footer -->		
<footer id="Footer">

	<!-- Call_to_action -->
	<?php if( $call_to_action = mfn_opts_get('call-to-action-text') ): ?>
		<div class="container">
			<div class="column one" style="margin-bottom:0;">
				<div class="Call_to_action clearfix">
					<h3><?php echo $call_to_action; ?></h3>
					<?php if( $link = mfn_opts_get('call-to-action-button-link') ) 
						echo '<a class="button button_large" href="'. $link .'">'. mfn_opts_get( 'call-to-action-button-text', 'Get in touch with us' ) .'</a>';
					?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="container">
		<?php
			$sidebars_count = 0;	
			for( $i = 1; $i <= 4; $i++ ){
				if ( is_active_sidebar( 'footer-area-'. $i ) ) $sidebars_count++;
			}
		
			$sidebar_class = '';
			if( $sidebars_count > 0 ){
				switch( $sidebars_count ){
					case 2: $sidebar_class = 'one-second'; break; 
					case 3: $sidebar_class = 'one-third'; break; 
					case 4: $sidebar_class = 'one-fourth'; break;
					default: $sidebar_class = 'one';
				}
			}
		?>
		
		<?php 
			for( $i = 1; $i <= 4; $i++ ){
				if ( is_active_sidebar( 'footer-area-'. $i ) ){
					echo '<div class="'. $sidebar_class .' column">';
						dynamic_sidebar( 'footer-area-'. $i );
					echo '</div>';
				}
			}
		?>

	</div>
</footer>

<a id="back_to_top" href="#"><i class="icon-circle-arrow-up"></i></a>

<!-- wp_footer() -->
<?php wp_footer(); ?>

</body>
</html>