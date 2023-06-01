<?php
session_start();

if (isset($_POST['Username'])) {
    $name = $_POST['Username'];

    $getTime = function () {
        date_default_timezone_set('Africa/Lagos'); 
        $currentTime = date('H:i');
        if ($currentTime >= '05:00' && $currentTime < '12:00') {
            return 'Morning';
        } elseif ($currentTime >= '12:00' && $currentTime < '18:00') {
            return 'Afternoon';
        } else {
            return 'Evening';
        }
    };
    $timeOfDay = $getTime(); // Call the anonymous function and assign the return value to $timeOfDay

        // Validate the name input (optional
        if (empty($name)) {
            // Name is empty, display an error message or perform appropriate actions
            echo "Please enter your name.";
        } else {
            $_SESSION['Username'] = $name;
            $_SESSION['time'] = $timeOfDay;
            
            header("Location: ../home.php");
        }
}
?>