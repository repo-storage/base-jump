<?php

/**
 * theme page functions
 * just made more sense putting it here to me...
 * other options - use wp conditionals or load on every page
 * i try to avoid conditionals where ever i can
 * i dont have to go through a function file with 100s line of code
 * ...
 */

//wp_enqueue_script('orbit');
//add_action('wp_footer', 'orbit');



function home_page_scripts(){
//    wp_register_script('bx_slider', get_template_directory_uri() . '/library/bxslider/jquery.bxSlider.min.js', array('jquery'));
//    wp_enqueue_script('bx_slider');
}

function home_page_footer(){

    ?>

    <?php
}

add_action('wp_enqueue_scripts', 'home_page_scripts');
add_action('wp_footer', 'home_page_footer');



?>

<?php cwp_layout::header() ?>
<?php cwp_layout::the_header(); ?>
<section id="feature" class="show-on-desktops">
    <div class="container">
        <div class="row">
            <div class="twelve columns">

                    <div id="feature-slider" class="feature-image">
                           <img src="<?php echo get_template_directory_uri() ?>/images/crafted-slug.png"/>
                    </div>
                <!-- ###### -->
                <!-- ###end-row### -->
            </div>
        </div>
        <div class="row">
            <nav id="feature-nav">
                <div class="six columns">
                    <a id="prev" href="#" >
                     <img src="<?php echo get_template_directory_uri() ?>/images/pressed-prev.png"/>
                    </a>

                    <!-- ###end-row### -->
                </div>
                <div class="six columns">
                    <a id="next" href="#" >
                     <img src="<?php echo get_template_directory_uri() ?>/images/pressed-next.png"/>
                    </a>

                    <!-- ###end-row### -->
                </div>
            </nav>
        </div>
        <!-- container -->
    </div>
</section>
<section id="feature-summary">
    <div class="container">
        <div class="row">
            <div id="feature-list" class="row">
                <div class="twelve columns">
                     <div class="row">
            <ul class="block-grid mobile four-up">
                <li><h3><a href=""><img src="<?php echo get_template_directory_uri() ?>/images/gear.png"/>Full WP 3+ Integration</a></h3>
                    <p>

                        Take full advantage of new WordPress3+ features, post formats, custom types, feature images, tested and managed plugins support
                    </p>
                </li>
                <li><h3><img src="<?php echo get_template_directory_uri() ?>/images/news.png"/><a href="">Extended Post Types</a></h3>

                    <p>
                        Easily manage your content with extended theme specific custom post types and post meta enhancements
                    </p>
                </li>
                <li> <h3><img src="<?php echo get_template_directory_uri() ?>/images/tools.png"/><a href="">UI-Options</a></h3>

                    <p>
                        Manage, edit and save multiple site, theme or post options, new built in options editor allows you to create and manage your sites options, styles.
                    </p>
                </li>
                <li><img src="<?php echo get_template_directory_uri() ?>/images/buoy.png"/><h3><a href="">After Market Support</a></h3>

                    <p>
                        Full after market theme and design support allows you to give your theme that unique look, feel and functionality, that will set your site apart!
                    </p>
                </li>
            </ul>
            <!-- class content -->
        </div>

                    <!-- ###end-row### -->
                </div>
            </div>
        </div>

        <!-- ###### -->

        <!-- container -->
    </div>
</section>
<section id="content">
    <div class="container" id="site-info">
        <?php cwp_layout::main_tpl(); ?>
    </div>
    <div class="container show-on-desktops" id="login">
        <div class="row" id="images-cp">
            <h3><a href="http://images.craftedandpressed.com"><?php _e('Images.CraftedAndPressed.com','basejump') ?></a></h3>
            <p class="tiny"><?php _e('(Get images and graphics for your themes)','basejump') ?></p>
            <ul class="block-grid mobile five-up">
                <li>Four-up element</li>
                <li>Four-up element</li>
                <li>Four-up element</li>
                <li>Four-up element</li>
                <li>Four-up element</li>
            </ul>
            <!-- ###end-row### -->

        </div>
        <div class="row">


            <div class="eight columns">
                Dynamically coordinate technically sound supply chains via B2B materials. Authoritatively recaptiualize robust action items vis-a-vis an expanded array of testing procedures. Monotonectally orchestrate business users for client-centered infomediaries. Dramatically.
                <!-- ####column-end#### -->
            </div>
            <div class="four login">
                <button class="nice small button white radius">Register</button>
                <button class=" nice small button white radius">Login</button>

                <!-- ###end-row### -->
            </div>
        </div>
        <div class="row" id="tweets">
            <div class="twelve columns">
                <p class="tweet">
                    <?php //echo cwp_social::latest_tweet('shawnsandy'); ?>
                </p>
                <!-- ###end-row### -->
            </div>
        </div>
        <!-- container -->
    </div>
</section>
<?php cwp_layout::the_footer(); ?>
<?php cwp_layout::footer(); ?>
