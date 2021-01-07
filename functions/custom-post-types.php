<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This file creates any custom post types we need for our theme. Get started
//  by un-commenting everything below, and customizing the cpt to suit.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function create_post_types() {
  
//   register_post_type( 'testimonials',
//     array(
      
//       //  What will the CPT be known as?  //
//       'labels' => array(
//         'name'                => __( 'Testimonials' ),
//         'singular_name'       => __( 'Testimonial' ),
//       ),
      
//       //  Settings - how will the CPT behave?  //
//       'public'              => true,
//       'show_ui'             => true,
//       'publicly_queryable'  => true,
// //      'rewrite'            => array( 'slug' => 'link' ),
//       'exclude_from_search' => false,
//       'capability_type'     => 'post',
// 			'menu_icon'           => 'dashicons-format-status',
//       'has_archive'         => true,
      
//       //  What editable fields will the CPT support?  //
//       'supports' => array(
//         'title',
//         'editor',
//         'excerpt',
//         'thumbnail'
//       ),
      
//       //  Which Taxonomies will be applicable?  //
//       'taxonomies'  => array(
//         'categories'
//       ),
      
//     )
//   );
  
//     register_post_type( 'case_studies',
//     array(
      
//       //  What will the CPT be known as?  //
//       'labels' => array(
//         'name'                => __( 'Case Studies' ),
//         'singular_name'       => __( 'Case Study' ),
//       ),
      
//       //  Settings - how will the CPT behave?  //
//       'public'              => true,
//       'show_ui'             => true,
//       'publicly_queryable'  => true,
// //      'rewrite'            => array( 'slug' => 'link' ),
//       'exclude_from_search' => false,
//       'capability_type'     => 'post',
// 			'menu_icon'           => 'dashicons-images-alt',
//       'has_archive'         => true,
//       'has_front'         => true,
//       'rewrite' => array( 'slug' => 'case-studies'),
      
//       //  What editable fields will the CPT support?  //
//       'supports' => array(
//         'title',
//         'editor',
//         'excerpt',
//         'thumbnail'
//       ),
      
//       //  Which Taxonomies will be applicable?  //
//       'taxonomies'  => array(
//         'categories'
//       ),
      
//     )
//   );
	
  //  Register any additional CPTs here  //
  
  flush_rewrite_rules();
}

add_action( 'init', 'create_post_types' );