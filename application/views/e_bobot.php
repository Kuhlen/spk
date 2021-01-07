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
                            
                            <form action="<?=base_url()?>SPK/editBobot" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_bobot" value="<?=$bobot->id_bobot?>" />
                                    <div class="card-header">
                                        <a class="kembali" href="<?php echo base_url() ?>SPK/index">
                                            <i class="fas fa-arrow-left"></i>
                                            KEMBALI
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">W1</label>
                                            <input id="inputText3" type="text" name="w1" class="form-control" value="<?=$bobot->w1?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">W2</label>
                                            <input id="inputText3" type="text" name="w2" class="form-control" value="<?=$bobot->w2?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">W3</label>
                                            <input id="inputText3" type="text" name="w3" class="form-control" value="<?=$bobot->w3?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">W4</label>
                                            <input id="inputText3" type="text" name="w4" class="form-control" value="<?=$bobot->w4?>">
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