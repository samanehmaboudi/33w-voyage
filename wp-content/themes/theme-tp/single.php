<?php get_header(); ?> 

<main class="site__main">
    <section class="destination global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="destination__contenu">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="destination__image">
                        <?php the_post_thumbnail('custom-wide'); ?>
                    </div>
                <?php endif; ?>

                <h1 class="destination__titre"><?php the_title(); ?></h1>

                <div class="destination__texte">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile; endif; ?>
    </section>
</main>

<?php get_footer(); ?>
