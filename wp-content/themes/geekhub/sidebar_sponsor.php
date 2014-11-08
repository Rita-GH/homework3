<?php
/**
 * The Sponsor Sidebar
 *

 */

if ( ! is_active_sidebar( 'sidebar_sponsor' ) ) {
    return;
}
?>


        <?php dynamic_sidebar( 'sidebar_sponsor' ); ?>


