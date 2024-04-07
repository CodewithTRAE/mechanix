<?php 
    session_start();

    include("include.php");

    $error = "";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password)) {
            $query = "SELECT * FROM users WHERE user_name = ? LIMIT 1";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "s", $user_name);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if(password_verify($password, $user_data['password'])) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    exit();
                } else {
                    $error = "Wrong username or password!";
                }
            } else {
                $error = "Wrong username or password!";
            }
        } else {
            $error = "Please enter both username and password!";
        }
    }
?>
