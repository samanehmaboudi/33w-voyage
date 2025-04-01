<?php 
/**
 * Template Part: Carte de destination
 */
?>


<article class="carte carte--grande">
    <?php if (has_post_thumbnail()) : ?>
        <div class="carte__image">
            <?php the_post_thumbnail('medium'); ?>
        </div>
    <?php endif; ?>

    <div class="carte__contenu">
    <div class="carte__categories">
            <?php the_category(' / '); ?>
        </div>
        <h2 class="carte__titre"><?php the_title(); ?></h2>
        <p class="carte__description">
            <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
        </p>

        <?php if (function_exists('get_field')) : ?>
            <?php
            $temp_max = get_field('temperature_maximum');
            $temp_min = get_field('temperature_minimum');
            ?>
            <div class="carte__meta">
                <?php if ($temp_max) : ?>
                    <p class="carte__temperature">🌡 Max: <?php echo esc_html($temp_max); ?>°C</p>
                <?php endif; ?>

                <?php if ($temp_min) : ?>
                    <p class="carte__temperature">❄ Min: <?php echo esc_html($temp_min); ?>°C</p>
                <?php endif; ?>
            </div>
        <?php endif; ?>


        <div class="carte__liens">
            <a class="carte__lien" href="<?php the_permalink(); ?>">Lire la suite</a>
        </div>
    </div>
</article>
