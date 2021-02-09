<!-- About Section-->
    <section class="page-section" id="about">
        <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="<?php
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
                <!-- About Section Form-->
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center">
                        <img class="img-fluid img-responsive img-top rounded" src="<?php echo base_url()?>assets/template/assets/img/akbar.png" width="255px" height="255px" alt="Akbar Card">
                        <h3 class="lead"><?php echo $author->nama ?></h3>
                        <kbd><?php echo $author->profesi ?></kbd>
                        <div class="<?php
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
                                    ?>">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-3 mr-auto">
                        <h4>Skills :</h4>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Codeigniter
                                    <span class="badge badge-secondary badge-pill">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    SASS (Bootstrap)
                                    <span class="badge badge-secondary badge-pill">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    HTML & CSS
                                    <span class="badge badge-secondary badge-pill">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Winbox
                                    <span class="badge badge-secondary badge-pill">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Ms.Office
                                    <span class="badge badge-secondary badge-pill">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                </li>
                            </ul>
                    </div>
                </div>
        </section>
