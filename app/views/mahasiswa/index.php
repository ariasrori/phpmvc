<div class="container mt-3">

    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>    
    </div>

    <div class="row">
        <div class="col-6">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
            </button>

            <h3>Daftar Mahasiswa</h3>        

            <?php foreach($data['mhs'] as $mhs) : ?>
                <ul class="list-group">
                    <li class="list-group-item">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-pill badge-danger float-right ml-2" onclick="return confirm('Yakin Hapus ?')">Hapus</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-pill badge-primary float-right ml-2">Detail</a>
                    </li>
                </ul>
            <?php endforeach; ?>

        </div>    
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nim">nim</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>