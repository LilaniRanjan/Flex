<?php
namespace classes;
ob_start();
require '../classes/DbConnector.php';
require '../classes/Poll.php';

try {
    $dbConnector = new \classes\DbConnector();
    $dbcon = $dbConnector->getConnection();

   
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
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
                        <a href="View_poll.php" style="color: wheat;">
                            <span class="material-icons-outlined">poll</span> Voting Poll
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
                        if (isset($_POST['food_name'], $_POST['poll_food_id'],$_POST['poll_created_date'])) {
                            $poll_food_id = $_POST['poll_food_id'];
                            $food_name = $_POST['food_name'];
                            $poll_created_date=$_POST['poll_created_date'];

                            try {
                                $poll_detail = new \classes\Poll($poll_created_date,$food_name);
                                $poll = $poll_detail->updatePoll($dbcon, $poll_food_id);
                                if ($poll) {
                                    header("Location: View_poll.php");
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
                            $poll_food_id = $_GET["id"];
                            $poll_obj = new \classes\Poll(null, null);
                            $poll_detail = $poll_obj->getPollById($dbcon, $poll_food_id);

                            if ($poll_detail) {
                                ?>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                    <div id="cardStyle" class="card mx-auto shadow p-3 mb-5 rounded" style="width: 50%;">
                                        <div class="card-header text-center"><h4 style="color: #E88F2A;">EDIT POLL FOOD DETAILS</h4></div>
                                        <hr>
                                        <div class="card-body">
                                            <div class="card-body">
                                                <div class="form-group my-2">
                                                    <input name="poll_food_id" type="hidden"  class="form-control" value="<?php echo $poll_food_id; ?>" required/>  
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="food_date">Poll Created Date :</label>
                                                    <input style="background-color: black; color: white;" name="poll_created_date" type="date"  class="form-control" value="<?php echo $poll_detail->getPoll_created_date(); ?>" required/>  
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="food_name">Food Name :</label>
                                                    <input style="background-color: black; color: white;" name="food_name" type="text"  class="form-control" value="<?php echo $poll_detail->getFood_name(); ?>" required/>  
                                                </div>
                                                <br>                                          
                                                <br>
                                                <br>
                                                <button type="submit" name="submit" class="mt-3 btn btn-lg btn-block form-control" style="background-color: #333; color: white; border: 1px solid #E88F2A;">UPDATE POLL</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php
                            }
                        }
                    }
                } catch (Exception $exc) {
                    echo "Error In Updating Poll Details: " . $exc->getMessage();
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
