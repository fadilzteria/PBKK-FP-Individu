<div class="container">
    <h3><i class="fa fa-cogs"></i> Data Reservasi</h3>
    <p><?= $this->flashSession->output() ?></p>

    <table class="table table-hover table-sm table-bordered" style="background-color: #df7841;">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Jumlah Hari</th>
                <th scope="col">Jumlah Tarif</th>
                <th scope="col">Status Pembayaran</th>
                <th scope="col">Status Check Out</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reserv) { ?>
                <tr>
                    <th scope="row"><?= $reserv->id_reservasi ?></th>
                    <td><?= $reserv->nama_tamu ?></td>
                    <td><?= $reserv->email_tamu ?></td>
                    <td><?= $reserv->alamat_tamu ?></td>
                    <td><?= $reserv->telp_tamu ?></td>
                    <td><?= $reserv->duration ?></td>
                    <td>Rp<?= $reserv->jumlah_tarif ?></td>
                    <td><?= $reserv->status_bayar ?></td>
                    <td><?= $reserv->status_checkout ?></td>
                <tr>
            <?php } ?>
        </tbody>
    </table>
</div>