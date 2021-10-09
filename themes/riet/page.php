<?php 
get_header(); 
$thisID = get_the_ID();
$imgID = get_field('banner_image', $thisID);
$banner = !empty($imgID)?cbv_get_image_src($imgID):banner_placeholder();
?>
<section class="page-banner-cntlr">
  <div class="page-banner">
    <div class="page-banner-bg inline-bg" style="background:url(<?php echo $banner; ?>);"></div>
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
<section class="rgh-content-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="rgh-text-module">
          <?php 
            the_content();
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>