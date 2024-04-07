<?php 
    session_start();

    include("include.php");

    $error = "";// initialize empty error message

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $first_name = $_POST['first_name'];

        // Perform validation
        if(empty($user_name) || empty($password) || empty($first_name)) {
            $error = "Please fill in all fields.";
        } elseif(!ctype_alpha($first_name)) {
            $error = "Name should contain only alphabets.";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Save to database using prepared statement
            $user_id = random_num(20);
            $query = "INSERT INTO users (user_id, user_name, password, first_name) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "ssss", $user_id, $user_name, $hashed_password, $first_name);
            
            if(mysqli_stmt_execute($stmt)) {
                // Registration successful, redirect to login page
                header("Location: login.php");
                die(); // Stop script execution after redirection
            } else {
                $error = "An error occurred while registering.";
            }
        }
    }
?>
