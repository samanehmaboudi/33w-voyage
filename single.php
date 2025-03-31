<?php get_header(); ?>

<main class="site__main">
    <section class="destination global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="destination__contenu">

                <?php if (has_post_thumbnail()) : ?>
                    <div class="destination__image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <h1 class="destination__titre"><?php the_title(); ?></h1>

                <div class="destination__texte">
                    <?php the_content(); ?>
                </div>

                <?php if (function_exists('get_field')) : ?>
                    <?php
                    $temp_max = get_field('temperature_maximum');
                    $temp_min = get_field('temperature_minimum');
                    $galerie = get_field('galerie');
                    ?>
                    <div class="destination__infos">
                        <?php if ($temp_max) : ?>
                            <p class="destination__temperature">🌞 Température max : <?php echo esc_html($temp_max); ?>°C</p>
                        <?php endif; ?>
                        <?php if ($temp_min) : ?>
                            <p class="destination__temperature">❄ Température min : <?php echo esc_html($temp_min); ?>°C</p>
                        <?php endif; ?>
                    </div>

                    <?php if ($galerie) : ?>
                        <div class="destination__galerie">
                            <?php echo $galerie; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

            </article>

        <?php endwhile; else : ?>
            <p>Aucune destination trouvée.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
