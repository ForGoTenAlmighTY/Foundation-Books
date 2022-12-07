<?php
include("BookTablePageLoader.php");
include("functionsAdmin.php");

?>


<?=template_header_admin('Books')?>

<div class="featured">
    <h2>Welcome Administrator</h2>
    <p>Foundation Books</p>
</div>
<div class="recentlyadded content-wrapper">
    <h2>Recently Books</h2>
	
		<form action = "BookTablePageLoader.php" method="post">	
		<table border="1"  style="margin-left: auto;margin-right: auto;border-collapse: collapse">
        <tr>
           
            <th>Book ID</th>
            <th>Name</th>
			<th>Author</th>
            <th>Description</th>
            <th>Price</th>
            <th style="padding: 20px;">Edit </th>
			<th style="padding: 20px;">Delete </th>
            
        </tr>
        
		<?php
				if(count($fetchData)>0){
				$sn=1;
				foreach($fetchData as $data){
					
		?> 
		<tr >
		<td><?php echo  $data['id'];?></td>
		<td><?php echo $data['Name']; ?> </td>
		<td><?php echo $data['Author']; ?></td>
		<td><?php echo $data['Description'];?> </td>
		<td><?php echo $data['Price'];?> </td>
		<td><a href="UpdateBooks.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
		<td><a href="DeleteBooks.php?delete=<?php echo $data['id']; ?>">Delete</a></td>		
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

