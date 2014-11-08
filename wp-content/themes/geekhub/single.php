
<?php
if ( is_home() ) :
    get_header();
else :
    get_header('page');
endif;
?>
<!-- header -->
<div id="content">

    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
        <div  class="sidebar">
            <?php dynamic_sidebar( 'sidebar' ); ?>
        </div>
    <?php endif; ?>

    <div class="details">
        <ul>
            <li class="current" style="display: list-item;">
                <?php
                if( is_single() ){
                    the_post(); ?>
                    <h2><?php the_title() ?></h2>
                    <?php the_content();
                }
                ?>
            </li>
        </ul>

        <a class="register" href="<?php the_permalink(); ?>">Зареєструватися</a>

    </div>

</div>
<?php get_footer();?>



















