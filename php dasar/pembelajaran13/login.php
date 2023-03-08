<?php 

require 'functions.php';

if (isset($_POST["Login"])) {

    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");

    // mysqli_num_rows berfungsi mengeluarkan jumlah baris
    if (mysqli_num_rows($result)) {

        // password checked
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password,$row['password'])) {
            header("Location: mysql_2.php");
            exit;
        }
    } 

    $error = true;
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<body>


<h1> LogIn Page</h1>

<?php if(isset($error)) : ?>
    <i style="color: red; "><p>Username / Password False</p></i>
<?php endif; ?>

<form action="" method="POST">
    <ul>
        <li>
            <label for="Username">Username :</label>
            <input type="text" name="Username" id="Username">
        </li>
        <li>
            <label for="Password">Password :</label>
            <input type="password" name="Password" id="Password">
        </li>
        <li>
            <button type="submit" name="Login">Login</button>
        </li>
    </ul>
</form>
    
</body>
</html>