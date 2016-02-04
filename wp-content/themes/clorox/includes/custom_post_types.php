<?php

add_action( 'init', 'clorox_create_post_types' );

function clorox_create_post_types() {
  // TIP
  register_post_type( 'tip',
    array(
      'labels' => array(
        'name' => __( 'Tips', 'clorox' ),
        'singular_name' => __( 'Tip', 'clorox' )
      ),
      'show_ui' => true,
      'public' => true,
      'supports' => array( 'title', 'editor', 'thumbnail' )
    )
  );

  // PRODUCT
  register_post_type( 'product',
    array(
      'labels' => array(
        'name' => __( 'Productos', 'clorox' ),
        'singular_name' => __( 'Producto', 'clorox' )
      ),
      'show_ui' => true,
      'public' => true,
      'supports' => array( 'title', 'editor', 'thumbnail' )
    )
  );

  // PRODUCT CATEGORIES
  register_taxonomy( 'category', array( 'product', 'tip' ),
    array(
      'labels'            => array(
        'name'              => __( 'Categorías', 'mobext' ),
        'singular_name'     => __( 'Categoría del producto', 'mobext' ),
      )
    )
  );

  // PRODUCT CATEGORIES
  register_taxonomy( 'product-type', array( 'product' ),
    array(
      'labels'            => array(
        'name'            => __( 'Tipos', 'mobext' ),
        'singular_name'   => __( 'Tipo del producto', 'mobext' ),
        'add_new_item'    => __('Agregar nuevo tipo', 'mobext')
      )
    )
  );
}
