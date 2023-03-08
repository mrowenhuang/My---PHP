<?php 

if (isset ($_POST["submit"])) {

    if ($_POST["username"] == "admin" && $_POST["password"] == "test") {
        header("Location: admin_site.php");
        exit;
    } else {
        # code...
        $error = true;
    }
}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<?php if (isset ($error)) : ?>
    <p style="color: red ; font-style: italic;">Username/password Tidak Match</p>
<?php endif; ?>

<body>
    <ul>
    <form action="" method="POST">
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="send">Send :</label>
            <button type="submit" name="submit">send</button>
        </li>
    </form>
    </ul>
</body>
</html>