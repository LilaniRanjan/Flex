<?php
// Validate and sanitize user input
$cardType = isset($_POST['cardType']) ? sanitizeInput($_POST['cardType']) : '';
$amount = isset($_POST['amount']) ? sanitizeInput($_POST['amount']) : '';
$nameOnCard = isset($_POST['nameOnCard']) ? sanitizeInput($_POST['nameOnCard']) : '';
$cardNumber = isset($_POST['cardNumber']) ? sanitizeInput($_POST['cardNumber']) : '';
$cvc = isset($_POST['cvc']) ? sanitizeInput($_POST['cvc']) : '';
$expireDate = isset($_POST['expireDate']) ? sanitizeInput($_POST['expireDate']) : '';

// Error handling and validation
$errors = array(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate card type
    if ($cardType !== 'Master' && $cardType !== 'Visa') {
        $errors[] = 'Invalid card type.';
    }

    // Validate payment amount
    if (!is_numeric($amount) || $amount <= 0) {
        $errors[] = 'Invalid payment amount.';
    }

    // Validate name on card
    if (empty($nameOnCard)) {
        $errors[] = 'Name on card is required.';
    }

    // Validate card number
    if (empty($cardNumber)) {
        $errors[] = 'Card number is required.';
    } elseif (!preg_match('/^[0-9]{16}$/', $cardNumber)) {
        $errors[] = 'Invalid card number.';
    }

    // Validate CVC
    if (empty($cvc)) {
        $errors[] = 'CVC is required.';
    } elseif (!preg_match('/^[0-9]{3,4}$/', $cvc)) {
        $errors[] = 'Invalid CVC.';
    }

    // Validate expiration date
    if (empty($expireDate)) {
        $errors[] = 'Expiration date is required.';
    } elseif (!preg_match('/^(0[1-9]|1[0-2])\/[0-9]{2}$/', $expireDate)) {
        $errors[] = 'Invalid expiration date.';
    }
}

// Function to sanitize user input
function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}
?>

<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/HomeStyle.css">
        <link rel="stylesheet" href="./assets/css/home.css">

        <!--Nav Link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        

        <!-- Fontawesome Icon -->
        <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <!--1st Main content Start-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!--1st Main content End-->

                <!--Product-->     
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
        <script src="./assets/js/HomeScript.js"></script>
    <title>Payment Confirmation</title>
  
    <style>
        /* Custom CSS for Payment Page */
        .custom-container {
          max-width: 500px;
          margin: 50px auto;
          padding: 30px;
          background-color: #ffffff;
          border-radius: 5px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

       .custom-heading {
    text-align: center;
    color: #333333;
    font-size: 24px; /* Larger font size */
    font-weight: bold; /* Bold text */
    margin-bottom: 20px; /* Add some space below the heading */
}


     .custom-success {
    text-align: center;
    background-color: #f3faff; /* Light blue background */
    border: 2px solid #008000; /* Green border */
    border-radius: 10px; /* Rounded corners */
    padding: 20px; /* Spacing inside the container */
    margin-top: 20px; /* Add some space between this section and the previous one */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Light shadow */
    color: #008000; /* Green text color */
    font-size: 20px; /* Larger font size */
    font-weight: bold; /* Bold text */
}


     .custom-errors {
    margin-bottom: 20px;
    padding: 20px;
    background-color: #ffdddd; /* Light red background */
    color: #ff3333; /* Darker red text color */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle box shadow */
    font-size: 16px; /* Font size */
    text-align: center; /* Center text */
}


        .custom-form-group {
          margin-bottom: 20px;
        }

        .custom-label {
          display: block;
          font-weight: bold;
          color: #333333;
          margin-bottom: 5px;
        }

        .custom-input {
          width: 100%;
          padding: 10px;
          font-size: 16px;
          border-radius: 5px;
          border: 1px solid #dddddd;
          outline: none;
        }

        .custom-submit {
          display: block;
          width: 100%;
          padding: 10px;
          font-size: 16px;
          border-radius: 5px;
          border: none;
          background-color: #ff7f50;
          color: #ffffff;
          cursor: pointer;
          margin-bottom: 10px;
        }

        .custom-submit:hover {
          background-color: #ff6347;
        }

        .custom-retry-cancel-container {
          display: flex;
          justify-content: space-between;
        }

        .custom-retry-cancel-container .custom-submit {
          background-color: #e6e6e6;
          color: #333333;
          margin: 0;
        
    </style>
  
    
</head>
<body id="bodyCon">
    
     
    
    <!--Top Header-->
        <div class="wrap" id="wrap">
            <div class="">
                <div class="row justify-content-between p-2">
                    <div class="col">
                        <p class="ms-5 mb-0 phone" id="phone"><span class="fa fa-phone"></span> <a style="color: #fff;" class="ms-2" href="#">077-1234567</a></p>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <div class="social-media" id="socialmedia">
                            <p class="mb-0 d-flex">
                                <a id=socialmediaLink" href="#" style="color:#fff;" class="mx-2 d-flex align-items-center justify-content-center"><span class="fa fa-facebook fa-2x"><i class="sr-only">Facebook</i></span></a>
                                <a id=socialmediaLink" href="#" style="color:#fff;" class="mx-2 d-flex align-items-center justify-content-center"><span class="fa fa-twitter fa-2x"><i class="sr-only">Twitter</i></span></a>
                                <a id=socialmediaLink" href="#" style="color:#fff;" class="mx-2 d-flex align-items-center justify-content-center"><span class="fa fa-instagram fa-2x"><i class="sr-only">Instagram</i></span></a>
                                <a id=socialmediaLink" href="#" style="color:#fff;" class="mx-2 d-flex align-items-center justify-content-center"><span class="fa fa-dribbble fa-2x"><i class="sr-only">Dribbble</i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--NavigationBar-->
        <div style="background: linear-gradient(#E88F2A, black); color: white;">
            <section class="header-main" style="color: white;">
                <div class="container-fluid">
                    <div class="row p-2 pt-3 d-flex align-items-center">
                        <div class="col-md-2">
                            <img  class="d-none d-md-flex ps-3" src="/assets/images/Logo.png" width="100">
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex form-inputs">
                                <input class="form-control" type="text" placeholder="Search any Food...">
                                <button>
                                    <i style="color: black;" class="fa fa-search fa-2x" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="float-right">
                                <div class="d-flex d-none d-md-flex flex-row align-items-center">
                                    <a href="#">
                                        <span class="shop-bag"><i class="fa-solid fa-cart-shopping fa-sm"></i></span>
                                    </a>
                                    <div class="d-flex flex-column ms-2">
                                        <span class="qty">0 Food</span>
                                        <span class="fw-bold">$0.00</span>
                                    </div>    
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="d-flex d-none d-md-flex flex-row align-items-center">
                                <button type="button" class="btn btn-outline-warning btn-lg">Sign In</button>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>

            <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav m-auto" style="font-size: 20px;">
                            <li class="nav-item active"><a href="index.php" class="nav-link mx-3">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle mx-3" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Meals</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="#">Page 1</a>
                                    <a class="dropdown-item" href="#">Page 2</a>
                                    <a class="dropdown-item" href="#">Page 3</a>
                                    <a class="dropdown-item" href="#">Page 4</a>
                                </div>
                            </li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link">Advertisment</a></li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link">Contact</a></li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link">About Us</a></li>
                        </ul>
                        <a id="customization-button" class="btn btn-outline-light" href="foodCusPage.php">Customization</a>
                    </div>
                </div>
            </nav>
        </div>
   <div class="custom-container">
        <h1 class="custom-heading">Payment Confirmation</h1>
        <?php if (!empty($errors)) : ?>
            <div class="custom-errors">
                <h2 class="custom-error-message">Error(s) occurred:</h2>
                <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
                </ul>
              <form method="post" style="text-align: center;">
    <input type="submit" name="retry" value="Retry the payment" style="padding: 10px 20px; font-size: 16px; border: none; background-color: #ff7f50; color: white; cursor: pointer; border-radius: 5px; margin-right: 10px;">
    <input type="submit" name="cancel" value="Cancel the payment" style="padding: 10px 20px; font-size: 16px; border: none; background-color: #FF0000; color: white; cursor: pointer; border-radius: 5px;">
</form>

                <?php
                if (isset($_POST['cancel'])) {
                 echo nl2br("Your order has been cancelled!\n");
                 
                 echo '<style>.custom-form-group, .custom-submit { display: none; }</style>';
                } elseif (isset($_POST['retry'])) {
                   header("Location: payment_processing.php");

                    exit;
                }
                ?>
            </div>
        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
            <div class="custom-success">
                <p>Card Type: <?php echo $cardType; ?></p>
                <p>Payment Amount: <?php echo $amount; ?></p>
                <p>Name on Card: <?php echo $nameOnCard; ?></p>
                <p>Card Number: **** **** **** <?php echo substr($cardNumber, -4); ?></p>
                
<div style="display: flex; justify-content: space-between; margin-top: 0px;">
    <div style="margin-left: 4px;"> <!-- Add a margin to create spacing -->
        <form method="post" action="payment_processing.php">
            <input type="submit" name="change" value="Change" style="display: inline-block; padding: 10px 20px; font-size: 16px; border-radius: 5px; border: none; background-color: #FF0000; color: white; cursor: pointer;">
        </form>
    </div>
    <form method="post" action="payment_confirmation.php">
        <input type="submit" name="pay" value="Pay" style="display: inline-block; padding: 10px 20px; font-size: 16px; border-radius: 5px; border: none; background-color: #4CAF50; color: white; cursor: pointer;">
    </form>
    
</div>
 
            
            </div>
            
    <?php endif; ?>
</div>

    
    <!-- Include your footer and any JavaScript files if needed -->
</body>
</html>
