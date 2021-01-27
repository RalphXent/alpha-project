<?php
  /*  Unset session variables to log out */
  session_start();
  unset($_SESSION['login']);
  unset($_SESSION['fname']);
  unset($_SESSION['lname']);

  header("location:index.php?logout=true");
?>