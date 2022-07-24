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
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!--from w ww .j a  v a 2s.c  om-->
    <!-- plugins:js -->
    <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- Alerts by sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url('assets/js/alerts.js'); ?>"></script>
</head>

<body>

    <div class="container-scroller">
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
                        <h3 class="page-title"> Form elements </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="card-title center">
                                        Bill
                                    </h1>
                                    <form class="form-sample">
                                        <p class="card-description"> Customer info </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Mobile no.</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Date</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Address</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Bill no.</label>
                                                    <div class="col-sm-9">
                                                        <!-- Automatic bill no. -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Cashier name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <select class="form-control mb-2" name="sid">
                                            <option value="">-</option>
                                            <?php
                                            foreach ($schools as $scl) { ?>
                                                <option value="<?php echo ($scl['sid']); ?>">
                                                    <?php echo ($scl['name']); ?></option>
                                            <?php } ?>
                                        </select>
                                        <!-- <p class="card-description"> products bought details </p> -->
                                        <!-- Testing editable table -->
                                        <button class="btn btn-primary" type="button" onclick="showSwal('warning-message-and-cancel')">Check Alert!</button>
                                        <table id="myTable" class="table table-bordered table-contextual text-center">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">S.No.</th>
                                                    <th class="text-center">Product Name</th>
                                                    <th class="text-center">Size</th>
                                                    <th class="text-center">Qty</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Discount</th>
                                                    <th class="text-center">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pt-3-half" contenteditable="true">1.</td>
                                                    <td class="pt-3-half" contenteditable="true"><select class="form-control mb-2" name="sid">
                                                            <option value=""></option>

                                                        </select></td>
                                                    <td class="pt-3-half" contenteditable="true">30</td>
                                                    <td class="pt-3-half" contenteditable="true">0</td>
                                                    <td class="pt-3-half" contenteditable="true">Rs.</td>
                                                    <td class="pt-3-half" contenteditable="true">%</td>
                                                    <td class="pt-3-half" contenteditable="true">Rs.</td>
                                                    <td class="col-sm-2"><a class="deleteRow"></a></td>
                                                </tr> -->
                                                <!-- This is our clonable table line -->
                                                <!-- This is our clonable table line -->
                                            </tbody>
                                        </table>
                                        <button type="button" class="btn btn-outline-primary" onclick="addRow()">Add</button>
                                        <button type="button" class="btn btn-outline-danger" onclick="delRow()">Del</button>
                                        <script>
                                            var tableObj = document.getElementById("myTable");
                                            tableObj = {
                                                rows: [],
                                                cells: []
                                            };
                                            var cellCount = tableObj.rows[0].cells.length;

                                            function addRow() {
                                                var rowLength = tableObj.rows.length;
                                                var newRow = tableObj.insertRow(rowLength);

                                                for (var i = 0; i < cellCount; i++) {
                                                    var newCell = newRow.insertCell(i);
                                                    newRow.cells[0].innerHTML = rowLength;
                                                }
                                            }

                                            function delRow() {
                                                var rowLength = tableObj.rows.length;
                                                if (rowLength > 1) {
                                                    tableObj.delRow(rowLength - 1);
                                                }
                                            }
                                        </script>
                                        <!-- Editable table -->

                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">

                                                    <div class="col-sm-9">
                                                        <!-- Total Amount -->
                                                    </div>
                                                    <label class="col-sm-3 col-form-label">GST</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-9">
                                                        <!-- Total Amount -->
                                                    </div>
                                                    <label class="col-sm-3 col-form-label">Amount</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Select 2</h4>
                                    <div class="form-group">
                                        <label>Single select box using select 2</label>
                                        <select class="js-example-basic-single" style="width:100%">
                                            <option value="AL">Alabama</option>
                                            <option value="WY">Wyoming</option>
                                            <option value="AM">America</option>
                                            <option value="CA">Canada</option>
                                            <option value="RU">Russia</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Multiple select using select 2</label>
                                        <select class="js-example-basic-multiple" multiple="multiple" style="width:100%">
                                            <option value="AL">Alabama</option>
                                            <option value="WY">Wyoming</option>
                                            <option value="AM">America</option>
                                            <option value="CA">Canada</option>
                                            <option value="RU">Russia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Typeahead</h4>
                                    <p class="card-description"> A simple suggestion engine </p>
                                    <div class="form-group row">
                                        <div class="col">
                                            <label>Basic</label>
                                            <div id="the-basics">
                                                <input class="typeahead" type="text" placeholder="States of USA">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label>Bloodhound</label>
                                            <div id="bloodhound">
                                                <input class="typeahead" type="text" placeholder="States of USA">
                                            </div>
                                        </div>
                                    </div>
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
    
    <!-- endinject -->
    <!-- Plugin js');?> for this page -->
    <script src="<?php echo base_url('assets/vendors/select2/select2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/typeahead.js/typeahead.bundle.min.js'); ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/js/off-canvas.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/hoverable-collapse.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/misc.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/settings.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/todolist.js'); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('assets/js/file-upload.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/typeahead.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/select2.js'); ?>"></script>
    <!-- End custom js for this page -->
</body>

</html>