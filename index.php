<?php
  require_once('head.php');
  require_once('header_and_nav.php');
?>
  <body>

<!-- Main Content -->
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container topPaddingHome">
        <p>Welcome to Evan Yeadon's online portfolio</p>
      </div>
    </div>

    <div class="container topMargin">
      <div class="row rowPadding">
        <div class="col-md-4">
          <a href="my_websites.php"><img src="my_websites/umass_home.png" class="img-responsive img-rounded imageBorder" alt="Web Development"></a>
          <h2>Web Development</h2>
          <p><a class="btn btn-default" href="my_websites.php" role="button">View &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <a href="graphic.php"><img src="graphic/zhone_home.png" class="img-responsive img-rounded imageBorder" alt="graphic design"></a>
          <h2>Graphic Design</h2>
          <p><a class="btn btn-default" href="graphic.php" role="button">View &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <a href="illustration.php"><img src="illustration/squares_b.png" class="img-responsive img-rounded imageBorder" alt="illustration"></a>
          <h2>Illustration</h2>
          <p><a class="btn btn-default" href="illustration.php" role="button">View &raquo;</a></p>
        </div>
      </div>
      
    </div> <!-- /container -->

<!-- End Main Content -->

<?php
  require_once('footer.php');
  require_once('bootstrap_core_javascript.php');
?>

  </body>
</html>

