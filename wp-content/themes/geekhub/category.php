<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 03.11.14
 * Time: 12:50
 */ ?>
<?php
if ( is_home() ) :
    get_header();
else :
    get_header('page');
endif;
?>
<!-- header -->

<div id="content">

    <div class="sidebar">
        <?php get_sidebar()?>
    </div>

    <!--<div class="home">
      <ul class="types">-->
    <div class="details">
        <ul>
            <li class="current" style="display: list-item;">
                <?php the_post()?>

                <?php if (have_posts()) :?>

                    <?php while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail();?>
                    <!--<img src="<?php /*bloginfo('template_url')*/?>/images/icon-frontend.png" />-->
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
            </li>
        </ul>

        <!--<div class="details">
        <ul>
        <h3>Команда</h3>
        <ul class="team">
            <li>
                <img src="<?php /*bloginfo('template_url')*/?>/images/sergii_gychka.png" />
                <h3>Сергій Гичка</h3>
                <p>Сергій займається розробкою веб проектів, використовуючи такі технології як Symfony 1, 2, Zend framework, Drupal, mysql, JS. У GeekHub Сергій викладає Advanced CMS.</p>
            </li>
            <li>
                <img src="<?php /*bloginfo('template_url')*/?>/images/yaschuk.png" />
                <h3>Владислав Ящук</h3>
                <p>Владислав займається розробкою веб проектів, використовуючи такі фреймворки як Symfony 2, Yii; CMS - Joomla, Wordpress, Magento. На GeekHub Владислав викладає курс Advanced CMS.</p>
            </li>

        </ul>

        <h3>ТЕМИ ПИТАНЬ НА ЕКЗАМЕНI</h3>
        <ul class="questions">
            <li>Базові знання HTML / CSS (HTML: структура сторінки, теги, посилання, зображення, форми, талиці; CSS: селектори, наслідування, псевдокласи, ідентифікатори і класи, інтеграція css-файлів з HTML)</li>
            <li>Базові знання PHP (синтаксис мови, основи ООП)</li>
            <li>Базові знання JavaScript (синтаксис, основи работи з JQuery)</li>
        </ul>
        <a class="register" href="#">Зареєструватися</a>
        </li>
                </ul>
            </div>-->
    </div>

</div>
<?php get_footer();?>
