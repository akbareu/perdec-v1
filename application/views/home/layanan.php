<!-- Layanan Section-->
    <section class="page-section <?php
        if ($site->background=="Green") {
        echo "bg-success";
        } elseif ($site->background=="Red") {
        echo "bg-danger";
        } elseif ($site->background=="Blue") {
        echo "bg-info";
        } elseif ($site->background=="Turqoise") {
        echo "bg-primary";
        } elseif ($site->background=="Spruce") {
        echo "bg-secondary";
        } elseif ($site->background=="Butterscotch") {
        echo "bg-warning";
        } elseif ($site->background=="Dark") {
        echo "bg-dark";
        } elseif ($site->background=="Light") {
        echo "bg-light";
        }
        ?> text-white mb-0" id="service">
            <div class="container">
                <!-- Layanan Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Pelayanan</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Layanan Section Content-->
                <div class="row">
                    <div class="card-warning col-lg-4 ml-auto text-light">
                        <div class="card-header text-center">
                            <i class="fas fa-piggy-bank fa-7x mb-4"></i>
                            <p class="lead">Jasa pengembangan website dengan harga dan biaya operasional yang terjangkau.
                            </p>
                        </div>
                    </div>
                    <div class="card-warning col-lg-4 mr-auto text-light">
                        <div class="card-header text-center">
                            <i class="fas fa-chart-line fa-7x mb-4"></i>
                            <p class="lead text-sm">Menjangkau pasar lebih luas dan tidak perlu membuka cabang distribusi.
                            </p>
                        </div>
                    </div>
                    <div class="card-warning col-lg-4 m-auto text-light">
                        <div class="card-header text-center">
                                <i class="fas fa-file-alt fa-7x mb-4"></i>
                                <p class="lead">Sistem pengolahan data yang manual kini dapat dilakukan dengan cepat dan mudah.
                                </p>
                        </div>
                    </div>
                </div>
                <!-- Layanan Section Button-->
                    <div data-toggle="modal" data-target="#servicesModal">
                        <div class="text-center mt-4">
                            <a class="btn btn-xl btn-outline-light">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Hubungi admin
                            </a>
                        </div>
                    </div>
            </div>
        </section>
        