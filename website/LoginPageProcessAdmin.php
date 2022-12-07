<?php
session_start();

// assign  your connection varibale
$db= mysqli_connect('localhost', 'root', '', 'bookstore'); 


$errors = array();

// LOGIN USER
if (isset($_POST['login_admin'])) {
  $AdminID = mysqli_real_escape_string($db, $_POST['id']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);
  
	
  if (empty($AdminID)) {
  	array_push($errors, "AdminID is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	
  	$query = "SELECT * FROM admin WHERE AdminID='$AdminID' AND adminPassword='$password'";
  	$results = mysqli_query($db, $query);

	
  	if (mysqli_num_rows($results) == 1) {
		header('location: UserTablePage.php');
  	  $_SESSION['id'] = $AdminID;
  	  $_SESSION['success'] = "You are now logged in";
  	  
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>