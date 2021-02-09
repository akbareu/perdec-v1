<body id="page-top">
    <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('admin/dashboard') ?>"><?php echo $author->nama ?></a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold 
<?php
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
?> text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portofolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#service">Layanan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
