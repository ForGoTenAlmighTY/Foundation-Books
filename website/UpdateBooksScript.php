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
 $query= "SELECT * FROM books WHERE BookID= $id";
 $exec = mysqli_query($db, $query);
 $row= mysqli_fecth_assoc($exec);
 return $row;
}
// update data query

function update_data($db, $id){
	
 
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $auth = mysqli_real_escape_string($db, $_POST['auth']);
  $descr = mysqli_real_escape_string($db, $_POST['descr']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  
      $query="UPDATE books 
            SET Name='$name',
                Author= '$auth',
                Description='$descr',,
                Price='$price' WHERE BookID= $id";
      $exec= mysqli_query($db,$query);
  
      if($exec){
         header('location: BookTablePage.php');
      
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($db);
         echo $msg;  
      }
}



?>