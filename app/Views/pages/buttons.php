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
        include 'index.php';
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
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="pages/index"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search products">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-lg-block">
                            <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                                <h6 class="p-3 mb-0">Projects</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-file-outline text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Software Development</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-web text-info"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">UI Development</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-layers text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Software Testing</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all projects</p>
                            </div>
                        </li>
                        <li class="nav-item nav-settings d-none d-lg-block">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-view-grid"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                                <span class="count bg-success"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0">Messages</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                        <p class="text-muted mb-0"> 1 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                                        <p class="text-muted mb-0"> 15 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                                        <p class="text-muted mb-0"> 18 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">4 new messages</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="count bg-danger"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                <h6 class="p-3 mb-0">Notifications</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-calendar text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Event today</p>
                                        <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                        <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-link-variant text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Launch Admin</p>
                                        <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all notifications</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $_SESSION['username'] ?></p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1"><a href="logout">Logout </a></p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">Advanced settings</p>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Buttons </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Normal buttons</h4>
                                    <p class="card-description">Add class <code>.btn-{color}</code> for buttons in theme colors</p>
                                    <div class="template-demo">
                                        <button type="button" class="btn btn-primary btn-fw">Primary</button>
                                        <button type="button" class="btn btn-secondary btn-fw">Secondary</button>
                                        <button type="button" class="btn btn-success btn-fw">Success</button>
                                        <button type="button" class="btn btn-danger btn-fw">Danger</button>
                                        <button type="button" class="btn btn-warning btn-fw">Warning</button>
                                        <button type="button" class="btn btn-info btn-fw">Info</button>
                                        <button type="button" class="btn btn-light btn-fw">Light</button>
                                        <button type="button" class="btn btn-dark btn-fw">Dark</button>
                                        <button type="button" class="btn btn-link btn-fw">Link</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Inverse buttons</h4>
                                    <p class="card-description">Add class <code>.btn-inverse-{color} for inverse buttons</code></p>
                                    <div class="template-demo">
                                        <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
                                        <button type="button" class="btn btn-inverse-secondary btn-fw">Secondary</button>
                                        <button type="button" class="btn btn-inverse-success btn-fw">Success</button>
                                        <button type="button" class="btn btn-inverse-danger btn-fw">Danger</button>
                                        <button type="button" class="btn btn-inverse-warning btn-fw">Warning</button>
                                        <button type="button" class="btn btn-inverse-info btn-fw">Info</button>
                                        <button type="button" class="btn btn-inverse-light btn-fw">Light</button>
                                        <button type="button" class="btn btn-inverse-dark btn-fw">Dark</button>
                                        <button type="button" class="btn btn-link btn-fw">Link</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Rounded buttons</h4>
                                    <p class="card-description">Add class <code>.btn-rounded</code></p>
                                    <div class="template-demo">
                                        <button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button>
                                        <button type="button" class="btn btn-secondary btn-rounded btn-fw">Secondary</button>
                                        <button type="button" class="btn btn-success btn-rounded btn-fw">Success</button>
                                        <button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button>
                                        <button type="button" class="btn btn-warning btn-rounded btn-fw">Warning</button>
                                        <button type="button" class="btn btn-info btn-rounded btn-fw">Info</button>
                                        <button type="button" class="btn btn-light btn-rounded btn-fw">Light</button>
                                        <button type="button" class="btn btn-dark btn-rounded btn-fw">Dark</button>
                                        <button type="button" class="btn btn-link btn-rounded btn-fw">Link</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Outlined buttons</h4>
                                    <p class="card-description">Add class <code>.btn-outline-{color}</code> for outline buttons</p>
                                    <div class="template-demo">
                                        <button type="button" class="btn btn-outline-primary btn-fw">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-fw">Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-fw">Success</button>
                                        <button type="button" class="btn btn-outline-danger btn-fw">Danger</button>
                                        <button type="button" class="btn btn-outline-warning btn-fw">Warning</button>
                                        <button type="button" class="btn btn-outline-info btn-fw">Info</button>
                                        <button type="button" class="btn btn-outline-light btn-fw">Light</button>
                                        <button type="button" class="btn btn-outline-dark btn-fw">Dark</button>
                                        <button type="button" class="btn btn-link btn-fw">Link</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h4 class="card-title">Icon Buttons</h4>
                                            <p class="card-description">Add class <code>.btn-icon</code> for buttons with only icons</p>
                                            <div class="template-demo d-flex justify-content-between flex-nowrap">
                                                <button type="button" class="btn btn-primary btn-rounded btn-icon">
                                                    <i class="mdi mdi-home-outline"></i>
                                                </button>
                                                <button type="button" class="btn btn-dark btn-rounded btn-icon">
                                                    <i class="mdi mdi-internet-explorer"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-rounded btn-icon">
                                                    <i class="mdi mdi-email-open"></i>
                                                </button>
                                                <button type="button" class="btn btn-info btn-rounded btn-icon">
                                                    <i class="mdi mdi-star"></i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-rounded btn-icon">
                                                    <i class="mdi mdi-map-marker"></i>
                                                </button>
                                            </div>
                                            <div class="template-demo d-flex justify-content-between flex-nowrap">
                                                <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                                                    <i class="mdi mdi-home-outline"></i>
                                                </button>
                                                <button type="button" class="btn btn-inverse-dark btn-icon">
                                                    <i class="mdi mdi-internet-explorer"></i>
                                                </button>
                                                <button type="button" class="btn btn-inverse-danger btn-icon">
                                                    <i class="mdi mdi-email-open"></i>
                                                </button>
                                                <button type="button" class="btn btn-inverse-info btn-icon">
                                                    <i class="mdi mdi-star"></i>
                                                </button>
                                                <button type="button" class="btn btn-inverse-success btn-icon">
                                                    <i class="mdi mdi-map-marker"></i>
                                                </button>
                                            </div>
                                            <div class="template-demo d-flex justify-content-between flex-nowrap mt-4">
                                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                                    <i class="mdi mdi-heart-outline text-danger"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                                    <i class="mdi mdi-music text-dark"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                                    <i class="mdi mdi-star text-primary"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                                    <i class="mdi mdi-signal text-info"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                                    <i class="mdi mdi-trending-up text-success"></i>
                                                </button>
                                            </div>
                                            <div class="template-demo d-flex justify-content-between flex-nowrap">
                                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                                    <i class="mdi mdi-heart-outline"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                                    <i class="mdi mdi-music"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                                    <i class="mdi mdi-star"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                                    <i class="mdi mdi-signal"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                                    <i class="mdi mdi-trending-up"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <h4 class="card-title">Button Size</h4>
                                            <p class="card-description">Use class <code>.btn-{size}</code></p>
                                            <div class="template-demo">
                                                <button type="button" class="btn btn-outline-secondary btn-lg">btn-lg</button>
                                                <button type="button" class="btn btn-outline-secondary btn-md">btn-md</button>
                                                <button type="button" class="btn btn-outline-secondary btn-sm">btn-sm</button>
                                            </div>
                                            <div class="template-demo mt-4">
                                                <button type="button" class="btn btn-danger btn-lg">btn-lg</button>
                                                <button type="button" class="btn btn-success btn-md">btn-md</button>
                                                <button type="button" class="btn btn-primary btn-sm">btn-sm</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Block buttons</h4>
                                    <p class="card-description">Add class <code>.btn-block</code></p>
                                    <div class="template-demo">
                                        <button type="button" class="btn btn-info btn-lg btn-block">Block buttons <i class="mdi mdi-menu float-right"></i>
                                        </button>
                                        <button type="button" class="btn btn-dark btn-lg btn-block">Block buttons</button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block">
                                            <i class="mdi mdi-account"></i> Block buttons </button>
                                        <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block buttons</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="card-title">Button groups</h4>
                                            <p class="card-description">Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code></p>
                                            <div class="template-demo">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-secondary">1</button>
                                                    <button type="button" class="btn btn-outline-secondary">2</button>
                                                    <button type="button" class="btn btn-outline-secondary">3</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-secondary">
                                                        <i class="mdi mdi-heart-outline"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-secondary">
                                                        <i class="mdi mdi-calendar"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-secondary">
                                                        <i class="mdi mdi-clock"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="template-demo">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-primary">1</button>
                                                    <button type="button" class="btn btn-primary">2</button>
                                                    <button type="button" class="btn btn-primary">3</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="mdi mdi-heart-outline"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="mdi mdi-calendar"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="mdi mdi-clock"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="template-demo mt-4">
                                                <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-secondary">
                                                        <i class="mdi mdi-format-vertical-align-top"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-secondary">
                                                        <i class="mdi mdi-format-vertical-align-center"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-secondary">
                                                        <i class="mdi mdi-format-vertical-align-bottom"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-secondary">Default</button>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item">Go back</a>
                                                            <a class="dropdown-item">Delete</a>
                                                            <a class="dropdown-item">Swap</a>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-outline-secondary">Default</button>
                                                </div>
                                                <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-secondary">Top</button>
                                                    <button type="button" class="btn btn-outline-secondary">Middle</button>
                                                    <button type="button" class="btn btn-outline-secondary">Bottom</button>
                                                </div>
                                            </div>
                                            <div class="template-demo mt-4">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-secondary">
                                                        <i class="mdi mdi-star d-block mb-1"></i> Favourites </button>
                                                    <button type="button" class="btn btn-outline-secondary">
                                                        <i class="mdi mdi-reload d-block mb-1"></i> Reload </button>
                                                    <button type="button" class="btn btn-outline-secondary">
                                                        <i class="mdi mdi-account d-block mb-1"></i> Users </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="card-title">Button with text and icon</h4>
                                            <p class="card-description">Wrap icon and text inside <code>.btn-icon-text</code> and use <code>.btn-icon-prepend</code> or <code>.btn-icon-append</code> for icon tags</p>
                                            <div class="template-demo">
                                                <button type="button" class="btn btn-primary btn-icon-text">
                                                    <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                                                <button type="button" class="btn btn-dark btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-icon-text">
                                                    <i class="mdi mdi-alert btn-icon-prepend"></i> Warning </button>
                                            </div>
                                            <div class="template-demo">
                                                <button type="button" class="btn btn-danger btn-icon-text">
                                                    <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                                                <button type="button" class="btn btn-info btn-icon-text"> Print <i class="mdi mdi-printer btn-icon-append"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning btn-icon-text">
                                                    <i class="mdi mdi-reload btn-icon-prepend"></i> Reset </button>
                                            </div>
                                            <div class="template-demo mt-2">
                                                <button type="button" class="btn btn-outline-primary btn-icon-text">
                                                    <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                                                <button type="button" class="btn btn-outline-secondary btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-success btn-icon-text">
                                                    <i class="mdi mdi-alert btn-icon-prepend"></i> Warning </button>
                                            </div>
                                            <div class="template-demo">
                                                <button type="button" class="btn btn-outline-danger btn-icon-text">
                                                    <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                                                <button type="button" class="btn btn-outline-info btn-icon-text"> Print <i class="mdi mdi-printer btn-icon-append"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-warning btn-icon-text">
                                                    <i class="mdi mdi-reload btn-icon-prepend"></i> Reset </button>
                                            </div>
                                            <div class="template-demo mt-2">
                                                <button class="btn btn-outline-light btn-icon-text">
                                                    <i class="mdi mdi-apple btn-icon-prepend mdi-36px"></i>
                                                    <span class="d-inline-block text-left">
                                                        <small class="font-weight-light d-block">Available on the</small> App Store </span>
                                                </button>
                                                <button class="btn btn-outline-light btn-icon-text">
                                                    <i class="mdi mdi-android-debug-bridge btn-icon-prepend mdi-36px"></i>
                                                    <span class="d-inline-block text-left">
                                                        <small class="font-weight-light d-block">Get it on the</small> Google Play </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Social Icon Buttons</h4>
                                    <p class="card-description">Add class <code>.btn-social-icon</code></p>
                                    <div class="template-demo">
                                        <button type="button" class="btn btn-social-icon btn-outline-facebook"><i class="mdi mdi-facebook"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-outline-youtube"><i class="mdi mdi-youtube"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-outline-twitter"><i class="mdi mdi-twitter"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-outline-dribbble"><i class="mdi mdi-dribbble"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-outline-linkedin"><i class="mdi mdi-linkedin"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-outline-google"><i class="mdi mdi-google-plus"></i></button>
                                    </div>
                                    <div class="template-demo">
                                        <button type="button" class="btn btn-social-icon btn-facebook"><i class="mdi mdi-facebook"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-youtube"><i class="mdi mdi-youtube"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-twitter"><i class="mdi mdi-twitter"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-dribbble"><i class="mdi mdi-dribbble"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-linkedin"><i class="mdi mdi-linkedin"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-google"><i class="mdi mdi-google-plus"></i></button>
                                    </div>
                                    <div class="template-demo">
                                        <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i class="mdi mdi-facebook"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-youtube btn-rounded"><i class="mdi mdi-youtube"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i class="mdi mdi-twitter"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-dribbble btn-rounded"><i class="mdi mdi-dribbble"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-linkedin btn-rounded"><i class="mdi mdi-linkedin"></i></button>
                                        <button type="button" class="btn btn-social-icon btn-google btn-rounded"><i class="mdi mdi-google-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Social button with text</h4>
                                    <p class="card-description">Add class <code>.btn-social-icon-text</code></p>
                                    <div class="template-demo">
                                        <button type="button" class="btn btn-social-icon-text btn-facebook"><i class="mdi mdi-facebook"></i>Facebook</button>
                                        <button type="button" class="btn btn-social-icon-text btn-youtube"><i class="mdi mdi-youtube"></i>Youtube</button>
                                        <button type="button" class="btn btn-social-icon-text btn-twitter"><i class="mdi mdi-twitter"></i>Twitter</button>
                                        <button type="button" class="btn btn-social-icon-text btn-dribbble"><i class="mdi mdi-dribbble"></i>Dribbble</button>
                                        <button type="button" class="btn btn-social-icon-text btn-linkedin"><i class="mdi mdi-linkedin"></i>Linkedin</button>
                                        <button type="button" class="btn btn-social-icon-text btn-google"><i class="mdi mdi-google-plus"></i>Google</button>
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