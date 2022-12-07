<?php
session_start();

// assign  your connection varibale
$db= mysqli_connect('localhost', 'root', '', 'bookstore'); 


$errors = array();

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	
  	$query = "SELECT * FROM users WHERE EmailAddress='$email' AND Password='$password'";
	$query2 = "SELECT Name,Surname FROM users WHERE EmailAddress='$email' AND Password='$password'";
  	$results = mysqli_query($db, $query);
	$results1 = mysqli_query($db, $query2);
	$Name= $results1;
	
  	if (mysqli_num_rows($results) == 1) {
		header('location: index.php');
  	  $_SESSION['email'] = $Name;
  	  $_SESSION['success'] = "You are now logged in";
  	  
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>