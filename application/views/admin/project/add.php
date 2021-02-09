<?php 
// Error upload project
if (isset($error)) {
  echo '<p class="alert alert-warning">';
  echo $error;
  echo '</p>';
}

// Notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// Form open
echo form_open_multipart(base_url('admin/project/add'),' class="form-horizontal"');
 ?>
 <div class="container-fluid">
                <h2 class="mt-4">Administrator</h2>
                        <div class="card mb-4">
                            <div class="card-header">
                            <i class="fas fa-folder-plus"></i>
                                <?php echo $title ?>
                            </div>

<div class="form-group form-group-lg">
</br>
  <label class="col-md-2 control-label">Judul Project</label>
  <div class="col-md-8">
    <input type="text" name="judul_project" class="form-control" placeholder="Judul" value="<?php echo set_value('judul_project') ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Kode</label>
  <div class="col-md-5">
    <input type="text" name="kode_project" class="form-control" placeholder="Kode" value="<?php echo set_value('kode_project') ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Kategori</label>
  <div class="col-md-5">
    <select name="id_kategori" class="form-control">
      <?php foreach ($kategori as $kategori) { ?>
      <option value="<?php echo $kategori->id_kategori ?>">
       <?php echo $kategori->nama_kategori ?> 
      </option>
      <?php } ?>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Keterangan</label>
  <div class="col-md-10">
    <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="editor"><?php echo set_value('keterangan') ?></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Gambar</label>
  <div class="col-md-10">
    <input type="file" name="gambar" class="form-control">
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Status project</label>
  <div class="col-md-10">
    <select name="status_project" class="form-control">
      <option value="Ready">Ready</option>
      <option value="Pending">Pending</option>
    </select>
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