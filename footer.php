</main>
<footer class="footer">
  <div class="footer__contenu">

   
    <div class="footer__colonne">
      <nav class="footer__nav">
        <ul class="footer__menu">
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Destinations</a></li>
          <li><a href="#">À propos</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>

    
    <div class="footer__colonne footer__categories">
      <h4>Catégories</h4>
      <ul>
        <li><a href="#">Aventure</a></li>
        <li><a href="#">Croisière</a></li>
        <li><a href="#">Culturel</a></li>
        <li><a href="#">Économique</a></li>
        <li><a href="#">Pleine nature</a></li>
        <li><a href="#">Populaire</a></li>
        <li><a href="#">Repos</a></li>
        <li><a href="#">Sport</a></li>
        <li><a href="#">Zen</a></li>
      </ul>
    </div>

   
    <div class="footer__colonne footer__tools">
      <div class="footer__recherche">
        <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
          <input type="text" name="s" placeholder="Rechercher...">
          <button type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>
      </div>

      <div class="footer__reseaux">
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
      </div>
    </div>

  </div>

  
  <div class="footer__texte">
    <p>&copy; <?php echo date('Y'); ?> Mondo Voyages. Tous droits réservés.</p>
  </div>
  <?php wp_footer(); ?>
</footer>
</body>
</html>
