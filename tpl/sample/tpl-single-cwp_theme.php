<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();
cwp_layout::theme_header();
?>
<section id="content" class="container">
    <section id="articles">
        <?php global $post ;
        echo $post->ID;
        ?>

      <?php cwp_layout::main_tpl(); ?>
    </section>
</section>
<?php
cwp_layout::theme_footer();
get_footer();
?>