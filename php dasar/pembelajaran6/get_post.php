<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
 
<?php if (isset ($_POST["submit"])) :?>
    <h2>Selamat datang, <?= $_POST["nama"] ; ?></h2>
<?php endif; ?>

    <form action="get_post_2.php" method="POST">
        Masukan Nama:
        <input type="text" name="nama">

        <button type="submit" name="submit">Send</button>


    </form>
</body>
</html>