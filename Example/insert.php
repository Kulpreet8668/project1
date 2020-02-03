<?php

  // Our database connection
  $conn = mysqli_connect("localhost", "root", null, "lesson_03");

//   var_dump($post)
  
  //INSERT our new row into the countries table 
  $sql = "INSERT INTO countries (
      name,
      description,
      population
  ) VALUES (
     '{$_POST['name']}',
      '{$_POST['description']}',
      {$_POST['population']}
  )";
  // query our database providing our connection and our sql
  $resp = mysqli_query($conn, $sql);

  //resume our session
  session_start();

  if($resp){
      //we are succesful
      $_SESSION['notification'] = "the new country was createde successfully";
  }
  else{

  //we faild miserly
  $_SESSION['notification'] = "there was an error creationg this country:". mysqli_error($conn);
  }

  // redirect to the notification.php page

  header("Location: notification.php");

  exit;
?>
