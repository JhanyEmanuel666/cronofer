<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

  	<div class="row">

        <!-- Sales Card -->
        <div class="col-md-4 col-sm-12">
          	<div class="card info-card sales-card">
                <div class="card-body">
	                <h5 class="card-title">Sales</h5>
	                <div class="d-flex align-items-center">
	                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
	                      	<i class="bi bi-cart"></i>
	                    </div>
	                    <div class="ps-3">
	                      	<h6>145</h6>
	                    </div>
	                </div>
	            </div>
        	</div>
        </div>
        <!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-md-4 col-sm-12">
          	<div class="card info-card revenue-card">
            	<div class="card-body">
                  	<h5 class="card-title">Revenue</h5>
                  	<div class="d-flex align-items-center">
                    	<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      		<i class="bi bi-currency-dollar"></i>
                    	</div>
                    	<div class="ps-3">
                      		<h6>$3,264</h6>
                    	</div>
                  	</div>
            	</div>
          	</div>
        </div>
        <!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-md-4 col-sm-12">
          	<div class="card info-card customers-card">
            	<div class="card-body">
                  	<h5 class="card-title">Customers</h5>
                  	<div class="d-flex align-items-center">
                    	<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      		<i class="bi bi-people"></i>
                    	</div>
                    	<div class="ps-3">
                      		<h6>1244</h6>
                    	</div>
                  	</div>
                </div>
          </div>

        </div>
        <!-- End Customers Card -->
  	</div>

<?= $this->endSection(); ?>