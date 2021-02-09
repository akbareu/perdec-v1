<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $title ?></title>
        <link href="<?php echo base_url() ?>assets/admin/dist/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
    </head>
    
    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center text-success font-weight-light my-4">Administrator</h3></div>
                                    <div class="card-body">
                            <?php 
                            // Notifikasi error
                            echo validation_errors('<div class="alert alert-danger">','</div>');

                            // Notifikasi gagal login
                            if($this->session->flashdata('danger')) {
                            echo '<div class="alert alert-warning">',$this->session->flashdata('danger'),'</div>';
                            }

                            // Notifikasi pembatasan akses
                            if($this->session->flashdata('warning')) {
                            echo '<div class="alert alert-warning">',$this->session->flashdata('warning'),'</div>';
                            }

                            // Notifikasi logout
                            if($this->session->flashdata('info')) {
                            echo '<div class="alert alert-success">',$this->session->flashdata('info'),'</div>';
                            }
                            // Open form
                            echo form_open(base_url('login'));
                            ?>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input class="form-control py-4" name="username" type="text" placeholder="Enter username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-success">Login</button>
                                            </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
