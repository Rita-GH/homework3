<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 31.10.14
 * Time: 18:11
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

<body>

<div id="wrap">
    <div id="header">
        <h1><a href="<?php echo home_url()?>">GeekHub</a></h1>

        <?php wp_nav_menu(array('theme_location'=>'menu',
                                'menu_class'=>'nav'))?>

        <?php if ( is_active_sidebar( 'social' ) ) : ?>
            <div  class="social">
                <?php dynamic_sidebar( 'social' ); ?>
            </div>
        <?php endif; ?>

        <span class="line"></span>

        <h4 class="registration">Реєстрацію на 4й сезон закрито</h4>
        <p class="note">*залиште нам ваш емейл і ми повідомимо вас про початок реєстрації</p>
        <form action="#">
            <fieldset>
                <span></span>
                <input type="text" class="email" placeholder="Ваш email" />
                <input type="submit" value="Відіслати" />
            </fieldset>

        </form
        <img src="<?php bloginfo('template_url')?>/images/splash.png" alt="splash" />
    </div>