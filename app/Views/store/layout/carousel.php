<div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">
    	<?php foreach($slide as $row): ?>
    	<div class="swiper-slide carousel-item-a intro-item bg-image img-fluid" style="background-image: url(/uploads/slide/<?= $row['img_slide']; ?>)">
       		<div class="overlay overlay-a"></div>
	        <div class="intro-content display-table">
	          	<div class="table-cell">
		            <div class="container">
			            <div class="row">
			                <div class="col-lg-8">
			      
			                </div>
			            </div>
		            </div>
	          	</div>
	        </div>
      	</div>
      <?php endforeach; ?>

    </div>

    <div class="swiper-pagination"></div>

</div><!-- End Intro Section -->