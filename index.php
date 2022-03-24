<?php
require('model/database.php');
require('model/classes_db.php');
require('model/makes_db.php');
require('model/types_db.php');
require('model/vehicles_db.php');

$vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
$class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
$type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
$make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);

$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);
$year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
$model = filter_input(INPUT_POST, 'model', FILTER_UNSAFE_RAW);

$class_name = filter_input(INPUT_POST, 'class_name', FILTER_UNSAFE_RAW);
$type_name = filter_input(INPUT_POST, 'type_name', FILTER_UNSAFE_RAW);
$make_name = filter_input(INPUT_POST, 'make_name', FILTER_UNSAFE_RAW);

$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);

if(!$action){
    $action = filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW);
    if(!$action){
        $action = 'list_vehicles';
    }
}

switch($action){
    case 'list_vehicles':
    
    break;
    
    default:

    break;
}

?>