<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bill</title>
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
    <link rel="stylesheet" href="assets/css/invoice.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url('assets/js/invoice.js'); ?>"></script>
</head>

<body>

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

    <!-- partial -->

    <!-- partial:partials/_navbar.html -->

    <!-- partial -->
    <div id="invoice">
        <form action="save" method="post">
            <div class="invoice overflow-auto">
                <div style="min-width: 600px">
                    <header>
                        <div class="row">
                            <div class="col">
                                <!-- IMAGE -->
                            </div>
                            <div class="col company-details">
                                <h2 class="name">
                                    School Uniforms
                                </h2>
                                <div>1, Maharani-farm, Durgapura, Jaipur</div>
                                <div>Phone no. 9414070687</div>
                                <div>company@example.com</div>
                            </div>
                        </div>
                    </header>
                    <main>
                        <div class="row contacts">
                            <div class="col invoice-to">
                                <h1 class="invoice-id">INVOICE TO:</h1>
                                <h2 class="to">
                                    <div class="col-sm-9">
                                        <input type="text" name="cname" class="form-control" placeholder="Customer Name" />
                                    </div>
                                </h2>
                                <div class="mobileno">
                                    <div class="col-sm-9">
                                        <input type="text" name="cnumber" class="form-control" placeholder="Mobile No." />
                                    </div>
                                </div>
                                <div class="address">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="caddress" placeholder="Customer Address" />
                                    </div>
                                </div>

                            </div>
                            <div class="col invoice-details">
                                <h1 class="invoice-id">INVOICE ID:</h1>
                                <div class="date">
                                    <div class="col-sm-9">
                                        <input type="date" name="date" class="form-control" placeholder="Date" />
                                    </div>
                                </div>
                                <h2 class="to">
                                    <div class="col-sm-9">
                                        <input type="text" name="cashiername" class="form-control" placeholder="Cashier Name" />
                                    </div>
                                </h2>
                            </div>
                        </div>

                        <select class="form-control-lg text-center mb-2" name="sid">
                            <option value="">Select School</option>
                            <?php
                            foreach ($schools as $scl) { ?>
                                <option value="<?php echo ($scl['sid']); ?>">
                                    <?php echo ($scl['name']); ?></option>
                            <?php } ?>
                        </select>
                        <table class="table table-bordered table-hover" id="tab_logic">
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
                                <tr id='addr0'>
                                    <td class="pt-3-half">1</td>
                                    <td><input type="text" name='pname' placeholder='Enter Product Name' class="form-control" /></td>
                                    <td><input name='size' placeholder='Enter Size' class="form-control size" /></td>
                                    <td><input name='qty' placeholder='Enter Qty' class="form-control qty" /></td>
                                    <td id=response><input type="number" name='price' placeholder='Price' class="form-control price" step="0.00" min="0" /></td>
                                    <td><input type="number" name='discount' placeholder='Enter Discount %' class="form-control disc" step="0.00" min="0" /></td>
                                    <td><input type="number" name='total' placeholder='0.00' class="form-control total" readonly /></td>
                                </tr>
                                <tr id='addr1'></tr>
                            </tbody>
                        </table>

                        <button type="button" id="add_row" class="btn btn-primary ">+</button>
                        <button type="button" id='delete_row' class="btn btn-danger">-</button>
                        <button type="button" class="btn btn-danger">Calculate</button>

                    </main>

                </div>
                <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card"></div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <table class="table table-bordered table-hover" id="tab_logic_total">
                            <tbody>
                                <tr>
                                    <th class="text-center">Sub Total</th>
                                    <td class="text-center"><input type="number" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" readonly /></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Tax</th>
                                    <td class="text-center">
                                        <div class="input-group mb-2 mb-sm-0">
                                            <input type="number" class="form-control" id="tax" placeholder="0">
                                            <div class="input-group-addon">%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">Tax Amount</th>
                                    <td class="text-center"><input type="number" name='tax_amount' id="tax_amount" placeholder='0.00' class="form-control" readonly /></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Grand Total</th>
                                    <td class="text-center"><input type="number" name='total_amount' id="total_amount" placeholder='0.00' class="form-control" readonly /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <input type="text" class="form-control" name="remarks" placeholder="Remarks">
            </div>
            
            <div class="toolbar hidden-print">
                <div class="text-right">
                    <button type="button" onclick="window.location.href ='index';" class="btn btn-danger"> Cancel</button>
                    <button type="button" onclick="window.print()" class="btn btn-primary"> Print</button>
                    <button type="submit" class="btn btn-info"> Save</button>
                </div>
        </form>
        <hr>
    </div>
    <div></div>
    <footer>
        You can save or cancel to redirect to site again.
    </footer>
    </div>
    <!-- main-panel ends -->

    <!-- page-body-wrapper ends -->

    <!-- container-scroller -->
    <!-- plugins:js -->

    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>