<?php

session_start();

//redirect user if the there is no notification

if(empty($_SESSION{"notification"})){
    header("Location: table.php");
    die;
}

//output our notification 
echo $_SESSION['notification'];

//clear the notification

unset($_SESSION['notification']);

?>