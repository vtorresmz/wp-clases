<?php  /*  Registro de mi CPT */


function mi_cpt_register() {

    $labels = array(
        'name' => _x('mi_cpt', 'post type general name'),
        'singular_name' => _x('mi_cpt', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'mi_cpt item'),
        'add_new_item' => __('Agregar nuevo guión'),
        'edit_item' => __('Editar guión'),
        'new_item' => __('Nuevo guión'),
        'view_item' => __('Ver el guión'),
        'search_items' => __('Buscar mi_cpt'),
        'not_found' =>  __('No se encontro mi_cpt'),
        'not_found_in_trash' => __('No se encontro en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-media-document',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'excerpt', 'thumbnail'),
        'taxonomies'  => array( 'categoria-mi_cpt ' ),
        'rewrite' => array('slug' => 'mi_cpt', 'with_front' => FALSE)
      ); 

    register_post_type( 'mi_cpt' , $args );
}

add_action('init', 'mi_cpt_register');


/*categorias personalizadas para mi_cpt*/
function categoria_mi_cpt() {

	register_taxonomy(
		'categoria-mi_cpt',
		'mi_cpt',
		array(
			'label' => __( 'Categoria mi_cpt' ),
			'rewrite' => array( 'slug' => 'categoria-mi_cpt' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_mi_cpt' );
