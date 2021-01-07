        <div class="nav-left-sidebar" style="background-color: white;">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#" style="font-family: 'Share Tech Mono', monospace;">Menu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link <?php echo $this->uri->segment(2) == 'index' || 
                                $this->uri->segment(2) == 'tambah_Alternatif' || 
                                $this->uri->segment(2) == 'edit_alternatif' ||
                                $this->uri->segment(2) == 'edit_bobot' ? 'active': '' ?>" href="<?php echo base_url() ?>SPK/index" aria-expanded="false"><i class="fas fa-list"></i>DATA ALTERNATIF</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $this->uri->segment(2) == 'vektor_s' ? 'active': '' ?>" href="<?php echo base_url() ?>SPK/vektor_s" aria-expanded="false"><i class="fas fa-superscript"></i> VEKTOR S</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $this->uri->segment(2) == 'vektor_v' ? 'active': '' ?>" href="<?php echo base_url() ?>SPK/vektor_v" aria-expanded="false"><i class="fas fa-superscript"></i> VEKTOR V</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $this->uri->segment(2) == 'rangking' ? 'active': '' ?>" href="<?php echo base_url() ?>SPK/rangking" aria-expanded="false"><i class="fas fa-trophy"></i>RANGKING</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>