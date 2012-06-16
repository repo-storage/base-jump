<?php
/**
 * @package WordPress
 * @subpackage CORE-SF
 */
wp_enqueue_script('masonry');

//function widget_masonry() {
//    /** masonry config * */
//    $arr['itemselector'] = 'widgets';
//    $arr['singlemode'] = 'true';
//    masonry::config($arr);
//}
?>
<?php
get_header('tbs');
cwp_layout::the_header('tbs');
?>
<section id="content">
    <div class="container"><!-- container -->
        <div class="row"><!-- container -->
            <div class="span12"><!-- container -->
                <section id="articles">
                    <?php cwp_layout::main_tpl(); ?>
                </section>

            </div>
            <div class="row">
                <div class="span12">
                    <section id="widgets-404">
                        <?php dynamic_sidebar('404-page') ?>
                    </section>
                    <!-- ###end-row### -->
                </div>
            </div>
            <div class="clear">Cleared</div>
        </div>
    </div>
    <div class="clear">Cleared</div>
</section>
<?php cwp_layout::the_footer('tbs'); ?>
<?php get_footer('tbs') ?>
