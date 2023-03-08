<?php 
require 'functions.php';

if (isset($_POST['register'])) {
    
    if(register($_POST) > 0) {
        echo "<script> alert('SUCCESFULL REGISTRATION'); </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regristration Page</title>
</head>
<body>

<h1>Regristration</h1>


<form action="" method="POST">

    <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>

        <li>
            <label for="pass">Password :</label>
            <input type="password" name="pass" id="pass">
        </li>

        <li>
            <label for="pass2">Confirm Password :</label>
            <input type="password" name="pass2" id="pass">
        </li>

        <li>
            <button type="submit" name="register">Register</button>
        </li>
    </ul>


</form>
    
</body>
</html>