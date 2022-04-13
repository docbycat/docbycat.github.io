<?php if ( get_theme_mod('creative_portfolio_lite_blog_box_enable') ) : ?>

<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('creative_portfolio_lite_blog_slide_category'),
  'posts_per_page' => get_theme_mod('creative_portfolio_lite_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $arr_posts = new WP_Query( $args );
    if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            endif;
          ?>
          <div class="blog_box pt-3 pt-md-0">
            <?php if ( get_theme_mod('creative_portfolio_lite_slider_extra_text') ) : ?>
              <h4><?php echo esc_html( get_theme_mod('creative_portfolio_lite_slider_extra_text' ) ); ?></h4>
            <?php endif; ?>
            <?php if ( get_theme_mod('creative_portfolio_lite_title_unable_disable',true) ) : ?>
            <h3 class="my-3"><?php the_title(); ?></a></h3>
            <?php endif; ?>
            <?php if ( get_theme_mod('creative_portfolio_lite_button_unable_disable',true) ) : ?>
            <p class="slider-button mt-4">
              <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Hire Us','creative-portfolio-lite'); ?></a>
              <?php endif; ?>
            </p>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
  <?php $creative_portfolio_lite_settings = get_theme_mod( 'creative_portfolio_lite_social_links_settings' ); ?>
  <div class="home-social-link social-links">
    <span class="mr-2"><?php esc_html_e('FOLLOW US','creative-portfolio-lite'); ?></span>
    <?php if ( is_array($creative_portfolio_lite_settings) || is_object($creative_portfolio_lite_settings) ){ ?>
          <?php foreach( $creative_portfolio_lite_settings as $creative_portfolio_lite_setting ) { ?>
              <a href="<?php echo esc_url( $creative_portfolio_lite_setting['link_url'] ); ?>">
                  <i class="<?php echo esc_attr( $creative_portfolio_lite_setting['link_text'] ); ?>"></i>
              </a>
          <?php } ?>
    <?php } ?>
  </div>
  <div class="home-info">
    <?php if ( get_theme_mod('creative_portfolio_lite_header_phone_number') ) : ?>
      <span class="mr-3"><i class="fas fa-phone mr-2"></i><?php echo esc_html( get_theme_mod('creative_portfolio_lite_header_phone_number' ) ); ?></span>
    <?php endif; ?>

    <?php if ( get_theme_mod('creative_portfolio_lite_header_email_address') ) : ?>
      <span><i class="fas fa-envelope mr-2"></i><?php echo esc_html( get_theme_mod('creative_portfolio_lite_header_email_address' ) ); ?></span>
    <?php endif; ?>
  </div>
</div>

<?php endif; ?>