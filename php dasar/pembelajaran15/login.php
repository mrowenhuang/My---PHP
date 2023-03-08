<?php 
require 'functions.php';
// jika menggunakan session wajib di ikuti dengan session start
session_start();

// membuat cookie automatic login yang kurang aman (untuk pemahaman)
// if (isset ($_COOKIE['login'])) {
//     if ($_COOKIE['login'] === 'true') {
//         $_SESSION['login'] = true;
//     }
// }

// membuat cookie yang lebih aman
if (isset($_COOKIE['iu']) && isset($_COOKIE['ukey'])) {
    // pengecekan cookie apakah sama
    $id = $_COOKIE['iu'];
    $ukey = $_COOKIE['ukey'];

    $result = mysqli_query($conn, "SELECT username FROM users WHERE id= $id");
    
    $row = mysqli_fetch_assoc($result);

    if ($ukey === hash("sha256", $row['username'])) {
        $_SESSION['login'] = true;
    }

}

// perintah agar bila sudah bisa mengakses halaman utama maka halaman login mesti di kunci
if (isset($_SESSION['login'])) {
    header("Location: mysql_2.php");
    exit;
}


if (isset($_POST["Login"])) {

    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($result)) {

        // password checked
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password,$row['password'])) {
            // session variable dengan nama login yang dapat di akses di semua halaman
            // $_SESSION['login'] = true;

            // contoh cookie
            // if (isset ($_POST['Remember'])) {
            //     setcookie('login', 'true', time() + 240);
            // }

            // membuat cookie yang lebih aman
            if (isset($_POST['Remember'])) {

                setcookie('iu', $row['id'], time()+ 120);

                setcookie('ukey', hash('sha256', $row['username']), time() + 120);
            }

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
            <input type="checkbox" name="Remember" id="Remember">
            <label for="Remember">Remember Me</label>
        </li>
        <li>
            <button type="submit" name="Login">Login</button>
        </li>
    </ul>
</form>
    
</body>
</html>