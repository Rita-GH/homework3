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

                    <?php query_posts('category_name="Курси"'); ?>
                    <?php $count = 0;?>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="box<?php if( $count%3 == 0 ) { echo '-1'; }; $count++; ?>">
                            <li>
                            <!--Вывод миниатюры-->
                            <?php if ( has_post_thumbnail()): ?><?php the_post_thumbnail(array(100,100), array("class" => "alignleft post_thumbnail"));  ?><?php endif;?>
                            <!--/Вывод миниатюры-->
                            <h3><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_content('Докладніше + реєстрація'); ?>
                            </li>
                        </div>

                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>

           </ul>

            <ul class="social_share">
                <li id="vk">
                    <script type="text/javascript">
                        VK.Widgets.Group("vk", {mode: 0, width: "276", height: "240"}, 30111409);
                    </script>
                </li>
                <li class="sertificates_list">
                    <h4><a href="http://homework.local/?page_id=178" ></a></h4>

                </li>
                <li>
                    <?php dynamic_sidebar( 'sidebar_sponsor' ); ?>
                </li>
            </ul>

        </div>
    </div>
<?php get_footer();?>



















