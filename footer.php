</div>
</main>
<footer>
  <div class="container flex-container">
    <div class="footer-left">
      <a class="logo" href="https://kalorihesabi.com">kalori hesabı</a>
      <p class="footer-text">
        Kalori Hesabı sitemizin amacı kalori hesaplama, ideal kilo hesaplama ve yediğimiz yiyeceklerin kaç kalori olduğunu sizlere doğru bir biçimde aktarmaktır.
      </p>
      <ul class="footer-social">
        <li> <a href="https://www.facebook.com/kalorihesabi/" target="_blank" rel="nofollow"><i class="fa-brands fa-facebook-f"></i></a></li>
        <li> <a href="https://www.instagram.com/kalorihesabicom/" target="_blank" rel="nofollow"><i class="fa-brands fa-instagram"></i></a></li>
        <li> <a href="https://tr.pinterest.com/kalorihesabi/" target="_blank" rel="nofollow"><i class="fa-brands fa-pinterest"></i></a></li>
        <li><a href="https://medium.com/@kalorihesabicom" target="_blank" rel="nofollow"><i class="fa-solid fa-link"></i></a></li>
      </ul>
    </div>
    <div class="footer-center">
      <nav>
        <?php wp_nav_menu(array('theme_location' => 'Header')); ?>
      </nav>
    </div>
    <nav class="top-nav js-top-nav">
      <?php wp_nav_menu(array('theme_location' => 'Info')); ?>
    </nav>
  </div>
</footer>
<script async src="<?php bloginfo('template_url'); ?>/assets/public/js/natkah-min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>
<?php wp_footer(); ?>