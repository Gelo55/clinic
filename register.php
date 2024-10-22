<?php
session_start();

// Database connection
$connect = mysqli_connect("localhost", "root", "", "thecompany");

$email = $password = $confirm_password = "";
$email_error = $password_error = $confirm_password_error = "";

// Check if the form is submitted
if (isset($_POST['register'])) {
    // Email validation
    if (empty($_POST["email"])) {
        $email_error = "Email is required!";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format!";
    } else {
        $email = $_POST["email"];
    }

    // Password validation
    if (empty($_POST["password"])) {
        $password_error = "Password is required!";
    } elseif (strlen($_POST["password"]) < 8) {
        $password_error = "Password must be at least 8 characters long!";
    } elseif (!preg_match("/[A-Z]/", $_POST["password"])) {
        $password_error = "Password must contain at least one uppercase letter!";
    } elseif (!preg_match("/[a-z]/", $_POST["password"])) {
        $password_error = "Password must contain at least one lowercase letter!";
    } elseif (!preg_match("/[0-9]/", $_POST["password"])) {
        $password_error = "Password must contain at least one number!";
    } elseif (!preg_match("/[\W]/", $_POST["password"])) {  // Optional: Special character check
        $password_error = "Password must contain at least one special character!";
    } else {
        $password = $_POST["password"];
    }

    // Confirm password validation
    if (empty($_POST["confirm_password"])) {
        $confirm_password_error = "Please confirm your password!";
    } elseif ($_POST["password"] !== $_POST["confirm_password"]) {
        $confirm_password_error = "Passwords do not match!";
    } else {
        $confirm_password = $_POST["confirm_password"];
    }

    // If there are no errors, proceed to register the user
    if (empty($email_error) && empty($password_error) && empty($confirm_password_error)) {
        // Check if the email already exists in the database
        $check_email = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email'");
        if (mysqli_num_rows($check_email) > 0) {
            $email_error = "Email is already registered!";
        } else {
            // Hash the password before storing it
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert the user data into the database
            $insert_user_query = "INSERT INTO user (email, password, account_type) VALUES (?, ?, ?)";
            $stmt = $connect->prepare($insert_user_query);
            $account_type = "user";  // Regular user
            $stmt->bind_param("sss", $email, $hashed_password, $account_type);
            $stmt->execute();
            $stmt->close();

            // Redirect to login page after successful registration
            $_SESSION['email'] = $email;
            $_SESSION['account_type'] = $account_type;
            header("Location: user_dashboard.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="logs.css">
    <style>
        .form {
            margin-top: 20px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .error {
            color: red;
            margin-top: 5px;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .register {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="bg"></div>
    <form class="form" method="post">
        <h1>Register</h1>

        <input type="text" placeholder="Email" name="email" class="input-field" value="<?php echo htmlspecialchars($email); ?>">
        <?php if ($email_error) { ?><span class="error"><?php echo $email_error; ?></span><?php } ?>

        <input type="password" placeholder="Password" name="password" class="input-field" value="<?php echo htmlspecialchars($password); ?>">
        <?php if ($password_error) { ?><span class="error"><?php echo $password_error; ?></span><?php } ?>

        <input type="password" placeholder="Confirm Password" name="confirm_password" class="input-field" value="<?php echo htmlspecialchars($confirm_password); ?>">
        <?php if ($confirm_password_error) { ?><span class="error"><?php echo $confirm_password_error; ?></span><?php } ?>

        <div class="register">
            <button type="submit" class="btn" name="register">Register</button>
        </div>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </form>
</body>
</html>
