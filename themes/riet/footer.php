<?php 
  $logoObj = get_field('ftlogo', 'options');
  $mblogoObj = get_field('mobilftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  if( is_array($mblogoObj) ){
    $mblogo_tag = '<img src="'.$mblogoObj['url'].'" alt="'.$mblogoObj['alt'].'" title="'.$mblogoObj['title'].'">';
  }else{
    $mblogo_tag = '';
  }
  $address = get_field('address', 'options');
  $gurl = get_field('gurl', 'options');
  $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
  $telephone = get_field('telephone', 'options');
  $information = get_field('information', 'options');
  $ftlink = get_field('ftlink', 'options');
  $copyright_text = get_field('copyright_text', 'options');
?>
<footer class="footer-wrp">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-top-cntlr">
            <div class="ftr-top-lft">
              <?php if( !empty($logo_tag) ): ?>
              <div class="ftr-logo hide-sm">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
                </a>
              </div>
              <?php endif; ?>
              <?php if( !empty($mblogo_tag) ): ?>
              <div class="ftr-logo show-sm">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $mblogo_tag; ?>
                </a>
              </div>
              <?php endif; ?>
            </div>
            <div class="ftr-top-rgt">
              <div class="ftr-details">
                <?php if( !empty($information) ): ?>
                <div class="ftr-details-col ftr-add-lft hide-sm">
                  <div class="ftr-add-one mHc">
                    <?php 
                      if( !empty($ftlink) ) printf('<a href="%s">', $ftlink);
                      echo wpautop($information);
                      if( !empty($ftlink) ) printf('</a>'); 
                    ?>
                    </a>
                  </div>
                </div>
                <?php endif; ?>
                <div class="ftr-details-col ftr-add-rgt">
                  <div class="ftr-add-two mHc">
                    <?php if( !empty($address) )  printf('<div class="ftr-rgh-text"><strong><a href="%s">%s</a></strong></div>',$gmaplink, $address );?>
                    <?php if( !empty($telephone) ) printf('<div class="ftr-tel"><a href="tel:%s">%s</a></div>',phone_preg($telephone), $telephone ); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="footer-btm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-btm-cntlr">
            <div class="ftr-copyright">
              <?php if( !empty( $copyright_text ) ) printf( '<p>%s</p>', $copyright_text); ?> 
            </div>
            <div class="ftr-menu hide-sm">
            <?php 
              $copymenuOptions = array( 
                  'theme_location' => 'cbv_copyright_menu', 
                  'menu_class' => 'reset-list',
                  'container' => '',
                  'container_class' => ''
                );
              wp_nav_menu( $copymenuOptions ); 
            ?>
           </div>
         </div>
        </div>
      </div>
    </div>
  </div> 
</footer>
<?php wp_footer(); ?>
</body>
</html>