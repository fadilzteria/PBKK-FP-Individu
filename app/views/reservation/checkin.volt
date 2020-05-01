<div class="container">
    <h2>Pemesanan Reservasi Hotel</h2>

    <p><?php echo $this->flashSession->output() ?></p>

    <?php echo $this->tag->form("reservation/checkin/submit"); ?>

        <div class="form-group">
            <label for="tipe_kamar">Tipe Kamar</label>
            <?php echo $form->render('tipe_kamar'); ?>
        </div>

        <div class="form-group">
            <label for="jumlah_hari">Jumlah Hari</label>
            <?php echo $form->render('jumlah_hari'); ?>
        </div>

        <div class="form-group">
            <label for="nama">Nama Tamu</label>
            <?php echo $form->render('nama'); ?>
        </div>

        <div class="form-group">
            <label for="email">E-Mail</label>
            <?php echo $form->render('email'); ?>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat Tamu</label>
            <?php echo $form->render('alamat'); ?>
        </div>

        <div class="form-group">
            <label for="kota">Kota Tamu</label>
            <?php echo $form->render('kota'); ?>
        </div>

        <div class="form-group">
            <label for="telp">Nomor Telepon</label>
            <?php echo $form->render('telp'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->render('submit'); ?>
        </div>

    </form>
</div>