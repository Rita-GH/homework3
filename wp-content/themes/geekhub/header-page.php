<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 01.11.14
 * Time: 22:47
 */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title><?php bloginfo('name'); wp_title();?></title>

    <?php wp_head();?>

    <meta name="description" content="<?php bloginfo('description')?>">
    <meta name="keywords" content="GeekHub, ГікХаб, Черкаси, Cherkassy">

</head>



<body class="inner">

<div id="wrap">
    <div id="header">
        <h1><a href="<?php echo home_url()?>">GeekHub</a></h1>

        <?php wp_nav_menu(array('theme_location'=>'menu',
            'menu_class'=>'nav'))?>

        <ul class="links">
            <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
            <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
            <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
            <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
        </ul>

    </div>