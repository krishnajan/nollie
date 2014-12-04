<?php
/**
 * The template for displaying content in the template-portfolio.php template
 *
 * @package Nollie
 * @author Muffin group
 * @link http://muffingroup.com
 */

$layout = mfn_opts_get( 'portfolio-layout', 'one' );

$item_class = '';
$item_cats = get_the_terms($post->ID, 'portfolio-types');
if($item_cats){
	foreach($item_cats as $item_cat) {
		$item_class .= $item_cat->slug . ' ';
	}
}
?>

<div class="column <?php echo $layout.' '.$item_class?>">
	<div class="portfolio_item" id="portfolio-item-<?php the_ID(); ?>">
		
		<div class="photo">
			<div class="photo_wrapper">
				<a href="<?php the_permalink(); ?>">
					<?php 
						the_post_thumbnail( '450x245c', array('class'=>'scale-with-grid' ));
						if( get_post_meta($post->ID, 'mfn-post-vimeo', true) || get_post_meta($post->ID, 'mfn-post-youtube', true) ){
							$ico = 'icon-play-circle';
						} else {
							$ico = 'icon-eye-open';
						}
					?>
					<div class="mask"></div>
	    			<i class="<?php echo $ico; ?>"></i>
					<p class="title"><?php the_title(); ?></p>
				</a>	
			</div>	
		</div>
		
	</div> 
</div>