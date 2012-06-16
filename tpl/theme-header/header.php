<!-- ###### -->
<div id="page">
    <div id="top">
        <nav class="container show-on-desktops">
            <div class="row">
                <div class="twelve columns hr-menu menu-icon">
                    <?php //wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => '','menu_class'=>'')); ?>
                    <?php $p_nav = cwp_navs::factory()->set_depth(0)->menu('primary'); ?>
                    <!-- ###end-row### -->
                </div>
            </div>
            <!-- container -->
        </nav>
        <!-- class content -->
    </div>
    <!-- ###### -->

    <!-- class content -->
    <section id="header" class="container">

        <div class="row">
            <div class="six columns">
                <!-- class content -->
                <hgroup>
                    <h1 id="site-title"><span>
                            <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                <?php //bloginfo('name'); ?>
                                <img src="<?php echo cwp::logo(); ?>" alt="<?php bloginfo('name'); ?>" />
                            </a></span>
                    </h1>
                </hgroup>
            </div>
            <div class="six columns">
                <div class="social">
                    <a href="<?php the_author_meta('twitter', cwp_themeadmin()); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/images/twitter.png" /></a>
                    <a href="<?php the_author_meta('facebook', cwp_themeadmin()); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/images/facebook.png" /></a>
                    <a href="<?php the_author_meta('google_plus', cwp_themeadmin()); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/images/google.png" /></a>
                    <a href="<?php the_author_meta('linkedin', cwp_themeadmin()); ?>
                       "><img src="<?php echo get_template_directory_uri() ?>/images/linkedin.png" /></a>
                    <a href="http://feeds.feedburner.com/<?php the_author_meta('feedburner_page', cwp_themeadmin()); ?>" rel="">
                        <img src="<?php echo get_template_directory_uri() ?>/images/rss.png" /></a>
                    <!-- class content -->
                </div>
                <!-- ####column-end#### -->
            </div>
            <!-- class content -->

        </div>

        <div  class="row show-on-desktops" >
            <div class="twelve columns ui menu">
                 <?php //wp_nav_menu(array('theme_location' => 'browse','menu_class'=>'','container_class'=>false)); ?>
               <?php cwp_navs::factory()->menu('browse'); ?>
                <!-- ###end-row### -->
            </div>

        </div>


        <!-- class content -->
    </section>