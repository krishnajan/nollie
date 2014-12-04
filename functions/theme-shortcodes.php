<?php
/**
 * Shortcodes.
 *
 * @package Nollie
 * @author Muffin group
 * @link http://muffingroup.com
 */

// column shortcodes --------------------
add_shortcode( 'one', 'sc_one' );
add_shortcode( 'one_second', 'sc_one_second' );
add_shortcode( 'one_third', 'sc_one_third' );
add_shortcode( 'two_third', 'sc_two_third' );
add_shortcode( 'one_fourth', 'sc_one_fourth' );
add_shortcode( 'two_fourth', 'sc_two_fourth' );
add_shortcode( 'three_fourth', 'sc_three_fourth' );

// builder items --------------------
add_shortcode( 'blockquote', 'sc_blockquote' );
add_shortcode( 'call_to_action', 'sc_call_to_action' );
add_shortcode( 'code', 'sc_code' );
add_shortcode( 'contact_box', 'sc_contact_box' );
add_shortcode( 'divider', 'sc_divider' );
add_shortcode( 'feature', 'sc_feature' );
add_shortcode( 'latest_posts', 'sc_latest_posts' );
add_shortcode( 'map', 'sc_map' );
add_shortcode( 'our_team', 'sc_our_team' );
add_shortcode( 'recent_comments', 'sc_recent_comments' );
add_shortcode( 'testimonials', 'sc_testimonials' );

// content shortcodes -------------------
add_shortcode( 'button', 'sc_button' );
add_shortcode( 'ico', 'sc_ico' );
add_shortcode( 'image', 'sc_image' );
add_shortcode( 'vimeo', 'sc_vimeo' );
add_shortcode( 'youtube', 'sc_youtube' );


/* ---------------------------------------------------------------------------
 * Shortcode [one] [/one]
 * --------------------------------------------------------------------------- */
function sc_one( $attr, $content = null )
{
	$output  = '<div class="column one">';
	$output .= do_shortcode($content);
	$output .= '</div>'."\n";
	
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [one_second] [/one_second]
 * --------------------------------------------------------------------------- */
function sc_one_second( $attr, $content = null )
{
	$output  = '<div class="column one-second">';
	$output .= do_shortcode($content);
	$output .= '</div>'."\n";
	
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [one_third] [/one_third]
 * --------------------------------------------------------------------------- */
function sc_one_third( $attr, $content = null )
{
	$output  = '<div class="column one-third">';
	$output .= do_shortcode($content);
	$output .= '</div>'."\n";
	
    return $output;
}

/* ---------------------------------------------------------------------------
 * Shortcode [two_third] [/two_third]
 * --------------------------------------------------------------------------- */
function sc_two_third( $attr, $content = null )
{
	$output  = '<div class="column two-third">';
	$output .= do_shortcode($content);
	$output .= '</div>'."\n";
	
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [one_fourth] [/one_fourth]
 * --------------------------------------------------------------------------- */
function sc_one_fourth( $attr, $content = null )
{
	$output  = '<div class="column one-fourth">';
	$output .= do_shortcode($content);
	$output .= '</div>'."\n";
	
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [two_fourth] [/two_fourth]
 * --------------------------------------------------------------------------- */
function sc_two_fourth( $attr, $content = null )
{
	$output  = '<div class="column two-fourth">';
	$output .= do_shortcode($content);
	$output .= '</div>'."\n";
	
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [three_fourth] [/three_fourth]
 * --------------------------------------------------------------------------- */
function sc_three_fourth( $attr, $content = null )
{
	$output  = '<div class="column three-fourth">';
	$output .= do_shortcode($content);
	$output .= '</div>'."\n";
	
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [call_to_action]
 * --------------------------------------------------------------------------- */
function sc_call_to_action( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'text' => '',
		'btn_title' => '',
		'btn_link' => '',
		'class' => '',
	), $attr));
	
	$output = '<div class="call_to_action">';
		$output .= '<div class="inside">';
			$output .= '<h4>'. $text .'</h4>';
			if( $btn_link ) $output .= '<a href="'. $btn_link .'" class="button button_large '. $class .'">'. $btn_title .'</a>';
		$output .= '</div>';
	$output .= '</div>'."\n";
		
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [code] [/code]
 * --------------------------------------------------------------------------- */
function sc_code( $attr, $content = null )
{
	$output  = '<pre>';
	$output .= do_shortcode(htmlspecialchars($content));
	$output .= '</pre>'."\n";
	
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [article_box] [/article_box]
 * --------------------------------------------------------------------------- */
function sc_article_box( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'image' => '',
		'title' => '',
		'link_title' => '',
		'link' => '',
		'target' => '',
	), $attr));
	
	if( $target ){
		$target = 'target="_blank"'; 
	} else { 
		$target = false;
	}
	
	$output = '<div class="article_box_container">';
		$output .= '<div class="article_box">';
			$output .= '<h5>'. $title .'</h5>';
			$output .= '<p>'. do_shortcode($content) .'</p>';
			if( $link ) $output .= '<a class="button button_small" href="'. $link .'" '. $target .'>'. $link_title .'</a>';
			$output .= '<div class="thumbnail">';
				$output .= '<img src="'. $image .'" alt="'. $title .'" />';
			$output .= '</div>';
		$output .= '</div>';
	$output .= '</div>'."\n";
		
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [contact_box]
 * --------------------------------------------------------------------------- */
function sc_contact_box( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'title' => '',
		'text' => '',
		'address' => '',
		'telephone' => '',
		'email' => '',
		'twitter' => '',
	), $attr));

	$output = '<div class="get_in_touch">';
		$output .= '<h3>'. $title .'</h3>';
		$output .= $text;
		$output .= '<ul>';
			$output .= '<li class="address">';
				$output .= '<i class="icon-map-marker"></i>';
				$output .= '<p>'. $address .'</p>';
			$output .= '</li>';
			$output .= '<li class="phone">';
				$output .= '<i class="icon-phone"></i>';
				$output .= '<p>'. $telephone .'</p>';
			$output .= '</li>';				
			$output .= '<li class="mail">';
				$output .= '<i class="icon-envelope"></i>';
				$output .= '<p><a href="mailto:'. $email .'">'. $email .'</a></p>';
			$output .= '</li>';					
			$output .= '<li class="twitter">';
				$output .= '<i class="icon-twitter"></i>';
				$output .= '<p><a target="_blank" href="http://twitter.com/'. $twitter .'">'. $twitter .'</a></p>';
			$output .= '</li>';											
		$output .= '</ul>';
	$output .= '</div>'."\n";
	
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [contact_form]
 * --------------------------------------------------------------------------- */
function sc_contact_form( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'title' => '',
		'email' => '',
	), $attr));
	
	$translate['contact-name'] = mfn_opts_get('translate') ? mfn_opts_get('translate-contact-name','Your name') : __('Your name','nollie');
	$translate['contact-email'] = mfn_opts_get('translate') ? mfn_opts_get('translate-contact-email','Your e-mail') : __('Your e-mail','nollie');
	$translate['contact-subject'] = mfn_opts_get('translate') ? mfn_opts_get('translate-contact-subject','Subject') : __('Subject','nollie');
	$translate['contact-submit'] = mfn_opts_get('translate') ? mfn_opts_get('translate-contact-submit','Send message') : __('Send message','nollie');
	$translate['contact-message-success'] = mfn_opts_get('translate') ? mfn_opts_get('translate-contact-message-success','Thanks, your email was sent.') : __('Thanks, your email was sent.','nollie');
	$translate['contact-message-error'] = mfn_opts_get('translate') ? mfn_opts_get('translate-contact-message-error','Error sending email. Please try again later.') : __('Error sending email. Please try again later.','nollie');

	$output = '';
	if( $title ) $output .= '<h3>'. $title .'</h3>';
	$output .= '<div class="contact_form">';
		$output .= '<form id="json_contact_form" method="POST" action="'. LIBS_URI .'/theme-mail.php">';
			$output .= '<input type="hidden" name="To" value="'. $email .'" />';
			$output .= '<fieldset>';
				$output .= '<input id="Name" class="nick required" name="Name" placeholder="Your Name" type="text" />';
				$output .= '<input id="Email" class="email required" name="Email" placeholder="Your Email" type="text" />';
				$output .= '<input id="Subject" class="subject" name="Subject" placeholder="Your Subject" type="text" />';
				$output .= '<textarea id="Message" name="Message" class="required"></textarea>';
				$output .= '<input type="submit" value="'. $translate['contact-submit'] .'" />';
			$output .= '</fieldset>';
		$output .= '</form>';
		$output .= '<div class="alert_success" style="display:none;">'. $translate['contact-message-success'] .'</div>';
		$output .= '<div class="alert_error" style="display:none;">'. $translate['contact-message-error'] .'</div>';
	$output .= '</div>'."\n";
	
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [divider]
 * --------------------------------------------------------------------------- */
function sc_divider( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'height' => '0',
		'line' => '',
	), $attr));
	
	$line = ( $line ) ? false : ' border:none; width :0;';		
	$output = '<hr style="margin: 0 0 '. intval($height) .'px;'. $line .'" />'."\n";
	
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [feature] [/feature]
 * --------------------------------------------------------------------------- */
function sc_feature( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'icon' => '',	
		'image' => '',
		'title' => '',
		'subtitle' => '',
		'link' => '',
		'target' => '',
	), $attr));
	
	if( $target ){
		$target = 'target="_blank"'; 
	} else { 
		$target = false;
	}

	$output = '<div class="trailer_box">';
        if( $link ) $output .= '<a href="'. $link .'" '. $target .'>';
        	if( $image ){
        		$output .= '<div class="ca-ico img-wrapper"><img class="scale-with-grid" src="'. $image .'" alt="'. $title .'"/></div>';
        	} else {
        		 $output .= '<i class="ca-ico '. trim( $icon ) .'"></i>';
        	}
            $output .= '<div class="ca-content">';
                $output .= '<h3 class="ca-main">'. $title .'</h3>';
                $output .= '<p class="ca-sub">'. $subtitle .'</p>';
            $output .= '</div>';
        if( $link ) $output .= '</a>';
    $output .= '</div>';
		
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [portfolio]
 * --------------------------------------------------------------------------- */
function sc_portfolio( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'title' => 'Latest projects',
		'type' => 'standard',
		'link_title' => '',
		'link' => '',
		'size' => '1/1',
		'category' => '',
		'orderby' => 'menu_order',
		'order' => 'ASC',
	), $attr));
	
	switch( $size ) {
		case '1/4':
			$count = 0;
			break;
		case '1/2':
			$count = 1;
			break;
		case '3/4':
			$count = 2;
			break;
		default:
			$count = 3;
			break;
	}
	
	// compact
	if( $type == 'compact' ) $count++;
	
	$args = array( 
		'post_type' => 'portfolio',
		'posts_per_page' => $count,
		'paged' => -1,
		'orderby' => $orderby,
		'order' => $order,
		'ignore_sticky_posts' =>1,
	);
	if( $category ) $args['portfolio-types'] = $category;
	
	$query = new WP_Query();
	$query->query( $args );
	$post_count = $query->post_count;
	
	if ($query->have_posts())
	{
		
		$output = '';
		
			// compact
			if( $type == 'compact' ){
				$output .= '<div class="Project_boxes_header">';
					$output .= '<h3>'. $title .'</h3>';
					if( $link ) $output .= '<a class="more" href="'. $link .'">'. $link_title .'</a>';
				$output .= '</div>';
				$output .= '<div class="Projects">';
			} else {
				$output .= '<div class="Projects">';
					$output .= '<div class="one-fourth column">';
						$output .= '<h3>'. $title .'</h3>';
						$output .= '<p>'. do_shortcode($content) .'</p>';
						if( $link ) $output .= '<a href="'. $link .'">'. $link_title .'</a>';
					$output .= '</div>';
			}

			while ($query->have_posts())
			{
				$query->the_post();
				
				$terms = get_the_terms(false, 'portfolio-types'); 
				if( is_array( $terms ) ){
					$categories = '';
					foreach( $terms as $term ){
						$categories .= $term->name .'<br />';
					}
					$categories = substr( $categories , 0, -6 );
				}
				
				$output .= '<div class="one-fourth column">';
					$output .= '<div class="Project_box">';
						$output .= '<div class="thumbnail">';
							$output .= '<a href="'. get_permalink() .'">';
								$output .= get_the_post_thumbnail( null, '220x120c', array('class'=>'scale-with-grid' ) );
							$output .= '</a>';
						$output .= '</div>';
						$output .= '<h5>'. the_title(false, false, false) .'</h5>';
						$output .= '<span class="type">'. $categories .'</span>';
					$output .= '</div>';					
				$output .= '</div>';
			}
		
		$output .= '</div>'."\n";
	}
	wp_reset_query();
		
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [testimonials]
 * --------------------------------------------------------------------------- */
function sc_testimonials( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'title' => '',
		'category' => '',
		'orderby' => 'menu_order',
		'order' => 'ASC',
	), $attr));
		
	$args = array( 
		'post_type' => 'testimonial',
		'posts_per_page' => -1,
		'orderby' => $orderby,
		'order' => $order,
		'ignore_sticky_posts' =>1,
	);
	if( $category ) $args['testimonial-types'] = $category;
	
	$query = new WP_Query();
	$query->query( $args );
	$post_count = $query->post_count;
	
	if ($query->have_posts())
	{
		
		$output = '<div class="testimonial">';
			if( $title ) $output .= '<h3>'. $title .'</h3>';
			$output .= '<ul class="slider">';
	
				while ($query->have_posts())
				{
					$query->the_post();
					
					$output .= '<li>';
						$output .= '<blockquote>';
							$output .= '<div class="text"><p>'. get_the_content() .'</p></div>';
							$output .= '<p class="author">'; 
								$output .= '<span>'. get_post_meta(get_the_ID(), 'mfn-post-author', true). '</span>';
								if( $link = get_post_meta(get_the_ID(), 'mfn-post-link', true) ){
									if( $target = get_post_meta(get_the_ID(), 'mfn-post-target', true) ){
										$target = 'target="_blank"';
									} else {
										$target = false;
									}
									$output .=', <a href="'. $link .'" '. $target .'><i class="icon-external-link"></i> '. get_post_meta(get_the_ID(), 'mfn-post-link_title', true) .'</a>';
								}
							$output .= '</p>'; 
						$output .= '</blockquote>';					
					$output .= '</li>';					
				}

			$output .= '</ul>';
		$output .= '</div>'."\n";
	}
	wp_reset_query();
		
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [latest_posts]
 * --------------------------------------------------------------------------- */
function sc_latest_posts( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'title' => '',
		'count' => 3,
		'category' => '',
	), $attr));
	
	$args = array(
		'posts_per_page' => $count ? intval($count) : 0,
		'no_found_rows' => true,
		'post_status' => 'publish',
		'ignore_sticky_posts' => true
	);
	if( $category ) $args['category_name'] = $category;
	
	$r = new WP_Query( apply_filters( 'widget_posts_args', $args ) );
	
	$output = '<div class="Latest_posts">';
		$output .= '<h3>'. $title .'</h3>';
		if ($r->have_posts()){
			$output .= '<ul>';
				
			while ( $r->have_posts() ){
				$r->the_post();
				$output .= '<li>';
					$output .= '<span class="date"><i class="icon-calendar"></i> '. get_the_time('F j, Y') .'</span>';
					$output .= '<p><i class="icon-file"></i> <a class="title" href="'. get_permalink() .'">'. get_the_title() .'</a> in <i class="icon-tag"></i> '. get_the_term_list( $post->ID, 'post_tag', false, ', ' ) .'</p>';
				$output .= '</li>';
			}
			wp_reset_postdata();
			$output .= '</ul>';
		}
	$output .= '</div>'."\n";
		
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [recent_comments]
 * --------------------------------------------------------------------------- */
function sc_recent_comments( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'title' => '',
		'count' => 3,
	), $attr));
	
	global $wpdb;
	$sql = "SELECT *, DATE_FORMAT(comment_date, '%M %d, %Y') as comment_date_f from $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT ". intval( $count );
	$comments = $wpdb->get_results($sql);

	$output = '<div class="Recent_comments">';
		$output .= '<h3>'. $title .'</h3>';
		if(is_array($comments))
		{           
			$output .= '<ul>';
				foreach($comments as $comment)
				{
					$url = get_permalink($comment->comment_post_ID).'#comment-'.$comment->comment_ID .'" title="'.$comment->comment_author .' | '.get_the_title($comment->comment_post_ID);
					$output .= '<li>';
						$output .= '<span class="date"><i class="icon-calendar"></i> '. $comment->comment_date_f .'</span>';
						$output .= '<p><i class="icon-user"></i> <strong>'.strip_tags($comment->comment_author) .'</strong> '. __('commented on','nollie') .' <i class="icon-comments-alt"></i> <a href="'. $url .'">'. get_the_title($comment->comment_post_ID) .'</a></p>';
					$output .= '</li>';
				}
			$output .= '</ul>';
		}
	$output .= '</div>'."\n";
		
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [pricing_item] [/pricing_item]
 * --------------------------------------------------------------------------- */
function sc_pricing_item( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'title' => '',
		'price' => '',
		'currency' => '',
		'period' => '',
		'link_title' => '',
		'link' => '',
		'featured' => '',
	), $attr));
	
	if( $featured ){
		$featured = ' pricing-box-featured';
	} else {
		$featured = '';
	}

	$output = '<div class="pricing-box'. $featured .'">';
		$output .= '<div class="plan-header">';
			$output .= '<h3>'. $title .'</h3>';
			$output .= '<div class="price"><sup>'. $currency .'</sup>'. $price .'</div>';
			if( $link ) $output .= '<div class="period"><center><a class="button button_large" href="'. $link .'">'. $link_title .'</a></center></div>';
		$output .= '</div>';
		$output .= '<div class="plan-inside">';
			$output .= do_shortcode($content);
		$output .= '</div>';
	$output .= '</div>'."\n";
		
    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [ico]
 * --------------------------------------------------------------------------- */
function sc_ico( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'type' => '',
	), $attr));
	
	$output = '<i class="'. $type .'"></i>';

	return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [image]
 * --------------------------------------------------------------------------- */
function sc_image( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'src' => '',
		'alt' => '',
		'caption' => '',
		'align' => '',
		'link' => '',
		'link_image' => '',
		'link_type' => '',
		'target' => '',
		'border' => '',
	), $attr));
	
	// target
	if( $target ){
		$target = 'target="_blank"';
	} else {
		$target = false;
	}
	
	// border
	if( $border ){
		$border = ' border';
	} else {
		$border = ' no-border';
	}
	
	// align
	if( $align ) $align = ' align'. $align;
	
	// hoover icon
	if( $link_type == 'zoom' || $link_image )	{
		$class= 'fancybox';
		$link_type = 'icon-eye-open';
		$target = '';
	} else {
		$class = '';
		$link_type = 'icon-link';
	}
	
	// link
	if( $link_image ) $link = $link_image;
	
	if( $link )
	{
		$output  = '<div class="scale-with-grid wp-caption'. $align . $border .'">';
			$output .= '<div class="photo">';
				$output .= '<div class="photo_wrapper">';
					$output .= '<a href="'. $link .'" class="'. $class .'" '. $target .'>';
						$output .= '<img class="scale-with-grid" src="'. $src .'" alt="'. $alt .'" />';
						$output .= '<div class="mask"></div>';
    					$output .= '<i class="'. $link_type .'"></i>';
					$output .= '</a>';
				$output .= '</div>';
			$output .= '</div>';
			if( $caption ) $output .= '<p class="wp-caption-text">'. $caption .'</p>';
		$output .= '</div>'."\n";
	}
	else 
	{
		$output  = '<div class="scale-with-grid wp-caption no-hover'. $align . $border .'">';
			$output .= '<div class="photo">';
				$output .= '<div class="photo_wrapper">';
					$output .= '<img class="scale-with-grid" src="'. $src .'" alt="'. $alt .'" />';
				$output .= '</div>';
			$output .= '</div>';
			if( $caption ) $output .= '<p class="wp-caption-text">'. $caption .'</p>';
		$output .= '</div>'."\n";
	}

    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [button]
 * --------------------------------------------------------------------------- */
function sc_button( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'size' => '',
		'color' => '',
		'title' => 'Read more',
		'link' => '',
		'target' => '',
	), $attr));
	
	if( $target ){
		$target = 'target="_blank"';
	} else {
		$target = false;
	}
						
	$output = '<a class="button button_'. $size .' button_'. $color .'" href="'. $link .'" '. $target .'>'. $title .'</a>'."\n";

    return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [blockquote] [/blockquote]
 * --------------------------------------------------------------------------- */
function sc_blockquote( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'author' => '',
		'link' => '',
		'link_title' => '',
		'target' => '',
	), $attr));
	
	$output = '<blockquote>';
		$output .= '<div class="text"><p>'. do_shortcode($content) .'</p></div>';
		$output .= '<p class="author">'; 
			$output .= '<span>'. $author. '</span>';
			if( $link ){
				if( $target ){
					$target = 'target="_blank"';
				} else {
					$target = false;
				}
				$output .=', <a href="'. $link .'" '. $target .'><i class="icon-external-link"></i> '. $link_title .'</a>';
			}
		$output .= '</p>'; 
	$output .= '</blockquote>'."\n";	

	return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [offer]
 * --------------------------------------------------------------------------- */
function sc_offer( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'title' => '',	
		'image' => '',
		'item1_title' => '',
		'item1_text' => '',
		'item1_image' => '',
		'item2_title' => '',
		'item2_text' => '',
		'item2_image' => '',
		'item3_title' => '',
		'item3_text' => '',
		'item3_image' => '',
		'item4_title' => '',
		'item4_text' => '',
		'item4_image' => '',
		'item5_title' => '',
		'item5_text' => '',
		'item5_image' => '',
		'item6_title' => '',
		'item6_text' => '',
		'item6_image' => '',
		'btn1_title' => 'Contact form',
		'btn1_link' => '',
		'btn2_title' => 'See our offer',
		'btn2_link' => '',
	), $attr));
	
	$output = '<div class="our-offer">';
		$output .= '<h2>'. $title .'</h2>';
		
		$output .= '<div class="boxes_l boxes">';
			$output .= '<div class="box first">';
				$output .= '<h5>';
					if( $item1_image ) $output .= '<span class="ico"><img src="'. $item1_image .'" alt="'. $item1_title .'" /></span> ';
					$output .= '<span class="label">'. $item1_title .'</span>';
				$output .= '</h5>';
				$output .= '<p>'. $item1_text .'</p>';
			$output .= '</div>';
			$output .= '<div class="box box_nm">';
				$output .= '<h5>';
					if( $item2_image ) $output .= '<span class="ico"><img src="'. $item2_image .'" alt="'. $item2_title .'" /></span> ';
					$output .= '<span class="label">'. $item2_title .'</span>';
				$output .= '</h5>';
				$output .= '<p>'. $item2_text .'</p>';
			$output .= '</div>';
			$output .= '<div class="box">';
				$output .= '<h5>';
					if( $item3_image ) $output .= '<span class="ico"><img src="'. $item3_image .'" alt="'. $item3_title .'" /></span> ';
					$output .= '<span class="label">'. $item3_title .'</span>';
				$output .= '</h5>';
				$output .= '<p>'. $item3_text .'</p>';
			$output .= '</div>';
		$output .= '</div>';
		
		$output .= '<div class="illustration">';
			$output .= '<img class="scale-with-grid" src="'. $image .'" alt="'. $title .'" />';
		$output .= '</div>';
		
		$output .= '<div class="boxes_r boxes">';
			$output .= '<div class="box first">';
				$output .= '<h5>';
					if( $item4_image ) $output .= '<span class="ico"><img src="'. $item4_image .'" alt="'. $item4_title .'" /></span> ';
					$output .= '<span class="label">'. $item4_title .'</span>';
				$output .= '</h5>';
				$output .= '<p>'. $item4_text .'</p>';
			$output .= '</div>';
			$output .= '<div class="box box_nm">';
				$output .= '<h5>';
					if( $item5_image ) $output .= '<span class="ico"><img src="'. $item5_image .'" alt="'. $item5_title .'" /></span> ';
					$output .= '<span class="label">'. $item5_title .'</span>';
				$output .= '</h5>';
				$output .= '<p>'. $item5_text .'</p>';
			$output .= '</div>';
			$output .= '<div class="box">';
				$output .= '<h5>';
					if( $item6_image ) $output .= '<span class="ico"><img src="'. $item6_image .'" alt="'. $item6_title .'" /></span> ';
					$output .= '<span class="label">'. $item6_title .'</span>';
				$output .= '</h5>';
				$output .= '<p>'. $item6_text .'</p>';
			$output .= '</div>';
		$output .= '</div>';
	
		$output .= '<br style="clear: both;" />';
			
		$output .= '<footer>';
			if( $btn1_link ) $output .= '<a href="'. $btn1_link .'" class="button button_large button_">'. $btn1_title .'</a>';
			if( $btn2_link ) $output .= ' <a href="'. $btn2_link .'" class="button button_large button_yellow">'. $btn2_title .'</a>';
		$output .= '</footer>';
	$output .= '</div>'."\n";	
	
	return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [our_team]
 * --------------------------------------------------------------------------- */
function sc_our_team( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'image' => '',	
		'title' => '',
		'subtitle' => '',
		'email' => '',
		'facebook' => '',
		'twitter' => '',
		'linkedin' => '',
	), $attr));
	
	$skin = mfn_opts_get('skin','blue');
	if( $skin == 'custom' ){
		$skin = 'blue';
	}
	
	$output = '<div class="team">';
		$output .= '<div class="photo">';
			$output .= '<img class="team-overlay" src="'. THEME_URI .'/css/skins/'. $skin .'/images/our_team_overlay.png" alt="" />';
			$output .= '<img class="scale-with-grid" src="'. $image .'" alt="'. $title .'" />';
		$output .= '</div>';
		$output .= '<h4>'. $title .'</h4>';
		$output .= '<p>'. $subtitle .'</p>';
		$output .= '<div class="links">';
			if( $email ) $output .= '<a target="_blank" class="link link_1" href="mailto:'. $email .'"><i class="icon-envelope"></i></a>';
			if( $facebook ) $output .= '&nbsp;<a target="_blank" class="link link_2" href="'. $facebook .'"><i class="icon-facebook"></i></a>';
			if( $twitter ) $output .= '&nbsp;<a target="_blank" class="link link_3" href="'. $twitter .'"><i class="icon-twitter"></i></a>';
			if( $linkedin ) $output .= '&nbsp;<a target="_blank" class="link link_4" href="'. $linkedin .'"><i class="icon-linkedin"></i></a>';
		$output .= '</div>';
	$output .= '</div>'."\n";	

	return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [map]
 * --------------------------------------------------------------------------- */
function sc_map( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'lat' => '',
		'lng' => '',
		'height' => 200,
		'zoom' => 13,
		'uid' => uniqid(),
	), $attr));
	
	$output  = '<script src="http://maps.google.com/maps/api/js?sensor=false"></script>'."\n";
	$output .= '<script>';
		//<![CDATA[
		$output .= 'function google_maps_'. $uid .'(){';
			$output .= 'var latlng = new google.maps.LatLng('. $lat .','. $lng .');';
			$output .= 'var myOptions = {';
				$output .= 'zoom: '. intval($zoom) .',';
				$output .= 'center: latlng,';
				$output .= 'zoomControl: true,';
				$output .= 'mapTypeControl: false,';
				$output .= 'streetViewControl: false,';
				$output .= 'scrollwheel: false,';       
				$output .= 'mapTypeId: google.maps.MapTypeId.ROADMAP';
			$output .= '};';
	
			$output .= 'var map = new google.maps.Map(document.getElementById("google-map-area-'. $uid .'"), myOptions);';
			$output .= 'var marker = new google.maps.Marker({';
				$output .= 'position: latlng,';
				$output .= 'map: map,';
			$output .= '});';
		$output .= '}';
	
		$output .= 'jQuery(document).ready(function($){';
			$output .= 'google_maps_'. $uid .'();';
		$output .= '});';	
		//]]>
	$output .= '</script>'."\n";

	$output .= '<div id="google-map-area-'. $uid .'" style="width:100%; height:'. intval($height) .'px;">&nbsp;</div>'."\n";	

	return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [tabs] [/tabs]
 * --------------------------------------------------------------------------- */
global $tabs_array, $tabs_count;
function sc_tabs( $attr, $content = null )
{
	global $tabs_array, $tabs_count;
	
	extract(shortcode_atts(array(
		'uid' => uniqid(),
		'tabs' => '',
	), $attr));	
	do_shortcode( $content );
	
	// content builder
	if( $tabs ){
		$tabs_array = $tabs;
	}
	
	if( is_array( $tabs_array ) )
	{
		$output  = '<div class="jq-tabs">';
		$output .= '<ul>';
		
		$i = 1;
		$output_tabs = '';
		foreach( $tabs_array as $tab )
		{
			$output .= '<li><a href="#tab-'. $uid .'-'. $i .'">'. $tab['title'] .'</a></li>';
			$output_tabs .= '<div id="tab-'. $uid .'-'. $i .'">'. do_shortcode( $tab['content'] ) .'</div>';
			$i++;
		}
		
		$output .= '</ul>';
		$output .= $output_tabs;
		$output .= '</div>';
		
		$tabs_array = '';
		$tabs_count = 0;

		return $output;
	}
}


/* ---------------------------------------------------------------------------
 * Shortcode [tab] [/tab]
 * --------------------------------------------------------------------------- */
$tabs_count = 0;
function sc_tab( $attr, $content = null )
{
	global $tabs_array, $tabs_count;
	
	extract(shortcode_atts(array(
		'title' => 'Tab title',
	), $attr));
	
	$tabs_array[] = array(
		'title' => $title,
		'content' => do_shortcode( $content )
	);	
	$tabs_count++;

	return true;
}


/* ---------------------------------------------------------------------------
 * Shortcode [accordion] [/accordion]
 * --------------------------------------------------------------------------- */
function sc_accordion( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'count' => '',
		'tabs' => '',
	), $attr));
	
	$output  = '<div class="mfn-acc accordion">';
	
	if( is_array( $tabs ) ){
		// content builder
		foreach( $tabs as $tab ){
			$output .= '<div class="question">';
				$output .= '<h5>'. $tab['title'] .'</h5>';
				$output .= '<div class="answer">';
					$output .= do_shortcode($tab['content']);	
				$output .= '</div>';
			$output .= '</div>'."\n";
		}
	} else {
		// shortcode
		$output .= do_shortcode($content);	
	}
	
	$output .= '</div>'."\n";

	return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [faq] [/faq]
 * --------------------------------------------------------------------------- */
function sc_faq( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'count' => '',
		'tabs' => '',
	), $attr));
	
	$output  = '<div class="mfn-acc faq">';
	
	if( is_array( $tabs ) ){
		// content builder
		foreach( $tabs as $tab ){
			$output .= '<div class="question">';
				$output .= '<h5>'. $tab['title'] .'</h5>';
				$output .= '<div class="answer">';
					$output .= do_shortcode($tab['content']);	
				$output .= '</div>';
			$output .= '</div>'."\n";
		}
	} else {
		// shortcode
		$output .= do_shortcode($content);	
	}
	
	$output .= '</div>'."\n";

	return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [vimeo]
 * --------------------------------------------------------------------------- */
function sc_vimeo( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'width' => '710',
		'height' => '426',
		'video' => '',
	), $attr));
	
	$output  = '<div class="article_video">';
	$output .= '<iframe class="scale-with-grid" width="'. $width .'" height="'. $height .'" src="http://player.vimeo.com/video/'. $video .'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'."\n";
	$output .= '</div>';
	
	return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [youtube]
 * --------------------------------------------------------------------------- */
function sc_youtube( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'width' => '710',
		'height' => '426',
		'video' => '',
	), $attr));
	
	$output  = '<div class="article_video">';
	$output .= '<iframe class="scale-with-grid" width="'. $width .'" height="'. $height .'" src="http://www.youtube.com/embed/'. $video .'" frameborder="0" allowfullscreen></iframe>'."\n";
	$output .= '</div>';
	
	return $output;
}


/* ---------------------------------------------------------------------------
 * Shortcode [clients]
 * --------------------------------------------------------------------------- */
function sc_clients( $attr, $content = null )
{
	extract(shortcode_atts(array(
		'title' => '',
		'count' => -1,
		'type' => 'slider',
		'link' => 'client',
		'page' => '',
	), $attr));
	
	// type: slider/grid
	if( $type == 'slider' ){
		$class = "jcarousel-skin-tango";
	} else {
		$class = "clients";
	}
	
	// link: client/page
	if( $link == 'page' && $page ){
		$link = get_page_link( $page );
		$link2page = true;
	} else {
		$target = ' target="_blank"';
		$link2page = false;
	}
	
	if( ! intval($count) ) $count = -1;
	$args = array( 
		'post_type' => 'client',
		'posts_per_page' => $count,
		'orderby' => 'menu_order',
		'order' => 'ASC',
	);
	
	$query = new WP_Query();
	$query->query( $args );
	
	$output = '';
	if ($query->have_posts())
	{
		if( $type == 'slider' ) $output .= '<div class="Our_clients_slider">'."\n";
		if( $title ) $output .= '<h3>'. $title .'</h3>';
		$output .= '<ul class="'. $class .'">';
		while ($query->have_posts())
		{
			$query->the_post();			
			$output .= '<li>';			
				if( ! $link2page ) $link = get_post_meta(get_the_ID(), 'mfn-post-link', true);
				if( $link ) $output .= '<a href="'. $link .'" title="'. the_title(false, false, false) .'" '. $target .'>';
					$output .= get_the_post_thumbnail( null, '190x110' );
				if( $link ) $output .= '</a>';	
			$output .= '</li>';
		}
		$output .= '</ul>'."\n";
		if( $type == 'slider' ) $output .= '</div>'."\n";
	}
	wp_reset_query();

	return $output;
}


?>