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
<section id="articles" class="container">
        <div class="row"><!-- container -->
            <?php //if(mod_mobile::detect()->isMobile()) echo 'Mobile Dectected'; ?>
            <div class="span12 "><!-- container -->
                <div id="offline">
                    <?php cwp_layout::main_tpl(); ?>
                    <!-- class content -->
                </div>
                <!-- ###### -->
            </div>
        </div>
</section>
<?php
cwp_layout::the_footer('offline');
get_footer('tbs');
?>