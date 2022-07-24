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
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
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
                    <!-- Code for School-1 Starts here -->

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">
                                    <center>School-3 name</center>
                                </h1>
                                <p class="card-description"> School-3 name available products list.</p>

                                <?php
                                // Display the products as pagination with maximum products in a page.
                                $db = db_connect();
                                $sql = $db->query("SELECT * FROM products WHERE sid=3 ORDER by poid");
                                $result = $sql->getResult();
                                ?>
                                <div class="table table-responsive">
                                    <table class="table table-striped w-100">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Product ID</th>
                                                <th class="text-left">Product Name</th>
                                                <th class="text-left">Category</th>
                                                <th class="text-left">Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($result as $row1){?>
                                                <tr>
                                                <form method="post" id="the-form" action="delete" enctype="multipart/form-data">
                                                    <td><?php echo ($row1->poid); ?></td>
                                                    <input type="hidden" class="form-control" id="poid" name="poid" value="<?php echo ($row1->poid); ?>">
                                                    <td><?php echo ($row1->pname); ?></td>
                                                    <input type="hidden" class="form-control" id="sid" name="sid" value="<?php echo ($row1->sid);  ?>" readonly>
                                                    <td><?php echo ($row1->category); ?></td>
                                                    <!-- <td><img src="" height="80px" width="150px">
                                                <input name="fileToUpload[]" class="form-control" type="file" multiple>
                                            </td> -->
                                            
                                                    <!-- <td><button type="submit" formaction="update" class="form-control">Update</button></td> -->
                                                    <td><button type="submit" class="btn btn-outline-danger">Delete</button></td>
                                                    </form>
                                                </tr>
                                            <?php
                                            } ?>

                                        </tbody>
                                    </table>

                                </div>
                                <!-- Add products here -->
                                <?php $validation = \Config\Services::validation();
                                echo $validation->listErrors(); ?>
                                <form class="form-inline" action="add" method="post">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="pname" placeholder="Product name">
                                    </div>
                                    
                                    <input type="hidden" class="form-control" id="sid" name="sid" value="3">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <select class="form-control" id="inlineFormInputGroupUsername2" name="category">
                                            <option value="">Category</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary btn-lg mb-2">Add</button>
                                </form>
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
</body>

</html>