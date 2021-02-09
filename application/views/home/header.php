        <!-- Masthead-->
        <header class="masthead 
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
        ?>
         text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="<?php echo base_url('assets/upload/images/'.$site->foto) ?>" alt="" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-2"><?php echo $author->nama ?></h1>
                <!-- Icon Divider-->
                <!-- Masthead Subheading-->
                <p class="masthead-subheading text-uppercase mb-0"><?php echo $author->profesi ?></p>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <div class="masthead-subheading text-sm mb-0">
                    <?php echo $author->bio ?>
                </div>
            </div>
        </header>
        