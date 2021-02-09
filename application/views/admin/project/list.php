<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-info">';
	echo $this->session->flashdata('sukses');
	echo '</p>';
}
?>
        <div class="container-fluid">
                <h2 class="mt-4">Administrator</h2>
                        <div class="card mb-4">
                            <div class="card-header">
                            <i class="fas fa-folder-open"></i>
                                <?php echo $title ?>
                            </div>
                            <div class="card-body">
                                <p>
                                <a href="<?php echo base_url('admin/project/add') ?>" class="btn btn-success btn-md">
                                <i class="fa fa-plus"></i> Tambah project
                                </a>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Project</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <?php $no=1; foreach($project as $project) { ?>
                                            <tr>
                                            <td><?php echo $no ?></td>
                                            <td>
                                            <img src="<?php echo base_url('assets/upload/images/thumbs/'.$project->gambar) ?>" class="img img-responsive img-thumbnail" width="60">
                                            </td>
                                            <td><?php echo $project->judul_project ?></td>
                                            <td><?php echo $project->nama_kategori ?></td>
                                            <td><?php echo $project->status_project ?></td>
                                            <td>
                                            <a href="<?php echo base_url('admin/project/edit/'.$project->id_project) ?>" class="btn btn-xs btn-warning"><i class="far fa-edit"></i>&nbspEdit
                                            </a>

                                            <a href="<?php echo base_url('admin/project/gambar/'.$project->id_project) ?>" class="btn btn-xs btn-info"><i class="fas fa-image"></i>&nbspGambar(<?php echo $project->total_gambar ?>)
                                            </a>
                                            
                                            <?php include('delete.php') ?>
                                            </td>
                                            </tr>
                                            <?php $no++; } ?>
                                            </tbody>
                                            <tfooter>
                                            </tfooter>
                                            </table>
                                </div>
                            </div>

                    </div>
                </div>
            </main>