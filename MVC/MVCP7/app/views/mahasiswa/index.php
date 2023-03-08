<div class="container mt-5">
    <h3>Data Mahasiswa</h3>
        <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) :?>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <?= $mhs['Nama'] ; ?> <a href="<?= BaseURL; ?>/mahasiswa/detail/<?= $mhs['ID']; ?>" class="badge rounded-pill bg-dark text-light">Details</a>
            </li>
        <?php endforeach; ?>
        </ul>
</div>