<?php

$name = 'nameisx';
$email = 'email@y';
$url = 'http://url.com';
$comment = 'comment';

require("dbconfig.php");

$conn = new mysqli($servername, $user, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Failed to connect to database");
} else
{
    echo "connected";
}

$sqlcreate = "CREATE TABLE lab8form (
    id int AUTO_increment PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(255),
    url VARCHAR(255),
    comment VARCHAR(255)
    );";

if ($conn->query($sqlcreate) !== TRUE) {
    echo "Error creating table: " . $conn->error,"<br>";
}
else
{
    echo "tablemade";
}

$sql = "INSERT INTO lab8form (name, email, url, comment) VALUES ('$name','$email','$url','$comment');";
//$sql = "INSERT INTO lab8form ('name', 'email', 'url', 'comment') VALUES ('$name','$email','$url','$comment');";
//$sql = "INSERT INTO myxxsongs (song, artist) VALUES('xx', 'yyyyy');";
$conn->query($sql);
//  header("location: success.html");
//echo $name." ".$email." ".$url." ".$comment;
echo $sql;


$sql = "SELECT * FROM lab8form";
// DISPLAY ITEMS
$result = $conn ->query($sql);



if($result -> num_rows > 0) {
    header("location: success.html");
//    while ($row = $result -> fetch_assoc()) {
//        foreach ($row as $key => $value) {
//            echo "$key: $value";
//            }
//        }
} else {
    echo "no results found<br>";
}
// CLOSE DB
$conn -> close();
?>
