<?php 
function etiqueta_mi_cpt() {

register_taxonomy(
			'etiqueta-mi_cpt','mi_cpt',array(
            'hierarchical' => false,
			'label' => __( 'Etiqueta mi_cpt' ),
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'mi_cptquery_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-mi_cpt' ),
		)
	);




}
add_action( 'init', 'etiqueta_mi_cpt' );

function display_mi_cpt( $mi_cptquery ) { 
	if( is_category() || is_tag() && empty( $mi_cptquery->mi_cptquery_vars['mi_cptfilter'] ) ) {
	$mi_cptquery->set( 'post_type', array(
	'post', 'nav_menu_item', 'mi_cpt', 
	'post', 'nav_menu_item', 'mi_cpt', 
	));
	return $mi_cptquery;
	}
   }
   
   add_filter( 'pre_get_posts', 'display_mi_cpt' );
