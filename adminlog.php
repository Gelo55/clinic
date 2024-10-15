<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/admlog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <img src="assets/images/bcplogo.png" alt="School Logo" class="logo">
            <form action="dashboard.php" method="POST">
                <label for="username">Username :</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" required>
                
                <div class="forgot-password">
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit">Log in</button>
            </form>
                  
        </div>

    </div>
                
</body>

<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</html>