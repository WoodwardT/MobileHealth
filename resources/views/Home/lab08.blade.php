<?php
$servername = 'localhost:8889';
//!!!! MAKE SURE THAT :8889 IS ADDED HERE FOR MAMP TO KNOW WHICH PORT TO USE. IT COMES STANDART AS 3306 FOR WINDOWS
$username = 'mobilehealth';
$password = '';
$dbname = 'mobilehealth';

$conn = new mysqli($servername, $username, $password, $dbname);

if(mysqli_connect_errno()) {
    die("Failed to connect to database.");
} else
    {
        echo ("connected successfully");
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cerulean/bootstrap.min.css">

    <!--    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
    <!--    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
    <!--    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>-->

    <script type="text/javascript">
        $("document").ready(function () {
            $("#bookingForm").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    url: {
                        required: true,
                        url: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    comment: {
                        required: true,
                        minlength: 20
                    }
                },
                messages: {
                    name: {
                        required: "Please enter your name",
                        minlength: "Your name must contain 2 characters"
                    },
                    email: {
                        required: "Please enter a valid email address"
                    }
                }
            });
        });
    </script>

    <title>Lab 08</title>
</head>

<body>

<div class="container">
    <div class="jumbotron">
        <h1>Lab 08 Form</h1>
        <br>
        <?php

        if (!empty($_POST['submit'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $url = $_POST['url'];
            $comment = $_POST['comment'];
            $errName = '';
            $errEmail = '';
            $errUrl = '';
            $errComment = '';

            $name_isValid = !empty($name);
            $email_isValid = preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email);
            $url_isValid = filter_var($url, FILTER_VALIDATE_URL);
            $comment_isValid = !empty($comment);

            if (!$name_isValid) {
                $errName = "Name is required";
            }
            if (!$email_isValid) {
                $errEmail = "Invalid email format";
            }
            if (!$url_isValid) {
                $errUrl = "Invalid URL";
            }
            if (!$comment_isValid) {
                $errComment = "Comment is required";
            }


            if ($name_isValid && $email_isValid && $url_isValid && $comment_isValid) {
                require("dbconfig.php");

                $conn = new mysqli($servername, $user, $password, $dbname);
                if (mysqli_connect_errno()) {
                    die("Failed to connect to database");
                }

               $sqlcreate = "CREATE TABLE lab8form (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(50) NOT NULL,
                    email VARCHAR(255),
                    url VARCHAR(255),
                    comment VARCHAR(255)
                    );";

                if ($conn->query($sqlcreate) !== TRUE) {
                    echo "Error creating table: " . $conn->error, "<br>";
                }

                $sql = "INSERT INTO lab8form (name, email, url, comment) VALUES ('$name','$email','$url','$comment');";
                $conn->query($sql);

                $conn->close();

                header("location: success.html");

            }
            displayform($name, $email, $url, $comment, $errName, $errEmail, $errUrl, $errComment);
        } else {
            displayform("", "", "", "", "", "", "", "", "", "");

        }
        ?>
        </p>
    </div>
</div>
</body>

</html>

<?php
function displayform($name, $email, $url, $comment, $errName, $errEmail, $errUrl, $errComment)
{
?>

<div class="row">
    <div class="col-sm-12">

        <form id="bookingForm" action="play3.blade.php" method="post">

            <label for="name">Name*<br>
                <input type="text" id="name" name="name" value="<?php echo($name); ?>" class="form-control"/>
                <span class="validationtext"
                      style="color:darkorange;font-size:0.8em;"><?php echo("$errName"); ?></span>
                <br/>

                <label for="email">Email*</label>
                <input type="text" id="email" name="email" value="<?php echo($email); ?>" class="form-control"/>
                <span class="validationtext"
                      style="color:darkorange;font-size:0.8em;"><?php print($errEmail); ?></span>
                <br/>

                <label for="url">URL*</label>
                <input type="text" name="url" id="url" value="<?php echo($url) ?>" class="form-control"/>
                <span class="validationtext"
                      style="color:darkorange;font-size:0.8em;"><?php print($errUrl); ?></span>
                <br/>

                <label for="comment">Comment*</label>
                <textarea name="comment" id="comment" cols="30" rows="3"
                          class="form-control"><?php echo($comment) ?></textarea>
                <span class="validationtext"
                      style="color:darkorange;font-size:0.8em;"><?php print($errComment); ?></span>
                <br/>
                <input type="submit" value="Send" id="submit" name="submit" class="btn btn-secondary"/>

        </form>
    </div>
</div>
<?php
}

?>
