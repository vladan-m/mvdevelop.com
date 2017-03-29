  <footer class="footer">
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-4">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?><?php endif; ?>
            </div>
            <div class="col-sm-4">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?><?php endif; ?>
            </div>
            <div class="col-sm-4">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?><?php endif; ?>
            </div>
          </div>
          <p class="copy">&copy; Superior Develop <?php echo date('Y'); ?>, All Rights Reserved</p>
        </div>

      </div>
    </div>
  </footer>

  <script type="text/javascript" src="<?php bloginfo('url'); ?>/../javascripts/app.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
