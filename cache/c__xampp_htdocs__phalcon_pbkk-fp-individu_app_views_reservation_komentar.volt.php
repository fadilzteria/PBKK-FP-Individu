<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background-color: #df7841;">Ceritakan komentar Anda pada hotel ini</div>

                <div class="card-body">
                    <form method="POST" action="<?= $this->callMacro('action', ['KomentarsController@store']) ?>" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="id_reservasi" class="col-md-2 col-form-label text-md-right">Kode Reservasi</label>   

                            <div class="col-md-2">
                                <input id="id_reservasi" type="text" class="form-control" name="id_reservasi" value="ID Reservasi" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="komentar" class="col-md-2 col-form-label text-md-right">Komentar</label>   

                            <div class="col-md-10">
                                <input id="komentar" type="text" class="form-control" name="komentar" value="Komentar" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary" method="_POST">
                                    Tambah Komentar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>