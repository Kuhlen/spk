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
                            
                            <form action="<?=base_url()?>SPK/editAlternatif" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_alternatif" value="<?=$alternatif->id_alternatif?>" />
                                    <div class="card-header">
                                        <a class="kembali" href="<?php echo base_url() ?>SPK/index">
                                            <i class="fas fa-arrow-left"></i>
                                            KEMBALI
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Nama Alternatif</label>
                                            <input id="inputText3" type="text" name="nama" class="form-control" value="<?=$alternatif->nama?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">C1</label>
                                            <input id="inputText3" type="number" name="c1" class="form-control" value="<?=$alternatif->c1?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">C2</label>
                                            <input id="inputText3" type="number" name="c2" class="form-control" value="<?=$alternatif->c2?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">C3</label>
                                            <input id="inputText3" type="number" name="c3" class="form-control" value="<?=$alternatif->c3?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">C4</label>
                                            <input id="inputText3" type="number" name="c4" class="form-control" value="<?=$alternatif->c4?>">
                                        </div>

                                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> SIMPAN</button>
                                    </div>              
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("_partials/js.php") ?>
</body>

</html>