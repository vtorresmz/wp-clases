/*zona de widgets*/
function widget_mi_sitio()
{
register_sidebar(array('name' => 'Nombre de mi zona de widget', 'id' => 'ID de mi widget', 'before_widget' => '<div id="%1$S" class="clase contenedore de mi widget">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-ide mi widget">', 'after_title' => '</h5>'));

}

add_action('widgets_init', 'widget_mi_sitio');
/*zona de widgets*/
