<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8" />
        <title>Dashboard | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    
        <!-- jquery.vectormap css -->
        <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}"
            rel="stylesheet" type="text/css" />
    
        <!-- DataTables -->
        <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
            type="text/css" />
    
        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}"
            rel="stylesheet" type="text/css" />
    
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet"
            type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    
    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <!-- header -->
            @include('layouts.body.header')

            <!-- ========== Left Sidebar Start ========== -->

            <div class="vertical-menu">
            
                <div data-simplebar class="h-100">
            
                    <!-- User details -->
            
            
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>
            
                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>
            
                            <li>
                                <a href="calendar.html" class=" waves-effect">
                                    <i class="ri-calendar-2-line"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>
            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read Email</a></li>
                                </ul>
                            </li>
            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                            <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                            <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                            <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                            <li><a href="layouts-preloader.html">Preloader</a></li>
                                            <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                                        </ul>
                                    </li>
            
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                            <li><a href="layouts-hori-topbar-light.html">Topbar light</a></li>
                                            <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                                            <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                                            <li><a href="layouts-hori-colored-header.html">Colored Header</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
            
                            <li class="menu-title">Pages</li>
            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-account-circle-line"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html">Login</a></li>
                                    <li><a href="auth-register.html">Register</a></li>
                                    <li><a href="auth-recoverpw.html">Recover Password</a></li>
                                    <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>
            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>Utility</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-directory.html">Directory</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>
            
            
            
            
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>

            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
            
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dashboard</h4>
            
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
            
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
            
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">Total Sales</p>
                                            <h4 class="mb-2">1452</h4>
                                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                        class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from
                                                previous period</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-primary rounded-3">
                                                <i class="ri-shopping-cart-2-line font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">New Orders</p>
                                            <h4 class="mb-2">938</h4>
                                            <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i
                                                        class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from
                                                previous period</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-success rounded-3">
                                                <i class="mdi mdi-currency-usd font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">New Users</p>
                                            <h4 class="mb-2">8246</h4>
                                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                        class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from
                                                previous period</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-primary rounded-3">
                                                <i class="ri-user-3-line font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">Unique Visitors</p>
                                            <h4 class="mb-2">29670</h4>
                                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                        class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from
                                                previous period</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-success rounded-3">
                                                <i class="mdi mdi-currency-btc font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->
            
            
            
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
            
                                    </div>
            
                                    <h4 class="card-title mb-4">Latest Transactions</h4>
            
                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Status</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th style="width: 120px;">Salary</th>
                                                </tr>
                                            </thead><!-- end thead -->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6 class="mb-0">Charles Casey</h6>
                                                    </td>
                                                    <td>Web Developer</td>
                                                    <td>
                                                        <div class="font-size-13"><i
                                                                class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                        </div>
                                                    </td>
                                                    <td>
                                                        23
                                                    </td>
                                                    <td>
                                                        04 Apr, 2021
                                                    </td>
                                                    <td>$42,450</td>
                                                </tr>
                                                <!-- end -->
                                                <tr>
                                                    <td>
                                                        <h6 class="mb-0">Alex Adams</h6>
                                                    </td>
                                                    <td>Python Developer</td>
                                                    <td>
                                                        <div class="font-size-13"><i
                                                                class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive
                                                        </div>
                                                    </td>
                                                    <td>
                                                        28
                                                    </td>
                                                    <td>
                                                        01 Aug, 2021
                                                    </td>
                                                    <td>$25,060</td>
                                                </tr>
                                                <!-- end -->
                                                <tr>
                                                    <td>
                                                        <h6 class="mb-0">Prezy Kelsey</h6>
                                                    </td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>
                                                        <div class="font-size-13"><i
                                                                class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                        </div>
                                                    </td>
                                                    <td>
                                                        35
                                                    </td>
                                                    <td>
                                                        15 Jun, 2021
                                                    </td>
                                                    <td>$59,350</td>
                                                </tr>
                                                <!-- end -->
                                                <tr>
                                                    <td>
                                                        <h6 class="mb-0">Ruhi Fancher</h6>
                                                    </td>
                                                    <td>React Developer</td>
                                                    <td>
                                                        <div class="font-size-13"><i
                                                                class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                        </div>
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td>
                                                        01 March, 2021
                                                    </td>
                                                    <td>$23,700</td>
                                                </tr>
                                                <!-- end -->
                                                <tr>
                                                    <td>
                                                        <h6 class="mb-0">Juliet Pineda</h6>
                                                    </td>
                                                    <td>Senior Web Designer</td>
                                                    <td>
                                                        <div class="font-size-13"><i
                                                                class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                        </div>
                                                    </td>
                                                    <td>
                                                        38
                                                    </td>
                                                    <td>
                                                        01 Jan, 2021
                                                    </td>
                                                    <td>$69,185</td>
                                                </tr>
                                                <!-- end -->
                                                <tr>
                                                    <td>
                                                        <h6 class="mb-0">Den Simpson</h6>
                                                    </td>
                                                    <td>Web Designer</td>
                                                    <td>
                                                        <div class="font-size-13"><i
                                                                class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive
                                                        </div>
                                                    </td>
                                                    <td>
                                                        21
                                                    </td>
                                                    <td>
                                                        01 Sep, 2021
                                                    </td>
                                                    <td>$37,845</td>
                                                </tr>
                                                <!-- end -->
                                                <tr>
                                                    <td>
                                                        <h6 class="mb-0">Mahek Torres</h6>
                                                    </td>
                                                    <td>Senior Laravel Developer</td>
                                                    <td>
                                                        <div class="font-size-13"><i
                                                                class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                        </div>
                                                    </td>
                                                    <td>
                                                        32
                                                    </td>
                                                    <td>
                                                        20 May, 2021
                                                    </td>
                                                    <td>$55,100</td>
                                                </tr>
                                                <!-- end -->
                                            </tbody><!-- end tbody -->
                                        </table> <!-- end table -->
                                    </div>
                                </div><!-- end card -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
            
                    </div>
                    <!-- end row -->
                </div>
            
            </div>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
        
        
        <!-- apexcharts -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        
        <!-- jquery.vectormap map -->
        <script
            src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script
            src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>
        
        <!-- Required datatable js -->
        <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        
        <!-- Responsive examples -->
        <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
        
        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>
        
        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </body>

</html>