<?php 

if (!isset($_GET['idnama']) || 
    !isset ($_GET['umr']) || 
    !isset ($_GET['addres']) || 
    !isset ($_GET['status']) || 
    !isset ($_GET['plj']) ){
    header("Location: superglobal.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?= $_GET["idnama"]; ?></li>
        <li><?= $_GET["umr"]; ?></li>
        <li><?= $_GET["addres"]; ?></li>
        <li><?= $_GET["status"]; ?></li>
        <li><?= $_GET["plj"]; ?></li>
    </ul>

<a href="super_global.php">Back</a>

</body>
</html>