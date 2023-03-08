<?php 
// jika menggunakan session wajib di ikuti dengan session start
session_start();

// perintah agar bila sudah bisa mengakses halaman utama maka halaman login mesti di kunci
if (isset($_SESSION['login'])) {
    header("Location: mysql_2.php");
    exit;
}

// mengecek username dan password terdapat di dalam database atau tidak
require 'functions.php';

if (isset($_POST["Login"])) {

    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($result)) {

        $row = mysqli_fetch_assoc($result);
        
        // password checked
        if (password_verify($password,$row['password'])) {
            // session variable dengan nama login yang dapat di akses di semua halaman
            $_SESSION['login'] = true;
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