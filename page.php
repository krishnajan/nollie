<?php
/**
 * The template for displaying all pages.
 *
 * @package Nollie
 * @author Muffin group
 * @link http://muffingroup.com
 */

get_header(); 

switch ( get_post_meta($post->ID, 'mfn-post-layout', true) ) {
	case 'left-sidebar':
		$class = ' with_aside aside_left';
		break;
	case 'right-sidebar':
		$class = ' with_aside aside_right';
		break;
	default:
		$class = '';
		break;
}
?>
	
<!-- Content -->
<div id="Content" class="subpage<?php echo $class;?>">
	<div class="container">

		<!-- .content -->
		<?php 
			if( $class ) echo '<div class="content">';
			
			while ( have_posts() )
			{
				the_post();
				get_template_part( 'includes/content', 'page' );
			}
			
			if( $class ) echo '</div>';
		?>	
		
		<!-- Sidebar -->
		<?php 
			if( $class ){
				get_sidebar();
			}
		?>

	</div>
</div>

<?php get_footer(); ?>