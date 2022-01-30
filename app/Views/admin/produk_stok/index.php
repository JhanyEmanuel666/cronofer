<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

	<div class="row">
		
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col">
							<a href="#" class="btn btn-outline-primary btn-add"
								<?php foreach($produk as $row) :?>
									data-id_prdk= "<?= $row['id_produk']; ?>"
									data-nm_prdk="<?= $row['nama_produk']; ?>"
								<?php endforeach; ?> >
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
			                    <th scope="col">Total Stok</th>
			                    <th scope="col">Pilihan</th>
			                </tr>
		                </thead>
			            <tbody>
			            	<?php 
			            	$no=1; 
			            	foreach($stok as $row): ?>
			                <tr>
			                    <th scope="row" class="text-center"><?= $no++;?></th>
			                    <td>
			                    	<img src="/Uploads/produk_image/<?= $row['img_produk']; ?>" class="dftr_img_prdk img-fluid">
			                    </td>
			                    <td><?= $row['kode_produk']; ?></td>
			                    <td><?= $row['nama_produk']; ?></td>
			                    <td><?= $row['total_stok']; ?></td>
			                    <td class="text-center">

			                    	<a href="#" class="btn btn-outline-success btn-sm btn-show" 
			                    		data-nm_prdk="<?= $row['nama_produk']; ?>"
			                    		data-size_s= "<?= $row['size_s']; ?>"
										data-size_m = "<?= $row['size_m'] ?>"
										data-size_l="<?= $row['size_l']; ?>"
										data-size_xl = "<?= $row['size_xl'] ?>"
										data-size_xxl="<?= $row['size_xxl']; ?>"
										data-total_stok="<?= $row['total_stok']; ?>">
			                    		<i class="ri-eye-fill"></i>
			                    	</a>

			                    	<a href="#" class="btn btn-outline-warning btn-sm btn-edit"
			                    		data-id_prd="<?= $row['id_produk']; ?>"
			                    		data-size_s= "<?= $row['size_s']; ?>"
										data-size_m = "<?= $row['size_m'] ?>"
										data-size_l="<?= $row['size_l']; ?>"
										data-size_xl = "<?= $row['size_xl'] ?>"
										data-size_xxl="<?= $row['size_xxl']; ?>"
										data-total_stok="<?= $row['total_stok']; ?>">
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
    <form action="/a_produk_stok/save" method="post" enctype="multipart/form-data">
	    <div class="modal fade" id="addModal" tabindex="-1">
	        <div class="modal-dialog modal-dialog-scrollable modal-lg">
	            <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">Tambah Stok Produk</h5>
		                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		            </div>

		            <div class="modal-body">
		            	<div class="row">
			            	<div class="col-md-12 col-lg-12">
			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Produk</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<select name="id_produk" class="form-control">
			                        		<option value="">Pilih Produk</option>
			                        		<?php foreach ($produk as $row) { ?>
			                        			<option value="<?= $row['id_produk']; ?>"><?= $row['nama_produk']; ?></option>
			                        		<?php } ?>
			                        	</select>
			                      	</div>
			                  	</div>
			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Size S</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="number" class="form-control" name="size_s" required autocomplete="off">
			                      	</div>
			                  	</div>
			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Size M</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="number" class="form-control" name="size_m" required autocomplete="off">
			                      	</div>
			                  	</div>
			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Size L</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="number" class="form-control" name="size_l" required autocomplete="off">
			                      	</div>
			                  	</div>
			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Size XL</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="number" class="form-control" name="size_xl" required autocomplete="off">
			                      	</div>
			                  	</div>
			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Size XXL</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="number" class="form-control" name="size_xxl" required autocomplete="off">
			                      	</div>
			                  	</div>
			                  	<div class="row mb-3">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Total Stok</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="number" class="form-control" name="total_stok" required autocomplete="off">
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

  	<!-- Modal Show Stok Produk -->
    <div class="modal fade" id="showModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Detail Stok Produk</h5>
	                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	            </div> 

	            <div class="modal-body">
	            	<div class="row">
		            	<div class="col-md-12 col-lg-12">
		            		
		                  	<div class="row mb-3">
		                  		<label class="col-md-6 col-lg-6 col-form-label">Nama Produk</label>
		                      	<div class="col-md-6 col-lg-6">
		                        	<input type="text" class="form-control nama_produk" readonly>
		                      	</div>
		                  	</div>
		                  	<div class="row mb-3">
		                  		<label class="col-md-6 col-lg-6 col-form-label">Size S</label>
		                      	<div class="col-md-6 col-lg-6">
		                        	<input type="text" class="form-control size_s" readonly>
		                      	</div>
		                  	</div>
		                  	<div class="row mb-3">
		                  		<label class="col-md-6 col-lg-6 col-form-label">Size M</label>
		                      	<div class="col-md-6 col-lg-6">
		                        	<input type="text" class="form-control size_m" readonly>
		                      	</div>
		                  	</div>
		                  	<div class="row mb-3">
		                  		<label class="col-md-6 col-lg-6 col-form-label">Size L</label>
		                      	<div class="col-md-6 col-lg-6">
		                        	<input type="text" class="form-control size_l" readonly>
		                      	</div>
		                  	</div>
		                  	<div class="row mb-3">
		                  		<label class="col-md-6 col-lg-6 col-form-label">Size XL</label>
		                      	<div class="col-md-6 col-lg-6">
		                        	<input type="text" class="form-control size_xl" readonly>
		                      	</div>
		                  	</div>
		                  	<div class="row mb-3">
		                  		<label class="col-md-6 col-lg-6 col-form-label">Size XXL</label>
		                      	<div class="col-md-6 col-lg-6">
		                        	<input type="text" class="form-control size_xxl" readonly>
		                      	</div>
		                  	</div>
		                  	<div class="row mb-3">
		                  		<label class="col-md-6 col-lg-6 col-form-label">Total Stok</label>
		                      	<div class="col-md-6 col-lg-6">
		                        	<input type="text" class="form-control total_stok" readonly>
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
		            			<img src="" class="img-fluid img-thumbnail" id="pictt">
		            			<input type="hidden" class="img_produk" name="img_produk">
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
			const id_prdk = $(this).data('id_prdk');
			const nm_prdk = $(this).data('nm_prdk');

			$('id_prdk').val(id_prdk);
			$('nm_prdk').val(nm_prdk);

			$('#addModal').modal('show');
		});

		$('.btn-show').on('click', function() {

            const nm_prdk = $(this).data('nm_prdk');
            const size_s = $(this).data('size_s');
            const size_m = $(this).data('size_m');
            const size_l = $(this).data('size_l');
            const size_xl = $(this).data('size_xl');
            const size_xxl = $(this).data('size_xxl');
            const total_stok = $(this).data('total_stok');

            $('.nama_produk').val(nm_prdk);
            $('.size_s').val(size_s);
            $('.size_m').val(size_m);
            $('.size_l').val(size_l);
            $('.size_xl').val(size_xl);
            $('.size_xxl').val(size_xxl);
            $('.total_stok').val(total_stok);

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