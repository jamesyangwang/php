<?php

if (isset($_POST['submit'])) {

//    echo "yes, we got it!<br />";

    $username = $_POST['username'];
    $password = $_POST['password'];

//    if ($username && $password) {
//        echo $username . "<br />";
//        echo $password;
//
//    } else {
//        echo "this field cannot be blank";
//    }

    // need to start up local apache httpd server!
    $connection = mysqli_connect('localhost', 'root', 'passw0rd', 'loginapp');

    if ($connection) {
        echo "We are connected";

    } else {
        die("Database connection failed");
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <div class="col-sm-6">
        <form action="38_39_40_login.php" method="post">
            <div class="form-group">
                <label for="username">Username
                    <input type="text" name="username" class="form-control">
                </label>
            </div>

            <div class="form-group">
                <label for="password">Password
                    <input type="password" name="password" class="form-control">
                </label>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>

</div>
</body>
</html>