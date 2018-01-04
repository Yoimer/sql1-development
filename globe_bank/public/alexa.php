<?php require_once('../private/initialize.php'); ?>

<?php
    // get request using OK, ON or OFF as query parameters
    //path/alexa.php?id=OK
    //path/alexa.php?id=ON
    //path/alexa.php?id=OFF
    /*$id = isset($_GET['id']) ? $_GET['id'] : 'DEFAULT VALUE';
    switch ($id) {
        case 'OK':
            echo "OK";
            break;
        case 'ON':
            echo "ON";
            break;
        case 'OFF':
            echo "OFF";
            break;    
        default:
            // reads default st
            echo "Check string!!";
            break;
        }*/

    // read actual status from database
    $alexa_set = actual_status();
    while($alexa = mysqli_fetch_assoc($alexa_set)) {
        echo $alexa['status'];
    }
    

?>
