<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('creative-portfolio-lite-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('creative-portfolio-lite-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-md-12">
        <p class="mb-0 py-3 text-center text-md-left">
          <?php
            if (!get_theme_mod('creative_portfolio_lite_footer_text') ) { ?>
              <a href="<?php echo esc_url(__('https://www.misbahwp.com/themes/free-portfolio-wordpress-theme/', 'creative-portfolio-lite' )); ?>" target="_blank">
              <?php esc_html_e('Portfolio WordPress Theme ','creative-portfolio-lite'); ?></a>
            <?php } else {
              echo esc_html(get_theme_mod('creative_portfolio_lite_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('creative_portfolio_lite_copyright_enable', true) == true ) : ?>
            <?php 
            /* translators: %s: Misbah WP */ 
            printf( esc_html__( 'by %s', 'creative-portfolio-lite' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url(__('https://wordpress.org', 'creative-portfolio-lite' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'creative-portfolio-lite' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
