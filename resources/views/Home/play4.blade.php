<?php

/*include 'dbconnect.php';*/
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'foods';

$conn = new mysqli($servername, $username, $password, $dbname);

if(mysqli_connect_errno()) {
    die("Failed to connect to database.");
}



$sql = "SELECT id, description FROM foods ORDER BY id ASC";
$result = $conn->query($sql);

$errNoNum = "";
$errNan = "";

if (isset($_GET['submit'])) {
    if (empty($_GET['quantity'])) {
        $errNoNum = "This field is required";
    } elseif (!is_numeric($_GET['quantity'])) {
        $errNan = "This must be a number";
    } else {
        header("Location: results.blade.php?food={$_GET['food']}&quantity={$_GET['quantity']}");
    }
}

?>

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 12 Tuesday</title>
    <link rel="stylesheet" href="public/css/mobilehealth.css">
</head>

<body>
<h1>Lab 12 - Select a food</h1>

<fieldset>
    <legend>Food selector</legend>
    <form action="results.blade.php" method="get">
        <label for="food">Food:</label>
        <br>
        <select name="food" id="food" class="field">
            <?php while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $description = $row['description'];
            ?>
            <option value="<?php echo $id ?>"><?php echo $description ?></option>
            <?php } ?>
        </select>
        <br><br>
        <label for="quantity">Quantity:</label>
        <br>
        <input type="text" name="quantity" id="quantity" value="" class="field"/>
        <span><?php echo $errNoNum ?></span>
        <span><?php echo $errNan ?></span>
        <br><br>
        <input type="submit" name="submit" id="submit" value="Submit" class="submit">
    </form>
</fieldset>

</body>
</html>

<?php
$conn->close();
?>

