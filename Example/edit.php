<?php
$conn = mysqli_connect('localhost','root',null,'lesson_03');

// fetch the single country by its provided id
// here * represent all the hosts
$result = mysqli_query($conn, "SELECT * FROM countries WHERE id = {$_GET ['id']}");
$row = mysqli_fetch_assoc($result);
var_dump($row);

?>
<!DOCTYPE html>
  <head>
    <title>Adding Countries</title>
  </head>

  <body>

  <header>

  <h1>Edit countries</h1>
  </header>
    <!-- The form for creating a new country -->
    <form action="./update.php" method="post">
    <input name="id" type0="hidden" value="<?= $row['id']?>"> 
    <div>
    <label>Country name:</label>

    <!-- // long verson echo ststement -->

    <input name="name" value="<?php echo $row['name'] ?>">
    </div>
    <div>
    <label>Country Description:</label>

    <!-- // short verson echo ststement -->

    <input name="description"  value="<?= $row['description']?>">
    </div>
    <div>
    <label>Country population:</label>
    <input name="population" type="number" value="<?= $row['population']?>">
    </div>
    <button type="submit">Create</button>
    </form>
  </body>
</html>