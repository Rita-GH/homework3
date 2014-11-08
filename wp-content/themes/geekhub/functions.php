<?php
/**загружаемые стили и скрипты***/
function geekhub_script() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('vk', 'http://userapi.com/js/api/openapi.js?34');
}
/**загружаем стили и скрипты***/
add_action('wp_enqueue_scripts','geekhub_script');
/**загрузка мініатюр**/
add_theme_support('post-thumbnails');
/** меню **/
register_nav_menu('menu','Меню');
/** sidebar **/
register_sidebar(array(
    'name'=>'Виджети сайдбара Курси',
    'id'=>'sidebar',
    'description'=>'Виджети сайдбара',
    'before_title'=>'<h3>',
    'after_title'=>'</h3>',

));
register_sidebar(array(
    'name'=>'Виджети сайдбара Карта',
    'id'=>'map',
    'description'=>'Карта',
    'before_title'=>'<h4>',
    'after_title'=>'</h4>',
));
register_sidebar(array(
    'name'=>'Панель соціальних кнопок',
    'id'=>'social',
    'description'=>'Панель соціальних кнопок',
));
register_sidebar(array(
    'name'=>'Виджет ВК',
    'id'=>'vk',
    'description'=>'vk',
));
register_sidebar(array(
    'name'=>'Сертифiкованi професiонали',
    'id'=>'certificat',
    'description'=>'Сертифiкованi професiонали',
));
register_sidebar(array(
    'name'=>'Виджети сайдбара Спонсори',
    'id'=>'sidebar_sponsor',
    'description'=>'Спонсори',
    'before_title'=>'<h4>',
    'after_title'=>'</h4>',
));
?>