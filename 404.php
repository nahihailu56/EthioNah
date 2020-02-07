<?php
get_header();
?>

  <div id="primary" class="content-area col-md-8 container">
    <main id="main" class="site-main">
    <div class="pageNotFound">
    <p>Oops! That page can’t be found.</p>
    <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
    </div>  
    </main><!-- #main -->
  </div>
  
<?php
get_footer();