<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="display-5 text-center mb-4">Form Pemesanan</h1>
    <form action="<?= base_url('homepage/form'); ?>" method="POST">
        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda.." class="form-control" value="<?= set_value('name') ?>">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

        <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat Lengkap..." class="form-control mt-2" value="<?= set_value('alamat') ?>">
        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>

        <input type="text" name="hp" id="hp" placeholder="Masukkan No HP..." class="form-control mt-2" value="<?= set_value('hp') ?>">
        <?= form_error('hp', '<small class="text-danger pl-3">', '</small>'); ?>

        <input type="text" name="pilihan" id="pilihan" placeholder="Makanan / Minuman yang dipilih... contoh ( Makaroni BBQ )" class="form-control mt-2" <?= set_value('pilihan') ?>>
        <?= form_error('pilihan', '<small class="text-danger pl-3">', '</small>'); ?>
        <button class="btn btn-primary mt-3 form-control" type="submit">Cetak Pesanan!</button>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->