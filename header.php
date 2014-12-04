<?php
/**
 * The Header for our theme.
 *
 * @package Nollie
 * @author Muffin group
 * @link http://muffingroup.com
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->

<!-- head -->
<head>

<!-- meta -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php if( mfn_opts_get('responsive') ) echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">'; ?>

<title><?php
global $post;
if( mfn_opts_get('mfn-seo') && is_object($post) && get_post_meta( get_the_ID(), 'mfn-meta-seo-title', true ) ){
	echo stripslashes( get_post_meta( get_the_ID(), 'mfn-meta-seo-title', true ) );
} else {
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'nollie' ), max( $paged, $page ) );
}
?></title>

<!-- stylesheet -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="all" />
<?php do_action('wp_styles'); ?>

<!-- wp_head() -->
<link rel="shortcut icon" href="<?php mfn_opts_show('favicon-img',THEME_URI .'/images/favicon.ico'); ?>" type="image/x-icon" />	

<?php if( is_single() ): ?>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-6568e777-919c-a5dd-ac31-98a6fa2e6b2d"}); </script>
<?php endif; ?>
<?php do_action('wp_seo'); ?>

<?php wp_head();?>
</head>

<?php 
	$translate['find-us-on'] = mfn_opts_get('translate') ? mfn_opts_get('translate-find-us-on','Find us on') : __('Find us on','nollie');
?>

<!-- body -->
<body <?php body_class(); ?>>

	<!-- #Header -->
	<header id="Header">
		<div class="container">
			<div class="sixteen columns">
			
				<!-- #logo -->
				<?php if( is_front_page() ) echo '<h1>'; ?>
				<a id="logo" href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
					<img src="<?php mfn_opts_show('logo-img',THEME_URI .'/images/logo.png'); ?>" alt="<?php bloginfo( 'name' ); ?>" />
				</a>
				<?php if( is_front_page() ) echo '</h1>'; ?>
				
				<!-- main menu -->
				<?php mfn_wp_nav_menu(); ?>
				<?php if ( has_nav_menu( 'primary' ) ) dropdown_menu( array('dropdown_title' => '- - Main menu - -', 'indent_string' => '- - ', 'indent_after' => '','container' => 'nav', 'container_id' => 'menu_responsive', 'theme_location'=>'primary') ); ?>		
				
				<div class="addons">
					<p class="phone"><i class="icon-phone"></i><?php mfn_opts_show( 'telephone-number' ) ?></p>
					<div class="social">
						<a href="#"><span><?php echo $translate['find-us-on']; ?></span></a>
						<div class="social-box">
							<ul>
								<?php if( mfn_opts_get('social-facebook') ): ?><li class="facebook"><a href="<?php mfn_opts_show('social-facebook'); ?>" title="Facebook">Facebook</a></li><?php endif; ?>
								<?php if( mfn_opts_get('social-googleplus') ): ?><li class="googleplus"><a href="<?php mfn_opts_show('social-googleplus'); ?>" title="Google+">Google+</a></li><?php endif; ?>
								<?php if( mfn_opts_get('social-twitter') ): ?><li class="twitter"><a href="<?php mfn_opts_show('social-twitter'); ?>" title="Twitter">Twitter</a></li><?php endif; ?>
								<?php if( mfn_opts_get('social-vimeo') ): ?><li class="vimeo"><a href="<?php mfn_opts_show('social-vimeo'); ?>" title="Vimeo">Vimeo</a></li><?php endif; ?>
								<?php if( mfn_opts_get('social-youtube') ): ?><li class="youtube"><a href="<?php mfn_opts_show('social-youtube'); ?>" title="YouTube">YouTube</a></li><?php endif; ?>
								<?php if( mfn_opts_get('social-flickr') ): ?><li class="flickr"><a href="<?php mfn_opts_show('social-flickr'); ?>" title="Flickr">Flickr</a></li><?php endif; ?>
								<?php if( mfn_opts_get('social-linkedin') ): ?><li class="linked_in"><a href="<?php mfn_opts_show('social-linkedin'); ?>" title="LinkedIn">LinkedIn</a></li><?php endif; ?>
								<?php if( mfn_opts_get('social-pinterest') ): ?><li class="pinterest"><a href="<?php mfn_opts_show('social-pinterest'); ?>" title="Pinterest">Pinterest</a></li><?php endif; ?>
								<?php if( mfn_opts_get('social-dribbble') ): ?><li class="dribbble"><a href="<?php mfn_opts_show('social-dribbble'); ?>" title="Dribbble">Dribbble</a></li><?php endif; ?>
							</ul>
						</div>
					</div>
				</div>

			</div>		
		</div>
		
	</header>
	
	<?php
		if( ! is_404() ){
			$slider = false;
			if( get_post_type()=='page' ) $slider = get_post_meta( get_the_ID(), 'mfn-post-slider', true );
			if( $slider ){
				// Revolution Slider
				echo '<div id="slider">';
					putRevSlider( $slider );
				echo '</div>';
			} else {
				// Page title
				echo '<div id="Subheader">';
					echo '<div class="container">';
						echo '<div class="sixteen columns">';
							echo '<h1>'. trim( wp_title( '', false ) ) .'</h1>';
							mfn_breadcrumbs();
						echo '</div>';
					echo '</div>';
				echo '</div>';
			}
		}
		
	?>