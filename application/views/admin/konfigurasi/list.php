<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
  echo '<p class="alert alert-info">';
  echo $this->session->flashdata('sukses');
  echo '</p>';
}
?>

<?php 
// Error upload data
if (isset($error)) {
  echo '<p class="alert alert-warning">';
  echo $error;
  echo '</p>';
}

// Notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// Form open
echo form_open_multipart(base_url('admin/konfigurasi'),' class="form-horizontal"');
 ?>
<div class="container-fluid">
    <h2 class="mt-4">Administrator</h2>
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-home"></i>
            <?php echo $title ?>                            
            </div>

<div class="form-group-lg">
<div class="form-group">
</br>
  <label class="col-md-3 control-label">Tagline/Moto</label>
  <div class="col-md-8">
    <input type="text" name="tagline" class="form-control" placeholder="Tagline/Moto" value="<?php echo $konfigurasi->tagline ?>">
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label">Meta tag</label>
  <div class="col-md-9">
    <input type="text" name="metatag" class="form-control" placeholder="Meta tag (title)" value="<?php echo $konfigurasi->metatag ?>">
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label">Deskripsi</label>
  <div class="col-md-9">
    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi"><?php echo $konfigurasi->deskripsi ?></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Tema</label>
  <div class="col-md-5">
    <select name="background" class="form-control">
    	<option value="Green" <?php if($konfigurasi->background=="Green") { echo "selected"; } ?>>Green</option>
        <option value="Blue" <?php if($konfigurasi->background=="Blue") { echo "selected"; } ?>>Blue</option>
        <option value="Red" <?php if($konfigurasi->background=="Red") { echo "selected"; } ?>>Red</option>
        <option value="Turqoise" <?php if($konfigurasi->background=="Turqoise") { echo "selected"; } ?>>Turqoise</option>
        <option value="Spruce" <?php if($konfigurasi->background=="Spruce") { echo "selected"; } ?>>Spruce</option>
        <option value="Butterscotch" <?php if($konfigurasi->background=="Butterscotch") { echo "selected"; } ?>>Butterscotch</option>
        <option value="Dark" <?php if($konfigurasi->background=="Dark") { echo "selected"; } ?>>Dark</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label">Keyword</label>
  <div class="col-md-9">
    <input type="text" name="keywords" class="form-control" placeholder="Memudahkan pelanggan menemukan website anda" value="<?php echo $konfigurasi->keywords ?>">
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label"></label>
  <div class="col-md-5">
    <button name="submit" type="submit" class="btn btn-success btn-lg">
    	<i class="fa fa-save"></i> Simpan
    </button>
    <button name="reset" type="reset" class="btn btn-info btn-lg">
    	<i class="fa fa-times"></i> Reset
    </button>
  </div>
</div>

 <?php echo form_close(); ?>