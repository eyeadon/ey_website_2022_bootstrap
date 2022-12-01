<?php
  $upOutOfFolder = '../';

  require_once('../head.php');
  require_once('../header_and_nav.php');
?>

  <body>

<!-- Main Content -->
<div class="container">
      <div class="pull-left">
        <h1>Graphic Design</h1>
      </div>
      <div class="pull-right">
        <ol class="breadcrumb">
  	      <li><a href="../graphic.php">Graphic Design</a></li>
  	      <li class="active">Tommy Bahama</li>
        </ol>
      </div>
    </div> <!-- /container -->

    <div class="container">
    
<div id="carousel-tb" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-keyboard="true">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-tb" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-tb" data-slide-to="1"></li>
    <li data-target="#carousel-tb" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="imageBorder" src="tb_brochure1.png" alt="">
    </div>
    <div class="item">
      <img class="imageBorder" src="tb_brochure2.png" alt="">
    </div>
    <div class="item">
      <img class="imageBorder" src="tb_brochure3.png" alt="">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-tb" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-tb" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div> <!-- /container -->

    <div class="container">
      <div class="row bottomPadding">
        <div class="col-md-6">
          <h2>Tommy Bahama</h2>
		  <h4>Benefits Highlights Brochure, Enrollment Letter and Booklet Envelope</h4>
          <p>Role: Graphic Designer</p>
          <p>Objective: Design communications for Tommy Bahama employees that reflect the style and themes of their brand. Make certain that brand guidelines are adhered to. Increase employee benefits enrollment, health program participation, and overall healthcare education.</p>
        </div>
        <div class="col-md-6">
        <img src="tb_letter.jpg" class="img-responsive topPadding" alt="tb_letter">
        </div>
      </div>
    </div> <!-- /container -->
    
    <nav aria-label="" class="bottomPadding">
      <ul class="pager">
        <li><a href="nci.php"><span aria-hidden="true">&larr;</span> Previous Project</a></li>
        <li><a href="msw.php">Next Project <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
<!-- End Main Content -->

<?php
  require_once('../footer.php');
  require_once('../bootstrap_core_javascript.php');
?>

  </body>
</html>

