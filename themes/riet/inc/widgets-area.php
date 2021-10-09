<?php 

function deploy_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Widget', 'riet' ),
		'id'            => 'post-widget',
		'description'   => __( 'Add widgets here to appear in your blog page.', 'riet' ),
		'before_widget' => '<aside class="search-wrp widget"><div class="sidebar-widget">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'deploy_widgets_init' );
