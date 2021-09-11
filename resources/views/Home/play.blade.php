{{--Gender script--}}
<script type="text/javascript">
    function showfield(name){
        if(name == 'Other') {
            document.getElementById('div1').innerHTML = 'Other: <input type="text" name="other" class="form-control"/>';
        }
        else {
            document.getElementById('div1').innerHTML='';
        }
    }
</script>

{{--insert file--}}
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


{{--PHP form validatation script--}}
<script type="text/javascript">
    $("document").ready(function () {
        $("#contactForm").validate({
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


<?php
/*Prepare dbsettings*/
$servername = "localhost";
$username = "root";
$password = "";
$db = "mobilehealth";

$conn = new mysqli($servername, $username, $password,$db);

/*Check connection*/
if ($conn->connect_error){
die('Connection failed: ' . $conn->connect_error);
}
echo 'Connected Successfully';

$sql = "INSERT INTO studentData(firstname,lastname,dob,gender) VALUES ('Dixie','Dinasaur', '01/02/2000','female'))";
$conn -> query($sql);
$conn -> close();

?>


@extends('layouts.app')
@section('content')

    <!-- Page Content -->
    <div class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Course Booking form</h2>
                        <hr>
                    </div>

                    <div class="right-content">
                        <h4>Booking Form</h4>

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

{{--                        <div class="form-body">
                            <div class="row">
                                <div class="form-holder">
                                    <div class="form-content">
                                        <div class="form-items">

                                            <form method="GET" action="/book">

                                                <div class="col-md-12">
                                                    <label for="course">Course</label>
                                                    <select id="course" name="course" class="form-control" required>
                                                        <option value="FirstAid">First Aid Course</option>
                                                        <option value="FirstAidRefresh">First Aid Refresher</option>
                                                        <option value="ManageEmergency">Managing Emergency Situations
                                                        </option>
                                                        <option value="ProvideLife">Provide Life Support</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12">
                                                        <label for="coursedate" class="form-control-label">Select course date*</label>
                                                        <select name="coursedate" id="coursedate" class="form-control"
                                                                required>
                                                            <option value="date1">Thursday 7 October 2021</option>
                                                            <option value="date1">Thursday 14 October 2021</option>
                                                            <option value="date1">Thursday 21 October 2021</option>
                                                            <option value="date1">Thursday 28 October 2021</option>
                                                            <option value="date1">Thursday 4 November 2021</option>
                                                            <option value="date1">Thursday 11 November 2021</option>
                                                        </select>
                                                </div>
                                                <br><br><br>

                                                <div class="row">
                                                    <div class="col">
                                                        <label for="firstname">First Name *</label>
                                                        <input type="text" class="form-control" placeholder="First name" aria-label="firstname" name="firstname" id="firstname">
                                                    </div>
                                                    <div class="col">
                                                        <label for="lastname">Last Name *</label>
                                                        <input type="text" class="form-control" placeholder="Last name" aria-label="lastname" name="lastname" id="lastname">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="phone">Mobile Phone</label>
                                                    <input class="form-control" type="number" name="phone"
                                                           placeholder="Phone">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="email">Email*</label>
                                                    <input class="form-control" type="email" name="email"
                                                           placeholder="Email" required>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="actName" class="form-control-label">Date of birth</label>
                                                    <input class="form-control"
                                                           type="date" id="dob" name="dob"
                                                           value="2018-07-22"
                                                           min="1920-01-01" max="2021-01-01"
                                                           required pattern="\d{4}-\d{2}-\d{2}"
                                                           required>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                    <label for="gender" class="form-control-label">Gender</label>
                                                    <select name="gender" id="gender" class="form-control"
                                                            onchange="showfield(this.options[this.selectedIndex].value)"
                                                            required>
                                                        <option value="Male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="Other">Or please specify</option>
                                                    </select>
                                                    </div>
                                                    <div class="col">
                                                    <div id="div1"></div>
                                                </div>
                                                </div>


                                                <div>
                                                <span class="secondary-button">
                                                    <a href="/book">Submit Booking</a>
                                                </span>

                                                    <span class="btn btn-warning">
                                                    <a href="/book">Cancel</a>

                                                </span>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    <?php
    function displayform($name, $email, $url, $comment, $errName, $errEmail, $errUrl, $errComment)
    {
    ?>

    <div class="row">
        <div class="col-sm-12">

            <form id="contactForm" action="contact.php" method="post">

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

@endsection
