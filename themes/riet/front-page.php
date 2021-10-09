<?php get_header(); ?>
<?php  
  $hbanner = get_field('banner', HOMEID);
  if($hbanner):
    $banner = !empty($hbanner['image'])? cbv_get_image_src( $hbanner['image'] ): '';
?>
<section class="hm-page-bnr-cntlr">
  <div class="hm-page-banner">
    <div class="page-banner-bg inline-bg" style="background:url(<?php echo $banner; ?>);"></div>
  </div>
  <div class="hm-page-bnr-des">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-page-bnr-des-inr">
            <div>
              <?php 
                if( !empty($hbanner['title']) ) printf( '<h1 class="hm-page-bnr-title fl-h1">%s</h1>', $hbanner['title'] ); 
                if( !empty($hbanner['subtitle']) ) printf( '<h2 class="hm-page-bnr-sub-title fl-h2">%s</h2>', $hbanner['subtitle'] ); 
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="rgh-content-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="rgh-text-module">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>