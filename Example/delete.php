<?php

$conn = mysqli_connect("localhost", "root", null, "lesson_03");

$sql = "DELETE FROM countries WHERE id = {$_GET['id']}";

$res = mysqli_query($conn, $sql);
if($res){
    echo "the country was deleted successfully";

}
else{
    echo "there was an error deleting the record: " . mysqli_error($conn);
}
?>