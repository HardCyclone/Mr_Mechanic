<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $pageTitle; ?> - <?= $this->shop_info->get_shop_name(); ?> </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/plugins/icofont.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/plugins/aos.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/style-update.css">

</head>

<body>

    <div class="main-wrapper">

        <?php include "header.php"; ?>

        <div id="content">
            <?php echo $contents; ?>
        </div>

        <?php include "footer.php"; ?>

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>

    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/vendor/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/plugins/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/plugins/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/plugins/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/plugins/ajax-contact.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/plugins/aos.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/plugins/validate.js"></script>

    <!-- Validate Js -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/main.js"></script>

</body>

</html>