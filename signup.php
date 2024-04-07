<?php
	include("functions/signup.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearGenius | SignUp</title>
    <link rel="stylesheet" href="css/login/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="wrapper">
            <form method="post" onsubmit="return validateForm()">
                <h1>Sign Up</h1>
                <div class="input-box">
                    <input type="text" placeholder="First Name" name="first_name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Last Name" name="last_name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="user_name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" id="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <p id="print-err" class="print-error-msg"></p>
                <div class="input-box">
                    <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember Me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="btn" value="Signup">Sign Up</button>
                <div class="register-link">
                    <p>Have an account? <a href="login.php">Login</a></p>
                </div>
            </form>
            <!--Display the error message if it's not empty-->
            <?php if (!empty($error)): ?>
                <div class="register-link print-error-msg">
                    <?php echo "<p>$error</p>"; ?>
                </div>
            <?php endif; ?>
        </div>
        <script src="functions/js/main.js"></script>
    </body>
</html>