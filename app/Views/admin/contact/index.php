<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

	<div class="row">
		
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
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

                  	<form action="<?= base_url('a_contact/update'); ?>" method="post">
                    	<div class="row mb-2">
                      		<label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
		                    <div class="col-md-8 col-lg-9">
		                        <input id="phone" name="phone" type="text" class="form-control" value="<?= $ct['phone']; ?>">
		                    </div>
                    	</div>
                    	<div class="row mb-2">
                      		<label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
		                    <div class="col-md-8 col-lg-9">
		                        <input id="email" name="email" type="text" class="form-control" value="<?= $ct['email']; ?>">
		                    </div>
                    	</div>
                    	<div class="row mb-2">
                      		<label for="fb" class="col-md-4 col-lg-3 col-form-label">Facebook</label>
		                    <div class="col-md-8 col-lg-9">
		                        <input id="fb" name="fb" type="text" class="form-control" value="<?= $ct['fb']; ?>">
		                    </div>
                    	</div>
                    	<div class="row mb-2">
                      		<label for="ig" class="col-md-4 col-lg-3 col-form-label">Instagram</label>
		                    <div class="col-md-8 col-lg-9">
		                        <input id="ig" name="ig" type="text" class="form-control" value="<?= $ct['ig']; ?>">
		                    </div>
                    	</div>
                    	<div class="row mb-2">
                      		<label for="twt" class="col-md-4 col-lg-3 col-form-label">Twitter</label>
		                    <div class="col-md-8 col-lg-9">
		                        <input id="twt" name="twt" type="text" class="form-control" value="<?= $ct['twt']; ?>">
		                    </div>
                    	</div>
                    	<div class="row mb-2">
                      		<label for="ytb" class="col-md-4 col-lg-3 col-form-label">Youtube</label>
		                    <div class="col-md-8 col-lg-9">
		                        <input id="ytb" name="ytb" type="text" class="form-control" value="<?= $ct['ytb']; ?>">
		                    </div>
                    	</div>
                    	<div class="row mb-4">
                      		<label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
		                    <div class="col-md-8 col-lg-9">
		                        <input id="alamat" type="text" name="alamat" class="form-control" value="<?= $ct['alamat']; ?>">
		                    </div>
                    	</div>
                    	<div class="row">
                    		<div class="col-md-4 col-lg-3"></div>
                    		<div class="col-md-8 col-lg-9">
                      			<button type="submit" name="submit" class="btn btn-outline-primary">Update</button>
                    		</div>
                    	</div>
                  	</form>
	            </div>
          	</div>
		</div>

	</div>

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
	                	<input type="hidden" name="contactID" class="contactID">
	                  	<button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Batal</button>
	                  	<button type="submit" class="btn btn-outline-danger">Hapus</button>
	                </div>
	          	</div>
	        </div>
	  	</div>
  	</form>
  	<!-- Akhir Modal Hapus -->


<?= $this->endSection(); ?>

<?= $this->section('script') ;?>
<script type="text/javascript">
	$(document).ready(function() {

    	$('.btn-delete').on('click',function(){
        	const id = $(this).data('id');
        	$('.contactID').val(id);
        	$('#deleteModal').modal('show');
    	});

    });
</script>
<?= $this->endSection();?>