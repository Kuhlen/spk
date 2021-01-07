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
                        <h5 class="card-header">TABEL NILAI SKOR</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <th>Skor</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php
                                            foreach($alternatif as $data_alter)
                                            {
                                                foreach($bobot as $data_bot) 
                                                { ?>
                                            <tr>
                                                <td><?=$data_alter->nama?></td>
                                                <?php 
                                                $sum = 0;
                                                foreach($alternatif as $nilai_alter)
                                                { 
                                                    foreach($bobot as $nilai_bot)
                                                        {
                                                            $sum+=pow($nilai_alter->c1, $nilai_bot->w1) * pow($nilai_alter->c2, $nilai_bot->w2) * pow($nilai_alter->c3, $nilai_bot->w3) * pow($nilai_alter->c4, $nilai_bot->w4)?>
                                                    <?php } ?>
                                                <?php } ?>
                                                <td><?=pow($data_alter->c1, $data_bot->w1) * pow($data_alter->c2, $data_bot->w2) * pow($data_alter->c3, $data_bot->w3) * pow($data_alter->c4, $data_bot->w4) / $sum?></td>
                                                <?php } ?>
                                            <?php } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("_partials/js.php") ?>
</body>

</html>