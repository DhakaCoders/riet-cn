<?php 
get_header(); 
$thisID = get_option( 'page_for_posts' );
$imgID = get_field('banner_image', $thisID);
$ishide_sidebar = get_field('ishide_sidebar', $thisID);
$fullblock = $ishide_sidebar? ' full-block-post': '';
$banner = !empty($imgID)?cbv_get_image_src($imgID):banner_placeholder();
if( !empty($banner) ):
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
<?php endif; ?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="page-content">
 <div class="posts-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="post-sec-cntrl<?php echo $fullblock; ?>">
            <div class="post-items">
              <?php if(  have_posts() ): ?>
              <?php 
                  while(have_posts()): the_post(); 
                  global $post;
                  $imgID = get_post_thumbnail_id(get_the_ID());
                  $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): blog_placeholder('tag');
              ?>
              <article class="post-item clearfix">
                <div class="post-img">
                  <a href="<?php the_permalink(); ?>">
                    <?php echo $imgtag; ?>
                  </a>
                </div>
                <div class="post-des">
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <?php echo cbv_get_excerpt(); ?>
                </div>
              </article>
              <?php endwhile; ?>
              <?php 
              global $wp_query;
              if( $wp_query->max_num_pages > 1 ): 
              ?>
              <div class="fl-pagi-cntlr">
                <?php
                  $big = 999999999; // need an unlikely integer
                  $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

                  echo paginate_links( array(
                    'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'type'      => 'list',
                    'prev_text' => __(''),
                    'next_text' => __(''),
                    'format'    => '?paged=%#%',
                    'current'   => $current,
                    'total'     => $wp_query->max_num_pages
                  ) );
                ?>
              </div>
              <?php endif; ?>
              <?php else: ?>
                  <div class="notfound">
                    <?php _e('No Results.', 'riet'); ?>
                  </div>
              <?php endif; ?>
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
  </div><!-- end of .posts-section -->   
</section>
<?php get_footer(); ?>