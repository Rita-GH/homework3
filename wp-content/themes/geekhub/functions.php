<?php
/**загружаемые стили и скрипты***/
function geekhub_script() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('vk', 'http://userapi.com/js/api/openapi.js?34');
}
/**загружаем стили и скрипты***/
add_action('wp_enqueue_scripts','geekhub_script');


add_theme_support('post-thumbnails');

/**
 * меню
**/
register_nav_menu('menu','Меню');


/**
 * sidebar
 **/
register_sidebar(array(
    'name'=>'Виджети сайдбара',
    'id'=>'sidebar',
    'description'=>'Виджети сайдбара',

))
?>