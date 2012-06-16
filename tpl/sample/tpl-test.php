<?php
/**
 * @package WordPress
 * @subpackage CORE-SF
 */
?>
<?php
cwp_layout::header();
cwp_layout::the_header();
?>
<section id="content" class="container">
<div class="row">
    <div class="eight columns">
        <section id="articles">
         <?php cwp_layout::main_tpl(); ?>
        </section>
        <!-- ###end-row### -->
    </div>
</div>
</section>
<?php cwp_layout::the_footer(); ?>
<?php cwp_layout::footer() ?>