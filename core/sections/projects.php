<?php if ( get_theme_mod('creative_portfolio_lite_projects_section_enable') ) : ?>

<div class="project py-5">
	<div class="container">
		<?php if ( get_theme_mod('creative_portfolio_lite_projects_heading_text') ) : ?>
			<h6 class="text-center"><?php echo esc_html(get_theme_mod('creative_portfolio_lite_projects_heading_text')); ?></h6>
		<?php endif; ?>
		<?php if ( get_theme_mod('creative_portfolio_lite_projects_heading') ) : ?>
			<h3 class="pb-4 text-center"><?php echo esc_html(get_theme_mod('creative_portfolio_lite_projects_heading')); ?></h3>
		<?php endif; ?>

		<div class="tab text-center">
	        <?php $featured_post = get_theme_mod('creative_portfolio_lite_projects_number', '');
	          	for ( $j = 1; $j <= $featured_post; $j++ ){ ?>
          		<button class="tablinks mr-2 mr-md-3" onclick="creative_portfolio_lite_projects_tab(event, '<?php $main_id = get_theme_mod('creative_portfolio_lite_projects_text'.$j); $tab_id = str_replace(' ', '-', $main_id); echo $tab_id; ?> ')">
	          	<?php echo esc_html(get_theme_mod('creative_portfolio_lite_projects_text'.$j)); ?></button>
	        <?php }?>
      	</div>

  	  	<?php for ( $j = 1; $j <= $featured_post; $j++ ){ ?>
	        <div id="<?php $main_id = get_theme_mod('creative_portfolio_lite_projects_text'.$j); $tab_id = str_replace(' ', '-', $main_id); echo $tab_id; ?>"  class="tabcontent mt-5">
		        <?php $args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' =>  get_theme_mod('creative_portfolio_lite_projects_category'.$j),
					'posts_per_page' => 9,
				); ?>
				<div class="row">
				    <?php $arr_posts = new WP_Query( $args );
				    	if ( $arr_posts->have_posts() ) :
				      	while ( $arr_posts->have_posts() ) :
				        $arr_posts->the_post();
				        ?>
				        <div class="col-lg-4 col-md-6 col-sm-6">
					        <div class="projects_inner_box mb-4 text-center">
								<?php if ( has_post_thumbnail() ) :
									the_post_thumbnail();
								endif; ?>
								<div class="projects_content_box p-3">
					        		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>			        		
					            </div>
					        </div>
					    </div>
				      	<?php
				    endwhile;
				    wp_reset_postdata();
				    endif; ?>
				</div>
			</div>
		<?php }?>
	</div>
</div>

<?php endif; ?>