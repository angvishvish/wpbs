  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4 class="copyright">
            Cyphertree - All rights reserved
          </h4>
        </div>
        <div class="col-md-6">
          <h4 class="pull-right">
            2015
          </h4>
        </div>
      </div>
    </div>
  </footer>

  <?php

    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), NULL, true);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), NULL, true);
    wp_enqueue_script('bootstrap');

    wp_footer();
  ?>

  </body>
</html>