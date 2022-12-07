<?php 

session_start();

$db=mysqli_connect('localhost', 'root', '', 'bookstore');

if(isset($_GET['delete'])){
    $id= $_GET['delete'];
  delete_data($db, $id);
}

// delete data query
function delete_data($db, $id){
   
    $query="DELETE from users WHERE UserID=$id";
    $exec= mysqli_query($db,$query);
    if($exec){
      header('location: UserTablePage.php');
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($db);
      echo $msg;
    }
}






?>