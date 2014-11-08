<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 08.11.14
 * Time: 18:39
 */ ?>
<div class="contacts">
    <h2>Зв’язок</h2>
    <dl>
        <dt class="map">
        <h3>Заходьте</h3>
        </dt>
        <dd class="map">
            <?php if ( is_active_sidebar( 'map' ) ) : ?>
                <div  id="map">
                    <?php dynamic_sidebar( 'map' ); ?>
                </div>
            <?php endif; ?>
        </dd>
        <dt class="follow">
        <h3>Слідкуйте</h3>

        </dt>
        <dd>
            <?php if ( is_active_sidebar( 'social' ) ) : ?>
                <div  class="social">
                    <?php dynamic_sidebar( 'social' ); ?>
                </div>
            <?php endif; ?>
        </dd>
        <dt>
        <h3>Пишіть</h3>
        </dt>
        <dd>
            <img src="<?php bloginfo('template_url')?>/images/email.png" alt="email"/>
        </dd>
        <dd>Перед тим як писати, ознайомтесь <br>із <a href="http://homework.local/?page_id=24" title="FAQ">ПОПУЛЯРНИХ ПИТАНЬ</a></dd>
    </dl>
</div>