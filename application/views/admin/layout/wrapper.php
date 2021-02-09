<?php
// Membatasi akses dashboard
$this->simple_login->cek_login();
// Penggabungan dari beberapa file menjadi satu 
require_once('head.php');
require_once('header.php');
require_once('nav.php');
require_once('content.php');
require_once('footer.php');
