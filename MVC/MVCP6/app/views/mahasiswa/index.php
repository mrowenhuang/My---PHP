<div class="container mt-5">
    <h3>Data Mahasiswa</h3>
    <?php foreach ($data['mhs'] as $mhs) :?>
        <ul>
            <li><?= $mhs['Nama']; ?></li>
            <li><?= $mhs['Jurusan']; ?></li>
            <li><?= $mhs['Umur']; ?></li>
        </ul>
    <?php endforeach; ?>
</div>