<?php 

include("LoginPageProcess.php");
?>

<html>
    <head>
        <title>Log-In</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mystyle.css">
		
	</head>
	<body>
			
	<form action = "LoginPageProcess.php" method="post">
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log In</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
				<!----Login----->
			
				<div class="login-form">
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Email</label>
							<input name="email" type="email" class="input" required>
						</div>
						
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input name="pass" type="password" class="input" data-type="password" required>
						</div>
						
						<div class="group">
							<input type="submit" name="login_user" class="button" value="Log In">
						</div>
						<div class="hr"></div>
						
						<div class="foot-lnk">
						<a href="Register.php">
							<label>Create Account</a>
						</div>
						<div class="foot-lnk">
						<a href="LoginPageAdmin.php">
							<label>Log-in as Administrator</a>
						</div>
						
												
					</div>
					<!----Register----->
				
				</div>
			</div>
		</div>
	</form>
	</body>

	<script src="myScript.js">
	

	</script>
	


</html>
		