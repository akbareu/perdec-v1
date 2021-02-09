            <!-- Navbar-->
            <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </div>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?php echo base_url('admin/user/edit/4') ?>"><i class="fas fa-user-cog"></i>&nbspSettings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('login/logout') ?>"><i class="fas fa-power-off"></i>&nbspLogout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">MENU</div>
                            
                            <!--Menu Statistik -->
                            <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                                Pesan masuk
                            </a>

                            <!--Menu Project -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Project
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url('admin/project') ?>"><i class="fas fa-folder-open"></i>&nbspData project</a>
                                    <a class="nav-link" href="<?php echo base_url('admin/kategori') ?>"><i class="fas fa-tags"></i>&nbspKategori project</a>
                                </nav>
                            </div>

                            <!--Menu Konfigurasi -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConf" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-tools"></i></div>
                                Konfigurasi
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseConf" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url('admin/konfigurasi')?>"><i class="fas fa-home"></i>&nbspUmum</a>
                                    <a class="nav-link" href="<?php echo base_url('admin/konfigurasi/foto')?>"><i class="fas fa-images"></i>&nbspFoto</a>
                                    <a class="nav-link" href="<?php echo base_url('admin/konfigurasi/icon')?>"><i class="fas fa-images"></i>&nbspIcon</a>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
        <div id="layoutSidenav_content">
            <main>
            