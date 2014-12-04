<?php
/**
 * The main template file.
 *
 * @package Nollie
 * @author Muffin group
 * @link http://muffingroup.com
 */

get_header(); 

$posts_page_id = get_option( 'page_for_posts' );
switch ( get_post_meta($posts_page_id, 'mfn-post-layout', true) ) {
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

<!-- #Content -->
<div id="Content" class="subpage<?php echo $class;?>">
	<div class="container">

		<!-- .content -->
		<?php 
			if( $class ) echo '<div class="content">';
			echo '<div class="the_content the_content_wrapper">';
			
			while ( have_posts() )
			{
				the_post();
				get_template_part( 'includes/content', get_post_type() );
			}
			
			// pagination
			if(function_exists( 'mfn_pagination' )):
				mfn_pagination();
			else:
			?>
				<div class="nav-next"><?php next_posts_link(__('&larr; Older Entries', 'nollie')) ?></div>
				<div class="nav-previous"><?php previous_posts_link(__('Newer Entries &rarr;', 'nollie')) ?></div>
			<?php
			endif;
			
			echo '</div>';
			if( $class ) echo '</div>';
		?>	
		
		<!-- Sidebar -->
		<?php 
			if( $class ){
				get_sidebar( 'blog' );
			}
		?>

	</div>
</div>

<?php get_footer(); ?>