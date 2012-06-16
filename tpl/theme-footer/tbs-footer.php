<?php
/**
 * @package WordPress
 * @subpackage Core-SF
 */
?>
<section id="footer" >
<div class="container">
<div class="row desktops"><!-- container -->

                <div class="span3 info">
                    <?php if (!dynamic_sidebar('info-1')) : ?>

                        <!-- class content -->
                        <h3><?php _e('Pages','basejump')  ?></h3>
                        <nav>
                            <ul>
                                <?php wp_list_pages('title_li=&number=6') ?>
                            </ul>
                        </nav>

                    <?php endif; ?>

                </div>
                <div class="span3 info">
                    <?php if (!dynamic_sidebar('info-2')) : ?>
                        <h3><?php _e('Categories','basejump')  ?></h3>
                        <nav>
                            <ul>
                                <?php wp_list_categories('title_li=&number=6') ?>
                            </ul>
                        </nav>
                    <?php endif ?>
                </div>
                <div class="span3 info">
                    <?php if (!dynamic_sidebar('info-3')) : ?>

                    <h3><?php _e('Info 3','basejump')  ?></h3>
                        <p>
                            Inceptos turpis convallis dolor etiam arcu sapien nibh fames, curabitur torquent eu nostra iaculis nisl blandit sit, ut ipsum elit iaculis orci litora primis.
                        </p>
                    <?php endif ?>
                </div>
                <div class="span3 info">
                    <?php if (!dynamic_sidebar('info-4')) : ?>

                    <h3><?php _e('Contact', 'base_jump') ?></h3>
                        <ul class="vcard">
                            <li class="fn">
                                   <?php echo get_the_author_meta('first_name', cwp_themeadmin())  ?>
        <?php echo get_the_author_meta('last_name', cwp_themeadmin())  ?></li>
                                <li class="nickname">Yeti</li>
                                <li class="org">Foundation, Inc.</li>
                                <li class="tel"><a href="tel:408-867-5309">408-867-5309</a></li>
                                <li><a class="url" href="http://foundation.zurb.com/">http://foundation.zurb.com/</a></li>
                            </ul>
                    <?php endif ?>
                </div>


        </div>
        <div class="row">
            <div class="span12">
                <div id="copright-info">
                    <p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>.
                        <?php echo cwp_theme::the_copyright_copy(); ?>.
                        <br />
                    </p>
                    <p class="designer-copy"> <a href="http://craftedandpressed.com" target="_BLANK">
                            <?php _e('Designed by Crafted and Pressed', 'basejump') ?> </a>.
                    </p>
                </div>
                <!-- ###end-row### -->
            </div>
        </div>
</div>



</section>

    <!-- ***page*** -->

</div>