<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package Nollie
 * @author Muffin group
 * @link http://muffingroup.com
 */

$translate['category'] = mfn_opts_get('translate') ? mfn_opts_get('translate-category','Category:') : __('Category:','nollie');
$translate['comments'] = mfn_opts_get('translate') ? mfn_opts_get('translate-comments','Comments:') : __('Comments:','nollie');
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

	<?php 
		$posts_meta = array();
		$posts_meta['categories'] = get_post_meta($post->ID, 'mfn-post-categories', true);
		$posts_meta['comments'] = get_post_meta($post->ID, 'mfn-post-comments', true);
		$posts_meta['time'] = get_post_meta($post->ID, 'mfn-post-time', true);
		$posts_meta['tags'] = get_post_meta($post->ID, 'mfn-post-tags', true);
		
		if( $posts_meta['time'] || $posts_meta['categories'] || $posts_meta['comments'] ){
			$has_meta = true;
		} else {
			$has_meta = false;
		}
	?>
	
	<?php if( $has_meta ): ?>
		
		<div class="meta">
		
			<?php if( $posts_meta['time'] ): ?>
			<div class="date">
				<span class="day"><?php printf( '%1$s', get_the_time('j') ); ?></span>
				<span class="month"><?php printf('%1$s', get_the_time('F') ); ?></span>
				<span class="month"><?php printf( '%1$s', get_the_time('Y') ); ?></span>
			</div>
			<?php endif; ?>
			
			<?php if( $posts_meta['categories'] ): ?>
			<div class="category">
				<span class="label"><?php echo $translate['category']; ?></span><br />
				<?php echo( get_the_category_list('<br />') ); ?>
			</div>
			<?php endif; ?>
			
			<?php if( $posts_meta['comments'] ): ?>
			<div class="comments">
				<?php 
					echo $translate['comments'] .'&nbsp;<i class="icon-comments-alt"></i>&nbsp;';
					comments_popup_link( 0, _x( '1', 'comments number', 'nollie' ), _x( '%', 'comments number', 'nollie' ) );
				?>
			</div>	
			<?php endif; ?>
			
		</div>
	
	<?php endif; ?>	

	<?php if( $has_meta ): ?><div class="desc"><?php else:?><div class="desc desc_no_meta"><?php endif;?>	
	
	
		<?php
			if( $blog_slider = get_post_meta( get_the_ID(), 'mfn-post-slider', true ) ){
				echo '<div class="image">';
					putRevSlider( $blog_slider );
				echo '</div>';	
			}elseif( $video = get_post_meta($post->ID, 'mfn-post-vimeo', true) ){
				echo '<div class="image iframe"><iframe class="scale-with-grid" src="http://player.vimeo.com/video/'. $video .'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>'."\n";
			} elseif( $video = get_post_meta($post->ID, 'mfn-post-youtube', true) ){
				echo '<div class="image iframe"><iframe class="scale-with-grid" src="http://www.youtube.com/embed/'. $video .'" frameborder="0" allowfullscreen></iframe></div>'."\n";
			} elseif( has_post_thumbnail() ){	
		?>
			<div class="image">
				<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); ?>
				<a class="fancybox" href="<?php echo $large_image_url[0] ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail( '934x460c', array('class'=>'scale-with-grid' ));?>
				</a>
			</div>
		<?php } ?>
	
		<?php
		if( $posts_meta['tags'] && ( $terms = get_the_terms( false, 'post_tag' ) ) ){
			echo '<p class="tags">';
			foreach( $terms as $term ){
				$link = get_term_link( $term, 'post_tag' );
				echo '<a href="' . esc_url( $link ) . '" rel="tag"><span>' . $term->name . '</span></a> ';
			}
			echo '</p>';
		}
		?>
		
		<?php the_content( false ); ?>
		
		<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:', 'nollie').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>		
		
		<?php if( get_post_meta($post->ID, 'mfn-post-social', true) ): ?>
			<div class="share">
				<span class='st_sharethis_hcount' displayText='ShareThis'></span>
				<span class='st_facebook_hcount' displayText='Facebook'></span>
				<span class='st_twitter_hcount' displayText='Tweet'></span>
				<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
				<span class='st_email_hcount' displayText='Email'></span>
			</div>
		<?php endif; ?>
		
	</div>

</div>

<?php comments_template( '', true ); ?>