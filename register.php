<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alpha Project - Register</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

    <script src="vendor/jquery/jquery.min.js"></script>
    <!--Do validations to user inputs before sending data to server
        Use Ajax to create alert messages without refreshing the page-->
	  <script type="text/javascript">
      $(document).ready(function () {
        $("#register").click(function () {
          fname = $("#fname").val();
          lname = $("#lname").val();
          email = $("#email").val();
          password = $("#password").val();

          $.ajax({
            type: "POST",
            url: "adduser.php",
            data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password,
            success: function (html) {
              if (html == 'true') {
                $("#add_err2").html('<div class="alert alert-success"> \
                                    <strong>Account</strong> processed. \ \
                                    </div>');
                window.location.href = "index.php";
              } else if (html == 'false') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>Email Address</strong> already in system. \ \
                                    </div>');
              } else if (html == 'fname') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>First Name</strong> is required. \ \
                                    </div>');						 
						  } else if (html == 'lname') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>Last Name</strong> is required. \ \
                                    </div>');
              } else if (html == 'eshort') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>Email Address</strong> is required. \ \
                                    </div>');
              } else if (html == 'eformat') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>Email Address</strong> format is not valid. \ \
                                    </div>');
						  } else if (html == 'pshort') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>Password</strong> must be at least 4 characters . \ \
                                    </div>');
              } else {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>Error</strong> processing request. Please try again. \ \
                                    </div>');
              }
            },
            beforeSend: function () {
              $("#add_err2").html("loading...");
            }
          });
        return false;
        });
      });
    </script>

  </head>

  <body>

    <!--Header-->
    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Your online Pokémon TCG Store</span>
      <span class="site-heading-lower">Alpha Project</span>
    </h1>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <!--Content-->
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 mx-auto">
            <div class="cta-inner rounded">
              <span class="section-heading-upper">
                <div class="container">
                  <div class="row d-flex justify-content-center">
                    <div class="box col-xl-8">
                      <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Registration <strong>Form</strong></h2>
                        <hr>
                        <div id="add_err2"></div>
                        <form role="form">
                          <div class="row">
                            <div class="form-group col-lg-12">
                              <label>First Name</label>
                              <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                              <label>Last Name</label>
                              <input type="text" id="lname" name="lname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                              <label>Email Address</label>
                              <input type="email" id="email" name="email" maxlength="35" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                              <label>Password</label>
                              <input type="password" id="password" name="password" maxlength="10" class="form-control">
                            </div>
                            <div class="form-group col-lg-12 d-flex justify-content-center">
                              <button type="submit" id="register" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </form>
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

    <!--Footer-->
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Alpha Project 2021</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
