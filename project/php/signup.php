<?php
	session_start();
?>
<html>
    <head>
    	<title>Sign up page</title>
    	<link rel="stylesheet" href="login.css">
                <style>
            <?php include"login.css" ?>
        </style>
    </head>
    <body>
        <div class="box">
        <form action="../include/signup.inc.php" method="post">
        	<h2>Sign up</h2>
        	<input type="text" name="fullname" placeholder="Enter fullname">
        	<input type="text" name="uid" placeholder="Enter username">
        	<input type="text" name="email" placeholder="Enter e-mail address">
        	<input type="text" name="mobile" placeholder="Enter mobile number">
            <input type="text" name="address" placeholder="Enter address">
        	<input type="password" name="pwd" placeholder="Create password">
        	<input type="password" name="confirm-pwd" placeholder="Confirm password">
        	<button type="submit" name="submit">SIGN UP</button>
        	<h6> <a href="login.php">Already have an account?</a></h6>
			</form>
			<div class="ermsg">
    		<?php
		if(isset($_GET["error"]))
		{
			if($_GET["error"] == "emptyinput")
			{
				echo "<p>Fill in all fields!</p>";
			}
			else if($_GET["error"] == "invaliduid")
			{
				echo "<p>Choose a proper username!</p>";
			}
			else if($_GET["error"] == "invalidemail")
			{
				echo "<p>Choose a proper E-Mail!</p>";
			}
			else if($_GET["error"] == "passwordsdontmatch")
			{
				echo "<p>Passwords Does not match, Please type a valid password!</p>";
			}		
			else if($_GET["error"] == "stmtfailed")
			{
				echo "<p>Something Went Wrong, Try Again!</p>";
			}	
			else if($_GET["error"] == "usernameoremailormobiletaken")
			{
				echo "<p>Username or E-Mail or Mobile is already taken, Please use another credentials or Login using these credentials!</p>";
			}
			else if($_GET["error"] == "passwordshouldbe8ormore")
			{
				echo "<p>Password must be 8 or more than 8 characters!</p>";
			}
			else if($_GET["error"] == "mobileshouldbe10")
			{
				echo "<p>Mobile Number Should be of 10 digits!</p>";
			}
			else if($_GET["error"] == "none")
			{
				echo "<p>You have Signed Up!</p>";
			}	
		}
		?>
		</div>
		</div>
    </body>
</html>