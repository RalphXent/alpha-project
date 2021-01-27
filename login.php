<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alpha Project - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

    <script src="vendor/jquery/jquery.min.js"></script>
    <!--Do validations to user inputs before trying to log in
        Use Ajax to create alert messages without refreshing the page-->
	  <script type="text/javascript">
      $(document).ready(function(){
			  $("#login").click(function(){
					email=$("#email").val();
					password=$("#password").val();
					 $.ajax({
						type: "POST",
						url: "pcheck.php",
						data: "email="+email+"&password="+password,
						success: function(html){
						  if(html=='true')
						  {
							  $("#add_err2").html('<div class="alert alert-success"> \
													          <strong>Authenticated</strong> \ \
												            </div>');
							window.location.href = "store.php";
						  } else if (html=='false') {
								$("#add_err2").html('<div class="alert alert-danger"> \
													          <strong>Authentication</strong> failure. \ \
												            </div>');
						  } else {
								$("#add_err2").html('<div class="alert alert-danger"> \
													          <strong>Error</strong> processing request. Please try again. \ \
												            </div>');
						  }
						},
						beforeSend:function()
						{
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
                        <div class="alert alert-danger"><strong>You must be logged in to view the store</strong></div>
                        <hr>
                        <h2 class="intro-text text-center"><strong>Login</strong></h2>
                        <hr>
                        <div id="add_err2"></div>
                        <form role="form">
                          <div class="row">
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
                              <button type="submit" id="login" class="btn btn-primary">Login</button>
                            </div>
                          </div>
                        </form>
                        <div class="form-group col-lg-12 d-flex justify-content-center">
                          <a href="register.php"><button type="submit" class="btn btn-primary">Not a member? Sign up</button></a>
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
