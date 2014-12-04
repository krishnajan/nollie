<?php
/**
 * Menu functions.
 *
 * @package Nollie
 * @author Muffin group
 * @link http://muffingroup.com
 */


/* ---------------------------------------------------------------------------
 * Registers a menu location to use with navigation menus.
 * --------------------------------------------------------------------------- */
register_nav_menu('primary', __('Main menu','mfn-opts') );


/* ---------------------------------------------------------------------------
 * Main menu
 * --------------------------------------------------------------------------- */
function mfn_wp_nav_menu() 
{
	$args = array( 
		'container' => 'nav',
		'container_id' => 'menu', 
		'fallback_cb' => 'mfn_wp_page_menu', 
		'theme_location' => 'primary',
		'depth' => 3,
		'walker' => new mfn_nav_walker
	);
	
	wp_nav_menu( $args ); 
}

function mfn_wp_page_menu() 
{
	$args = array(
		'title_li' => '0',
		'sort_column' => 'menu_order',
		'depth' => 3
	);

	echo '<nav id="menu">'."\n";
	echo '<ul>'."\n";
	wp_list_pages($args); 
	echo '</ul>'."\n";
	echo '</nav>'."\n";
}


/* ---------------------------------------------------------------------------
 * class mfn_nav_walker
 * --------------------------------------------------------------------------- */
class mfn_nav_walker extends Walker_Nav_Menu {

	var $primary_level_items_count = 0;
	var $primary_level_items_limit = 3;
	var $last_divider = 0;
	
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	
		if( ! $item->menu_item_parent ) $this->primary_level_items_count++;
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		if( $this->primary_level_items_count > $this->primary_level_items_limit && 
			( $this->primary_level_items_count % $this->primary_level_items_limit == 1 ) && 
			( $this->last_divider != $this->primary_level_items_count ) 
		){
			$this->last_divider = $this->primary_level_items_count;
			$output .= $indent . '</ul><ul class="menu"><li' . $id . $value . $class_names .'>';
		} else {
			$output .= $indent . '<li' . $id . $value . $class_names .'>';
		}

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

?>