<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Obat <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
                    <input type="text" class="form-control" placeholder="Cari data Obat ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Obat</h3>
            <?php if (empty($obat)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID Obat</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($obat as $obt) : ?>
                        <td class="text-center"><?= $obt['id']; ?></td>
                        <td class="text-center"><?= $obt['nama']; ?></td>
                        <td class="text-center"><?= $obt['keterangan']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>Obat/hapus/<?= $obt['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                            <a href="<?= base_url(); ?>Obat/ubah/<?= $obt['id'] ?>" class="badge badge-success float-center" ?>ubah</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>obat/tambah " class="btn btn-primary">Tambah Data Obat</a>
                </div>
            </div>

        </div>
    </div>
</div> 