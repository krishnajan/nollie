<?php
/**
 * The template for displaying content in the index.php template
 *
 * @package Nollie
 * @author Muffin group
 * @link http://muffingroup.com
 */

$translate['category'] = mfn_opts_get('translate') ? mfn_opts_get('translate-category','Category:') : __('Category:','nollie');
$translate['comments'] = mfn_opts_get('translate') ? mfn_opts_get('translate-comments','Comments:') : __('Comments:','nollie');
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( array('clearfix','post') ); ?>>

	<?php
		$posts_meta = array();
		$posts_meta['categories'] = mfn_opts_get( 'blog-categories' );
		$posts_meta['comments'] = mfn_opts_get( 'blog-comments' );
		$posts_meta['time'] = mfn_opts_get( 'blog-time' );
		$posts_meta['tags'] = mfn_opts_get( 'blog-tags' );
		
		$post_class = false;
		if( $blog_slider = get_post_meta( get_the_ID(), 'mfn-post-slider', true ) ){
			echo '<div class="image">';
				putRevSlider( $blog_slider );
			echo '</div>';	
		} elseif( $video = get_post_meta($post->ID, 'mfn-post-vimeo', true) ){
			echo '<div class="image iframe"><iframe class="scale-with-grid" src="http://player.vimeo.com/video/'. $video .'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>'."\n";
		} elseif( $video = get_post_meta($post->ID, 'mfn-post-youtube', true) ){
			echo '<div class="image iframe"><iframe class="scale-with-grid" src="http://www.youtube.com/embed/'. $video .'" frameborder="0" allowfullscreen></iframe></div>'."\n";
		} elseif( has_post_thumbnail() ){	
	?>
		<div class="image">
			<a href="<?php echo get_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( '440x292c', array('class'=>'scale-with-grid' )); ?>
			</a>
		</div>
	<?php
		} else {
			$post_class = ' no-post-thumbnail'; 
		} 
	?>
	
	<div class="desc<?php echo $post_class;?>">
		<h3><?php the_title(); ?></h3>
		<?php 
			if( $posts_meta['tags'] && ( $terms = get_the_terms( false, 'post_tag' ) ) ){
				echo '<p class="tags">';
				foreach( $terms as $term ){
					$link = get_term_link( $term, 'post_tag' );
					echo '<a href="' . esc_url( $link ) . '" rel="tag"><span>' . $term->name . '</span></a> ';
				}
				echo '</p>';
			}
		
			the_excerpt();	

			if( $blog_readmore = mfn_opts_get( 'blog-readmore' ) ){
				echo '<a href="'. get_permalink() .'" class="button button_small rs"><span>'. $blog_readmore .'</span></a>';
			}
			
			if( $posts_meta['time'] || $posts_meta['comments'] ){
				echo '<div class="meta">';
					
					if( $posts_meta['time'] ): ?>
						<div class="date">
							<i class="icon-calendar"></i>&nbsp;
							<span class="day"><?php printf( '%1$s', get_the_time('j') ); ?></span>
							<span class="month"><?php printf('%1$s', get_the_time('F') ); ?></span>
							<span class="month"><?php printf( '%1$s', get_the_time('Y') ); ?></span>
						</div>
					<?php endif;
					
					if( $posts_meta['comments'] ): ?>
						<div class="comments">
							<?php 
								echo $translate['comments'] .'&nbsp;<i class="icon-comments-alt"></i>&nbsp;'; 
								comments_popup_link( 0, _x( '1', 'comments number', 'nollie' ), _x( '%', 'comments number', 'nollie' ) ); 
							?>
						</div>	
					<?php endif;
				
				echo '</div>';
			}
		?>
	</div>
	
</div>

<br style="clear:both;" />