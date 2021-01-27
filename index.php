<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alpha Project - Home</title>

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

  <!--Message to display when the user logs out-->
  <?php
    if (isset($_GET["logout"])){
      if ($_GET["logout"] == "true") { ?>
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>You have been logged out of the system</strong>
        </div>
  <?php
      }
    }
  ?>

  <!-- Navigation -->
  <?php require_once 'nav.php'; ?>

  <!--Content-->
  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Pokémon Trading Card Game</span>
            <span class="section-heading-lower">Boost your deck now!</span>
          </h2>
          <p class="mb-3">We offer a variety of Pokémon TCG Products, including Booster Packs, Booster Boxes, Elite Trainer Boxes and more! - Be sure to visit our Shop section to check products availability.
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="register.php">Join Us Today!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Sign up to become a member</span>
              <span class="section-heading-lower">Don't miss new breaks!</span>
            </h2>
            <p class="mb-0">Join us today and you will receive email updates on new products announcements, special promotions, sales, breaks/openings and more! - Use your referral code to invite your friends and receive special discounts!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Footer-->
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
