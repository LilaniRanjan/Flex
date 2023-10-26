<?php

require '../classes/DbConnector.php';
require_once  '../classes/Poll.php';

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
        <link rel="stylesheet" href="../assets/css/CustomizeFoodStyle.css">

        <!-- Fontawesome Icon -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <style>
            body{
                background: url("https://media.istockphoto.com/id/1287029258/photo/blurred-images-of-restaurant-and-coffee-shop-cafe-interior-background-and-lighting-bokeh.webp?b=1&s=170667a&w=0&k=20&c=8kgHZbeO_pmQrpLg6nqX6mYFwDdGUxZWmZQq0xHemKM=");
            }

            #tableEdit{
                background-color: rgba(0, 0, 0, 0.7);
                color: white;
                border: 2px solid #FFFFFF; 
                border-radius: 20px;
            }

            hr{
                background-color: whitesmoke;
            }
            table{
                background-color: #E88F2A;
            }
            td{
                background-color: black;
            }

            button{
                border-color: #E88F2A;
            }

            input[type="search"]::placeholder {
                color: #999; 
            }
            
            .header{
                background-color: #333;
                color: wheat;
            }
            span{
                color: wheat;
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
            <div class="card m-5" id="tableEdit">
                <div class="card-header my-3 d-inline">
                    POLL MANAGEMENT
                </div>
                <hr>
                <div class="d-inline d-flex justify-content-end mx-3">
                    <a href="Add_poll.php" data-toggle="modal" class="btn active" role="button" aria-pressed="true" style="background-color: black; color: wheat; border: 1px solid white;">ADD FOOD</a>
                </div>

                <div class="card-body">
                    <h5 class="card-title">
                        
                    </h5>
                    <div>
                        <div class="charts my-4">

                            <div class="charts-cardss table-responsive">
                                <table class="table table-hover table-responsive-md">
                                    <thead class="text-center py-2">
                                        <tr>
                                            <th style="background-color: #333; color: wheat;" scope="col" class="text-center">No</th>
                                            <th style="background-color: #333; color: wheat;" scope="col" class="text-center">Poll Food Id</th>
                                            <th style="background-color: #333; color: wheat;" scope="col">Poll Created Date</th>
                                            <th style="background-color: #333; color: wheat;" scope="col">Food Name</th>
                                            <th style="background-color: #333; color: wheat;" scope="col" colspan="2">Action</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    try {
                                        $i = 1;
                                        $rs =classes\Poll::getAllPoll($dbcon);
                                        foreach ($rs as $allpoll) {
                                            ?>
                                            <tbody class="text-center">
                                                <tr>
                                                    <td style="background-color: black; color: white;"><?php echo $i; ?></td>
                                                    <td style="background-color: black; color: white;">
                                                        <?php
                                                        $poll_details = new \classes\Poll($allpoll->getPoll_created_date(), $allpoll->getFood_name());
                                                        $food_poll_id = $poll_details->GetPollIdByPollName($allpoll->getFood_name(), $dbcon);

                                                        echo $food_poll_id;
                                                        ?>
                                                    </td>
                                                    <td style="background-color: black; color: white;"><?php echo $allpoll->getPoll_created_date(); ?></td>
                                                    <td style="background-color: black; color: white;"><?php echo $allpoll->getFood_name(); ?></td>
                                                    <td style="background-color: black; color: white;"><a href="poll_update.php?id=<?php echo $allpoll->GetPollIdByPollName($allpoll->getFood_name(), $dbcon); ?>"><button id="iconColour" style="background-color: black;"><i class="fa fa-pencil-square" aria-hidden="true" style="color: #E88F2A;"></i></button></a></td>
                                                    <td style="background-color: black;color: white;"><a href="poll_food_delete.php?id=<?php echo $allpoll->GetPollIdByPollName($allpoll->getFood_name(), $dbcon); ?>"><button id="iconColour" style="background-color: black;"><i class="fa fa-trash" aria-hidden="true" style="color: #E88F2A;"></i></button></a></td>
                                                </tr>
                                            </tbody>
                                            <?php
                                            $i++;
                                        }
                                    } catch (Exception $exc) {
                                        echo "Error in Load Rice details: " . $exc->getMessage();
                                    }
                                    ?>


                                </table>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
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
