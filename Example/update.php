<?php
$conn =mysqli_connect("localhost","root", null, "lesson_03");

var_dump($_POST);


$sql = "UPDATE countries SET
name ='{$_POST['name']}',
description ='{$_POST['description']}',
population ={$_POST['population']}
WHERE id = {$_POST['id']}";

$res = mysqli_query($conn, $sql);

if($res){
    echo "The country was updated successfully.";
}
else{
    echo "there was an error updating the row:" . mysqli_error($conn);
}

?>