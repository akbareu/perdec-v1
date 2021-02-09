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
                <i class="fas fa-envelope"></i>
                    <?php echo $title ?>
                    </br>
            </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>NO HP</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach  ($pesan as $pesan) { ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $pesan->nama ?></td>
            <td><?php echo $pesan->email ?></td>
            <td><?php echo $pesan->no_hp ?></td>
            <td>
                <a href="<?php echo base_url('admin/dashboard/view/'.$pesan->id_pesan) ?>" class="btn btn-success btn-xs"><i class="fas fa-eye"></i> Lihat</a>
                <a href="<?php echo base_url('admin/dashboard/delete/'.$pesan->id_pesan) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus pesan ini ?')"><i class="fas fa-trash-alt"></i> Hapus</a>
            </td>
        </tr>
    <?php $no++; } ?>
    </tbody>
</table>