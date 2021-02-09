<!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-2">Alamat&nbsp<i class="fas fa-map-marked-alt"></i></h4>
                        <p class="lead col-xs-1">
                            <?php echo $author->alamat ?>
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-0 mb-lg-0">
                        <h4 class="text-uppercase">Yuk Terhubung&nbsp<i class="fas fa-mobile-alt"></i></h4>
                        <a class="btn btn-outline-light btn-social mx-1" target="_blank" href="<?php echo $author->facebook ?>"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" target="_blank" href="<?php echo $author->instagram ?>"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" target="_blank" href="<?php echo $author->github ?>"><i class="fab fa-fw fa-github"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" target="_blank" href="mailto:<?php echo $author->email ?>"><i class="far fa-fw fa-envelope-open"></i></a>
                        <h6 class="text-uppercase mt-2">Click&nbsp<i class="fas fa-hand-pointer"></i></h6>
                    </div>
            </div>
        </div>
    </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Your Website 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Service Modal-->
        <div class="portfolio-modal modal fade" id="servicesModal" tabindex="-1" role="dialog" aria-labelledby="servicesModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                        <div class="modal-body text-center">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                            <?php echo form_open(base_url(),' class="form-horizontal"'); ?>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" type="text" placeholder="Nama." required/>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                            <label>Email Address</label>
                                            <input class="form-control" name="email" type="email" placeholder="Email." required/>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                            <label>No HP/Whatsapp</label>
                                            <input class="form-control" name="no_hp" type="tel" placeholder="No HP/WA." required/>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                            <label>Pesan</label>
                                            <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan." required></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                        <br/>
                                    <div class="form-group">
                                        <button name="submit" type="submit" class="btn 
<?php
if ($site->background=="Green") {
echo "btn-success";
} elseif ($site->background=="Red") {
echo "btn-danger";
} elseif ($site->background=="Blue") {
echo "btn-info";
} elseif ($site->background=="Turqoise") {
echo "btn-primary";
} elseif ($site->background=="Spruce") {
echo "btn-secondary";
} elseif ($site->background=="Butterscotch") {
echo "btn-warning";
} elseif ($site->background=="Dark") {
echo "btn-dark";
} elseif ($site->background=="Light") {
echo "btn-light";
}
?> btn-xl text-light">
                                        <i class="fas fa-paper-plane"></i>&nbspKirim
                                        </button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modals-->
        <?php $no=1; foreach ($project2 as $project2) { ?>
        <!-- Portfolio Modal -->
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $no ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal<?php echo $no ?>Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-2" id="portfolioModal<?php echo $no ?>"><?php echo $project2->judul_project ?></h2>
                                    <!-- Portfolio Modal - Category-->
                                        <kbd><?php echo $project2->nama_kategori ?></kbd>
                                    <!-- Icon Divider-->
                                        <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="
                                        <?php
                                        if ($site->background=="Green") {
                                        echo "text-success";
                                        } elseif ($site->background=="Red") {
                                        echo "text-danger";
                                        } elseif ($site->background=="Blue") {
                                        echo "text-info";
                                        } elseif ($site->background=="Turqoise") {
                                        echo "text-primary";
                                        } elseif ($site->background=="Spruce") {
                                        echo "text-secondary";
                                        } elseif ($site->background=="Butterscotch") {
                                        echo "text-warning";
                                        } elseif ($site->background=="Dark") {
                                        echo "text-dark";
                                        } elseif ($site->background=="Light") {
                                        echo "text-light";
                                        }
                                        ?> fas fa-star "></i></div>
                                        <div class="divider-custom-line"></div>
                                        </div>
                                    
                                    <!-- Portfolio Modal - Image-->
                                        <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets/upload/images/'.$project2->gambar) ?>" alt="" />
                                    
                                    <!-- Portfolio Modal - Text-->
                                        <div class="mb-5"><?php echo $project2->keterangan ?></div>
                                            <a href="#" class="btn btn-warning text-light" data-dismiss="modal">
                                                <i class="fas fa-times fa-fw"></i>
                                                Close Window
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $no++; } ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Blog form JS-->
        <script src="<?php echo base_url() ?>assets/template/assets/mail/jqBootstrapValidation.js"></script>
        <script src="<?php echo base_url() ?>assets/template/assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url() ?>assets/template/js/scripts.js"></script>
    </body>
</html>
