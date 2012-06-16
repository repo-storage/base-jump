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
<section id="main-block" class="container">

        <div class="row"><!-- container -->
            <div class="span12"><!-- container -->
                <section id="articles">
                    <?php cwp_layout::main_tpl(); ?>
                </section>
            </div>
        </div>

</section>
<?php
cwp_layout::the_footer('tbs');
get_footer('tbs');
?>
