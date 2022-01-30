<?= $this->extend('store/layout/template'); ?>

<?= $this->section('content'); ?>

    <?= $this->include('store/layout/search'); ?>
	
	<!-- ======= Header Intro ======= -->
    <section class="intro-single">
	    <div class="container">
	        <div class="row">
	          	<div class="col-md-12 col-lg-8">
	            	<div class="title-single-box">
	              		<h1 class="title-single"><?= $title; ?></h1>
	              		<span class="color-text-a">Produk</span>
	            	</div>
	          	</div>

	          	<div class="col-md-12 col-lg-4">
	          		<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
	          			<button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo">
							<i class="bi bi-search"></i>
				    	</button>
	          		</nav>
	          	</div>
	        </div>
	    </div>
    </section>


    <section class="property-grid grid">
      	<div class="container">

        	<div class="row">
		        <div class="col-sm-12">
		        	<div class="grid-option">
			            <form>
			                <select class="custom-select">
				                <option selected>All Produk</option>
				                <?php foreach($kate as $row): ?>
				                <option value="<?= $row['id_kategori']; ?>"><?= $row['nama_kategori']; ?></option>
				            	<?php endforeach; ?>
			                </select>
			            </form>
		        	</div>
		        </div>
		    </div>
		    <div class="row">
		        <?php foreach($produk as $row) {?>
	          	<div class="col-md-4">
	            	<div class="card-box-a card-shadow h-75">
	              		<div class="img-box-a">
	                		<img src="<?= base_url();?>/Uploads/produk_image/<?= $row['img_produk']; ?>" class="img-a img-fluid">
	              		</div>
	              		<div class="card-overlay">
	                		<div class="card-overlay-a-content">
	                  			<div class="card-header-a">
	                    			<h6 class="card-title text-white">
	                      				<?= $row['nama_kategori']; ?>
	                        			<br><?= $row['nama_produk']; ?>
	                    			</h6>
	                  			</div>
	                  			<div class="card-body-a">
				                	<div class="price-box d-flex">
				                    	<span class="price-a">IDR - <?= $row['harga_produk']; ?></span>
				                    </div>
				                    <a href="#" class="link-a btn-show" 
			                    		data-idp="<?= $row['id_produk']; ?>"
			                    		data-img="<?= $row['img_produk'];?>"
			                    		data-kdp="<?= $row['kode_produk']; ?>"
			                    		data-nma="<?= $row['nama_produk']; ?>"
			                    		data-hrg="<?= $row['harga_produk']; ?>"
			                    		data-wrn="<?= $row['warna_produk']; ?>"
			                    		data-des="<?= $row['deskripsi_produk']; ?>"
			                    		data-s="<?= $row['size_s']; ?>"
			                    		data-m="<?= $row['size_m']; ?>"
			                    		data-l="<?= $row['size_l']; ?>"
			                    		data-xl="<?= $row['size_xl']; ?>"
			                    		data-xxl="<?= $row['size_xxl']; ?>"
			                    		>
			                    		Detail
			                    		<span class="bi bi-chevron-right"></span>
			                    	</a>
				                </div>
	                  			<div class="card-footer-a">
	                    			<ul class="card-info d-flex justify-content-around">
	                      				<li>
					                        <h4 class="card-info-title">S:</h4>
					                        <span><?= $row['size_s']; ?></span>
					                    </li>
					                    <li>
					                        <h4 class="card-info-title">M:</h4>
					                        <span><?= $row['size_m']; ?></span>
					                    </li>
					                    <li>
					                        <h4 class="card-info-title">L:</h4>
					                        <span><?= $row['size_l']; ?></span>
					                    </li>
					                    <li>
					                        <h4 class="card-info-title">XL:</h4>
					                        <span><?= $row['size_xl']; ?></span>
					                    </li>
	                    			</ul>
	                  			</div>
	                		</div>
	              		</div>
	            	</div>
	          	</div>
	    		<?php } ?>
	    	</div>

	    	<div class="row">
	    		<div class="col-sm-12">
	    			<nav class="pagination-a">
	    				<ul class="pagination justify-content-end">
	    					<li class="page-item disabled">
	    						<a class="page-link" href="#" tabindex="-1">
	    							<span class="bi bi-chevron-left"></span>
	    						</a>
	    					</li>
	    					<li class="page-item active">
	    						<a class="page-link" href="#">1</a>
	    					</li>
	    					<li class="page-item">
	    						<a class="page-link" href="#">2</a>
	    					</li>
	    					<li class="page-item">
	    						<a class="page-link" href="#">3</a>
	    					</li>
	    					<li class="page-item next">
	    						<a class="page-link" href="#">
	    							<span class="bi bi-chevron-right"></span>
	    						</a>
	    					</li>
	    				</ul>
	    			</nav>
	    		</div>
	    	</div>

      	</div>
    </section>

    <!-- Modal Show Produk -->
    <div class="modal fade" id="modalDialogScrollableModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
	                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	            </div>

	            <form action="/etalase/addCart" method="post" enctype="multipart/form-data">
		            <div class="modal-body">
		            	<div class="row">
		            		<div class="col-md-4">
		            			<div class="card">
		            				<div class="card-body">
				            			<img src="" class="img-fluid" id="pict">
				            		</div>
				            	</div>
		            			<div class="row mt-2">
		            				<strong class="text-success">Pilih Size</strong>
		            				<div class="col">
		            					<div class="form-check form-check-inline">
		            						<input class="form-check-input size_s" type="radio" name="inlineRadioOptions">
		            						<label class="form-check-label">S</label>
		            					</div>
		            					<div class="form-check form-check-inline">
		            						<input class="form-check-input size_m" type="radio" name="inlineRadioOptions">
		            						<label class="form-check-label">M</label>
		            					</div>
		            					<div class="form-check form-check-inline">
		            						<input class="form-check-input size_l" type="radio" name="inlineRadioOptions">
		            						<label class="form-check-label">L</label>
		            					</div>
		            					<div class="form-check form-check-inline">
		            						<input class="form-check-input size_xl" type="radio" name="inlineRadioOptions">
		            						<label class="form-check-label">XL</label>
		            					</div>
		            					<div class="form-check form-check-inline">
		            						<input class="form-check-input size_xxl" type="radio" name="inlineRadioOptions">
		            						<label class="form-check-label">XXL</label>
		            					</div>
		            				</div>
		            			</div>
		            		</div>
			            	<div class="col-md-8">
			            		<div class="row mb-1">
			                      	<label class="col-md-4 col-lg-3 col-form-label">Kode</label>
			                      	<div class="col-md-8 col-lg-9">
			                      		<input type="hidden" class="id_produk" name="id_produk">
			                        	<input type="text" class="form-control kode_produk" readonly>
			                      	</div>
			                    </div>
			            		
			                  	<div class="row mb-1">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Produk</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="text" class="form-control nama_produk" readonly>
			                      	</div>
			                  	</div>
			                  	<div class="row mb-1">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Harga</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="text" class="form-control harga_produk" readonly>
			                      	</div>
			                  	</div>
			                  	<div class="row mb-1">
			                  		<label class="col-md-4 col-lg-3 col-form-label">Warna</label>
			                      	<div class="col-md-8 col-lg-9">
			                        	<input type="text" class="form-control warna_produk" readonly>
			                      	</div>
			                  	</div>
			                  	<div class="row mb-1">
	                      			<label class="col-md-4 col-lg-3 col-form-label">Deskripsi</label>
	                      			<div class="col-md-8 col-lg-9">
	                        			<textarea class="form-control deskripsi_produk" style="height: 200px;" readonly></textarea>
	                      			</div>
	                    		</div>
			                </div>
			            </div>
			            <div class="row mt-3">
			            	<div class="col-md-4 ms-md-auto"></div>
			            	<div class="col-md-4 ms-md-auto">
			            		<button type="button" name="submit" class="btn btn-success"> 
			                    	<i class="bi bi-cart-plus mr-2"></i><span>Masukan Keranjang</span>
			                    </button>
			            	</div>
			            </div>
			        </div>
		        </form>
		        
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>


<?= $this->section('script'); ?>

<script type="text/javascript">
	$(document).ready(function() {

		$('.btn-show').on('click',function(){
			const idp = $(this).data('idp');
            const img = $(this).data('img');
            const kdp = $(this).data('kdp');
            const nma = $(this).data('nma');
            const hrg = $(this).data('hrg');
            const wrn = $(this).data('wrn');
            const des = $(this).data('des');
            const s_s = $(this).data('s');
            const s_m = $(this).data('m');
            const s_l = $(this).data('l');
            const sxl = $(this).data('xl');
            const xxl = $(this).data('xxl');

            $('.id_produk').val(idp);
            $('.kode_produk').val(kdp);
            $('.nama_produk').val(nma);
            $('.harga_produk').val(hrg);
            $('.warna_produk').val(wrn);
            $('.deskripsi_produk').val(des);
            $('size_s').val(s_s);
            $('size_m').val(s_m);
			$('size_l').val(s_l);
			$('size_xl').val(sxl);
			$('size_xxl').val(xxl);

            $('#pict').attr("src", "/Uploads/produk_image/"+img);

            $('#modalDialogScrollableModal').modal('show');
        });

    });
</script>

<?= $this->endSection();?>