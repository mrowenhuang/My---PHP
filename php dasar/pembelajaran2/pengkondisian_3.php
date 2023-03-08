<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nested php</title>
    <style>
        .color {
            background-color: darkgray;
        }
    </style>
</head>
<body>

    <table border="2" cellpadding="10" cellspacing="1">
        <?php for ( $i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr class="color">
            <?php else : ?>
                <tr>
            <?php endif ; ?>
            
                <?php for ($j=1; $j <= 5; $j++) : ?>
                    <td><?= "$i,$j"; ?></td>
                <?php  endfor;?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>