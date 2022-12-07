<?php
include("UserTablePageLoader.php");
include("functionsAdmin.php");

?>


<?=template_header_admin('Users')?>

<div class="featured">
    <h2>Welcome Administrator</h2>
    <p>Foundation Books</p>
</div>
<div class="recentlyadded content-wrapper">
    <h2>Users</h2>
	
	<form action = "UserTablePageLoader.php" method="post">	
		<table border="1"  style="margin-left: auto;margin-right: auto;border-collapse: collapse">
        <tr>
           
            <th>User ID</th>
            <th>Name</th>
			<th>Surname</th>
            <th>Email Address</th>
            <th>Password</th>
            <th>Edit </th>
			<th>Delete </th>
            
        </tr>
        
		<?php
				if(count($fetchData)>0){
				$sn=1;
				foreach($fetchData as $data){
					
		?> 
		<tr >
		<td><?php echo  $data['UserID'];?></td>
		<td><?php echo $data['Name']; ?> </td>
		<td><?php echo $data['Surname']; ?></td>
		<td><?php echo $data['EmailAddress'];?> </td>
		<td><?php echo $data['Password'];?> </td>
		
		<td><a href="UpdateUser.php?edit=<?php echo $data['UserID']; ?>">Edit</a></td>
		<td><a href="DeleteUser.php?delete=<?php echo $data['UserID']; ?>">Delete</a></td>
		
		</tr> 
		<?php
			  $sn++; }
			  }else{
					
		?>
			  <tr>
				<td colspan="7">No Data Found</td>
			  </tr>
						
		<?php
			}
		?>
 
    </table>
	</form>
  
</div>

<?=template_footer_admin()?>