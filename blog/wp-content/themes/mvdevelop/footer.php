  <footer id="footer" class="footer">
    <div class="container-fluid">

      <div class="row">
        <div class="col-sm-12">
          <ul class="footer-social">
            <li>
              <a href="https://twitter.com/mvdevelop" target="_blank" title="Follow us on Twitter">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/vladanmitevski" target="_blank" title="Connect with us on LinkedIn">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/mvdevelop/" target="_blank" title="Follow us on Facebook">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/mvdevelop/" target="_blank" title="Follow us on Facebook">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="https://github.com/mvdevelop" target="_blank" title="Follow us on Facebook">
                <i class="fa fa-github"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <?php wp_nav_menu( array( 'menu' => 'Main nav', 'menu_class' => 'footer-nav', 'theme_location' => 'primary' ) ); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="copyright">
            <p>Copyright @ 2012-<?php echo date('Y'); ?> MV Develop. All rights reserved.</p>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <script type="text/javascript" src="<?php bloginfo('url'); ?>/../javascripts/app.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
