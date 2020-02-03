<?php
//connect to our mysql db
$conn = mysqli_connect('localhost','root', null, 'lesson_03');
//fetch the rows
$sql = "SELECT * FROM countries";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<html>
<head>
    
    <title>ADDING COUNTRIES</title>

    <style>
    table, th, td{
        border: 1px dashed black;
        padding: 0.25em;
    }
    </style>
</head>

<body>
<table>
<thead>
<tr>

<th>Name</th>
<th>Description</th>
<th>population</th>
<th>Actions</th>


</tr>
</thead>
<tbody>
<?php

foreach ($rows as $row) {
echo "<tr>";
echo "<td>{$row['name']}</td>";
echo "<td>{$row['description']}</td>";
echo "<td>{$row['population']}</td>";
echo "<td>";
echo "<a href='./edit.php?id={$row['id']}'>edit</a>";
echo "|";
echo "<a href='./delete.php?id={$row['id']}'>delete</a>";
echo "</td>";
echo "</tr>";
}
?>
</tbody>
</table>    
</body>
</html>