<!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portofolio</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                    <i class="<?php
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
                    ?> fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
            </div>
                <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
<?php $no=1; foreach ($project1 as $project1) { ?>
                <!-- Portfolio Item <?php echo $no ?> -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal<?php echo $no ?>">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                            <img class="img-fluid" src="<?php echo base_url('assets/upload/images/'.$project1->gambar) ?>" alt="<?php echo $project1->judul_project ?>"/>
                    </div>
                </div>
                    <?php $no++; } ?>
            </div>
        </div>
    </section>
