<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CarrassiShop
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class="container">
        <div class="my-1 article_main">
            <div class="col-12">
                <header class="entry-header px-0 mb-5">
                    <span class="featured_tag">
                        <?php echo esc_html(get_field('featured_tag', get_the_ID())); ?>
                    </span>
                    <div class="article_header col-12 mb-2" style="background:url(<?php echo esc_url(get_the_post_thumbnail_url()); ?>);">
                        <div class="article_title px-4 py-2">

                    <span>
                        <?php  the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </span>
                        </div>
                    </div>

                    <?php
                    if ( 'post' === get_post_type() ) :
                        ?>
                        <div class="entry-meta px-4">
                            <?php
                            carrassishop_posted_on(); echo " |";
                            carrassishop_comments_no(); echo " |";
                            carrassishop_tags(); echo " |";
                            //                        				carrassishop_posted_by();
                            ?>
                        </div>
                    <?php endif; ?>
                </header>
            </div>

            <div class="col-12 mb-5">
                <div class="entry-content">
                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'carrassishop' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        )
                    );

                    ?>
                </div>

                <!--            <footer class="entry-footer">-->
                <!--                --><?php //carrassishop_entry_footer(); ?>
                <!--            </footer>-->
            </div>
            <footer class="col-12 entry-footer">
                <?php carrassishop_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </div>

    </div>


</article>
