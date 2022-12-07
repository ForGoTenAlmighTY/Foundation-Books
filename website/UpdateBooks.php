<?php
include("UpdateBooksScript.php");

?>

<html>
    <head>
        <title>Update Book</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mystyle.css">
		
	</head>
	<body>
	<form action = "UpdateBooksScript.php" method="post">
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
				<label for="tab-1" class="tab">Update Book</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up">
				<label for="tab-2" class="tab"></label>
				
				<!----Login----->
			
				<div class="login-form">
				
					<div class="group">
							<label for="user" class="label">Name of the Book</label>
							<input name="name" type="text" class="input" required value="<?php echo isset($editData) ? $editData['Name'] : '' ?>">
						</div>
						<div class="group">
							<label for="user" class="label">Author</label>
							<input name="auth" type="text" class="input" required value="<?php echo isset($editData) ? $editData['Author'] : '' ?>">
						</div>
						
						<div class="group">
							<label for="user" class="label">Description</label>
							<input name="descr" type="text" class="input" required value="<?php echo isset($editData) ? $editData['Description'] : '' ?>">
						</div>
						<div class="group">
							<label for="pass" class="label">Price</label>
							<input name="price" type="text" class="input"   required value="<?php echo isset($editData) ? $editData['Price'] : '' ?>">
						</div>
											
						<div class="group">
							<input type="submit" class="button"  name="update"  value="Update Book" required>
						</div>
						
						<div class="hr"></div>
						<div class="foot-lnk">
						<a href="BookTablePage.php">
							<label >Back to book table page</label></a>
						
					</div>
					</div>
			</div>
		</div>
	</form>
	</body>


</html>
		