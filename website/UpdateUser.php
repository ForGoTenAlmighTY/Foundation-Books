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
	<form action = "InsertBooksScript.php" method="post">
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
				<label for="tab-1" class="tab">Update Book</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up">
				<label for="tab-2" class="tab"></label>
				
				<!----Login----->
			
				<div class="login-form">
				
					<div class="group">
							<label for="user" class="label">Name</label>
							<input name="fname" type="text" class="input" required value="<?php echo isset($editData) ? $editData['Name'] : '' ?>">
						</div>
						<div class="group">
							<label for="user" class="label">Surname</label>
							<input name="lname" type="text" class="input" required value="<?php echo isset($editData) ? $editData['Surname'] : '' ?>">
						</div>
						
						<div class="group">
							<label for="user" class="label">Email Address</label>
							<input name="email" type="email" class="input" required value="<?php echo isset($editData) ? $editData['Email Address'] : '' ?>">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input name="pass" type="password" class="input"   required value="<?php echo isset($editData) ? $editData['Password'] : '' ?>">
						</div>
											
						<div class="group">
							<input type="submit" class="button"  name="update"  value="Update Book" required>
						</div>
						
						<div class="hr"></div>
						<div class="foot-lnk">
						<a href="UserTablePage.php">
							<label >Back to user table page</label></a>
						
					</div>
					</div>
			</div>
		</div>
	</form>
	</body>


</html>
		