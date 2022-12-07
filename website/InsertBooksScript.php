<?php 

session_start();

$db=mysqli_connect('localhost', 'root', '', 'bookstore');


// initializing variables

$errors = array(); 


// REGISTER USER
if (isset($_POST['insert_book'])) {
	  // receive all input values from the form
  $id = mysqli_real_escape_string($db, $_POST['id']);  
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $auth = mysqli_real_escape_string($db, $_POST['auth']);
  $descr = mysqli_real_escape_string($db, $_POST['descr']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
  $retail = mysqli_real_escape_string($db, $_POST['retail']);
  $image = mysqli_real_escape_string($db, $_POST['image']);


  	$query = "INSERT INTO books 
  			  VALUES('$id','$name','$descr','$auth','$price','$retail','$quantity','$image')";
  	mysqli_query($db, $query);

  	header('location: BookTablePage.php');
}































?>