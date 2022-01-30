<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	
	<meta content="" name="description">
	<meta content="" name="keywords">

  	<!-- Favicons -->
  	<link href="<?= base_url();?>/NiceAdmin/assets/img/favicon.png" rel="icon">
  	<link href="<?= base_url();?>/NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
  	<link href="<?= base_url();?>/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="<?= base_url();?>/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  	<link href="<?= base_url();?>/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  	<link href="<?= base_url();?>/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  	<link href="<?= base_url();?>/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  	<link href="<?= base_url();?>/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  	<link href="<?= base_url();?>/NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

	<!-- Template Main CSS File -->
  	<link href="<?= base_url();?>/NiceAdmin/assets/css/style.css" rel="stylesheet">
  	<link href="<?= base_url();?>/NiceAdmin/assets/css/myStyle.css" rel="stylesheet">

	<title><?= $title; ?></title>
</head>

<body>

	<!-- Navbar -->
	<?= $this->include('admin/layout/navbar'); ?>
	<!-- End Navbar -->

	<!-- Sidebar -->
	<?= $this->include('admin/layout/sidebar'); ?>
	<!-- End Sidebar -->

	<!-- Content -->
	<main id="main" class="main">
		<div class="pagetitle"><h1><?= $title; ?></h1></div>
    	<section class="section dashboard">
			<?= $this->renderSection('content'); ?>
		</section>
	</main>
	<!-- End Content -->

 	<!-- Footer -->
  	<footer id="footer" class="footer">
		<div class="copyright text-center my-auto">
	  		&copy; Copyright <?= date('Y'); ?><strong><span>Cronofer</span></strong>. All Rights Reserved
		</div>
		<div class="credits text-center my-auto">
		  	Designed by <a href="">Cronofer</a>
		</div>
	</footer>
	<!-- End Footer -->

  	<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
  		<i class="bi bi-arrow-up-short"></i>
  	</a>

  	<!-- Vendor JS Files -->
  	<script src="<?= base_url();?>/NiceAdmin/assets/js/jquery.min.js"></script>
  	<script src="<?= base_url();?>/NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  	<script src="<?= base_url();?>/NiceAdmin/assets/vendor/quill/quill.min.js"></script>
  	<script src="<?= base_url();?>/NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  	<script src="<?= base_url();?>/NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>

  	<!-- Template Main JS File -->
  	<script src="<?= base_url();?>/NiceAdmin/assets/js/main.js"></script>

  	<?= $this->renderSection('script'); ?>

</body>

</html>