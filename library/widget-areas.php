<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
	function foundationpress_sidebar_widgets() {
		register_sidebar( array(
			'id'            => 'sidebar-widgets',
			'name'          => __( 'Sidebar widgets', 'kwaske_th_17' ),
			'description'   => __( 'Drag widgets to this sidebar container.', 'kwaske_th_17' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		) );

		register_sidebar( array(
			'id'            => 'footer-widgets',
			'name'          => __( 'Footer widgets', 'kwaske_th_17' ),
			'description'   => __( 'Drag widgets to this footer container', 'kwaske_th_17' ),
			'before_widget' => '<section id="%1$s" class="large-4 columns widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		) );
	}

	add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
