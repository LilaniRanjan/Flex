<?php
$message = null;
if(isset($_GET["status"])){
    $status = $_GET["status"];
    if($status == 0){
        $message = "<h6 class='text-danger' style='color: red'; font-size: 16px;>Required values were not submitted</h6>";
    }elseif($status == 1){
        $message = "<h6 class='text-danger'style='color: red'; font-size: 16px;>Username and password are required to enter</h6>";        
    }else{
        $message = "<h6 class='text-danger'style='color: red'; font-size: 16px;>Username or password is incorrect. Please try again</h6>";
    }
}
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="assets/css/Login.css">       
    </head>
    <body>
        <div class="container">
            <?php echo $message; ?> 
            <h1>Login</h1>
            <form action="login_process.php" method="POST" onsubmit="return validateForm();">
                <input type="text" id="useri_d" name="user_id" placeholder="User Id" autocomplete="off" required>
                <input type="password" id="password" name="password" placeholder="Password" autocomplete="off" required>
                <input type="submit" value="Login">
            </form>
            <p>Don't have an account? <a href="Signup.php"><b>Create one</b></a></p>
            <p> <a href="Forget_pwd.php"><b>Forget Password </b></a> </p>

            

        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const loginForm = document.getElementById("loginForm");
                const errorMessage = document.getElementById("error-message");

                loginForm.addEventListener("submit", function (event) {
                    event.preventDefault();

                    const username = loginForm.username.value;
                    const password = loginForm.password.value;

                    if (username === "your_username" && password === "your_password") {
                        errorMessage.textContent = "Login successful!";
                        errorMessage.style.color = "green";
                    } else {
                        errorMessage.textContent = "Invalid username or password.";
                        errorMessage.style.color = "red";
                    }
                });
            });

        </script>

    </body>
</html>
