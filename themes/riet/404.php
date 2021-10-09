<?php 
get_header(); 
$banner = banner_placeholder();
?>
<section class="page-banner-cntlr">
  <div class="page-banner">
    <div class="page-banner-bg inline-bg" style="background:url(<?php echo $banner ?>);"></div>
    <div class="page-bnr-des">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-bnr-des-inr">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="page-content page-404-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="page-404 text-center">
          <h1>404</h1>
          <h3><?php _e('It looks like nothing was found at this location.', 'riet'); ?></h3>
        </div>
      </div>
    </div><!-- end of .newsarea -->
  </div>
</section>
<?php get_footer(); ?>