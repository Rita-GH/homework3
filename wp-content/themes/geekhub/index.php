<?php/**
* Created by PhpStorm.
* User: rb
* Date: 31.10.14
* Time: 11:38
*/?>
<?php get_header()?>
<!-- header -->
    <div id="content">
        <div class="home">
            <h2>ДЕТАЛІ КУРСІВ ТА РЕЄСТРАЦІЯ</h2>

            <ul class="types">
                <li>
                    <?php query_posts('category_name="Курси"'); ?>
                    <?php $count = 0;?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="box<?php if( $count%3 == 0 ) { echo '-1'; }; $count++; ?>">
                            <img src="<?php bloginfo('template_url')?>/images/icon-frontend.png" />
                            <?php the_post_thumbnail();?>
                            <h3><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Докладніше + реєстрація</a>
                        </div>

                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                </li>
            </ul>

            <ul class="social_share">
                <li id="vk">
                    <script type="text/javascript">
                        VK.Widgets.Group("vk", {mode: 0, width: "276", height: "240"}, 30111409);
                    </script>
                </li>

                <li class="sertificates_list">
                    <h4><a href="/certified-professionals.html">Сертифiкованi професiонали</a></h4>
                </li>
                <li>
                    <h4>Наші Спонсори</h4>
                    <ul>
                        <li class="de"><a href="http://povnahata.com">Дім Євангелія</a></li>
                        <li class="moc"><a href="http://masterofcode.com">Masterofcode LTD</a></li>
                        <li class="sergium"><a href="http://sergium.net">SerGium.net</a></li>
                        <li class="clear left stuff"><a href="http://val.co.ua/">val.co.ua/</a></li>
                        <li class="youthog"><a href="http://yothog.com">Youthog.com</a></li>
                        <li class="jetbrains"><a href="http://jetbrains.com/">JetBrains.com</a></li>
                        <li class="ucoz"><a href="http://rabota.ucoz.ua/">ucoz.ua</a></li>
                        <li class="spd-ukraine"><a href="http://spd-ukraine.com/">SPD-Ukraine.com</a></li>
                        <li class="ekreative"><a href="http://www.ekreative.com/">Ekreative.com</a></li>
                        <li class="n3wnormal"><a href="http://n3wnormal.com/">n3wnormal.ua</a></li>
                        <li class="in-ck-ua"><a href="http://in.ck.ua/">in.ck.ua</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
<?php get_footer();?>



















