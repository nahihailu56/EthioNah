<?php get_header(); ?>
<section class="row title-nah">
        <div class="container">
            <div class="col-md-8">
                <h1>Home</h1>
       </div>    
            
        </div>  
    </section>
      <div class="nahhead">
        <div class="container">
          <h1><?php echo get_theme_mod('nah_heading', 'EthioNah Title'); ?></h1>
          <p class="lead"><?php echo get_theme_mod('nah_text', 'Welcome to the Wordpress EthioNah Theme. This theme uses the Bootstrap 3 framework'); ?></p>
          <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('nah_btn_url', 'htt'); ?>" role="button"><?php echo get_theme_mod('nah_btn_text', 'VIsit Us'); ?></a></p>
        </div>
      </div>
      
      <section class="row marketing">
        <div class="container">
        <div class="col-lg-12">
            <div class="block">
            <h3><?php echo get_theme_mod('box1_heading','Box 1 Heading'); ?></h3>
          <p><?php echo get_theme_mod('box1_text','Subheadings are used for divisions of the various chapters or titled sections of the manuscript. Subheadings must be used in the same order, levels cannot be skipped and must be used consistently throughout the manuscript.'); ?></p>
        </div>
      </section>
      <section class="row marketing">
        <div class="container">
          <div class="col-lg-12">
            <div class="block">
            <h3><?php echo get_theme_mod('box2_heading','Box 2 Heading'); ?></h3>
          <p><?php echo get_theme_mod('box2_text','Subheadings are used for divisions of the various chapters or titled sections of the manuscript. Subheadings must be used in the same order, levels cannot be skipped and must be used consistently throughout the manuscript.'); ?></p>
            </div>
          </div>
        </div>
      </section>
      <?php if(is_active_sidebar('content-region-1')) : ?>
       <?php dynamic_sidebar('content-region-1'); ?>
      <?php endif; ?>

       <?php if(is_active_sidebar('content-region-2')) : ?>
          <?php dynamic_sidebar('content-region-2'); ?>
      <?php endif; ?>

      </div>
   </section>
<?php get_footer(); ?>     

     