<!-- ###### -->
<?php global $cpt_options; ?>
<div id="page">
    <div id="top" class="desktops">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <a class="brand" href="<?php home_url(); ?>" title="Home"><i class="icon-adjust"></i></a>
                            <div class="nav-collapse">
                                <?php //cwp_navs::factory()->set_depth(0)->tbs_menu('primary'); ?>
                                <?php EXT_WPNavs::add()->set_menu_class('nav')->set_depth(0)->set_theme_location('primary')->build_menu(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- container -->
    </div>
    <!-- ###### -->

    <!-- class content -->
    <section id="header" >
        <div class="container">
            <!-- ###### -->
            <div class="row">
                <div class="span6 ">
                    <!-- class content -->
                    <hgroup>
                        <h1 id="site-title"><span>
                                <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                    <?php //bloginfo('name'); ?>
    <!--                                <img src="<?php echo cwp::logo(); ?>" alt="<?php bloginfo('name'); ?>" />-->
                                    <i class="icon-adjust"></i><?php _e("BaseJump!", 'basejump') ?>
                                </a></span>
                        </h1>
                        <p class="header-copy text-shadow"><?php echo $cpt_options->the_header_copy() ?></p>
    <!--                    <p><?php _e('Load and manage PHP,  classes / interface libraries in WordPress.', 'basejump') ?></p>-->

                    </hgroup>
                </div>
                <div class="span6 ">
                    <div class="social">
                        <?php cwp_social::twitter_link(); ?>
                        <?php cwp_social::facebook_link(); ?>
                        <?php cwp_social::gplus_link(); ?>
                        <?php cwp_social::linkedin_link(); ?>
                        <?php cwp_social::rss_link(); ?>
                        <!-- class content -->
                    </div>
                    <!-- ####column-end#### -->
                </div>
                <!-- class content -->
            </div>
        </div>
    </section>