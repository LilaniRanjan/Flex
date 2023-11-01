<?php
require_once './classes/PopularFoodDetails.php';
require_once './classes/DbConnector.php';

$dbcon = new \classes\DbConnector();
$con = $dbcon->getConnection();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>

        <!--CSS Files-->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/HomeStyle.css">
        <link rel="stylesheet" href="./assets/css/home.css">

        <!--Nav Link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--Slider Link-->
        <link href="https://fonts.googleapis.com/css?family=Roboto|Oswald:300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Fontawesome Icon -->
        <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <!--1st Main content Start-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!--1st Main content End-->

        <!--Product-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


        <script src="./assets/js/HomeScript.js"></script>
    </head>

    <body id="bodyCon">
        <style>
            #rounded-button{
                display: inline-block;
                padding: 10px 20px;
                font-size: 16px;
                font-weight: bold;
                text-align: center;
                text-transform: uppercase;
                border: none;
                border-radius: 20px; /* Adjust this value to control the roundness of the corners */
                cursor: pointer;
                background-color: black;
                color: #fff;
                transition: background-color 0.3s ease;
                border: 3px solid #E88F2A;
            }

            #parastyle{
                background-color: rgb(0,0,0, 0.7);

            }

            .feedback-button {
                background-color: #000000; 
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            }

            .feedback-button:hover {
                background-color: #2980b9; 
            }
            .quantity-input {
                width: 70px; 
                padding: 8px;
                font-size: 16px;
            }
            
            #styleOfContents{
                background-color: rgb(0,0,0,0.8);
                font-size: 18px;
                color: white;
                border: 2px solid white;
                border-radius: 25px;
            }
        </style>

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
                                <a href="Login.php" type="button" class="btn btn-outline-warning btn-lg">Sign In</a>
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
                                    <a class="dropdown-item" href="meals.php">Meals</a>
                                    <a class="dropdown-item" href="beverage.php">Beverages</a>
                                </div>
                            </li>
                            <li class="nav-item mx-3"><a href="Advertisment.php" class="nav-link">Advertisment</a></li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link">Contact</a></li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link">About Us</a></li>
                        </ul>
                        <a id="customization-button" class="btn btn-outline-light" href="foodCusPage.php">Customization</a>
                    </div>
                </div>
            </nav>
        </div>
        
        
        <!--Main Content Section-->

        <?php 
        if(isset($_GET["id"])){
            $popular_food_id = $_GET["id"];
            $popular_obj = new PopularFoodDetails(null, null, null, null, null);
            $popular_detail = $popular_obj->getPopularFoodDetailById($con, $popular_food_id);
            if ($popular_detail) {
        ?>

        <div class="container mt-5 py-5" id="styleOfContents">
            <div class="row">
                <div class="col-md-6">
                    <img src="./AdminPanel/<?php echo $popular_detail->getPopular_food_image_file(); ?>" alt="Product Image" class="img-fluid p-5">
                </div>
                <div class="col-md-6 mt-5 pt-5">
                    <h1 style="color: wheat;"><?php echo $popular_detail->getPopular_food_name(); ?></h1>
                    <br>
                    <p>
                        <span class="px-3" style="color: whitesmoke;"><s>Rs <?php echo $popular_detail->getPopular_food_default_price(); ?></s></span>  
                        <span class="px-3" style="color: whitesmoke;">Rs <?php echo $popular_detail->getPopular_food_current_price(); ?></span> 
                    </p>
                    <p class="py-4"><?php echo $popular_detail->getPopular_food_desc(); ?></p>
                    
                    <form action="AddToCard.php">
                        <input type="hidden" name="id" value= '<?php echo $popular_food_id ?>' >
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" class="form-control mb-2 quantity-input">
                    
                    
                        <button class="btn btn-outline-warning mt-5" type='submit'>Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        
        <?php
            }
        }
        ?>


        <!-- Footer Start -->
        <div class="container-fluid bg-img text-secondary bg-dark" style="margin-top: 115px; padding-bottom: 30 px;">
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


    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>