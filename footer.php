</main> 
<footer class="footer">
    <div class="footer__contenu">
        <div class="footer__texte">
            <p>&copy; <?php echo date('Y'); ?> Mondo Voyages. Tous droits réservés.</p>
        </div>

        <nav class="footer__nav">
            <ul class="footer__menu">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Destinations</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

        <div class="footer__reseaux">
            <a href="#" class="footer__icon"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="footer__icon"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="footer__icon"><i class="fa-brands fa-x-twitter"></i></a>
        </div>

        <div class="footer__recherche">
            <?php if (function_exists('get_search_form')) : ?>
                <?php get_search_form(); ?>
            <?php else : ?>
                <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                    <input type="text" name="s" placeholder="Rechercher...">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
