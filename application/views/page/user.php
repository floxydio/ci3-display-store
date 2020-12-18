<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <?php foreach ($barang as $brg) : ?>
            <div class="col">
                <div class="card text-center mr-2">
                    <img class="card-img-top" src="<?= base_url() . '/assets/gambar/' . $brg->gambar; ?>">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold"><?= $brg->nama_brg; ?></h5>
                        <small class="text-gray-700"><?= $brg->kategori; ?></small>
                        <p class="card-text mt-2"><?= $brg->keterangan; ?></p>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->