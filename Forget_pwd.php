<html>
    <head>
        <title>Forgot Password</title>
        <link rel="stylesheet" type="text/css" href="assets/css/forgetpw.css"> 
    </head>
    <body>
        <div class="container">
            <h1>Forgot Password</h1>
            <p>Please enter your email address to reset your password.</p>
            <form action="forget_process.php" method="post" onsubmit="return validateEmail();" >
                <input type="email" name="email" id="email" placeholder="Email" required>
                <button type="submit">Reset Password</button>
            </form>
        </div>


        <script>
            function validateEmail() {
                var emailInput = document.getElementById("email");
                var email = emailInput.value.trim();
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    alert("Please enter a valid email address.");
                    return false;
                }
                return true;
            }
        </script>
    </body>
</html>
