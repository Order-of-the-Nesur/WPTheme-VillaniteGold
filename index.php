<?php
/*
Template Name: Villanite WP
*/
get_header();

?>
<div id="SiteBody">
    <main role="main">
        <?php if (have_posts()) : ?>
            <?php if (is_archive()) : ?>
                <header class="page-header">
                    <?php
                    the_archive_title('<h1 class="entry-title">', '</h1>');
                    the_archive_description('<div class="taxonomy-description">', '</div>');
                    ?>
                </header>
            <?php endif ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php if (is_single() || is_page()) : ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <section>
                            <header>
                                <h1>
                                    <?php the_title(); ?>
                                </h1>
                            </header>
                            <?php the_content(); ?>
                        </section>
                    </article>
                <?php else : ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class($class = 'listed-article'); ?>>
                        <section>
                            <?php if (has_post_thumbnail()) : the_post_thumbnail('medium');
                            endif ?>
                            <header>
                                <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
                            </header>
                            <?php the_excerpt(); ?>
                        </section>
                    </article>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php elseif (is_404()) : ?>
            <h1>Nothing Found!</h1>
            <div class="alert alert-negative">
                <p>Oh no! The ship is sinking! Throw all the soda and coins off the ship! Also, there's no page at this URL.</p>
            </div>
        <?php endif; ?>
    </main>
</div>
<?php get_footer(); ?>