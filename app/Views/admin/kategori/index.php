<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

	<div class="row">
		
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col">
							<a href="#" class="btn btn-outline-primary btn-add">
								<i class="ri-add-line"></i>
							</a>
						</div>
						<div class="col">
							<?php if (!empty(session()->getFlashdata('success'))) { ?>
				                <div class="alert alert-success">
				                    <?= session()->getFlashdata('success'); ?>
				                </div>
            				<?php } ?>

				            <?php if (!empty(session()->getFlashdata('info'))) { ?>
				                <div class="alert alert-info">
				                    <?= session()->getFlashdata('info'); ?>
				                </div>
				            <?php } ?>

				            <?php if (!empty(session()->getFlashdata('warning'))) { ?>
				                <div class="alert alert-warning">
				                    <?= session()->getFlashdata('warning'); ?>
				                </div>
				            <?php } ?>
						</div>
					</div>
				</div>
	            <div class="card-body p-3">
	              	<table class="table table-striped">
		                <thead>
			                <tr class="text-center">
			                    <th>No</th>
			                    <th>Nama Kategori</th>
			                    <th width="200">Pilihan</th>
			                </tr>
		                </thead>
			            <tbody>
			            	<?php 
			            		$no=1; 
			            		foreach($kate as $row): ?>
			                <tr>
			                    <td class="text-center"><?= $no++;?></td>
			                    <td><?= $row['nama_kategori']; ?></td>
			                    <td class="text-center">
			                    	<a href="#" class="btn btn-outline-warning btn-sm btn-edit" 
			                    		data-idk="<?= $row['id_kategori']; ?>"
			                    		data-nma="<?= $row['nama_kategori']; ?>">
			                    		<i class="ri-pencil-line"></i>
			                    	</a>

			                    	<a class="btn btn-outline-danger btn-sm btn-delete" 
			                    		data-id="<?= $row['id_kategori'];?>">
			                    		<i class="ri-delete-bin-line"></i>
			                    	</a>
			                    </td>
			                </tr>
			            	<?php endforeach; ?>
			            </tbody>
	              	</table>
	            </div>
          	</div>
		</div>

	</div>

	<!-- Modal add Kategori -->
	<form action="/a_kategori/save" method="post">
	    <div class="modal fade" id="addModal" tabindex="-1">
	        <div class="modal-dialog">
	            <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">Buat Data Kategori</h5>
		                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		            </div>

		            <div class="modal-body">
		            	<div class="row">
			            	<div class="col-md-12 col-sm-12">
			            		<div class="row mb-1">
			                      	<label class="col-md-6 col-lg-4 col-form-label">Nama Kategori</label>
			                      	<div class="col-md-6 col-lg-8">
			                        	<input type="text" class="form-control" name="nama_kategori" required autocomplete="off">
			                      	</div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="modal-footer">
			        	<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
		                <button type="submit" class="btn btn-outline-primary">Simpan</button>
			        </div>
			   
	            </div>
	        </div>
	    </div>
    </form>

	<!-- Modal Hapus Data-->
  	<form action="/a_kategori/delete" method="post">
	    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true" style="display: none;">
	    	<div class="modal-dialog">
	    		<div class="modal-content">
	           		<div class="modal-header">
	                    <h5 class="modal-title">Konfirmasi</h5>
	                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	                </div>
	                <div class="modal-body">
	                	Apakah anda yakin ingin menghapus data kategori ini?
	                </div>
	                <div class="modal-footer">
	                	<input type="hidden" name="kategoriID" class="kategoriID">
	                  	<button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Batal</button>
	                  	<button type="submit" class="btn btn-outline-danger">Hapus</button>
	                </div>
	          	</div>
	        </div>
	  	</div>
  	</form>
  	<!-- Akhir Modal Hapus -->

  	<!-- Modal Edit Kategori -->
	<form action="/a_kategori/update" method="post">
	    <div class="modal fade" id="editModal" tabindex="-1">
	        <div class="modal-dialog">
	            <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">Edit Data Kategori</h5>
		                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		            </div>

		            <div class="modal-body">
		            	<div class="row">
					  		<input type="hidden" class="id_kategori" name="id_kategori">
			            	<div class="col-md-12 col-sm-12">
			            		<div class="row mb-1">
			                      	<label class="col-md-6 col-lg-4 col-form-label">Nama Kategori</label>
			                      	<div class="col-md-6 col-lg-8">
			                        	<input type="text" class="form-control nama_kategori" name="nama_kategori">
			                      	</div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="modal-footer">
			        	<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
		                <button type="submit" class="btn btn-outline-primary">Update</button>
			        </div>
			   
	            </div>
	        </div>
	    </div>
    </form>

<?= $this->endSection(); ?>

<?= $this->section('script') ;?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.btn-add').on('click',function(){
        	$('#addModal').modal('show');
    	});

		$('.btn-edit').on('click',function(){
			const idk = $(this).data('idk');
            const nma = $(this).data('nma');

			$('.id_kategori').val(idk);
            $('.nama_kategori').val(nma);

            $('#editModal').modal('show');
        });

    	$('.btn-delete').on('click',function(){
        	const id = $(this).data('id');
        	$('.kategoriID').val(id);
        	$('#deleteModal').modal('show');
    	});

    });
</script>
<?= $this->endSection();?>