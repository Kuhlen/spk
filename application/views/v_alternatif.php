<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <?php $this->load->view("_partials/navbar.php") ?>
        <?php $this->load->view("_partials/sidebar.php") ?>

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">TABEL NILAI ALTERNATIF
                                <a class="tambah" href="<?php echo base_url() ?>SPK/tambah_Alternatif">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Alternatif</th>
                                            <th colspan="6">Kriteria</th>
                                        </tr>
                                        <tr>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            <th class="aksi">Aksi</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                                foreach($alternatif as $data)
                                                {
                                            ?>
                                            <tr>
                                                <td><?=$data->nama?></td>
                                                <td><?=$data->c1?></td>
                                                <td><?=$data->c2?></td>
                                                <td><?=$data->c3?></td>
                                                <td><?=$data->c4?></td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>SPK/edit_alternatif/<?=$data->id_alternatif?>" class="btn btn-small"><i class="fas fa-edit"></i></a>
                                                    <a onclick="return confirm_delete()" href="<?=base_url()?>SPK/hapusAlternatif/<?=$data->id_alternatif?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                        <h5 class="card-header">TABEL NILAI BOBOT</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>w1</th>
                                            <th>w2</th>
                                            <th>w3</th>
                                            <th>w4</th>
                                            <th class="aksi">Aksi</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                                foreach($bobot as $dataBot)
                                                {
                                            ?>
                                            <tr>
                                                <td><?=$dataBot->w1?></td>
                                                <td><?=$dataBot->w2?></td>
                                                <td><?=$dataBot->w3?></td>
                                                <td><?=$dataBot->w4?></td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>SPK/edit_bobot/<?=$dataBot->id_bobot?>" class="btn btn-small"><i class="fas fa-edit"></i></a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header">KETERANGAN KRITERIA :</h5>
                            <p class="p-margin">C1 : Tes Pengetahuan Sistem Informasi</p>
                            <p class="p-margin">Sifat : Keuntungan/Benefit</p>
                            <p></p>

                            <p class="p-margin">C2 : Praktek Instalasi Jaringan</p>
                            <p class="p-margin">Sifat : Keuntungan/Benefit</p>
                            <p></p>

                            <p class="p-margin">C3 : Tes Kepribadian</p>
                            <p class="p-margin">Sifat : Keuntungan/Benefit</p>
                            <p></p>

                            <p class="p-margin">C4 : Tes Pengetahuan Agama</p>
                            <p class="p-margin">Sifat : Keuntungan/Benefit</p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("_partials/js.php") ?>
</body>

</html>
<script type="text/javascript">
    function confirm_delete()
    {
        return confirm('Apakah Anda Ingin Menghapus Data?');
    }
</script>