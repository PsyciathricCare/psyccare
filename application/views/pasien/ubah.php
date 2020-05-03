<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Pasien
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien'] ?>">
                        <div class="form-group">
                            <label for="id_pasien">ID Pasien</label>
                            <input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?= $pasien['id_pasien']; ?>">
                            <small class="form-text text-danger"><?= form_error('id_dokter') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nama_pasien">Nama</label>
                            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= $pasien['nama_pasien']; ?>" >
                            <small class="form-text text-danger"><?= form_error('nama_pasien') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="keluhan">Keluhan</label>
                            <input type="text" class="form-control" id="keluhan" name="keluhan" value="<?= $pasien['keluhan']; ?>">
                            <small class="form-text text-danger"><?= form_error('keluhan') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $pasien['pekerjaan']; ?>">
                            <small class="form-text text-danger"><?= form_error('pekerjaan') ?>.</small>
                        </div>                        
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pasien['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 