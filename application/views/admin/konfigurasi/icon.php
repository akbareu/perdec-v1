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
echo form_open_multipart(base_url('admin/konfigurasi/icon'),' class="form-horizontal"');
 ?>
 <div class="container-fluid">
    <h2 class="mt-4">Administrator</h2>
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-images"></i>
            <?php echo $title ?>                            
            </div>
        <div class="card-body">
<div class="form-group">
<div class="form-group-lg">
  <label class="col-md-3 control-label">Meta tag</label>
  <div class="col-md-8">
    <input type="text" name="metatag" class="form-control" placeholder="Judul website" value="<?php echo $konfigurasi->metatag ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label">Upload Icon Web</label>
  <div class="col-md-8">
    <input type="file" name="icon" class="form-control" placeholder="Upload icon web" value="<?php echo $konfigurasi->icon ?>" required>
    Icon lama : <br>
    <img src="<?php echo base_url('assets/upload/images/'.$konfigurasi->icon) ?>" class="img img-responsive img-thumbnail" width="300">
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