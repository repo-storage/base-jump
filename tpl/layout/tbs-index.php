<?php
/**
 * @package WordPress
 * @subpackage CORE-SF
 */
?>
<?php
get_header('tbs');
cwp_layout::the_header('tbs');
?>
<section id="content" class="">
    <div class="container">
        <!-- ###### -->
        <div class="row">
            <div class="span8">
                <section id="articles">
                    <?php cwp_layout::main_tpl(); ?>
                </section>

                <!-- ###end-row### -->
            </div>
            <div class="span4">
                <section id="sidebar">
                    <?php cwp_layout::the_sidebar('tbs'); ?>
                </section>

                <!-- ####column-end#### -->
            </div>
        </div>
    </div>
</section>
<?php cwp_layout::the_footer('tbs'); ?>
<?php get_footer('tbs') ?>
