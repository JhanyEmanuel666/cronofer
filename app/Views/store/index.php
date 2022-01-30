<?= $this->extend('store/layout/template'); ?>

<?= $this->section('content'); ?>
    <?= $this->include('store/layout/carousel'); ?>
	
    <!-- ======= Latest Produk Section ======= -->
    <section class="section-property section-t8">
      	<div class="container">
	        <div class="row">
	          	<div class="col-md-12">
	            	<div class="title-wrap d-flex justify-content-between">
	              		<div class="title-box">
	                		<h2 class="title-a">Produk Terbaru</h2>
	              		</div>
	              		<div class="title-link">
	                		<a href="<?= base_url('etalase'); ?>">
	                  			All<span class="bi bi-chevron-right"></span>
	                		</a>
	              		</div>
	            	</div>
	          	</div>
	        </div>

        	<div id="property-carousel" class="swiper">
          		<div class="swiper-wrapper">

          			<?php foreach ($newP as $row): ?>
            		<div class="carousel-item-b swiper-slide">
              			<div class="card-box-a card-shadow h-50">
			                <div class="img-box-a">
			                  	<img src="/Uploads/produk_image/<?= $row['img_produk']; ?>"class="img-a img-fluid">
			                </div>
                			<div class="card-overlay">
                  				<div class="card-overlay-a-content">
				                    <div class="card-header-a">
				                      	<h6 class="card-title text-white">
				                        	<?= $row['nama_kategori']; ?> <br>
				                        	<?= $row['nama_produk']; ?>
				                      	</h6>
				                    </div>
				                    <div class="card-body-a">
					                    <div class="price-box d-flex">
					                        <span class="price-a">Rp - <?= $row['harga_produk']; ?></span>
					                    </div>
				                    </div>
                    				
                  				</div>
                			</div>
              			</div>
            		</div>
            		<?php endforeach; ?>

          		</div>
        	</div>
        	<div class="propery-carousel-pagination carousel-pagination"></div>
      	</div>
	</section><!-- End Latest Properties Section -->

<?= $this->endSection(); ?>