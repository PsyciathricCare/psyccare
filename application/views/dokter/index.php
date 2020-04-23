<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Dokter <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
                    <input type="text" class="form-control" placeholder="Cari data Dokter ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Dokter</h3>
            <?php if (empty($dokter)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID_Dokter</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Spesialis Bidang</th>
                        <th class="text-center" scope="col">Lulusan</th>
                        <th class="text-center" scope="col">No.Izin Praktik</th>
                        <th class="text-center" scope="col">Lokasi Praktik</th>
                        <th class="text-center" scope="col">Pengalaman Kerja</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($dokter as $dkt) : ?>
                        <td class="text-center"><?= $dkt['id_dokter']; ?></td>
                        <td class="text-center"><?= $dkt['nama_dokter']; ?></td>
                        <td class="text-center"><?= $dkt['bidang']; ?></td>
                        <td class="text-center"><?= $dkt['lulusan']; ?></td>
                        <td class="text-center"><?= $dkt['nomor_izinpraktik']; ?></td>
                        <td class="text-center"><?= $dkt['lokasi_praktik']; ?></td>
                        <td class="text-center"><?= $dkt['pengalaman_kerja']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>dokter/hapus/<?= $dkt['id_dokter'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                            <a href="<?= base_url(); ?>dokter/ubah/<?= $dkt['id_dokter'] ?>" class="badge badge-success float-center" ?>ubah</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>dokter/tambah " class="btn btn-primary">Tambah Data Dokter</a>
                </div>
            </div>

        </div>
    </div>
</div> 