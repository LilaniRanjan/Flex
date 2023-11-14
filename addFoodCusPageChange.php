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
    $selectedCurry = isset($_POST['curry']) ? $_POST['curry'] : [];
    $selectedSpice = $_POST['spice'];
    $selectedPortion = $_POST['portion'];
    $selectedExtra = isset($_POST['extra']) ? $_POST['extra'] : [];

    $foodItemId = [
        'rice' => $selectedRice,
        'curry' => $selectedCurry,
        'spice' => $selectedSpice,
        'portion' => $selectedPortion,
        'extra' => $selectedExtra,
    ];

    $rice_obj = new \classes\RiceDetails(null, null);
    $rice_detail = $rice_obj->getRiceDetailById($con, $selectedRice);

    $curry_obj = new classes\CurryDetails(null, null);
    $curry_detail = $curry_obj->getCurryDetailById($con, $selectedCurry);

    $spicy_obj = new classes\SpiceLevel(null);
    $spicy_detail = $spicy_obj->getSpicyDetailById($con, $selectedSpice);

    $portion_obj = new \classes\PortionSize(null);
    $portion_detail = $portion_obj->getPortionDetailById($con, $selectedPortion);

    $extra_ingrediant_obj = new \classes\ExtraIngredients(null, null);
    $extra_ingrediant_detail = $extra_ingrediant_obj->getExtraIngredientDetailById($con, $selectedExtra);

    $foodItemName = [
        'rice' => $rice_detail ? $rice_detail->getRice_name() : 'Not selected',
        'curry' => $curry_detail ? $curry_detail->getCurry_name() : 'Not selected',
        'spice' => $spicy_detail ? $spicy_detail->getSpice_level() : 'Not selected',
        'portion' => $portion_detail ? $portion_detail->getPortion_size_name() : 'Not selected',
        'extra' => $extra_ingrediant_detail ? $extra_ingrediant_detail->getExtra_ingredients_name() : 'Not selected'
    ];

    $foodItemPrice = [
        'rice' => $rice_detail ? $rice_detail->getRice_price() : 0,
        'curry' => $curry_detail ? $curry_detail->getCurry_price() : 0,
        'spice' => 0,
        'portion' => 0,
        'extra' => $extra_ingrediant_detail ? $extra_ingrediant_detail->getExtra_ingredients_price() : 0
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
