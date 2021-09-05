<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('log_paok_motong_checklist/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="<?= base_url() . 'log_paok_motong_checklist/add'; ?>" class="btn btn-primary  mb-3">Data Baru</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control easydatepicker" name="tgl[awal]" value="<?= date('d-m-Y'); ?>">
                            </div>
                            <div class="col-sm-6">
                                <!-- <input type="text" class="form-control easydatepicker" name="tgl[akhir]" value="<?= date('d-m-Y'); ?>"> -->
                                <!-- <button type="submit" class="btn btn-danger rounded-0"><span class="fas fa-fw fa-file-pdf"></span>PDF</button> -->
                                &nbsp;
                                <button type="submit" name="excel" class="btn btn-success rounded-0"><span class="fas fa-fw fa-file-excel"></span>Excel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-lg-12 ext1">
            <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
                <thead class="textTable">
                    <tr>
                        <th>No</th>
                        <th>Jenis Kendaraan</th>
                        <th>Model Kendaraan</th>
                        <th>Nomor Polisi</th>
                        <th>Kapasitas BBM</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>waktu</td>
                        <td>nama</td>
                        <td>
                            isi
                        </td>
                        <td>
                            isi
                        </td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                            <a href="#" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<!-- Modal Ch -->
<div class="modal fade" id="ch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cylinder Head</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Pelumasan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ch_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ch_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Bunyi</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ch_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ch_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Solar</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ch_e">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Air</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ch_f">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Gas Buang</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ch_g">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kondisi Baut</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ch_h">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebersihan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ch_i">Kosong</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ip -->
<div class="modal fade" id="ip" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Injection Pump</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Pelumasan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ip_a"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ip_b"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Bunyi</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ip_c"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ip_d"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Solar</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ip_e"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kondisi Baut</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ip_f"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kondisi Rack</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ip_g"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebersihan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ip_h"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Gov -->
<div class="modal fade" id="gov" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Governor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Pelumasan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="gov_a"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="gov_b"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="gov_c"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kondisi Baut</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="gov_d"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebersihan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="gov_e"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Sgb -->
<div class="modal fade" id="sgb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">System Gas Buang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran Turbocharger</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sgb_a"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Bunyi Turbocharger</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sgb_b"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Pelumas Turbo</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sgb_c"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Pelumas Turbo</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sgb_d"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Air Turbo</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sgb_e"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Gas Buang</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sgb_f"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Udara Masuk</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sgb_g"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Bm -->
<div class="modal fade" id="bm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Blok Mesin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Pelumasan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="bm_a"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="bm_b"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Bunyi</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="bm_c"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="bm_d"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Solar</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="bm_e"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran Air</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="bm_f"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kondisi Baut</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="bm_g"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebersihan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="bm_h"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Gen -->
<div class="modal fade" id="gen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Generator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Pelumasan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="gen_a"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="gen_b"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Bunyi</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="gen_c"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kondisi Baut</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="gen_g"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebersihan Saringan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="gen_h"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                        <!-- Awal checklist baru -->
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebersihan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="gen_i"></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Akhir checklist baru -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            "scrollX": true
        });

        $('.ch').on('click', function() {
            console.log('test');
            $('#ch_a, #ch_b, #ch_c, #ch_d, #ch_e, #ch_f, #ch_g, #ch_h, #ch_i').text(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_checklist/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#ch_a').text(hasil.ch_a);
                    $('#ch_b').text(hasil.ch_b);
                    $('#ch_c').text(hasil.ch_c);
                    $('#ch_d').text(hasil.ch_d);
                    $('#ch_e').text(hasil.ch_e);
                    $('#ch_f').text(hasil.ch_f);
                    $('#ch_g').text(hasil.ch_g);
                    $('#ch_h').text(hasil.ch_h);
                    $('#ch_i').text(hasil.ch_i);
                }
            });
        });

        $('.ip').on('click', function() {
            console.log('test');
            $('#ip_a, #ip_b, #ip_c, #ip_d, #ip_e, #ip_f, #ip_g, #ip_h').text(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_checklist/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#ip_a').text(hasil.ip_a);
                    $('#ip_b').text(hasil.ip_b);
                    $('#ip_c').text(hasil.ip_c);
                    $('#ip_d').text(hasil.ip_d);
                    $('#ip_e').text(hasil.ip_e);
                    $('#ip_f').text(hasil.ip_f);
                    $('#ip_g').text(hasil.ip_g);
                    $('#ip_h').text(hasil.ip_h);
                }
            });
        });

        $('.gov').on('click', function() {
            console.log('test');
            $('#gov_a, #gov_b, #gov_c, #gov_d, #gov_e').text(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_checklist/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#gov_a').text(hasil.gov_a);
                    $('#gov_b').text(hasil.gov_b);
                    $('#gov_c').text(hasil.gov_c);
                    $('#gov_d').text(hasil.gov_d);
                    $('#gov_e').text(hasil.gov_e);
                }
            });
        });

        $('.sgb').on('click', function() {
            console.log('test');
            $('#sgb_a, #sgb_b, #sgb_c, #sgb_d, #sgb_e, #sgb_f, #sgb_g').text(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_checklist/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#sgb_a').text(hasil.sgb_a);
                    $('#sgb_b').text(hasil.sgb_b);
                    $('#sgb_c').text(hasil.sgb_c);
                    $('#sgb_d').text(hasil.sgb_d);
                    $('#sgb_e').text(hasil.sgb_e);
                    $('#sgb_f').text(hasil.sgb_f);
                    $('#sgb_g').text(hasil.sgb_g);
                }
            });
        });

        $('.bm').on('click', function() {
            console.log('test');
            $('#bm_a, #bm_b, #bm_c, #bm_d, #bm_e, #bm_f, #bm_g, #bm_h').text(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_checklist/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#bm_a').text(hasil.bm_a);
                    $('#bm_b').text(hasil.bm_b);
                    $('#bm_c').text(hasil.bm_c);
                    $('#bm_d').text(hasil.bm_d);
                    $('#bm_e').text(hasil.bm_e);
                    $('#bm_f').text(hasil.bm_f);
                    $('#bm_g').text(hasil.bm_g);
                    $('#bm_h').text(hasil.bm_h);
                }
            });
        });

        $('.gen').on('click', function() {
            console.log('test');
            $('#gen_a, #gen_b, #gen_c, #gen_g, #gen_h, #gen_i').text(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_checklist/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#gen_a').text(hasil.gen_a);
                    $('#gen_b').text(hasil.gen_b);
                    $('#gen_c').text(hasil.gen_c);
                    $('#gen_d').text(hasil.gen_d);
                    $('#gen_g').text(hasil.gen_g);
                    $('#gen_h').text(hasil.gen_h);
                    $('#gen_i').text(hasil.gen_i);
                }
            });
        });

    });
</script>