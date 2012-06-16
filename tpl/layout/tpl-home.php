<?php
/*
  Template Name: Home Page TPl
 */

/**
 * theme page functions
 * just made more sense putting it here to me...
 * other options - use wp conditionals or load on every page
 * i try to avoid conditionals where ever i can
 * i dont have to go through a function file with 100s line of code
 * ...
 */
?>
<?php get_header(); ?>
<?php cwp_layout::the_header(); ?>
<section id="feature" >
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <div class="feature-image">
                    <h1>
                        <?php echo $cpt_options->the_headline_copy(); ?>
                    </h1>
                    <!-- class content -->
                </div>
            </div>
        </div>
        <!-- container -->
    </div>
</section>
<section id="content">
    <div class="container">

<?php cwp_layout::main_tpl(); ?>

    </div>
</section>

<section id="subscribe">
    <div class="container">
        <div class="row">

            <div class="eight columns">
                <div class="subscribe-text">
                    Subscribe and get the latest updates, news, specials and more...
                    <!-- class content -->

                    <!-- ###### -->
                </div>
                <!-- ####column-end#### -->
            </div>
            <div class="four subscribe-btn">
                <button class="ui btns orange"><?php _e('Subscribe Now', 'basejump'); ?></button>

                <!-- ###end-row### -->
            </div>
        </div>
        <!-- container -->
    </div>
</section>
<?php cwp_layout::the_footer(); ?>
<?php get_footer(); ?>
