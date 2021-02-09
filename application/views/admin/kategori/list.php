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
                <i class="fas fa-list-ul"></i>
                    <?php echo $title ?>
                </div>

    <div class="card-body">
    <p>
	<a href="<?php echo base_url('admin/kategori/add') ?>" class="btn btn-success btn-md">
		<i class="fa fa-plus"></i> Tambah Kategori
	</a>
    </p>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>NAMA</th>
			<th>SLUG</th>
			<th>URUTAN</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($kategori as $kategori) { ?>
		<tr>
			<td><?php echo $kategori->nama_kategori ?></td>
			<td><?php echo $kategori->slug_kategori ?></td>
			<td><?php echo $kategori->urutan ?></td>
			<td>
				<a href="<?php echo base_url('admin/kategori/edit/'.$kategori->id_kategori) ?>" class="btn btn-warning btn-xs"><i class="far fa-edit"></i> Edit</a>
				
				<a href="<?php echo base_url('admin/kategori/delete/'.$kategori->id_kategori) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus kategori ini ?')"><i class="fas fa-trash-alt"></i> Hapus</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>