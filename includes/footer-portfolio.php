<?php 
$translate['recent-work'] = mfn_opts_get('translate') ? mfn_opts_get('translate-recent-work','Recent work') : __('Recent work','nollie');
$translate['select-category'] = mfn_opts_get('translate') ? mfn_opts_get('translate-select-category','Select category:') : __('Select category:','nollie');
$translate['all'] = mfn_opts_get('translate') ? mfn_opts_get('translate-all','All') : __('All','nollie');			
?>

<!-- #Projects -->		
<div id="Projects" class="Projects">
	<div class="container">
		
		<!-- .select_category -->
		<?php
		$menu_args = array(
			'taxonomy' => 'portfolio-types',
			'orderby' => 'name',
			'order' => 'ASC',
			'show_count' => 1,
			'hierarchical' => 1,
			'hide_empty' => 0,
			'title_li' => '',
			'depth' => 1,
			'walker' => new New_Walker_Category()
		);
		?>
		
		<div class="column one">
			<div class="Projects_header clearfix">  
				<h3><?php echo $translate['recent-work']; ?></h3>     
				<div class="categories">
					<ul>
						<li class="label"><h6><?php echo $translate['select-category']; ?></h6></li>
						<?php 
							$portfolio_page_id = mfn_opts_get( 'portfolio-page' );
							echo '<li class="current-cat"><a rel="*" href="'.get_page_link( $portfolio_page_id ).'">'. $translate['all'] .'</a></li>';
							if( $portfolio_categories= get_terms('portfolio-types') ){
								
								foreach( $portfolio_categories as $category ){
									echo '<li><a rel=".'. $category->slug .'" href="'. get_term_link($category) .'">'. $category->name .'</a></li>';
								}
							}
						?>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="Projects_inside">
			<div class="Projects_inside_wrapper">
		
				<?php
				$layout = mfn_opts_get('recent-work-layout','one-fourth');
				
				$portfolio_args = array( 
					'post_type' => 'portfolio',
					'posts_per_page' => intval(mfn_opts_get('recent-work-posts',8)),
					'paged' => -1,
					'orderby' => 'order',
					'order' => 'ASC',
					'ignore_sticky_posts' => 1,
				);
				
				$portfolio_query = new WP_Query();
				$portfolio_query->query( $portfolio_args );
				
				if ($portfolio_query->have_posts())
				{
					while ($portfolio_query->have_posts())
					{
						$portfolio_query->the_post();
						
						$item_class = '';
						$item_cats = get_the_terms($post->ID, 'portfolio-types');
						if($item_cats){
							foreach($item_cats as $item_cat) {
								$item_class .= $item_cat->slug . ' ';
							}
						}
						
						?>
						<div class="column <?php echo $layout.' '.$item_class?>">
							<div class="portfolio_item">
								<div class="photo">
									<div class="photo_wrapper">
										<a href="<?php echo get_permalink(); ?>">
											<?php 
												the_post_thumbnail( '450x245c', array('class'=>'scale-with-grid' ));
												if( get_post_meta($post->ID, 'mfn-post-vimeo', true) || get_post_meta($post->ID, 'mfn-post-youtube', true) ){
													$ico = 'icon-play-circle';
												} else {
													$ico = 'icon-search';
												}
											?>
											<div class="mask"></div>
							    			<i class="<?php echo $ico; ?>"></i>
											<p class="title"><?php echo the_title(false, false, false); ?></p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
		
					wp_reset_query();
				}
				?>
			
			</div>
		</div>			

	</div>
</div>