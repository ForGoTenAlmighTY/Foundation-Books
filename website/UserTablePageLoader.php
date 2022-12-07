<?php

session_start();

$db= mysqli_connect('localhost', 'root', '', 'bookstore');
$fetchData= fetch_data($db);
// fetch query
function fetch_data($db){
  $query="SELECT * from users ORDER BY UserID ASC";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
?>



