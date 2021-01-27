<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alpha Project - Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

    <script src="vendor/jquery/jquery.min.js"></script>

    <!--Do validations to user inputs before sending messages to email
        Use Ajax to create alert messages without refreshing the page-->
    <script type="text/javascript">
      $(document).ready(function () {
        $("#contact").click(function () {
          fname = $("#fname").val();
          email = $("#email").val();
          message = $("#message").val();
          $.ajax({
            type: "POST",
            url: "sendmsg.php",
            data: "fname=" + fname + "&email=" + email + "&message=" + message,
            success: function (html) {
              if (html == 'true') {
                $("#add_err2").html('<div class="alert alert-success"> \
                                    <strong>Message Sent!</strong> \ \
                                    </div>');
              } else if (html == 'fname_long') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                    </div>');
						  } else if (html == 'fname_short') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>First Name</strong> must exceed 2 characters. \ \
                                    </div>');	 
						  } else if (html == 'email_long') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>Email</strong> must cannot exceed 50 characters. \ \
                                    </div>');
						  } else if (html == 'email_short') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>Email</strong> must exceed 2 characters. \ \
                                    </div>');
						  } else if (html == 'eformat') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>Email</strong> format incorrect. \ \
                                    </div>');
						  } else if (html == 'message_long') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>Message</strong> must cannot exceed 50 characters. \ \
                                    </div>');
						  } else if (html == 'message_short') {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                    <strong>Message</strong> must exceed 2 characters. \ \
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
            <div class="cta-inner rounded p-0 p-sm-5">
              <span class="section-heading-upper">
                <div class="container">
                  <div class="row d-flex justify-content-center">
                    <div class="box col-xl-8">
                      <div class="col-lg-12 my-4 my-sm-0">
                        <h2 class="intro-text text-center"><strong>Contact Information</strong></h2>
                        <hr>
                        <div>
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62509.27324041607!2d-70.2196516143567!3d11.70648012079842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e85ed24b8524353%3A0x18abea72d12fd565!2sPunto%20Fijo%2C%20Falc%C3%B3n!5e0!3m2!1sen!2sve!4v1611694919739!5m2!1sen!2sve" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="text-center">
                          <p>Phone:
                            <strong>123.456.7890</strong>
                          </p>
                          <p>Email:
                            <strong><a href="mailto:info@alphaproject.com">info@alphaproject.com</a></strong>
                          </p>
                          <p>Address:
                            <strong>Punto Fijo
                            <br>Falcon, Venezuela 4102</strong>
                          </p>
                        </div>
                        <hr>
                        <br>
                        <h2 class="intro-text text-center">Contact
                          <strong>form</strong>
                        </h2>
                        <hr>
                        <div id="add_err2"></div>
                        <form role="form">
                          <div class="row">
                            <div class="form-group col-lg-12">
                              <label>Full Name</label>
                              <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                              <label>Email Address</label>
                              <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                              <label>Message</label>
                              <textarea class="form-control" rows="6" id="message" name="message" maxlength="100"></textarea>
                            </div>
                            <div class="form-group col-lg-12 d-flex justify-content-center">
                              <button type="submit" id="contact" class="btn btn-primary">Submit</button>
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
