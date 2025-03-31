<?php get_header(); ?>

<!-- SECTION HERO avec image de fond -->
<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/maldives.jpg');">
    <div class="hero__contenu global">
        <h1 class="hero__titre">Voyagez Autrement avec Mondo Voyages !</h1>
        <p class="hero__description">
            Découvrez des destinations uniques et inoubliables avec Mondo Voyages. Nous vous offrons des expériences authentiques, des voyages à couper le souffle et des aventures sur mesure.
        </p>
        <address class="hero__contact">
            <p>Email : <a href="mailto:info@cmaisonneuve.qc.ca">info@cmaisonneuve.qc.ca</a></p>
            <p>Téléphone : 514-254-7131</p>
        </address>
        <div class="hero__sociaux">
            <a href="#"><img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" width="32" height="32" alt="Facebook"></a>
            <a href="#"><img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32" alt="Instagram"></a>
            <a href="#"><img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000" width="32" height="32" alt="LinkedIn"></a>
        </div>
        <button class="hero__bouton">S'INSCRIRE</button>
    </div>
</section>

<!-- FORMULAIRE -->
<section class="formulaire">
    <form class="formulaire__contenu">
        <div class="form__group">
            <label for="nom" class="form__label">Nom</label>
            <input type="text" id="nom" class="hero__form-input" placeholder="Écrivez votre nom">
        </div>
        <div class="form__group">
            <label for="prenom" class="form__label">Prénom</label>
            <input type="text" id="prenom" class="hero__form-input" placeholder="Écrivez votre prénom">
        </div>
        <div class="form__group">
            <label for="courriel" class="form__label">Courriel</label>
            <input type="email" id="courriel" class="hero__form-input" placeholder="Écrivez votre courriel">
        </div>
        <div class="form__group">
            <label for="telephone" class="form__label">Téléphone</label>
            <input type="tel" id="telephone" class="hero__form-input" placeholder="Écrivez votre téléphone">
        </div>
        <div class="form__group">
            <input type="submit" value="S'INSCRIRE" class="hero__form-input">
        </div>
    </form>
</section>

<!-- SECTION GALERIE -->
<section class="galerie global">
    <h2>Galerie</h2>
    <div class="galerie__contenu">
        <?php
        $galerie_query = new WP_Query(array(
            'category_name' => 'galerie',
            'posts_per_page' => 6
        ));

        if ($galerie_query->have_posts()) :
            while ($galerie_query->have_posts()) : $galerie_query->the_post(); ?>
                <div class="galerie__item">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>
                </div>
        <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<!-- SECTION DESTINATIONS POPULAIRES -->
<section class="populaire global">
    <h2>Destinations populaires</h2>
    <div class="populaire__contenu">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (!in_category('galerie')) : ?>
                <article class="carte carte--grande">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="carte__image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('custom-wide'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="carte__contenu">
                        <h3 class="carte__titre"><?php the_title(); ?></h3>
                        <p class="carte__description"><?php echo wp_trim_words(get_the_excerpt(), 25, "..."); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn">Voir la destination</a>
                    </div>
                </article>
            <?php endif; ?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
