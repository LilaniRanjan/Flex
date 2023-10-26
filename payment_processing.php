


<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
 
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
        }

        .custom-success {
          text-align: center;
          color: #008000;
        }

        .custom-errors {
          margin-bottom: 20px;
          padding: 10px;
          background-color: #ffcccc;
          color: #cc0000;
          border-radius: 5px;
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
                            <img  class="d-none d-md-flex ps-3" src="./assets/image/Logo.png" width="100">
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
 
    <!-- Include your header and navigation bar here if needed -->
    
    <div class="custom-container">
        <h1 class="custom-heading">Payment Confirmation</h1> <br>
        
        <!-- Payment Confirmation Form -->
        <form method="POST" action="pay_php.php">
            <div class="custom-form-group">
                <label for="cardType" class="custom-label">Card Type:</label>
                <select name="cardType" id="cardType" class="custom-input" required>
                    <option value="">Select Card Type</option>
                    <option value="Master">Master</option>
                    <option value="Visa">Visa</option>
                </select>
            </div>

            <div class="custom-form-group">
                <label for="amount" class="custom-label">Payment Amount:</label>
                <input type="text" name="amount" id="amount" class="custom-input" required>
            </div>

            <div class="custom-form-group">
                <label for="nameOnCard" class="custom-label">Name on Card:</label>
                <input type="text" name="nameOnCard" id="nameOnCard" class="custom-input" required>
            </div>

            <div class="custom-form-group">
                <label for="cardNumber" class="custom-label">Card Number:</label>
                <input type="text" name="cardNumber" id="cardNumber" class="custom-input" required>
            </div>

            <div class="custom-form-group">
                <label for="cvc" class="custom-label">CVC:</label>
                <input type="text" name="cvc" id="cvc" class="custom-input" required>
            </div>

            <div class="custom-form-group">
                <label for="expireDate" class="custom-label">Expiration Date (MM/YY):</label>
                <input type="text" name="expireDate" id="expireDate" class="custom-input" required>
            </div>

            <input type="submit" value="Submit" class="custom-submit">
        </form>
    </div>
    
   <!-- Footer Start -->
            <div class="container-fluid bg-img text-secondary bg-dark" style="margin-top: 70px; padding-bottom: 30 px;">
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-6 mb-lg-n5">
                            <!--<div class="d-flex flex-column align-items-center justify-content-center text-center h-100 border-inner p-4" style="background-color: #E88F2A ;">-->
                            <a href="index.html" class="navbar-brand pt-5">
                                <img class="px-4" src="./assets/image/Logo.png" alt="Logo" width="350">
                            </a>
                            <!--</div>-->
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="row gx-5">
                                <div class="col-lg-4 col-md-12 pt-5 mb-5">
                                    <h4 class="text-uppercase mb-4" style="color: #E88F2A; font-size: 20px;">Get In Touch</h4>
                                    <div id="footerSubFont" class="d-flex mb-2">
                                        <i class="fa fa-map-marker px-3" aria-hidden="true" style="color: #E88F2A;"></i>
                                        <p class="mb-0">Uva wellasa University, Badulla</p>
                                    </div>
                                    <div id="footerSubFont" class="d-flex mb-2">
                                        <i class="fa fa-envelope-o px-3" aria-hidden="true" style="color: #E88F2A;"></i>
                                        <p class="mb-0">flex@example.com</p>
                                    </div>
                                    <div id="footerSubFont" class="d-flex mb-2">
                                        <i class="fa fa-phone px-3" aria-hidden="true"style="color: #E88F2A;"></i>
                                        <p class="mb-0">+012 345 67890</p>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <a style="background-color: #E88F2A;" class="btn btn-lg btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                        <a style="background-color: #E88F2A;" class="btn btn-lg btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                        <a style="background-color: #E88F2A;" class="btn btn-lg btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                    <h4 class="text-uppercase mb-4" style="color: #E88F2A; font-size: 20px;">Quick Links</h4>
                                    <div class="d-flex flex-column justify-content-start">
                                        <a class="mb-2" href="index.php" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>Home</a>
                                        <a class="mb-2" href="#" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>About Us</a>
                                        <a class="mb-2" href="#" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>Our Services</a>
                                        <a class="" href="#" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>Contact Us</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                    <h4 class="text-uppercase mb-4" style="color: #E88F2A; font-size: 20px;">Newsletter</h4>
                                    <p id="footerSubFont">"Savor delicious meals at our university canteen. Tasty, nutritious, affordable!"</p>
                                    <form action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                            <button class="btn" style="background-color: #E88F2A;">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid text-secondary py-4" style="background: #111111; margin-top: 32 px;">
                <div class="container text-center">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Flex</a>. All Rights Reserved.</p>
                </div>
            </div>
            
        </div>
    <?php
// put your code here
    ?>
  

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
 
    <!-- Include your footer and any JavaScript files if needed -->
</body>
</html>

   
</body>
</html>

