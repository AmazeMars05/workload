<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css fo.r this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url('assets/js/alerts.js'); ?>"></script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->

        <?php
        include 'check_session.php';
        class check1 extends check
        {
            //....
        }
        $obj = new check1;
        $obj->check_login();
        ?>
        <!-- partial:partials/_sidebar.html -->
        <?php echo $this->include('layouts/sidebar'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php echo $this->include('layouts/header'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Basic Tables </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">
                                    <center>Inventory</center>
                                </h1>
                                <form class="forms-sample" action="display" method="post">
                                    <div class="input-group mb-2 mr-sm-2">                                        
                                        <select class="form-control mb-2" name="sid" onchange="this.form.submit()">
                                            <option value="">-</option>
                                            <?php
                                            foreach ($schools as $scl) { ?>
                                                <option value="<?php echo ($scl['sid']); ?>">
                                                    <?php echo ($scl['name']); ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </form>
                                <p class="card-description"> Stock and pricing of available products.
                                </p>
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> Product ID </th>
                                                <th> Product name </th>
                                                <th> Size </th>
                                                <th> Quantity </th>
                                                <th> Price </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($result as $row1) { ?>
                                                <tr>
                                                    <form method="post" id="the-form" action="delete_product">
                                                        <td><?php echo ($row1['sku']); ?></td>
                                                        <input type="hidden" class="form-control" id="sku" name="sku" value="<?php echo ($row1['sku']);  ?>" readonly>
                                                        <td><?php echo ($row1['pname']); ?></td>
                                                        <input type="hidden" class="form-control" id="sid" name="sid" value="<?php echo ($row1['sid']);  ?>" readonly>
                                                        <td><?php echo ($row1['size']); ?></td>
                                                        <td><?php echo ($row1['quantity']); ?></td>
                                                        <td><?php echo ($row1['price']); ?></td>
                                                        <!-- <input type="text" class="form-control" name="sku" value="" readonly> 
                                                            <td><img src="" height="80px" width="150px">
                                                
                                            </td> -->
                                                        <td><button type="button" class="btn btn-outline-danger" onclick="showSwal('warning-message-and-cancel');">Delete</button></td>
                                                    </form>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">


                        <div class="col-lg-12 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        <center>Add product in Inventory.</center>
                                    </h2>
                                    <p class="card-description"> Enter product details to add to inventory.
                                    </p>
                                    <!-- Add products here -->
                                    <?php $validation = \Config\Services::validation();
                                    echo $validation->listErrors(); ?>
                                    <form class="forms-sample" action="stock" method="post" enctype="multipart/form-data">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="pname" placeholder="Product name">
                                        </div>
                                        <input type="hidden" class="form-control" id="sid" name="sid" value="<?php echo $_SESSION['sid']; ?>">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control" id="inlineFormInputGroupUsername2" name="size" placeholder="Size">
                                        </div>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control" id="inlineFormInputGroupUsername2" name="quantity" placeholder="Quantity">
                                        </div>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control" id="inlineFormInputGroupUsername2" name="price" placeholder="Rs.0">
                                        </div>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input class="form-control" type="file" name="image">
                                        </div>

                                        <button type="submit" class="btn btn-outline-primary btn-lg mb-2">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>