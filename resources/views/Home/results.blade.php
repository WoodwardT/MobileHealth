<?php


$servername = 'localhost';
$username = 'sam';
$password = 'sam123';
$dbname = 'usda';

$conn = new mysqli($servername, $username, $password, $dbname);

if(mysqli_connect_errno()) {
    die("Failed to connect to database.");
}

$id = $_GET['food'];
$quantity = $_GET['quantity'];

$sql = 'SELECT description, protein, carbohydrate, cholesterol  FROM foods where id =?';
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($description, $protein, $carbohydrate, $cholesterol);
$stmt->fetch();

?>

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 12 Tuesday</title>
    {{--<link rel="stylesheet" href="style.css">--}}
</head>

<body>
<h1>Lab 12 - Select a food</h1>

<h4>Table shows 100g of food multipled by quantity (<?php echo $quantity ?>)</h4>

<table id="results">
    <tr>
        <th>Food</th>
        <th>Protein</th>
        <th>Carbohydrate</th>
        <th>Cholesterol</th>
    </tr>
    <tr>
        <td><?php echo $description; ?></td>
        <td><?php echo $quantity * $protein; ?></td>
        <td><?php echo $quantity * $carbohydrate; ?></td>
        <td><?php echo $quantity * $cholesterol; ?></td>
    </tr>
</table>

<br><br>
<a href="index.blade.php" ><button class="submit">Back</button></a>

</body>
</html>

<?php
$stmt->free_result();
$conn->close();
?>
