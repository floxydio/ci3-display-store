<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">

        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Pilihan</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($invoice as $inv) : ?>
                        <td><?= $inv->nama; ?></td>
                        <td><?= $inv->alamat; ?></td>
                        <td><?= $inv->hp; ?></td>
                        <td><?= $inv->pilihan; ?></td>
                        <td><?= $inv->date_invoice; ?></td>
                </tr>


            <?php endforeach; ?>
            </tbody>
        </table>


        <!-- Page Heading -->


    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->