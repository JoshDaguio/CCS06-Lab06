<?php

date_default_timezone_set('Asia/Manila');

function greet() {
    $message = "Hello World! The date today is ";
    $message .= date("l jS \of F Y h:i:s A");
    
    echo $message;
    return $message;
}

greet();
?>
