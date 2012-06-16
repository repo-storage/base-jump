<?php
/**
 * @package WordPress
 * @subpackage CORE-SF
 */
?>
<?php
get_header();
cwp_layout::the_header();
?>
<section id="main-block" class="container">

        <div class="row"><!-- container -->
            <div class="twelve columns"><!-- container -->
                <section id="articles">
                    <?php cwp_layout::main_tpl(); ?>
                </section>
            </div>
        </div>

</section>
<?php
cwp_layout::the_footer();
get_footer();
?>
