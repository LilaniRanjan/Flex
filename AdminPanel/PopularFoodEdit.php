<?php
ob_start();
require '../classes/PopularFoodDetails.php';
require '../classes/DbConnector.php';

try {
    $db_obj = new classes\DbConnector();
    $con = $db_obj->getConnection();
} catch (Exception $exc) {
    echo "Error in PopularFoodEdit File Db Connection: " . $exc->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Admin Dashboard</title>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap Link -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- Montserrat Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../assets/css/AdminPanel.css">

        <!-- Fontawesome Icon -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <style>
            .header{
                background-color: #333;
                color: wheat;
            }

            body{
                background: url("https://media.istockphoto.com/id/1287029258/photo/blurred-images-of-restaurant-and-coffee-shop-cafe-interior-background-and-lighting-bokeh.webp?b=1&s=170667a&w=0&k=20&c=8kgHZbeO_pmQrpLg6nqX6mYFwDdGUxZWmZQq0xHemKM=");
            }

            #cardStyle{
                background-color: rgba(0, 0, 0, 0.7);
                color: white;
                border: 2px solid #FFFFFF; 
                border-radius: 20px;
            }
        </style>
        <div class="grid-container">

            <!-- Header -->
            <header class="header">
                <div class="menu-icon" onclick="openSidebar()">
                    <span class="material-icons-outlined">menu</span>
                </div>
                <div class="header-left">
                    <span></span>
                </div>
                <div class="header-right">
                    <span class="material-icons-outlined">account_circle</span> Lilani Ranjan
                </div>
            </header>
            <!-- End Header -->

            <!-- Sidebar -->
            <aside id="sidebar">
                <div class="sidebar-title">
                    <div class="sidebar-brand">
                        <span class="material-icons-outlined"></span>ADMIN PANEL
                    </div>
                    <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
                </div>

                <ul class="sidebar-list">
                    <li class="sidebar-list-item">
                        <a href="AdminHome.php" style="color: wheat;">
                            <span class="material-icons-outlined">dashboard</span> Home
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="AdminCustomizeFood.php" style="color: wheat;">
                            <span class="material-icons-outlined">inventory_2</span> Customize Food
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#" style="color: wheat;">
                            <span class="material-icons-outlined">fact_check</span> Manage Transaction 
                        </a>
                    </li>
                    <li class="disabled" style="padding: 45px 20px 20px 20px;">
                        <a href="#" style="text-decoration: none; color: #9799ab; cursor: none;" style="color: wheat;">
                            REPORTS
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#" style="color: wheat;">
                            <span class="material-icons-outlined">poll</span> Transaction Reports
                        </a>
                    </li>
                    <li class="disabled" style="padding: 45px 20px 20px 20px;">
                        <a href="#" style="text-decoration: none; color: #9799ab; cursor: none;" style="color: wheat;">
                            MAINTENANCE
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#" style="color: wheat;">
                            <span class="material-icons-outlined"><i class="fa fa-server" aria-hidden="true"></i></span> Category List
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- End Sidebar -->

            <!-- Main -->
            <main class="main-container">
                <div class="main-title">
                    <p class="font-weight-bold"></p>
                </div>
                <?php
                try {
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
                        if (isset($_POST['popular_food_id'], $_POST['popular_food_image_file'], $_POST['popular_food_name'], $_POST['popular_food_default_price'], $_POST['popular_food_current_price'], $_POST['popullar_food_vote'])) {
                            $popular_food_id = $_POST['popular_food_id'];
                            $popular_food_image_file = $_POST['popular_food_image_file'];
                            $popular_food_name = $_POST['popular_food_name'];
                            $popular_food_default_price = $_POST['popular_food_default_price'];
                            $popular_food_current_price = $_POST['popular_food_current_price'];
                            $popullar_food_vote = $_POST['popullar_food_vote'];

                            try {
                                $popular_food_detail = new PopularFoodDetails($popular_food_image_file, $popular_food_name, $popular_food_default_price, $popular_food_current_price, $popullar_food_vote);
                                $popular = $popular_food_detail->updatePopularFoodDetails($con, $popular_food_id);
                                if ($popular) {
                                    header("Location: AdminPopularFoodManage.php");
                                    ob_end_flush();
                                } else {
                                    ?>
                                    <div class="alert alert-danger" role="alert">
                                        Updated Failed!
                                    </div>
                                    <?php
                                }
                            } catch (PDOException $exc) {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo "An error occurred: " . $exc->getMessage(); ?>
                                </div>
                                <?php
                            }
                        } else {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                ERROR OCCUR!
                            </div>
                            <?php
                        }
                    } else {
                        if (isset($_GET['id'])) {
                            $popular_food_id = $_GET["id"];
                            $popular_obj = new PopularFoodDetails(null, null, null, null, null);
                            $popular_detail = $popular_obj->getPopularFoodDetailById($con, $popular_food_id);

                            if ($popular_detail) {
                                ?>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                    <div id="cardStyle" class="card mx-auto shadow p-3 mb-5 rounded" style="width: 50%;">
                                        <div class="card-header text-center"><h4 style="color: #E88F2A;">EDIT CURRY DETAILS</h4></div>
                                        <hr>
                                        <div class="card-body">
                                            <div class="card-body">
                                                <div class="form-group my-2">
                                                    <input name="popular_food_id" type="hidden" id="curry_id" class="form-control" value="<?php echo $popular_food_id; ?>" required/>  
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="popular_food_image_file">Popular Food URL :</label>
                                                    <input style="background-color: black; color: white;" name="popular_food_image_file" type="text" id="popular_food_image_file" class="form-control" value="<?php echo $popular_detail->getPopular_food_image_file();?>" required/>  
                                                </div>
                                                <br>
                                                <div class="form-group my-2">
                                                    <label for="popular_food_name">Popular Food Name :</label>
                                                    <input style="background-color: black; color: white;" name="popular_food_name" type="text" id="popular_food_name" class="form-control" value="<?php echo $popular_detail->getPopular_food_name();?>" required/>  
                                                </div>
                                                <br>
                                                <div class="form-group my-2">
                                                    <label for="popular_food_default_price">Food Default Price :</label>
                                                    <input style="background-color: black; color: white;" name="popular_food_default_price" type="text" id="popular_food_default_price" class="form-control" value="<?php echo $popular_detail->getPopular_food_default_price();?>" required/>  
                                                </div>
                                                <br>
                                                <div class="form-group my-2">
                                                    <label for="popular_food_current_price">Food Current Price :</label>
                                                    <input style="background-color: black; color: white;" name="popular_food_current_price" type="text" id="popular_food_current_price" class="form-control" value="<?php echo $popular_detail->getPopular_food_current_price();?>" required/>  
                                                </div>
                                                <br>
                                                <div class="form-group my-2">
                                                    <label for="popullar_food_vote">Food Vote :</label>
                                                    <input style="background-color: black; color: white;" name="popullar_food_vote" type="text" id="popullar_food_vote" class="form-control" value="<?php echo $popular_detail->getPopular_food_vote();?>" required/>  
                                                </div>
                                                <br>
                                                <br>
                                                <button type="submit" name="submit" class="mt-3 btn btn-lg btn-block form-control" style="background-color: #333; color: white; border: 1px solid #E88F2A;">UPDATE POPULAR FOOD</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php
                            }
                        }
                    }
                } catch (Exception $exc) {
                    echo "Error in Update Popular Food details: " . $exc->getMessage();
                }
                ?>

            </main>
            <!-- End Main -->

        </div>

        <!-- Scripts -->
        <!-- ApexCharts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
        <!-- Custom JS -->
        <script src="js/scripts.js"></script>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>