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
echo form_open_multipart(base_url('admin/project/gambar/'.$project->id_project),' class="form-horizontal"');
 ?>
 <div class="container-fluid">
                <h2 class="mt-4">Administrator</h2>
                        <div class="card mb-4">
                            <div class="card-header">
                            <i class="fas fa-image"></i>
                                <?php echo $title ?>
                            </div>

<div class="form-group form-group-lg">
</br>
  <label class="col-md-2 control-label">Judul Gambar</label>
  <div class="col-md-8">
    <input type="text" name="judul_gambar" class="form-control" placeholder="Judul/Nama Gambar" value="<?php echo set_value('judul_gambar') ?>" required>
  </div>
</div>

<div class="form-group form-group-lg">
  <label class="col-md control-label">Upload Gambar</label>
  <div class="col-md-3">
    <input type="file" name="gambar" class="form-control" placeholder="Gambar project" value="<?php echo set_value('judul_gambar') ?>" required>
  </div>
  </br>
  <div class="col-md-5">
    <button name="submit" type="submit" class="btn btn-success btn-md">
    	<i class="fa fa-save"></i> Unggah Gambar
    </button>
    <button name="reset" type="reset" class="btn btn-info btn-md">
    	<i class="fa fa-times"></i> Reset
    </button>
  </div>
</div>

<?php echo form_close(); ?>

<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-info">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
?>

<table  class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th>NO</th>
			<th>GAMBAR</th>
			<th>JUDUL</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>
				<img src="<?php echo base_url('assets/upload/images/thumbs/'.$project->gambar) ?>" class="img img-responsive img-thumbnail" width="60">
			</td>
			<td><?php echo $project->judul_project ?></td>
			<td>
			</td>
		</tr>
		<?php $no=2; foreach($gambar as $gambar) { ?>
		<tr>
			<td><?php echo $no ?></td>
			<td>
				<img src="<?php echo base_url('assets/upload/images/thumbs/'.$gambar->gambar) ?>" class="img img-responsive img-thumbnail" width="60">
			</td>
			<td><?php echo $gambar->judul_gambar ?></td>
			<td>
				<a href="<?php echo base_url('admin/project/delete_gambar/'.$project->id_project.'/'.$gambar->id_gambar) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus gambar ini?')"><i class="fas fa-trash-alt"></i>&nbspHapus</a>
			</td>
		</tr>
	<?php $no++; } ?>
	</tbody>
</table>