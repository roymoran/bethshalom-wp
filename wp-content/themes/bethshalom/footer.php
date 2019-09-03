<?php wp_footer(); ?>

<footer>

    <div>
        <h1 class="site-title"> Beth Shalom B'Nai <br>Zaken EHC </h1>
        <a href="https://www.youtube.com/user/BethShalomBZ" class="social-icon">
            <img src="https://seeklogo.net/wp-content/uploads/2016/06/YouTube-icon-400x400.png" width="52" height="56" title="YouTube" alt="YouTube"></a>
        <a href="https://www.facebook.com/bethshalombz.org/" class="social-icon">
            <img src="https://ie.reachout.com/wp-content/uploads/2015/02/Facebook.png" width="52" height="56" title="Facebook" alt="Facebook">
        </a>
    </div>
    <div class="footer-nav-links-container">
        <div class="footer-links-title">USEFUL LINKS</div>
        <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => 'div', 'container_class' => '', 'menu_class' => 'footer-nav-links')); ?>
    </div>

    <div class="map-container">
        <h5 class="address"> 6601 South Kedzie Avenue <br> Chicago, Il 60629-3432 <br>(773)476-2924<br> Email: <br> bshalombz@sbcglobal.net<br> Rabbi:<br> ravfunnt@sbcglobal.net</h5>
        <div>
            <iframe width="320" height="250" frameborder="0" src="https://www.bing.com/maps/embed?h=250&w=320&cp=41.77313978979112~-87.70263&lvl=16&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
            </iframe>
        </div>
    </div>
</footer>
</body>

</html>