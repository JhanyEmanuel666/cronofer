<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

	<div class="row">
		
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col">
							<a href="#" class="btn btn-outline-primary btn-add"
								data-kdp="<?= $kode;?>" 
								<?php foreach($kate as $row) :?>
									data-id_kate = "<?= $row['id_kategori']; ?>"
									data-nm_kate = "<?= $row['nama_kategori'] ?>"
								<?php endforeach; ?>
								>
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
	              	<table class="table datatable">
		                <thead>
			                <tr>
			                    <th scope="col">No</th>
			                    <th scope="col">Image</th>
			                    <th scope="col">Kode Produk</th>
			                    <th scope="col">Nama Produk</th>
			                    <th scope="col">Pilihan</th>
			                </tr>
		                </thead>
			            <tbody>
			            	<?php 
			            		$no=1; 
			            		foreach($produk as $row): ?>
			                <tr>
			                    <th scope="row" class="text-center"><?= $no++;?></th>
			                    <td>
			                    	<img src="/Uploads/produk_image/<?= $row['img_produk']; ?>" class="dftr_img_prdk img-fluid">
			                    </td>
			                    <td><?= $row['kode_produk']; ?></td>
			                    <td><?= $row['nama_produk']; ?></td>
			                    <td class="text-center">

			                    	<a href="#" class="btn btn-outline-success btn-sm btn-show" 
			                    		data-idp="<?= $row['id_produk']; ?>"
			                    		data-img="<?= $row['img_produk'];?>"
			                    		data-kdp="<?= $row['kode_produk']; ?>"
			                    		data-nma="<?= $row['nama_produk']; ?>"
			                    		data-hrg="<?= $row['harga_produk']; ?>"
			                    		data-wrn="<?= $row['warna_produk']; ?>"
			                    		data-des="<?= $row['deskripsi_produk']; ?>">
			                    		<i class="ri-eye-fill"></i>
			                    	</a>

			                    	<a href="#" class="btn btn-outline-warning btn-sm btn-edit"
			                    		data-idp="<?= $row['id_produk']; ?>"
			                    		data-img="<?= $row['img_produk'];?>"
			                    		data-kdp="<?= $row['kode_produk']; ?>"
			                    		data-nma="<?= $row['nama_produk']; ?>"
			                    		data-hrg="<?= $row['harga_produk']; ?>"
			                    		data-wrn="<?= $row['warna_produk']; ?>"
			                    		data-des="<?= $row['deskripsi_produk']; ?>">
			                    		<i class="ri-pencil-line"></i>
			                    	</a>

			                    	<a href="#" class="btn btn-outline-danger btn-sm btn-delete" data-id="<?= $row['id_produk'];?>">
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

	<!-- Modal add Produk -->
    <form action="/a_produk/save" method="post" enctype="multipart/form-data">
	    <div class="modal fade" id="addModal" tabindex="-1">
	        <div class="modal-dialog modal-dialog-scrollable modal-xl">
	            <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
		                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		            </div>

		            <div class="modal-body">
		            	<div class="row">
		            		<div class="col-md-4">
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
			                            <input type="file" class="custome-file-input" id="sampull" name="img_produk" onchange="previewImg()">
			                        </div>
			                    </div>
		            		</div>
			            	<div class="col-md-8">
			            		<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Kode</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="text" class="form-control-plaintext kode_produk" name="kode_produk" readonly>
			                      	</div>
			                  	</div>

			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Kategori</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<select class="form-control kate" name="id_kategori">
			                        		<option value="">Pilih Kategori</option>
			                        		<?php foreach ($kate as $row){ ?>
			                        			<option value="<?= $row['id_kategori']; ?>"><?= $row['nama_kategori']; ?></option>
			                        		<?php }?>
			                        	</select>
			                      	</div>
			                  	</div>

			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Produk</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="text" class="form-control" name="nama_produk" required autocomplete="off">
			                      	</div>
			                  	</div>
			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Harga</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="text" class="form-control" name="harga_produk" required autocomplete="off">
			                      	</div>
			                  	</div>
			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Warna</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="text" class="form-control" name="warna_produk" required autocomplete="off">
			                      	</div>
			                  	</div>
			                  	<div class="row mb-3">
	                      			<label class="col-md-4 col-lg-3 col-form-label">Deskripsi</label>
	                      			<div class="col-md-8 col-lg-9">
	                        			<textarea class="form-control" style="height: 200px;" name="des_produk"></textarea>
	                      			</div>
	                    		</div>
			                </div>
			            </div>
			        </div>
			        <div class="modal-footer">
			        	<button type="button" class="btn btn-sm btn-outline-primary" data-bs-dismiss="modal">Batal</button>
	                  	<button type="submit" name="submit" class="btn btn-sm btn-outline-danger">Simpan</button>
			        </div>
			        
	            </div> 
	        </div>
	    </div>
    </form>
    <!-- Akhir Modal EditProduk-->

	<!-- Modal Hapus Data-->
  	<form action="/a_produk/delete" method="post">
	    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true" style="display: none;">
	    	<div class="modal-dialog">
	    		<div class="modal-content">
	           		<div class="modal-header">
	                    <h5 class="modal-title">Konfirmasi</h5>
	                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	                </div>
	                <div class="modal-body">
	                	Apakah anda yakin ingin menghapus data produk ini?
	                </div>
	                <div class="modal-footer">
	                	<input type="hidden" name="produkID" class="produkID">
	                  	<button type="button" class="btn btn-sm btn-outline-primary" data-bs-dismiss="modal">Batal</button>
	                  	<button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
	                </div>
	          	</div>
	        </div>
	  	</div>
  	</form>
  	<!-- Akhir Modal Hapus Data-->

  	<!-- Modal Show Produk -->
    <div class="modal fade" id="showModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
	                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	            </div> 

	            <div class="modal-body">
	            	<div class="row">
	            		<div class="col-md-4">
	            			<img src="" class="img-fluid img-thumbnail" id="pict">
	            		</div>
		            	<div class="col-md-8">
		            		<div class="row mb-3">
		                      	<label class="col-md-4 col-lg-3 col-form-label">Kode</label>
		                      	<div class="col-md-8 col-lg-9">
		                        	<input type="text" class="form-control kode_produk" readonly>
		                      	</div>
		                    </div>
		            		
		                  	<div class="row mb-3">
		                  		<label class="col-md-4 col-lg-3 col-form-label">Produk</label>
		                      	<div class="col-md-8 col-lg-9">
		                        	<input type="text" class="form-control nama_produk" readonly>
		                      	</div>
		                  	</div>
		                  	<div class="row mb-3">
		                  		<label class="col-md-4 col-lg-3 col-form-label">Harga</label>
		                      	<div class="col-md-8 col-lg-9">
		                        	<input type="text" class="form-control harga_produk" readonly>
		                      	</div>
		                  	</div>
		                  	<div class="row mb-3">
		                  		<label class="col-md-4 col-lg-3 col-form-label">Warna</label>
		                      	<div class="col-md-8 col-lg-9">
		                        	<input type="text" class="form-control warna_produk" readonly>
		                      	</div>
		                  	</div>
		                  	<div class="row mb-3">
                      			<label class="col-md-4 col-lg-3 col-form-label">Deskripsi</label>
                      			<div class="col-md-8 col-lg-9">
                        			<textarea class="form-control deskripsi_produk" style="height: 200px;" readonly></textarea>
                      			</div>
                    		</div>
		                </div>
		            </div>
		        </div>
		        
            </div>
        </div>
    </div> <!-- Akhir Modal Show Produk-->

    <!-- Modal edit Produk -->
    <form action="/a_produk/update" method="post" enctype="multipart/form-data">
	    <div class="modal fade" id="editModal" tabindex="-1">
	        <div class="modal-dialog modal-dialog-scrollable modal-lg">
	            <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
		                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		            </div>

		            <div class="modal-body">
		            	<div class="row">
		            		<div class="col-md-4">
		            			<input type="hidden" class="id_produk" name="id_produk">
		            			<input type="hidden" class="img_produk" name="img_lama">	            			
		            			<img src="" class="img-fluid img-thumbnail" id="pictt">

		            		</div>
			            	<div class="col-md-8">
			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Produk</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="text" class="form-control nama_produk" name="nama_produk" required autocomplete="off">
			                      	</div>
			                  	</div>
			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Harga</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="text" class="form-control harga_produk" name="harga_produk" required autocomplete="off">
			                      	</div>
			                  	</div>
			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Warna</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="text" class="form-control warna_produk" name="warna_produk" required autocomplete="off">
			                      	</div>
			                  	</div>
			                  	<div class="row mb-3">
	                      			<label class="col-md-4 col-lg-3 col-form-label">Deskripsi</label>
	                      			<div class="col-md-8 col-lg-9">
	                        			<textarea class="form-control deskripsi_produk" style="height: 200px;" name="des_produk"></textarea>
	                      			</div>
	                    		</div>
			                </div>
			            </div>
			        </div>
			        <div class="modal-footer">
			        	<button type="button" class="btn btn-sm btn-outline-primary" data-bs-dismiss="modal">Batal</button>
	                  	<button type="submit" name="submit" class="btn btn-sm btn-outline-danger">Update</button>
			        </div>
			        
	            </div> 
	        </div>
	    </div>
    </form>
    <!-- Akhir Modal EditProduk-->

<?= $this->endSection(); ?>

<?= $this->section('script') ;?>

<script type="text/javascript">
	$(document).ready(function() {

		$('.btn-add').on('click', function() {
			const kdp = $(this).data('kdp');
			const id_kate = $(this).data('id_kate');
			const nm_kate = $(this).data('nama_kate');

			$('.kode_produk').val(kdp);
			$('.id_kate').val(id_kate);
			$('.nama_kate').val(nm_kate);

			$('#addModal').modal('show');
		});

		$('.btn-show').on('click', function() {
			const idp = $(this).data('idp');
            const img = $(this).data('img');
            const kdp = $(this).data('kdp');
            const nma = $(this).data('nma');
            const hrg = $(this).data('hrg');
            const wrn = $(this).data('wrn');
            const des = $(this).data('des');

            $('.kode_produk').val(kdp);
            $('.nama_produk').val(nma);
            $('.harga_produk').val(hrg);
            $('.warna_produk').val(wrn);
            $('.deskripsi_produk').val(des);
            $('#pict').attr("src", "/Uploads/produk_image/"+img);

            $('#showModal').modal('show');
        });

        $('.btn-edit').on('click', function() {
			const idp = $(this).data('idp');
            const img = $(this).data('img');
            const kdp = $(this).data('kdp');
            const nma = $(this).data('nma');
            const hrg = $(this).data('hrg');
            const wrn = $(this).data('wrn');
            const des = $(this).data('des');

            $('.id_produk').val(idp);
            $('.kode_produk').val(kdp);
            $('.nama_produk').val(nma);
            $('.harga_produk').val(hrg);
            $('.warna_produk').val(wrn);
            $('.deskripsi_produk').val(des);
            $('img_produk').val(img);

            $('#pictt').attr("src", "/Uploads/produk_image/"+img);

            $('#editModal').modal('show');
        });

    	$('.btn-delete').on('click',function(){
        	const id = $(this).data('id');
        	$('.produkID').val(id);
        	$('#deleteModal').modal('show');
    	});

    });
</script>

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

<?= $this->endSection();?>