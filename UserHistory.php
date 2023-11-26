<?php

require './classes/DbConnector.php';
$dbcon = new classes\DbConnector();
$con = $dbcon->getconnection();

try {
    $con = $dbcon->getconnection();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_history"])) {
    try {
        $query = "DELETE FROM payment"; // Adjust this query according to your database structure
        $statement = $con->prepare($query);
        $statement->execute();
        // Redirect to the same page after deletion
        header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User History</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/SingleUserHistory_style.css">
        
    </head>
    <body>
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
                                        <span class="qty">
                                            <?php
                                            if (isset($_SESSION['total_food_count'])) {
                                                echo $_SESSION['total_food_count'];
                                            } else {
                                                echo '0';
                                            }
                                            ?>
                                            Food</span>
                                        <span class="fw-bold">
                                            <?php
                                            if (isset($_SESSION['payment_total_amount'])) {
                                                echo "Rs " . $_SESSION['payment_total_amount'] . ".00";
                                            } else {
                                                echo 'Rs 0.00';
                                            }
                                            ?>
                                        </span>
                                    </div>    
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="d-flex d-none d-md-flex flex-row align-items-center">
                                <?php
                                if (isset($_SESSION['user_id'])) {
                                    ?>
                                    <a href="Logout.php" type="button" class="btn btn-outline-warning btn-lg">LogOut</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="Login.php" type="button" class="btn btn-outline-warning btn-lg">Sign In</a>
                                    <?php
                                }
                                ?>
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
                            <li class="nav-item mx-3"><a href="advertisment.php" class="nav-link">Advertisment</a></li>
                            <li class="nav-item mx-3"><a href="contact.php" class="nav-link">Contact</a></li>
                            <li class="nav-item mx-3"><a href="aboutus.php" class="nav-link">About Us</a></li>
                        </ul>
                        <a id="customization-button" class="btn btn-outline-light" href="foodCusPage.php">Customization</a>
                    </div>
                </div>
            </nav>
        </div>

    <div class="history">
        <div class="table-container">
            <h5>User History</h5>
            <h5 class="card-title">
                <form method="post" id="deleteForm">
                    <div class="input-group">
                        <button type="submit" name="delete_history" class="btn" form="deleteForm" style="margin-left: 80%; border: 1px solid #E88F2A; color: #E88F2A; background-color: black;">Delete All History</button>
                    </div>
                </form>

            </h5>
            <table id="historyTable" class="table">
                <thead class="text-center py-2">
                    <tr>
                        <th style="background-color: #333; color: wheat;" scope="col">Transaction ID</th>
                        <th style="background-color: #333; color: wheat;" scope="col">Date & Time</th>
                        <th style="background-color: #333; color: wheat;" scope="col">Details</th>
                        <th style="background-color: #333; color: wheat;" scope="col">Amount(Rs)</th>
                    </tr>
                </thead>
                <?php
                try {
                    $query = "SELECT payment_id, payment_date_time, payment_method, amount
                              FROM payment";
                    $statement = $con->prepare($query);
                    $statement->execute();

                    // Fetch the results
                    $payments = $statement->fetchAll(PDO::FETCH_ASSOC);

                    // Check if there are any payments
                    if (!empty($payments)) {
                        echo '<tbody class="text-center">';
                        foreach ($payments as $payment) {
                            echo '<tr>';
                            echo '<td style="background-color: black; color: white;">' . $payment['payment_id'] . '</td>';
                            echo '<td style="background-color: black; color: white;">' . $payment['payment_date_time'] . '</td>';
                            echo '<td style="background-color: black; color: white;">' . $payment['payment_method'] . '</td>';
                            echo '<td style="background-color: black; color: white;">' . $payment['amount'] . '</td>';
                            echo '</tr><br>';
                        }
                        echo '</tbody>';
                    } else {
                        echo '<tbody class="text-center">';
                        echo '<tr><td style="background-color: black; color: white;" colspan="4">No user history available.</td></tr>';
                        echo '</tbody>';
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </table><br>
        </div>
    </div>
    <!-- Footer Start -->
            <div class="container-fluid bg-img text-secondary bg-dark" style="margin-top: 450px; padding-bottom: 30 px;">
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
                                        <a class="mb-2" href="aboutus.php" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>About Us</a>
                                        <a class="mb-2" href="services.php" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>Our Services</a>
                                        <a class="" href="contactus.php" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>Contact Us</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>