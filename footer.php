<footer class="footer content-region-3 pt30 pb40">
        <div class="container">
          <div class="col-lg-4">
            <?php if(is_active_sidebar('footer-1')) : ?>
              <?php dynamic_sidebar('footer-1'); ?>
            <?php endif; ?>            
          </div>

          <div class="col-lg-4">
          <div>
            <?php if(is_active_sidebar('footer-2')) : ?>
              <?php dynamic_sidebar('footer-2'); ?>
            <?php endif; ?>            
          </div>
        </div>
        <div class="site-info" style="text-align:center; margin-top: 20px;">
				<?php
				printf( esc_html__( 'Theme: %1$s by Nahom Hailu.', 'EthioNah' ), 'EthioNah' );
				?>
				<span class="sep"> | </span>
				<a id="footer-link" href="<?php echo esc_url( __( 'https://wordpress.org/', 'EthioNah' ) ); ?>">
					<?php
					printf( esc_html__( 'Proudly powered by %s', 'EthioNah' ), 'WordPress' );
					?>
				</a>
			</div>
    
      </footer>
      <?php wp_footer(); ?>
  </body>
</html>
