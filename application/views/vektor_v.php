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
                        <h5 class="card-header" style="font-family: 'Electrolize', sans-serif; font-weight:bold;">MENENTUKAN NILAI VEKTOR V :</h5>
                        <br>
                        <?php
                        foreach($alternatif as $data_alter)
                        { 
                            foreach($bobot as $data_bot) 
                            { ?>
                            
                            <h5 style="text-indent: 20px;">V<sub>(<?=$data_alter->nama?>)</sub> = <img src="https://latex.codecogs.com/gif.latex?\frac&space;{S_{(<?=$data_alter->nama?>)}}
                            {(
                                <?php
                                $semuaNama = array();
                                foreach($alternatif as $nama_alter)
                                { 
                                    $semuaNama[] = $nama_alter->nama?>
                                <?php } 
                                $listNama = implode("+",$semuaNama)?>
                                S_{(<?=$listNama?>)}
                            )}" title="\frac {<?=$data_alter->nama?>}{S_total}" /></h5>
                            

                            <h5 style="text-indent: 65px;">= <img src="https://latex.codecogs.com/gif.latex?\frac&space;{<?=pow($data_alter->c1, $data_bot->w1) * pow($data_alter->c2, $data_bot->w2) * pow($data_alter->c3, $data_bot->w3) * pow($data_alter->c4, $data_bot->w4)?>}
                            {(
                                <?php
                                $list = array();
                                foreach($alternatif as $nilai_alter)
                                { 
                                    foreach($bobot as $nilai_bot)
                                    {
                                        $list[] = (pow($nilai_alter->c1, $nilai_bot->w1) * pow($nilai_alter->c2, $nilai_bot->w2) * pow($nilai_alter->c3, $nilai_bot->w3) * pow($nilai_alter->c4, $nilai_bot->w4))?>
                                    <?php } 
                                    $listed = implode("+",$list)?>
                                <?php } ?>
                                {<?=$listed?>}
                            )}" title="\frac {<?=$data_alter->nama?>}{S_total}" /></h5>
                            
                            <h5 style="text-indent: 65px;">= <img src="https://latex.codecogs.com/gif.latex?\frac&space;{<?=pow($data_alter->c1, $data_bot->w1) * pow($data_alter->c2, $data_bot->w2) * pow($data_alter->c3, $data_bot->w3) * pow($data_alter->c4, $data_bot->w4)?>}
                            {(
                                <?php
                                $sum = 0;
                                foreach($alternatif as $nilai_alter)
                                { 
                                    foreach($bobot as $nilai_bot)
                                    {
                                        $sum+=pow($nilai_alter->c1, $nilai_bot->w1) * pow($nilai_alter->c2, $nilai_bot->w2) * pow($nilai_alter->c3, $nilai_bot->w3) * pow($nilai_alter->c4, $nilai_bot->w4)?>
                                <?php } ?>
                            <?php } ?>
                            {<?=$sum?>}
                            )}" title="\frac {<?=$data_alter->nama?>}{S_total}" /></h5>
                            
                            <h5 style="text-indent: 65px;">= 
                            <?php 
                            $sum = 0;
                            foreach($alternatif as $nilai_alter)
                            { 
                                foreach($bobot as $nilai_bot)
                                    {
                                        $sum+=pow($nilai_alter->c1, $nilai_bot->w1) * pow($nilai_alter->c2, $nilai_bot->w2) * pow($nilai_alter->c3, $nilai_bot->w3) * pow($nilai_alter->c4, $nilai_bot->w4)?>
                                <?php } ?>
                            <?php } ?>
                            <?=pow($data_alter->c1, $data_bot->w1) * pow($data_alter->c2, $data_bot->w2) * pow($data_alter->c3, $data_bot->w3) * pow($data_alter->c4, $data_bot->w4) / $sum?></h5>
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