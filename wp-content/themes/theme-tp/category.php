<?php get_header(); ?>

<section class="populaire">
    <div class="global">
        <h2><?php single_cat_title(); ?></h2>
        <p><?php echo category_description(); ?></p>

        <?php if (have_posts()) : ?>
            <div class="populaire__liste">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="carte">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="carte__image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('custom-wide'); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="carte__contenu">
                            <h3 class="carte__titre"><?php the_title(); ?></h3>
                            <p class="carte__extrait"><?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?></p>
                            <a class="carte__lien" href="<?php the_permalink(); ?>">Voir la destination</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <nav class="pagination">
                <?php the_posts_pagination(array(
                    'prev_text' => '← Précédent',
                    'next_text' => 'Suivant →',
                    'mid_size'  => 2,
                )); ?>
            </nav>

        <?php else : ?>
            <p>Aucune destination trouvée dans cette catégorie.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
