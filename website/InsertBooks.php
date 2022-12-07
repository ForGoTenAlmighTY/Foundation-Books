<?php
include("InsertBooksScript.php");

?>

<html>
    <head>
        <title>Insert Book</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mystyle.css">
		
	</head>
	<body>
	<form action = "InsertBooksScript.php" method="post">
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
				<label for="tab-1" class="tab">Add Book</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up">
				<label for="tab-2" class="tab"></label>
				
				<!----Login----->
			
				<div class="login-form">
				<div class="group">
							<label for="user" class="label">Book ID</label>
							<input name="id" type="number" class="input" required>
						</div>
					<div class="group">
							<label for="user" class="label">Name of the Book</label>
							<input name="name" type="text" class="input" required>
						</div>
						
						<div class="group">
							<label for="user" class="label">Author</label>
							<input name="auth" type="text" class="input" required >
						</div>
						
						<div class="group">
							<label for="user" class="label">Description</label>
							<input name="descr" type="text" class="input" required>
						</div>
						
						<div class="group">
							<label for="pass" class="label">Price</label>
							<input name="price" type="number" class="input" required >
						</div>
						
						<div class="group">
							<label for="pass" class="label">Max number of book</label>
							<input name="quantity" type="number" class="input" required >
						</div>
						<div class="group">
							<label for="pass" class="label">Retail price</label>
							<input name="retail" type="number" class="input" required >
						</div>
						
						<div class="group">
							<label for="pass" class="label">Image file path</label>
							<input name="image" type="text" class="input"   required >
						</div>
											
						<div class="group">
							<input type="submit" class="button"  name="insert_book"  value="Add Book" required>
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
		