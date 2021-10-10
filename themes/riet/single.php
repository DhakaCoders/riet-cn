<?php get_header(); 
$thisID = get_the_ID();
$imgID = get_field('banner_image', $thisID);
$customtitle = get_field('custom_page_title', $thisID);
$ishide_sidebar = get_field('ishide_sidebar', $thisID);
$fullblock = $ishide_sidebar? ' full-block-post': '';
$banner = !empty($imgID)?cbv_get_image_src($imgID):banner_placeholder();
$post_title = !empty($customtitle)? $customtitle: get_the_title($thisID);
$imgID = get_post_thumbnail_id(get_the_ID());
$imgtag = !empty($imgID)? cbv_get_image_tag($imgID): blog_placeholder('tag');
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
<section class="page-content section-divider">
  <div class="posts-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
          <div class="post-sec-cntrl<?php echo $fullblock; ?>">
            <div class="post-items">
              <article class="post-item clearfix">
                <div class="post-img">
                  <?php echo $imgtag; ?>
                </div>
                <div class="post-des">
                  <?php 
                    if( !empty($post_title) ) printf('<h2 class="fl-h3">%s</h2>', $post_title); 
                    the_content();
                  ?>
                </div>
              </article>
            </div>    
            <?php if( !$ishide_sidebar): ?>
            <div class="right-sidebar mgleftm">
              <?php get_sidebar(); ?>
            </div>
            <?php endif; ?>
          </div>
        </div>  
      </div>
    </div>     
  </div>   
</section>
<?php get_footer(); ?>