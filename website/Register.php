<?php

include("RegisterPageProcess.php");

?>

<html>
    <head>
        <title>Log-In</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mystyle.css">
		
	</head>
	<body>
	<form action = "RegisterPageProcess.php" method="post">
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
				<label for="tab-1" class="tab">Student Registration</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up">
				<label for="tab-2" class="tab"></label>
				
				<!----Login----->
			
				<div class="login-form">
					<div class="group">
							<label for="user" class="label">First name</label>
							<input name="fname" type="text" class="input" required>
						</div>
						<div class="group">
							<label for="user" class="label">Last name</label>
							<input name="lname" type="text" class="input" required >
						</div>
						
						<div class="group">
							<label for="user" class="label">Email Address</label>
							<input name="email" type="email" class="input" value="<?php echo $email; ?>">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input name="pass1" type="password" class="input"  value="<?php echo $password_1; ?>" required >
						</div>
						<div class="group">
							<label for="pass" class="label">Confirm Password</label>
							<input name="pass2" type="password" class="input" required >
						</div>
						
						<div class="group">
							<input type="submit" class="button"  name="reg_user"  value="Register" required>
						</div>
						
						<div class="hr"></div>
						<div class="foot-lnk">
						<a href="LoginPage.php">
							<label >Already Registered?</label></a>
						
					</div>
					</div>
			</div>
		</div>
	</form>
	</body>

	<script src="myScript.js">
	

	</script>
	


</html>
		