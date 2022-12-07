<?php

session_start();

$db=mysqli_connect('localhost', 'root', '', 'bookstore');


if(isset($_GET['edit'])){
    $id= $_GET['edit'];
  $editData= edit_data($db, $id);
}
if(isset($_POST['update']) && isset($_GET['edit'])){
  $id= $_GET['edit'];
    update_data($db,$id);
    
    
} 
function edit_data($db, $id)
{
 $query= "SELECT * FROM users WHERE UserID= $id";
 $exec = mysqli_query($db, $query);
 $row= mysqli_fecth_assoc($exec);
 return $row;
}
// update data query

function update_data($db, $id){
	
 
	$firstname = mysqli_real_escape_string($db, $_POST['fname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lname']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['pass']);
  
      $query="UPDATE users 
            SET Name='$firstname',
				Surname='$lastname',
                Email Address= '$email',
                Password='$password' WHERE UserID=$id";
      $exec= mysqli_query($db,$query);
  
      if($exec){
         header('location: UserTablePage.php');
      
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($db);
         echo $msg;  
      }
}



?>