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
