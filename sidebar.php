<?php
/**
 * The Page Sidebar containing the widget area.
 *
 * @package Nollie
 * @author Muffin group
 * @link http://muffingroup.com
 */

$sidebars = mfn_opts_get( 'sidebars' );
$sidebar = get_post_meta($post->ID, 'mfn-post-sidebar', true);
$sidebar = $sidebars[$sidebar];
?>


<div class="four columns widget-area">
	<?php if ( ! dynamic_sidebar ( $sidebar ) ):
		mfn_nosidebar();				
	endif; ?>
</div>