<?php
/**
 * @package WordPress
 * @subpackage CORE-SF
 */


function hoverizr_scripts(){
    wp_register_script('hoverizer', get_template_directory_uri() . '/library/hoverizer/jquery.hoverizr.min.js', array('jquery'));
    wp_enqueue_script('hoverizer');
}

function hoverizr_footer(){
    ?>
    <script type="text/javascript">
        jQuery.noConflict(true);
        jQuery('.wp-post-image').hoverizr();
    </script>
    <?php

}
//add_action('wp_footer', 'hoverizr_footer');
//add_action('wp_enqueue_scripts', 'hoverizr_scripts');

$hv = new mod_hoverizr();
$hv->init();

?>

<?php

cwp_layout::header();
cwp_layout::theme_header();

?>
<section id="content" class="container">
    <div id="cwp-themes" class="row"><!-- container -->

        <section id="articles">
            <?php cwp_layout::main_tpl(); ?>
        </section>

    </div>
</section>
<?php cwp_layout::theme_footer(); ?>
<?php cwp_layout::footer() ?>
