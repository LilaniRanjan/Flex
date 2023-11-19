<?php
session_start();
require_once './classes/DbConnector.php';
require_once './classes/RiceDetails.php';
require_once './classes/CurryDetails.php';
require_once './classes/SpiceLevel.php';
require_once './classes/PortionSize.php';
require_once './classes/ExtraIngredients.php';

$dbcon = new \classes\DbConnector();
$con = $dbcon->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $selectedRice = $_POST['rice'];
//    $selectedCurry = isset($_POST['curry']) ? $_POST['curry'] : [];
    $selectedCurry = array();
    if(!empty($_POST['curry'])){
        foreach ($_POST['curry'] as $curryId){
            $selectedCurry[] = $curryId;
        }
    }
    $selectedSpice = $_POST['spice'];
    $selectedPortion = $_POST['portion'];
//    $selectedExtra = isset($_POST['extra']) ? $_POST['extra'] : [];
    $selectedExtra = array();
    if(!empty($_POST['extra'])){
        foreach ($_POST['extra'] as $extraId){
            $selectedExtra[] = $extraId;
        }
    }

    $foodItemId = [
        'rice' => $selectedRice,
        'curry' => $selectedCurry,
        'spice' => $selectedSpice,
        'portion' => $selectedPortion,
        'extra' => $selectedExtra,
    ];

    $rice_obj = new \classes\RiceDetails(null, null);
    $rice_detail = $rice_obj->getRiceDetailById($con, $selectedRice);

//    $curry_obj = new classes\CurryDetails(null, null);
//    $curry_detail = $curry_obj->getCurryDetailById($con, $selectedCurry);
    
    $selectedCurryName = array();
    if(!empty($_POST['curry'])){
        foreach ($_POST['curry'] as $curryId){
            $curry_obj = new classes\CurryDetails(null, null);
            $curry_detail = $curry_obj->getCurryDetailById($con, $curryId);
            $selectedCurryName[] = $curry_detail->getCurry_name();
        }
    }

    $spicy_obj = new classes\SpiceLevel(null);
    $spicy_detail = $spicy_obj->getSpicyDetailById($con, $selectedSpice);

    $portion_obj = new \classes\PortionSize(null);
    $portion_detail = $portion_obj->getPortionDetailById($con, $selectedPortion);

//    $extra_ingrediant_obj = new \classes\ExtraIngredients(null, null);
//    $extra_ingrediant_detail = $extra_ingrediant_obj->getExtraIngredientDetailById($con, $selectedExtra);
    
    $selectedExtraName = array();
    if(!empty($_POST['extra'])){
        foreach ($_POST['extra'] as $extraId){
            $extra_ingrediant_obj = new \classes\ExtraIngredients(null, null);
            $extra_detail = $extra_ingrediant_obj->getExtraIngredientDetailById($con, $extraId);
            $selectedExtraName[] = $extra_detail->getExtra_ingredients_name();
        }
    }

    $foodItemName = [
        'rice' => $rice_detail ? $rice_detail->getRice_name() : 'Not selected',
        'curry' => $selectedCurryName,
        'spice' => $spicy_detail ? $spicy_detail->getSpice_level() : 'Not selected',
        'portion' => $portion_detail ? $portion_detail->getPortion_size_name() : 'Not selected',
        'extra' => $selectedExtraName
    ];
    
    
    $selectedCurryPrice = array();
<<<<<<< HEAD
    $curry_price_total = 0;
=======
<<<<<<< HEAD
    $curry_price_total = 0;
=======
<<<<<<< HEAD
    $curry_price_total = 0;
=======
<<<<<<< HEAD
    $curry_price_total = 0;
=======
<<<<<<< HEAD
    $curry_price_total = 0;
=======
>>>>>>> 1e5e1cae7e744ae2c21a422c8e72517287557829
>>>>>>> 14b0cae0efb08032d1071e969e23a9c09544a004
>>>>>>> 68b6797374511dfcf5294a477246b649025ae7d5
>>>>>>> 08ba167bfd369a119cf578384500b427644e8af3
>>>>>>> 249c05b3c0124672f7ae1691d55c4aac7c19ee82
    if(!empty($_POST['curry'])){
        foreach ($_POST['curry'] as $curryId){
            $curry_obj = new classes\CurryDetails(null, null);
            $curry_detail = $curry_obj->getCurryDetailById($con, $curryId);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14b0cae0efb08032d1071e969e23a9c09544a004
>>>>>>> 68b6797374511dfcf5294a477246b649025ae7d5
>>>>>>> 08ba167bfd369a119cf578384500b427644e8af3
>>>>>>> 249c05b3c0124672f7ae1691d55c4aac7c19ee82
            $curry_price = $curry_detail->getCurry_price();
            $curry_price_total = $curry_price_total + $curry_price;
            $selectedCurryPrice[] = $curry_price;
            $_SESSION['curry_price_total'] = $curry_price_total;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
            $selectedCurryPrice[] = $curry_detail->getCurry_price();
>>>>>>> 1e5e1cae7e744ae2c21a422c8e72517287557829
>>>>>>> 14b0cae0efb08032d1071e969e23a9c09544a004
>>>>>>> 68b6797374511dfcf5294a477246b649025ae7d5
>>>>>>> 08ba167bfd369a119cf578384500b427644e8af3
>>>>>>> 249c05b3c0124672f7ae1691d55c4aac7c19ee82
        }
    }
    
    $selectedExtraPrice = array();
<<<<<<< HEAD
    $extra_price_total = 0;
=======
<<<<<<< HEAD
    $extra_price_total = 0;
=======
<<<<<<< HEAD
    $extra_price_total = 0;
=======
<<<<<<< HEAD
    $extra_price_total = 0;
=======
<<<<<<< HEAD
    $extra_price_total = 0;
=======
>>>>>>> 1e5e1cae7e744ae2c21a422c8e72517287557829
>>>>>>> 14b0cae0efb08032d1071e969e23a9c09544a004
>>>>>>> 68b6797374511dfcf5294a477246b649025ae7d5
>>>>>>> 08ba167bfd369a119cf578384500b427644e8af3
>>>>>>> 249c05b3c0124672f7ae1691d55c4aac7c19ee82
    if(!empty($_POST['extra'])){
        foreach ($_POST['extra'] as $extraId){
            $extra_ingrediant_obj = new \classes\ExtraIngredients(null, null);
            $extra_detail = $extra_ingrediant_obj->getExtraIngredientDetailById($con, $extraId);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14b0cae0efb08032d1071e969e23a9c09544a004
>>>>>>> 68b6797374511dfcf5294a477246b649025ae7d5
>>>>>>> 08ba167bfd369a119cf578384500b427644e8af3
>>>>>>> 249c05b3c0124672f7ae1691d55c4aac7c19ee82
            $extra_price = $extra_detail->getExtra_ingredients_price();
            $extra_price_total = $extra_price_total + $extra_price;
            $selectedExtraPrice[] = $extra_price_total;
            $_SESSION['extra_price_total'] = $extra_price_total;
        }
    }
    
    $_SESSION['rice_price_total'] = $rice_detail->getRice_price();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
            $selectedExtraPrice[] = $extra_detail->getExtra_ingredients_price();
        }
    }
>>>>>>> 1e5e1cae7e744ae2c21a422c8e72517287557829
>>>>>>> 14b0cae0efb08032d1071e969e23a9c09544a004
>>>>>>> 68b6797374511dfcf5294a477246b649025ae7d5
>>>>>>> 08ba167bfd369a119cf578384500b427644e8af3
>>>>>>> 249c05b3c0124672f7ae1691d55c4aac7c19ee82

    $foodItemPrice = [
        'rice' => $rice_detail ? $rice_detail->getRice_price() : 0,
        'curry' => $selectedCurryPrice,
        'spice' => 0,
        'portion' => 0,
        'extra' => $selectedExtraPrice
    ];

    if (!isset($_SESSION['CusCartId'])) {
        $_SESSION['CusCartId'] = [];
        $_SESSION['CusCartName'] = [];
        $_SESSION['CusCartPrice'] = [];
    }

    $_SESSION['CusCartId'][] = $foodItemId;
    $_SESSION['CusCartName'][] = $foodItemName;
    $_SESSION['CusCartPrice'][] = $foodItemPrice;

    header("Location: confirmationPage.php");
    exit();
}
?>
