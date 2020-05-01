<div class="container-fluid">
    <div class="row">
        <div class="p-3 d-flex justify-content-center">
            <div class="col-md-8 col-sm-8">
                <div class="section-row">
                    <h3 class=" font-weight-bold" align="center">Kamar</h5>
                </div>
                {% for kamar in kamars %}
                <div class="card mb-2 shadow border border-0 rounded-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 align="center">{{kamar.jenis_kamar}}</h4>
                                <p align="justify-content-center">{{kamar.deskripsi}}</p>
                                <p align="justify-content-center">Tarif Kamar :Rp{{kamar.tarif_kamar}}</p>
                                <p align="justify-content-center">Ukuran      :{{kamar.ukuran}} meter persegi</p>
                                <p align="justify-content-center">Fitur       :{{kamar.fitur}}</p>
                                <p align="justify-content-center">Kapasitas   :{{kamar.kapasitas}} kamar</p>

                            </div>
                        </div>
                    </div>    
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>