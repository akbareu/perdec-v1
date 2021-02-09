<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-<?php echo $project->id_project ?>">
	<i class="fas fa-trash-alt"></i>&nbspHapus
</button>
</div>

 <div class="modal fade" id="delete-<?php echo $project->id_project ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
	    <div class="callout callout-info">
	      <h4 class="text-center">Peringatan!</h4>
	      <p>Yakin ingin hapus project ini ?, Project yang telah di hapus tidak bisa dikembalikan</p>
	    </div>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url('admin/project/delete/'.$project->id_project) ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbspYa</a>
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i>&nbspTidak</button>
      </div>
    </div>
  </div>
</div>