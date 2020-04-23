<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Pasien <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
                    <input type="text" class="form-control" placeholder="Cari data Pasien ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Pasien</h3>
            <?php if (empty($pasien)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID Pasien</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Keluhan</th>
                        <th class="text-center" scope="col">Pekerjaan</th>
                        <th class="text-center" scope="col">Alamat</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($pasien as $psn) : ?>
                        <td class="text-center"><?= $psn['id_pasien']; ?></td>
                        <td class="text-center"><?= $psn['nama_pasien']; ?></td>
                        <td class="text-center"><?= $psn['keluhan']; ?></td>
                        <td class="text-center"><?= $psn['pekerjaan']; ?></td>
                        <td class="text-center"><?= $psn['alamat']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>Pasien/hapus/<?= $psn['id_pasien'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                            <a href="<?= base_url(); ?>Pasien/ubah/<?= $psn['id_pasien'] ?>" class="badge badge-success float-center" ?>ubah</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>pasien/tambah " class="btn btn-primary">Tambah Data Pasien</a>
                </div>
            </div>

        </div>
    </div>
</div> 