<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/Store/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>/Store/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/Store/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/Store/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/Store/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/Store/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/Store/assets/css/style.css" rel="stylesheet">

    <title><?= $title; ?></title>
</head>
<body>

    <!-- Navbar -->
    <?= $this->include('store/layout/navbar'); ?>
    <!-- Akhir Navbar -->

    <!-- Content -->
    <main id="main" class="mb-lg-5">

        <?= $this->renderSection('content'); ?>

    </main>
    <!-- Akhir Content -->

    <!-- Footer -->
    <?= $this->include('store/layout/footer'); ?>
    <!-- Akhir Footer -->

    <div id="preloader"></div>

    <!-- arrow to top -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <!-- end of arrow to top -->

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/Store/assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/Store/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/Store/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/Store/assets/js/main.js"></script>

    <!-- add class active pada navbar yang dipilih -->
    <script type="text/javascript">
        $(function() {
            $('#navvv a[href~="' + location.href + '"]').parents('li').addClass('active');
        });
    </script>

    <?= $this->renderSection('script'); ?>

</body>
</html>