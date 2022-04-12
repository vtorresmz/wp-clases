<?php
//codigo para llamar a mis CSS.
function mis_estilos()
{
    wp_register_style('online-css', 'Remplazar este texto por la url de la hoja de estilos', 'all');
    wp_enqueue_style('css-local', get_template_directory_uri() . 'remplazar este texto por la ruta css de mi proyecto', 'all');

   


    

    
    wp_enqueue_style('online-css');
    wp_enqueue_style('css-local');


}


add_action('wp_enqueue_scripts', 'mis_estilos');

//codigo para llamar a mis script.

function mis_script(){
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este aarchivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer


        wp_register_script('online-js', 'Remplazar este texto por la ruta online de mi JS', array('jquery'), '1', true);
        wp_register_script('local-js', get_bloginfo('template_directory') . 'remplazar este texto por la ruta local CSS', array('jquery'), '1', true);

        /*encolamos los JS*/
        wp_enqueue_script('online-js', array('jquery'), true);
        wp_enqueue_script('local-js');
    }
}
add_action("wp_enqueue_scripts", "mis_script", 1);
