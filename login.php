<!-- here will be session created -->
<?php
session_start();
?>
<!-- <!DOCTYPE html>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>project hub Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="username.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="validate.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html> -->
<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>project hub Login Form</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- <div id="particles-js"></div> -->
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="username.php" method="post">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="txt" placeholder="username" required="">
                <input type="email" name="email" placeholder="email" required="">
                <input type="password" name="pswd" placeholder="password" required="">
                <button>Sign up</button>
            </form>
        </div>

        <div class="login">
            <form action="validate.php" method="post">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="email" required="">
                <input type="password" name="pswd" placeholder="password" required="">
                <button>Login</button>
        </div>
    </div>
    
    <!-- <script src="particles.js"></script>
    <script src="particleapp.js"></script> -->
</body>
</html>

