<?php
	include("functions/login.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearGenius | Login</title>
    <link rel="stylesheet" href="css/login/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
    <div class="wrapper">
        <form method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="user_name" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit" class="btn" value="Login">Login</button>
            <div class="register-link">
                <p>Dont have an account? <a href="signup.php">Register</a></p>
            </div>
        </form>
        <!--Display the error message if it's not empty-->
        <?php if (!empty($error)): ?>
			<div class="register-link print-error-msg">
            	<?php echo "<p>$error</p>"; ?>
			</div>
		<?php endif; ?>
    </div>
    </body>
</html>