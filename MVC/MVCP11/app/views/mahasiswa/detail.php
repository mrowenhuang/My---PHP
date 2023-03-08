<div class="container mt-5">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Data Mahasiswa</h5>
      
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['Nama']; ?></h6>
      <p class="card-text"><?= $data['mhs']['Jurusan']; ?></p>
      <p class="card-text"><?= $data['mhs']['Umur']; ?></p>

      <a href="<?= BaseURL; ?>/mahasiswa" class="card-link">Back</a>
      <a href="<?= BaseURL; ?>/mahasiswa/detail/<?= $data['mhs']['ID']+1;?>" class="card-link">Next Page</a>
    </div>
  </div>

</div>