<?php
/*
Template Name: Simple Template
*/

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <?php if (comments_open() || get_comments_number()) : ?>
                        <div class="comments-section">
                            <?php comments_template(); ?>
                        </div>
                    <?php endif; ?>
                </article>

                <?php
            endwhile;
        endif;
        ?>

    </main>
</div>

<?php get_footer(); ?>