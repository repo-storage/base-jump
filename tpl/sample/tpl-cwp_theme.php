<?php
/**
 * @package WordPress
 * @subpackage CORE-SF
 */
?>
<?php
cwp_layout::header();
cwp_layout::theme_header();
?>
<section id="content" class="container">
    <div id="cwp-themes" class="row"><!-- container -->
            <div class="twelve columns"><!-- container -->
                <section id="articles">
                    <?php cwp_layout::main_tpl(); ?>
                </section>
            </div>
        </div>
</section>
<?php cwp_layout::theme_footer(); ?>
<?php cwp_layout::footer() ?>
