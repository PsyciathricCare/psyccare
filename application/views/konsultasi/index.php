<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Konsultasi <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Konsultasi ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Konsultasi</h3>
            <?php if (empty($konsultasi)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID_Konsultasi</th>
                        <th class="text-center" scope="col">ID_Dokter</th>
                        <th class="text-center" scope="col">ID_Pasien</th>
                        <th class="text-center" scope="col">Jadwal Konsultasi</th>
                        <th class="text-center" scope="col">Lama Konsultasi dalam Jam</th>
                        <th class="text-center" scope="col">Kisaran Harga</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($konsultasi as $kns) : ?>
                        <td class="text-center"><?= $kns['id_konsultasi']; ?></td>
                        <td class="text-center"><?= $kns['id_dokter']; ?></td>
                        <td class="text-center"><?= $kns['id_pasien']; ?></td>
                        <td class="text-center"><?= $kns['jadwal_konsultasi']; ?></td>
                        <td class="text-center"><?= $kns['waktu']; ?></td>
                        <td class="text-center"><?= $kns['harga_jasa']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>konsultasi/hapus/<?= $kns['id_konsultasi'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                            <a href="<?= base_url(); ?>konsultasi/ubah/<?= $kns['id_konsultasi'] ?>" class="badge badge-success float-center" ?>ubah</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>konsultasi/tambah " class="btn btn-primary">Tambah Data Konsultasi</a>
                </div>
            </div>

        </div>
    </div>
</div> 