<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<?php if (have_posts())
    while (have_posts()) : the_post(); ?>
                <?php core_functions::setPostViews(); ?>

        <section id="post-content">

            <?php //get_template_part('content', 'single'); ?>
            <?php //cwp::get_tpl_content('single'); ?>
                    <?php cwp_layout::tpl_part('base', 'single'); ?>

        </section>
        <section id="author-info">
            <div class="row">
                        <div class="two columns">
<div class="authoravatar"> <?php if (function_exists('get_avatar')) {
            echo get_avatar(get_the_author_meta('email'),60); } ?>
            </div>
                            <!-- ###end-row### -->
                        </div>

                <div class="ten columns">
                         <div class="authorinfo">
                <p>Author: <strong><?php the_author_posts_link(); ?> </strong> : <?php the_author_meta('description'); ?></p>
            </div>
                            <!-- ####column-end#### -->
                        </div>
                    </div>


        </section>
        <nav id="nav-below">
            <div class="row">
                        <div class="six columns">
<div class=" nav-previous">
                <?php previous_post_link('%link', '<span class="meta-nav">' . _x('&larr;', 'Previous post link', 'basejump') . '</span> %title'); ?>
</div>
                            <!-- ###end-row### -->
                        </div>
                <div class="six columns">
                   <div class="nav-next">
                <?php next_post_link('%link', '%title <span class="meta-nav">' . _x('&rarr;', 'Next post link', 'basejump') . '</span>'); ?>
                   </div>
                            <!-- ####column-end#### -->
                        </div>
                    </div>
<!--            <h1 class="section-heading"><?php _e('Post navigation', 'basejump'); ?></h1>-->


        </nav><!-- #nav-below -->

        <section>
        <?php comments_template('', true); ?>
        </section>

    <?php
    endwhile; // end of the loop. ?>