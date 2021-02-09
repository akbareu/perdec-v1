<?php 
// Notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// Notifikasi
if($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-info">';
	echo $this->session->flashdata('sukses');
	echo '</p>';
}

// Form open
echo form_open(base_url('admin/user/edit/'.$user->id_user),' class="form-horizontal"');


?>
<div class="container-fluid">
                <h2 class="mt-4">Administrator</h2>
                        <div class="card mb-4">
                            <div class="card-header">
                            <i class="fas fa-user-cog"></i>
                                <?php echo $title ?>
                            </div>
<div class="form-group">
</br>
  <label class="col-md-2 control-label">Nama</label>
  <div class="col-md-5">
    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $user->nama ?>">
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Bio</label>
  <div class="col-md-10">
    <textarea name="bio" class="form-control" placeholder="Biografi tentang anda" id="editor"><?php echo $user->bio ?></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Profesi</label>
  <div class="col-md-5">
    <input type="text" name="profesi" class="form-control" placeholder="Blogger - Editor - Fotografer" value="<?php echo $user->profesi ?>">
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Username</label>
  <div class="col-md-5">
    <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $user->username ?>">
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Password</label>
  <div class="col-md-5">
    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php $user->password ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Email</label>
  <div class="col-md-5">
    <input type="email" name="email" class="form-control" placeholder="Email Pengguna" value="<?php echo $user->email ?>">
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Instagram</label>
  <div class="col-md-5">
    <input type="url" name="instagram" class="form-control" placeholder="Instagram Pengguna" value="<?php echo $user->instagram ?>">
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Facebook</label>
  <div class="col-md-5">
    <input type="url" name="facebook" class="form-control" placeholder="Facebook Pengguna" value="<?php echo $user->facebook ?>">
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Github</label>
  <div class="col-md-5">
    <input type="url" name="github" class="form-control" placeholder="Github Pengguna" value="<?php echo $user->github ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Alamat</label>
  <div class="col-md-5">
    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $user->alamat ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Hak akses</label>
  <div class="col-md-5">
    <select name="akses_level" class="form-control">
    	<option value="Admin" <?php if($user->akses_level=="Admin") { echo "selected"; } ?>>Admin</option>
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