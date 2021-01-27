<?php
/*  This file validates user input in login page to check the database
    it will be stored in session variables   
    If data is correct then the user will login to store   */
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'alphaproject');

//Output any connection error
if ($mysqli->connect_error) {
  die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$query = "SELECT * FROM members WHERE email='$email'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row >= 1) {
    if (password_verify($password, $row['password'])) {
      $_SESSION['login'] = $row['id'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];
      echo 'true';
    } else {
        echo 'false';
    }
} else {
    echo 'false';
}
?>