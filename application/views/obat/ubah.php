<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Obat
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $obat['id'] ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $obat['nama']; ?>" >
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $obat['keterangan']; ?>">
                            <small class="form-text text-danger"><?= form_error('keterangan') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 