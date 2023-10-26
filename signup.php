<?php
$message = null;
if(isset($_GET["status"])){
    $status = $_GET["status"];
    if($status == 0){
        $message = "<h6 class='text-danger'style='color: red; font-size: 16px;>Required values were not submitted</h6>";
    }elseif($status == 1){
        $message = "<h6 class='text-danger'style='color: red; font-size: 16px;>Username and password are required to enter</h6>";        
    }else{
       $message = "<h6 class='text-success' style='color: green; font-size: 16px;'>Successfully Registered</h6>";

    }
}

?>
<html>
    <head>
        <title>Create Account</title>
        <link rel="stylesheet" type="text/css" href="assets/css/signup.css">   
    </head>
    <body>
        
        <div class="container">
                <h1>Create Your Account</h1>
               
               <?php echo $message; ?>
               
                <form action="signup_process.php" method="POST" onsubmit="return validateForm();">
                    <input type="text" name="firstName" placeholder="First Name" required>
                    <input type="text" name="lastName" placeholder="Last Name" required>
                    <input type="text" id="userId" name="userId" placeholder="User_Id (UWU/XXX/YY/ZZZ)" required>
                    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required>
                    <input type="email" id="emailAddress" name="emailAddress" placeholder="Uni-Email" required>
                    <input type="password" id="password" name="password" placeholder="Password (XXXXX)" required>
                    <input type="password" id="confPassword" name="confPassword" placeholder="Confirm Password" required>
                    <input type="submit" value="Create Account">
                </form>
                <p>Already have an account? <a href="Login.php">Login</a></p>
        </div>

        <script>
            function validateForm() {
                var userId = document.getElementById("userId").value;
                var phoneNumber = document.getElementById("phoneNumber").value;
                var emailAddress = document.getElementById("emailAddress").value;
                var password = document.getElementById("password").value;
                var confPassword = document.getElementById("confPassword").value;
                var u_IdPattern = /^UWU\/\w+\/\d{2}\/\d{3}$/;
                var phonePattern = /^\d{10}$/;
                var emailPattern = /^[a-zA-Z0-9._-]+@std\.uwu\.ac\.lk$/;

                if (!u_IdPattern.test(userId)) {
                    alert("User Id must be in the format 'UWU/XXX/YY/ZZZ'.");
                    return false;
                }

                if (!phonePattern.test(phoneNumber)) {
                    alert("Phone number must be a 10-digit number.");
                    return false;
                }

                if (!emailPattern.test(emailAddress)) {
                    alert("Please enter a valid Uni_Email in the format 'iitxxxxx@std.uwu.ac.lk'");
                    return false;
                }

                if (password.length > 50) {
                    alert("Password length must not exceed 50 characters.");
                    return false;
                }

                if (password != confPassword) {
                    alert("Passwords do not match.");
                    return false;
                }

                return true;
            }
        </script>
    </body>
</html>

