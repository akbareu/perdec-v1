<?php 
// Notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// Form open
echo form_open(base_url('admin/kategori/add'),' class="form-horizontal"');
 ?>
 <div class="container-fluid">
                <h2 class="mt-4">Administrator</h2>
                        <div class="card mb-4">
                            <div class="card-header">
                            <i class="fas fa-plus"></i>
                                <?php echo $title ?>
                            </div>
<div class="form-group">
</br>
  <label class="col-md-3 control-label">Nama kategori</label>
  <div class="col-md-5">
    <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" value="<?php echo set_value('nama') ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label">Urutan</label>
  <div class="col-md-5">
    <input type="number" name="urutan" min="1" class="form-control" placeholder="Urutan Kategori" value="<?php echo set_value('urutan') ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label"></label>
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