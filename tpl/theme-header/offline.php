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
                            <a class="brand" href="#"><span class="pictograms">R</span></a>
                            <div class="nav-collapse">
                                <?php cwp_navs::factory()->set_depth(0)->tbs_menu('primary'); ?>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- container -->

        <!-- class content -->
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
                                    <span class="pictograms">R</span><?php _e("AL.MANAGER", 'basejump') ?>
                                </a></span>
                        </h1>
                        <p class="header-copy text-shadow"><?php echo $cpt_options->the_header_copy() ?></p>
    <!--                    <p><?php _e('Load and manage PHP,  classes / interface libraries in WordPress.', 'basejump') ?></p>-->

                    </hgroup>
                </div>
                <div class="span6 ">
                    <div class="social">
                        <a href="<?php the_author_meta('twitter', cwp_themeadmin()); ?>">
                            <span class="social-icons font-large">l</span></a>
                        <a href="<?php the_author_meta('facebook', cwp_themeadmin()); ?>">
                            <span class="social-icons font-large">f</span></a>
                        <a href="<?php the_author_meta('google_plus', cwp_themeadmin()); ?>">
                            <span class="social-icons font-large">g</span></a>
                        <a href="<?php the_author_meta('linkedin', cwp_themeadmin()); ?>">
                            <span class="social-icons font-large">i</span></a>
                        <a href="http://feeds.feedburner.com/<?php the_author_meta('feedburner_page', cwp_themeadmin()); ?>" rel="">
                            <span class="social-icons font-large">r</span></a>
                        <!-- class content -->
                    </div>
                    <!-- ####column-end#### -->
                </div>
                <!-- class content -->

            </div>
        </div>
    </section>