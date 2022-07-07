<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->

    <link rel="stylesheet" href="<?php echo base_url('public/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/css/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/jvectormap/jquery-jvectormap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/owl-carousel-2/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/owl-carousel-2/owl.theme.default.min.css'); ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('public/images/favicon.png'); ?>" >
  </head>
  <body>
    
      <?php echo $this->include('layouts/header'); ?> 
      <?php echo $this->include('layouts/sidebar'); ?>
      <!-- partial -->
      <?php echo $this->renderSection('content'); ?>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
      <?php echo $this->include('layouts/footer'); ?>
          <!-- partial -->
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('public/assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('public/assets/vendors/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/vendors/progressbar.js/progressbar.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/vendors/jvectormap/jquery-jvectormap.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/vendors/owl-carousel-2/owl.carousel.min.js'); ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('public/assets/js/off-canvas.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/js/hoverable-collapse.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/js/misc.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/js/settings.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/js/todolist.js'); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('public/assets/js/dashboard.js'); ?>"></script>
    <!-- End custom js for this page -->
  </body>
</html>