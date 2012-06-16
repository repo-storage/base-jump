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

$cwpt_sample_data = 'Competently build parallel partnerships before interactive metrics. Synergistically productivate virtual meta-services rather than exceptional scenarios. Objectively fashion backend imperatives via client-based users. Intrinsicly exploit future-proof.';
$cwpt_library = get_post_meta(cwp_theme::default_id(), 'cwpt_library', true);
$cwpt_modules = get_post_meta(cwp_theme::default_id(), 'cwpt_modules', true);
$cwpt_extensions = get_post_meta(cwp_theme::default_id(), 'cwpt_extensions', true);
$cwpt_functions = get_post_meta(cwp_theme::default_id(), 'cwpt_functions', true);

add_action('wp_enqueue_scripts', 'home_page_scripts');

function home_page_scripts() {
    wp_enqueue_script('bootstrap-tabs');
}

//add_action('wp_footer', 'home_page_footer');
function home_page_footer() {
    ?>

    <?php
}
?>
<?php get_header('tbs'); ?>
<?php cwp_layout::the_header('tbs'); ?>
<section id="feature" >
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="strip">
                    <h1>
                        <?php echo $cpt_options->the_headline_copy(); ?>
                    </h1>
                    <p>
                        <?php echo cwp_theme::the_main_copy(); ?>
                    </p>
                    <!-- class content -->
                </div>
            </div>
            <!-- container -->
        </div>
    </div>
</section>
<section id="content">


    <div id="articles" class="container">
        <?php cwp_layout::main_tpl(); ?>
    </div>
</section>
<section id="subscribe">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="social">
                    <a href="<?php the_author_meta('twitter', cwp_themeadmin()); ?>" target="_blank">
                        <span class="social-icons font-larger">l</span></a>
                    <a href="<?php the_author_meta('facebook', cwp_themeadmin()); ?>" target="_blank">
                        <span class="social-icons font-larger">f</span></a>
                    <a href="<?php the_author_meta('google_plus', cwp_themeadmin()); ?>" target="_blank">
                        <span class="social-icons font-larger">g</span></a>
                    <!-- class content -->
                </div>
                <!-- ####column-end#### -->
            </div>
        </div>
        <!-- container -->
    </div>
</section>
<?php cwp_layout::the_footer('tbs'); ?>
<?php get_footer('tbs'); ?>
