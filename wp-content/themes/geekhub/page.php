<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 06.11.14
 * Time: 10:34
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

    <?php
    if( is_page(31) ){
        include('page_map.php');
     }
    else {
        the_post();
        the_content();
    }
    ?>
</div>
<!-- footer -->
<?php get_footer();?>
