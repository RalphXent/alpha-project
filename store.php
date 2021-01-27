<?php
  //Initialize session
  session_start();
  if (isset($_SESSION['login'])){
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alpha Project - Store</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>
    <!--Header-->
    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Your online Pokémon TCG Store</span>
      <span class="site-heading-lower"><b>Alpha Project</b></span>
    </h1>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <!--Content-->
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 mx-auto">
            <div class="cta-inner text-center rounded">
              <h3 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h3> 
              <hr>
              <h2 class="section-heading mb-5">STORE</h2>
              <hr>
                <span class="section-heading-upper">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs flex-column flex-sm-row">
                    <li class="nav-item">
                      <a class="flex-sm-fill text-sm-center nav-link active" data-toggle="tab" href="#boosterbox">Booster Boxes</a>
                    </li>
                    <li class="nav-item">
                      <a class="flex-sm-fill text-sm-center nav-link" data-toggle="tab" href="#boosterpack">Booster Packs</a>
                    </li>
                    <li class="nav-item">
                      <a class="flex-sm-fill text-sm-center nav-link" data-toggle="tab" href="#themedeck">Theme Decks</a>
                    </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content rounded mt-5">
                    <div class="tab-pane container active" id="boosterbox">
                      <div class="container">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4">
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-2" src="img/box01.png" alt="">
                            <p>Pokemon Sword &amp; Shield Battle Styles Booster Box</p>
                            <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#prod01">See more</button>
                          </div>
                          <div class="col-xl-4 col-lg-4">
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-2" src="img/box02.png" alt="">
                            <p>Pokemon Sword &amp; Shield Vivid Voltage Booster Box</p>
                            <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#prod02">See more</button>
                          </div>
                          <div class="col-xl-4 col-lg-4">
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-2" src="img/box03.png" alt="">
                            <p>Pokemon Sword &amp; Shield Darkness Ablaze Booster Box</p>
                            <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#prod03">See more</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane container fade" id="boosterpack">
                      <div class="container">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4">
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-2" src="img/pack01.png" alt="">
                            <p>Pokemon Sword &amp; Shield Darkness Ablaze Booster Pack</p>
                            <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#prod04">See more</button>
                          </div>
                          <div class="col-xl-4 col-lg-4">
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-2" src="img/pack02.png" alt="">
                            <p>Pokemon SM6 Forbidden Light Booster Pack</p>
                            <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#prod05">See more</button>
                          </div>
                          <div class="col-xl-4 col-lg-4">
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-2" src="img/pack03.png" alt="">
                            <p>Pokemon Sword &amp; Shield Rebel Clash Booster Pack</p>
                            <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#prod06">See more</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane container fade" id="themedeck">
                    <div class="container">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4">
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-2" src="img/deck01.png" alt="">
                            <p>Pokemon Celestial Storm Theme Deck</p>
                            <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#prod07">See more</button>
                          </div>
                          <div class="col-xl-4 col-lg-4">
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-2" src="img/deck02.png" alt="">
                            <p>Pokemon Vivid Voltage Theme Deck</p>
                            <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#prod08">See more</button>
                          </div>
                          <div class="col-xl-4 col-lg-4">
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-2" src="img/deck03.png" alt="">
                            <p>Pokemon Darkness Ablaze Theme Deck</p>
                            <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#prod09">See more</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modals -->
    <div id="prod01" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pokemon Sword &amp; Shield Battle Styles Booster Box</h4>
          </div>
          <div class="modal-body">
            <p>Sample Text</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="prod02" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pokemon Sword &amp; Shield Vivid Voltage Booster Box</h4>
          </div>
          <div class="modal-body">
            <p>Sample Text</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="prod03" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pokemon Sword &amp; Shield Darkness Ablaze Booster Box</h4>
          </div>
          <div class="modal-body">
            <p>Sample Text</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="prod04" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pokemon Sword &amp; Shield Darkness Ablaze Booster Pack</h4>
          </div>
          <div class="modal-body">
            <p>Sample Text</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="prod05" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pokemon SM6 Forbidden Light Booster Pack</h4>
          </div>
          <div class="modal-body">
            <p>Sample Text</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="prod06" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pokemon Sword &amp; Shield Rebel Clash Booster Pack</h4>
          </div>
          <div class="modal-body">
            <p>Sample Text</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="prod07" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pokemon Celestial Storm Theme Deck</h4>
          </div>
          <div class="modal-body">
            <p>Sample Text</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="prod08" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pokemon Vivid Voltage Theme Deck</h4>
          </div>
          <div class="modal-body">
            <p>Sample Text</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="prod09" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pokemon Darkness Ablaze Theme Deck</h4>
          </div>
          <div class="modal-body">
            <p>Sample Text</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Alpha Project 2021</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

<?php
  } else {
      header ("location:login.php");
  }
?>