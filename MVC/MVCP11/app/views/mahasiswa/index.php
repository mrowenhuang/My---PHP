<div class="container mt-5">

  <div class="row">
    <?php Flasher::flash(); ?>
  </div>


  <h3>Data Mahasiswa</h3>

  <div class="button mt-3">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary tombolAddData" data-bs-toggle="modal" data-bs-target="#TambahData">Add Data</button>
  </div>

  <ul class="list-group mt-4">
  <?php foreach ($data['mhs'] as $mhs) :?>
    <li class="list-group-item ">
      <?= $mhs['Nama'] ; ?>
      <a href="<?= BaseURL; ?>/mahasiswa/hapus/<?= $mhs['ID']; ?>" class="pr-2 badge bg-danger text-light float-end" onclick="return confirm('Are You Sure');">Hapus</a>
      <a href="<?= BaseURL; ?>/mahasiswa/ubah/<?= $mhs['ID']; ?>" class="badge bg-success text-light float-end me-2 UbahData" data-bs-toggle="modal" data-bs-target="#TambahData" data-id="<?= $mhs['ID']; ?>">Ubah</a>
      <a href="<?= BaseURL; ?>/mahasiswa/detail/<?= $mhs['ID']; ?>" class="badge bg-primary text-light float-end me-2">Details</a>
    </li>
  <?php endforeach; ?>
  </ul>

</div>

<!-- Modal -->
<div class="modal fade" id="TambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?=BaseURL;?>/mahasiswa/tambah" method="POST">
        <div class="mb-3">

            <input type="hidden" name="id" id='id'>
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" id="Name" placeholder="Input Name Data" name="Name">

            <label for="Umur" class="form-label">Umur</label>
            <input type="text" class="form-control" id="Umur" placeholder="Input Age Data" name="Umur">

            <label for="Jurusan" class="form-label">Jurusan</label>
            <select class="form-select" aria-label="Default select example" name="Jurusan" id="Jurusan">
                <option selected>Choose your major</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Informatikan">Teknik Informatikan</option>
                <option value="Penjas">Penjas</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button>
        </form>
      </div>
    </div>
  </div>
</div>