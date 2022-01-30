<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

	<div class="row">
		
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col">
			              	<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
			                	<i class="ri-add-line"></i>
			              	</button>
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
	            	<div class="table-responsive">
		              	<table class="table table-hover">
			                <thead>
				                <tr>
				                    <th class="text-center" width="50">No</th>
				                    <th class="text-center">Image</th>
				                    <th class="text-center" width="200">Pilihan</th>
				                </tr>
			                </thead>
				            <tbody>
				            	<?php 
				            		$no=1; 
				            		foreach($slide as $row): ?>
				                <tr>
				                    <td class="text-center"><?= $no++;?></td>
				                    <td>
				                    	<img src="/Uploads/slide/<?= $row['img_slide']; ?>" class="dftr_img_slide img-fluid">
				                    </td>
				                    <td class="text-center">
				                    	<a href="<?= base_url('a_slide/edit/' . $row['id_slide']); ?>" class="btn btn-outline-warning">
				                    		<i class="ri-pencil-line"></i>
				                    	</a>

				                    	<a class="btn btn-outline-danger btn-delete" data-id="<?= $row['id_slide'];?>">
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

	</div>

	<!-- Modal add Slide -->
	<div class="modal fade" id="modalDialogScrollable" tabindex="-1">
	    <div class="modal-dialog modal-dialog-scrollable">
	    	<?= form_open_multipart("a_slide/save"); ?>
		      	<div class="modal-content">
			        <div class="modal-header">
			          	<h5 class="modal-title">Buat Slide Toko</h5>
			          	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			        </div>
			        <div class="modal-body">
			          	<div class="row">
	                        <div class="col-12">
	                            <?= form_label('Image'); ?>
	                            <br>
	                            <div class=",image-preview" id="imagePreview">
	                                <img src="" class="image-preview__image img-preview">
	                            </div>
	                        </div>
	                    </div><hr>
	                    <div class="row">
	                        <div class="col">
	                            <input type="file" class="custome-file-input" id="sampull" name="img_slide" onchange="previewImg()">
	                        </div>
	                    </div>
			        </div>
			        <div class="modal-footer">
			          	<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
			          	<button type="submit" name="submit" class="btn btn-outline-primary">Simpan</button>
			        </div>
		      	</div>
	      	<?= form_close(); ?>
	    </div>
	</div><!-- End Modal add slide -->

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
  	<!-- Akhir Modal -->

<?= $this->endSection(); ?>

<?= $this->section('script') ;?>

<script>
    function previewImg(){
        const sampul = document.querySelector('#sampull');
        // const sampulLabel = document.querySelector('.custome-file-label');
        const imgPreview = document.querySelector('.img-preview');

        // sampulLabel.textContent = sampul.files[0].name;

        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);

        fileSampul.onload = function(e){
            imgPreview.src = e.target.result;
        }
    }
</script>

<script type="text/javascript">
	$(document).ready(function() {

    	$('.btn-delete').on('click',function(){
        	const id = $(this).data('id');
        	$('.kategoriID').val(id);
        	$('#deleteModal').modal('show');
    	});

    });
</script>

<?= $this->endSection();?>