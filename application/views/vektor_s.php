<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <?php $this->load->view("_partials/navbar.php") ?>
        <?php $this->load->view("_partials/sidebar.php") ?>

        <div class="dashboard-wrapper" style="background-color: silver;">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                        <h5 class="card-header" style="font-family: 'Electrolize', sans-serif; font-weight:bold;">MENENTUKAN NILAI VEKTOR S :</h5>
                        <br>
                        <?php
                        foreach($alternatif as $data_alter)
                        { 
                            foreach($bobot as $data_bot) 
                            { ?>
                            <h5 style="text-indent: 20px;">S<sub>(<?=$data_alter->nama?>)</sub> = (<?=$data_alter->c1?><sup><?=$data_bot->w1?></sup>) x (<?=$data_alter->c2?><sup><?=$data_bot->w2?></sup>) x (<?=$data_alter->c3?><sup><?=$data_bot->w3?></sup>) x (<?=$data_alter->c4?><sup><?=$data_bot->w4?></sup>)</h5>
                            <h5 style="text-indent: 65px;">= (<?=pow($data_alter->c1, $data_bot->w1)?>) x (<?=pow($data_alter->c2, $data_bot->w2)?>) x (<?=pow($data_alter->c3, $data_bot->w3)?>) x (<?=pow($data_alter->c4, $data_bot->w4)?>)</h5>
                            <h5 style="text-indent: 65px;">= <?=pow($data_alter->c1, $data_bot->w1) * pow($data_alter->c2, $data_bot->w2) * pow($data_alter->c3, $data_bot->w3) * pow($data_alter->c4, $data_bot->w4)?></h5>
                            <br>
                            <?php } ?>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("_partials/js.php") ?>
</body>

</html>