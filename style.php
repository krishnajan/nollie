<?php
/**
 * @package Nollie
 * @author Muffin group
 * @link http://muffingroup.com
 */

header( 'Content-type: text/css;' );
	
$url = dirname( __FILE__ );
$strpos = strpos( $url, 'wp-content' );
$base = substr( $url, 0, $strpos );

require_once( $base .'wp-load.php' );
?>

/******************* Background ********************/
	
	<?php if( mfn_opts_get('show-page-bg') ): ?>
		<?php if( mfn_opts_get('img-page-bg') ): ?>
			body { background-image:url('<?php mfn_opts_show('img-page-bg') ?>'); }
		<?php endif; ?>
	<?php else: ?>
		body { background-image:none; }
	<?php endif; ?>
	
	<?php if( mfn_opts_get('show-slider-bg') ): ?>
		<?php if( mfn_opts_get('img-slider-bg') ): ?>
			body.template-slider { background-image:url('<?php mfn_opts_show('img-slider-bg') ?>'); }
		<?php endif; ?>
	<?php else: ?>
		body.template-slider { background-image:none; }
	<?php endif; ?>

/********************** Fonts **********************/

 	body, button, input[type="submit"], input[type="reset"], input[type="button"],
	input[type="text"], input[type="password"], input[type="email"], textarea, select {
		font-family: <?php mfn_opts_show( 'font-content', 'PT Sans' ) ?>, Arial, Tahoma, sans-serif;
		font-weight: 400;
	}
	
	#menu {
		font-family: <?php mfn_opts_show( 'font-menu', 'PT Sans' ) ?>, Arial, Tahoma, sans-serif;
		font-weight: 600;
	}
	
	h1 {
		font-family: <?php mfn_opts_show( 'font-headings', 'Ubuntu' ) ?>, Arial, Tahoma, sans-serif;
		font-weight: 100;
	}
	
	h2 {
		font-family: <?php mfn_opts_show( 'font-headings', 'Ubuntu' ) ?>, Arial, Tahoma, sans-serif;
		font-weight: 100;
	}
	
	h3 {
		font-family: <?php mfn_opts_show( 'font-headings', 'Ubuntu' ) ?>, Arial, Tahoma, sans-serif;
		font-weight: 100;
	}
	
	h4 {
		font-family: <?php mfn_opts_show( 'font-headings', 'Ubuntu' ) ?>, Arial, Tahoma, sans-serif;
		font-weight: 400;
	}
	
	h5 {
		font-family: <?php mfn_opts_show( 'font-headings', 'Ubuntu' ) ?>, Arial, Tahoma, sans-serif;
		font-weight: 700;
	}
	
	h6 {
		font-family: <?php mfn_opts_show( 'font-headings', 'Ubuntu' ) ?>, Arial, Tahoma, sans-serif;
		font-weight: 700;
	}
	
/********************** Font sizes **********************/

/* Body */

	body {
		font-size: <?php mfn_opts_show( 'font-size-content', '14' ) ?>px;
		<?php $line_height = mfn_opts_get( 'font-size-content', '14' ) + 7; ?>
		line-height: <?php echo $line_height; ?>px;
	}
	
/* Headings */
	
	h1 { 
		font-size: <?php mfn_opts_show( 'font-size-h1', '50' ) ?>px;
		<?php $line_height = mfn_opts_get( 'font-size-h1', '50' ) + 0; ?>
		line-height: <?php echo $line_height; ?>px;
	}
	
	h2 { 
		font-size: <?php mfn_opts_show( 'font-size-h2', '42' ) ?>px;
		<?php $line_height = mfn_opts_get( 'font-size-h2', '42' ) + 0; ?>
		line-height: <?php echo $line_height; ?>px;
	}
	
	h3 {
		font-size: <?php mfn_opts_show( 'font-size-h3', '28' ) ?>px;
		<?php $line_height = mfn_opts_get( 'font-size-h3', '28' ) + 2; ?>
		line-height: <?php echo $line_height; ?>px;
	}
	
	h4 {
		font-size: <?php mfn_opts_show( 'font-size-h4', '24' ) ?>px;
		<?php $line_height = mfn_opts_get( 'font-size-h4', '24' ) + 3; ?>
		line-height: <?php echo $line_height; ?>px;
	}
	
	h5 {
		font-size: <?php mfn_opts_show( 'font-size-h5', '20' ) ?>px;
		<?php $line_height = mfn_opts_get( 'font-size-h5', '20' ) + 2; ?>
		line-height: <?php echo $line_height; ?>px;
	}
	
	h6 {
		font-size: <?php mfn_opts_show( 'font-size-h6', '14' ) ?>px;
		<?php $line_height = mfn_opts_get( 'font-size-h6', '14' ) + 4; ?>
		line-height: <?php echo $line_height; ?>px;
	}
	
/* Footer */
	#Footer {
	    font-size: 93%;
	    line-height: 122%;
	}
	
/* Trailer box */

	.trailer_box .ca-main {
		font-weight: 400;
	}
	.trailer_box .ca-sub {
		font-size: 102%;
	}
	
/* Grey notes */

	.Recent_comments li span.date, .Latest_posts span.date {
		font-size: 92%;
	    line-height: 130%;
	}	
	
/********************** Other **********************/

/* Social box */

	#Header .addons > .social > .social-box {
		width: <?php mfn_opts_show( 'social-width', '125' ) ?>px;
	}
	
	#Header .addons > .social > a span {
		<?php $social_box_span_width = mfn_opts_get( 'social-width', '125' ); ?>
		width: <?php echo( $social_box_span_width - 59 ); ?>px;
	}