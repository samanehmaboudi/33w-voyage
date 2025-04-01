<?php get_header(); ?>
<section>
        <?php get_template_part('gabarits/hero'); ?>
    </section>

    <section>
        <?php get_template_part('gabarits/formulaire'); ?>
    </section>




<section class="populaire global">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category('Galerie')) {
                    the_content();
                } else { ?>
                    <?php get_template_part("gabarits/carte");
                    ?>
                <?php } ?>
        <?php endwhile;
        endif; ?>

    </div>

</section>

<section>
        <?php get_template_part('gabarits/destination'); ?>
    </section>



<?php get_footer(); ?>