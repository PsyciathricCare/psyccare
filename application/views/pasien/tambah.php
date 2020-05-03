<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Pasien
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_pasien">ID Pasien</label>
                            <input type="text" class="form-control" id="id_pasien" name="id_pasien">
                            <small class="form-text text-danger"><?= form_error('id_pasien') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nama_pasien">Nama</label>
                            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
                            <small class="form-text text-danger"><?= form_error('nama_pasien') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="keluhan">Keluhan</label>
                            <input type="text" class="form-control" id="keluhan" name="keluhan">
                            <small class="form-text text-danger"><?= form_error('keluhan') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                            <small class="form-text text-danger"><?= form_error('pekerjaan') ?>.</small>
                        </div>                        
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 