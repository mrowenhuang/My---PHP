<?php 

require '../functions.php';

$data = $_GET['data'];

$query = "SELECT * FROM biodata WHERE nama LIKE '%$data%' OR umur LIKE '%$data%' OR prodi LIKE '%$data%'";

$biodata = query($query);
?>

<table border="1" cellpadding="10" cellspacing="2">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>karya</th>
        <th>Edit</th>
        <th>Umur</th>
        <th>Status</th>
        <th>Prodi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($biodata as $bio) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?php echo $bio ["NAMA"]; ?></td>
        <td><img src="img/<?= $bio["KARYA"]; ?>" alt="" class="image"></td>
        <td>
            <a href="edit.php?ids=<?= $bio['ID']; ?>">Edit |</a>
            <a href="delete.php?id=<?= $bio['ID']; ?>" onclick="return confirm('Make sure you want to delete the true data')">Delete</a>
        </td>
        <td><?php echo $bio["UMUR"]; ?></td>
        <td><?php echo $bio["STATUS"]; ?></td>
        <td><?php echo $bio["Prodi"]; ?></td>

    </tr>
    <?php $i++ ; ?>
    <?php endforeach; ?>

</table>