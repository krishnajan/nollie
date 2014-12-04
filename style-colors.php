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

/********************** Backgrounds **********************/

	body, .ui-tabs .ui-tabs-nav li.ui-tabs-selected { 
		background-color: <?php mfn_opts_show( 'background-body', '#FFFFFF' ) ?>;
	}
	
	#Projects {
		background-color: <?php mfn_opts_show( 'background-recent-work', '#F8F8F8' ) ?>;
	}
	
	#Footer {
		background-color: <?php mfn_opts_show( 'background-footer', '#1e1f1f' ) ?>;
	}
	

/********************* Colors *********************/

/* Content font */

	body, .ui-tabs .ui-tabs-nav li a, .ui-accordion h3 a, .widget ul.menu li a,
	.widget_links ul li a, .widget_meta ul li a {
		color: <?php mfn_opts_show( 'color-text', '#676f76' ) ?>;
	}
	
/* Links color */

	a, a:visited, .widget ul.menu li a:hover, .widget ul.menu li.current_page_item a, 
	.widget ul.menu li.current_page_item a i, .widget ul.menu li a:hover i,
	.widget_links ul li a:hover, .widget_meta ul li a:hover, .testimonial .rslides_tabs li.rslides_here a, .testimonial .rslides_tabs li a:hover,
	.pager a.active, .pager a:hover.page, .Our_clients_slider a:hover.Our_clients_slider_prev, .Our_clients_slider a:hover.Our_clients_slider_next,
	.team .links a:hover.link {
		color: <?php mfn_opts_show( 'color-a', '#3FA8D2' ) ?>;	
	}
	
	a:hover {
		color: <?php mfn_opts_show( 'color-a-hover', '#1B87B1' ) ?>;
	}
	
/* Strong (dark) */
	.Recent_comments ul li strong, #Content .Latest_posts ul li a.title,  
	#Content .Latest_posts ul li p i, .Recent_comments ul li p strong,
	.Recent_comments ul li p i, .ui-tabs .ui-tabs-nav li.ui-tabs-selected a,
	.ui-accordion h3.ui-state-active a, .Twitter ul li span, .single-post .post .date {
		color: <?php mfn_opts_show( 'color-bold-note', '#31373c' ) ?>;
	}
	
/* Dark blue */
	
	blockquote div.text p, .get_in_touch li.phone p, .pricing-box .plan-inside ul li strong,
	.error h4, .team p, blockquote p.author span {
		color: <?php mfn_opts_show( 'color-blue-note', '#005274' ) ?>;
	}
	
/* Grey notes */

	.Twitter ul li > a, .Recent_comments li span.date, .Latest_posts span.date,
	.wp-caption .wp-caption-text, .pricing-box .plan-header .period, .post .meta, 
	.widget_categories li, .widget ul.menu li a i, .testimonial .rslides_tabs li a, .pager a,
	.Our_clients_slider a.Our_clients_slider_prev, .Our_clients_slider a.Our_clients_slider_next, .team .links a.link { 
		color: <?php mfn_opts_show( 'color-note', '#A3A3A3' ) ?>;
	}

/* Headings font */
	
	h1 { color: <?php mfn_opts_show( 'color-h1', '#313131' ) ?>; }
	h2 { color: <?php mfn_opts_show( 'color-h2', '#313131' ) ?>; }
	h3 { color: <?php mfn_opts_show( 'color-h3', '#313131' ) ?>; }
	h4 { color: <?php mfn_opts_show( 'color-h4', '#313131' ) ?>; }
	h5 { color: <?php mfn_opts_show( 'color-h5', '#09526f' ) ?>; }
	h6 { color: <?php mfn_opts_show( 'color-h6', '#31373c' ) ?>; }

/* Menu color */

	#Header #menu > ul > li > a {
		color: <?php mfn_opts_show( 'color-menu-a', '#FFFFFF' ) ?>;
		border-color: <?php mfn_opts_show( 'border-menu-a', '#72c1df' ) ?>;
	}
	
	#Header #menu > ul > li > a span {
		color: <?php mfn_opts_show( 'color-menu-arrow', '#9deaf3' ) ?>;
	}
	
	#Header #menu > ul > li.current-menu-item > a,
	#Header #menu > ul > li.current_page_item > a,
	#Header #menu > ul > li.current-menu-ancestor > a,
	#Header #menu > ul > li.current_page_ancestor > a {
		color: <?php mfn_opts_show( 'color-menu-a-active', '#053f57' ) ?>;
	}
	
	#Header #menu > ul > li.current-menu-item > a span,
	#Header #menu > ul > li.current_page_item > a span,
	#Header #menu > ul > li.current-menu-ancestor > a span,
	#Header #menu > ul > li.current_page_ancestor > a span {
		color: <?php mfn_opts_show( 'color-menu-arrow-active', '#fff' ) ?>;
	}
	
	#Header #menu > ul > li > a:hover,
	#Header #menu > ul > li.hover > a {
		color: <?php mfn_opts_show( 'color-menu-a-hover', '#053f57' ) ?>;
		background: <?php mfn_opts_show( 'background-menu-a-hover', '#fff' ) ?>;
	}
	
	#Header #menu > ul > li > a:hover span,
	#Header #menu > ul > li.hover > a span {
		color: <?php mfn_opts_show( 'color-menu-a-hover', '#053f57' ) ?>;
	}
	
	#Header #menu > ul > li ul {
		background: <?php mfn_opts_show( 'background-menu-a-hover', '#fff' ) ?>;
	}
	
	#Header #menu > ul > li ul li a:hover, 
	#Header #menu > ul > li ul li.hover > a {
		color: <?php mfn_opts_show( 'color-menu-a-hover', '#053f57' ) ?>;
	}
	
	#Header #menu > ul > li ul li a {
		color: <?php mfn_opts_show( 'color-submenu-a', '#676f76' ) ?>;
		border-color: <?php mfn_opts_show( 'border-submenu-a', '#E8E8E8' ) ?>;
	}
	
/* Logo border top */
	#Header #logo {
		border-color: <?php mfn_opts_show( 'border-logo', '#93d6f0' ) ?>;
	}
		
/* Header addons */	
	#Header .addons p.phone {
		color: <?php mfn_opts_show( 'color-phone', '#fff' ) ?>;
	}
	
	#Header .addons p.phone span {
		color: <?php mfn_opts_show( 'color-phone-highlight', '#a2eef1' ) ?>;
	}
	
	#Header .addons p.phone i {
		color: <?php mfn_opts_show( 'color-phone-ico', '#073b50' ) ?>;
	}
	
/* Subheader */	
	#Subheader h1 { 
		color: <?php mfn_opts_show( 'color-subheader-title', '#174759' ) ?>;
	}
	
	#Subheader ul.breadcrumbs li { 
		color: <?php mfn_opts_show( 'color-subheader-text', '#4D95B1' ) ?>;
	}
	
	#Subheader ul.breadcrumbs li a { 
		color: <?php mfn_opts_show( 'color-subheader-a', '#005274' ) ?>;
	}
	
/* Buttons */
	a.button, input[type="submit"], input[type="reset"], input[type="button"] {
		background-color: <?php mfn_opts_show( 'background-button', '#1c5e79' ) ?>;
		border-color: <?php mfn_opts_show( 'background-button', '#1c5e79' ) ?>;
		color: <?php mfn_opts_show( 'color-button', '#FFFFFF' ) ?>;
	}
	a:hover.button, input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover {
		background-color: <?php mfn_opts_show( 'background-button-hover', '#114c64' ) ?>;
		border-color: <?php mfn_opts_show( 'background-button-hover', '#114c64' ) ?>;
		color: <?php mfn_opts_show( 'color-button-hover', '#FFFFFF' ) ?>;
	}
	
/* Frames and borders color */

	.Recent_comments li, .Latest_posts li, .get_in_touch li, .pricing-box .plan-inside ul li, 
	.pricing-box, .ui-widget-header, #Content .ui-tabs .ui-tabs-nav, .ui-tabs .ui-tabs-panel,
	.ui-tabs .ui-tabs-nav li, .ui-accordion .ui-accordion-header, .ui-accordion .ui-accordion-content, 
	.gallery .gallery-item .gallery-icon, .post .meta, .post .image, .article_box,
	#comments .commentlist > li .photo, #comments .commentlist > li, 
	#comments .commentlist li .comment-body, .Twitter ul li, .Flickr .flickr_badge_image a,
	.single-post .post .category, .single-post .post .date, .pager, .single-portfolio .photo,
	.single-portfolio .sp-inside .sp-inside-right, table thead th, table tbody td, .widget ul.menu li a,
	.widget_links ul li a, .widget_meta ul li a, .our-offer .boxes .box.first, .our-offer .boxes .box.last, .testimonial .rslides_tabs li a,
	.pager a.page, .Our_clients_slider a.Our_clients_slider_prev, .Our_clients_slider a.Our_clients_slider_next, .team .links a.link {
		border-color: <?php mfn_opts_show( 'border-borders', '#ebebeb' ) ?>;
	}
	
/* Go to top */
	a#back_to_top {
		color: <?php mfn_opts_show( 'color-gototop', '#000' ) ?>;
	}
	a:hover#back_to_top {
		color: <?php mfn_opts_show( 'color-gototop-hover', '#005274' ) ?>;
	}
	
/* Article box */
	.article_box .thumbnail {
		border-color: <?php mfn_opts_show( 'border-article-box', '#3FA8D2' ) ?>;
	}
	
/* Call to action */
	.call_to_action h4 {
		color: <?php mfn_opts_show( 'color-call-to-action-text', '#B7E8FF' ) ?>;
	}
	
	.call_to_action h4 span {
		color: <?php mfn_opts_show( 'color-call-to-action-highlight', '#fff' ) ?>;
	}
	
	.call_to_action a.button {
		background-color: <?php mfn_opts_show( 'background-call-to-action-button', '#104358' ) ?>;
		color: <?php mfn_opts_show( 'color-call-to-action-button', '#ffffff' ) ?> !important;
	}
	
/* Trailer box */
	.trailer_box i { 
		color: <?php mfn_opts_show( 'color-featured-icon', '#12bdd7' ) ?>;
	}
	.trailer_box .ca-main { 
		color: <?php mfn_opts_show( 'color-featured-title', '#455663' ) ?>;
	}
	.trailer_box .ca-sub {
		color: <?php mfn_opts_show( 'color-featured-subtitle', '#676F76' ) ?>;
	}
	.trailer_box:hover i {
		color: <?php mfn_opts_show( 'color-featured-icon-hover', '#09a1b8' ) ?>;
	}
	.trailer_box:hover .ca-main {
		color: <?php mfn_opts_show( 'color-featured-title-hover', '#005274' ) ?>;
	}
	.trailer_box:hover .ca-sub {
		color: <?php mfn_opts_show( 'color-featured-subtitle-hover', '#455663' ) ?>;
	}
	
/* Faq & Accordion */
	.accordion .question h5, .faq .question h5 { 
		color: <?php mfn_opts_show( 'color-accordion', '#474747' ) ?>;
		background-color: <?php mfn_opts_show( 'background-accordion', '#f6f6f6' ) ?>;
		border-color: <?php mfn_opts_show( 'border-accordion', '#3FA8D2' ) ?>;
	}
	
/* Tabs */
	.ui-tabs .ui-tabs-panel, .ui-tabs .ui-tabs-nav li.ui-tabs-selected a, .ui-tabs .ui-tabs-nav li.ui-state-active { 
		background-color: <?php mfn_opts_show( 'background-tabs', '#f6f6f6' ) ?> !important; 
	}
	.ui-tabs .ui-tabs-nav li.ui-tabs-selected a, .ui-tabs .ui-tabs-nav li.ui-state-active a {
		color: <?php mfn_opts_show( 'color-tab-active', '#474747' ) ?>;
		border-top: 4px solid <?php mfn_opts_show( 'border-tab-active', '#3FA8D2' ) ?>;
		text-shadow: 0px 0px 0px #fff;
	}
	.ui-tabs .ui-tabs-nav li a {
		color: <?php mfn_opts_show( 'color-tab', '#fff' ) ?>;
		text-shadow: 1px 1px 0px #000;
	}

/* Footer headers and text */
	#Footer { 
		color: <?php mfn_opts_show( 'color-footer-text', '#D0D0D0' ) ?>;
	}
	
	#Footer .container {
		border-top-color: <?php mfn_opts_show( 'border-footer', '#2f80a2' ) ?>;
	}
	
	#Footer a { 
		color: <?php mfn_opts_show( 'color-footer-a', '#0b97ac' ) ?>;
	}
	
	#Footer a:hover { 
		color: <?php mfn_opts_show( 'color-footer-a-hover', '#5ACEDD' ) ?>;
	}
	
	#Footer h1,
	#Footer h2,
	#Footer h3,
	#Footer h4,
	#Footer h5,
	#Footer h6  {
		color: <?php mfn_opts_show( 'color-footer-heading', '#fff' ) ?>;
	}
	
	
/* Footer strong */
	#Footer .Twitter li span, #Footer .copy strong, #Footer .Latest_posts ul li a.title, 
	#Footer .Latest_posts ul li p i, #Footer .Recent_comments ul li p strong,
	#Footer .Recent_comments ul li p i, #Footer .widget_calendar caption {
		color: <?php mfn_opts_show( 'color-footer-bold-note', '#fff' ) ?>;
	}
	
/* Footer grey notes */

	#Footer .Twitter ul li > a, #Footer .Recent_comments li span.date, #Footer .Latest_posts span.date {
		color: <?php mfn_opts_show( 'color-footer-note', '#A6A6A6' ) ?>;
	}
	
/* Footer frames, background & border color */
	
	#Footer .Twitter li, #Footer .Flickr .flickr_badge_image a, #Footer .Recent_comments ul li, 
	#Footer .Latest_posts ul li, #Footer .widget ul.menu li a, #Footer .widget_meta ul li a, #Footer table thead th, #Footer table tbody td {
		border-color: <?php mfn_opts_show( 'border-footer-frame', '#2C2C2C' ) ?>; 
	}
	
/* Portfolio */	
	.portfolio_item .photo a i, .wp-caption .photo a i {
		color: <?php mfn_opts_show( 'color-recent-work-icon', '#3FA8D2' ) ?>;
		text-shadow: 1px 1px 0 #fff;
	}
	
	.portfolio_item .photo p.title {
		color: <?php mfn_opts_show( 'color-recent-work-title', '#09526F' ) ?>;
		text-shadow: 1px 1px 0 #fff;
	}
