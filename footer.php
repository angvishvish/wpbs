  </main>
  <footer class="footer footer-cyphertree">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h6 class="copyright">
            Cyphertree - All rights reserved
          </h6>
        </div>
        <div class="col-md-6">
          <h6 class="year">
            2015
          </h6>
        </div>
      </div>
    </div>
  </footer>

  <?php

    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), NULL, true);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), NULL, true);
    wp_enqueue_script('bootstrap');

    // wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array('main'), NULL, true);
    // wp_enqueue_script('main');

    wp_footer();
  ?>

  </body>
</html>