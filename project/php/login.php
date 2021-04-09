<?php
    session_start();
    ?>  
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="login.css">
        <style>
            <?php include"login.css" ?>
        </style>
    </head>
    <body>
        <div class="box">
        <form class="box" action="../include/login.inc.php" method="post">
            <h2>Login</h2>
            <input type="text" name="uid" placeholder="Enter Username/Email">
            <input type="password" name="pwd" placeholder="Enter Password">
            <button type="submit" name="submit">LOGIN</button>
            <h6><a href="signup.php"> Don't have an account?</a></h6>
        <div class="ermsg">
        <?php
		if(isset($_GET["error"]))
		{
			if($_GET["error"] == "emptyinput")
			{
				echo "<p>Fill in all fields!</p>";
			}
			else if($_GET["error"] == "wronglogin")
			{
				echo "<p>Incorrect Credentials!</p>";
			}	
		}
		?>
        </div>   
        </div>
    </body>
</html>