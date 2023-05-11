<?php require_once("header/header4.php") ?>
    <?php require_once("include/side_bar4.php") ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Toasts</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Toast</h4>
                                <div class="bg-light p-3">
                                    <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                        aria-atomic="true">
                                        <div class="toast-header">
                                            <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                                                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                                focusable="false" role="img">
                                                <rect fill="#007aff" width="100%" height="100%"></rect>
                                            </svg>
                                            <strong class="mr-auto">Bootstrap</strong>
                                            <small>11 mins ago</small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Translucent</h4>
                                <div class="bg-light p-3">
                                    <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                        aria-atomic="true">
                                        <div class="toast-header">
                                            <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                                                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                                focusable="false" role="img">
                                                <rect fill="#007aff" width="100%" height="100%"></rect>
                                            </svg>
                                            <strong class="mr-auto">Bootstrap</strong>
                                            <small class="text-muted">11 mins ago</small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Stacking</h4>
                                <div class="bg-light p-3">
                                    <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                        aria-atomic="true">
                                        <div class="toast-header">
                                            <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                                                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                                focusable="false" role="img">
                                                <rect fill="#007aff" width="100%" height="100%"></rect>
                                            </svg>
                                            <strong class="mr-auto">Bootstrap</strong>
                                            <small class="text-muted">just now</small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            See? Just like this.
                                        </div>
                                    </div>

                                    <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                        aria-atomic="true">
                                        <div class="toast-header">
                                            <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                                                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                                focusable="false" role="img">
                                                <rect fill="#007aff" width="100%" height="100%"></rect>
                                            </svg>
                                            <strong class="mr-auto">Bootstrap</strong>
                                            <small class="text-muted">2 seconds ago</small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            Heads up, toasts will stack automatically
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Placement</h4>
                                <div class="bg-light p-2">
                                    <div aria-live="polite" aria-atomic="true"
                                        style="position: relative; min-height: 200px;">
                                        <div class="toast" data-autohide="false"
                                            style="position: absolute; top: 0; right: 0;">
                                            <div class="toast-header">
                                                <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                    <rect fill="#007aff" width="100%" height="100%"></rect>
                                                </svg>
                                                <strong class="mr-auto">Bootstrap</strong>
                                                <small>11 mins ago</small>
                                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Placement</h4>
                                <div class="bg-light p-2">
                                    <div aria-live="polite" aria-atomic="true"
                                        style="position: relative; min-height: 200px;">
                                        <!-- Position it -->
                                        <div style="position: absolute; top: 0; right: 0;">

                                            <!-- Then put toasts within -->
                                            <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header">
                                                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        preserveAspectRatio="xMidYMid slice" focusable="false"
                                                        role="img">
                                                        <rect fill="#007aff" width="100%" height="100%"></rect>
                                                    </svg>
                                                    <strong class="mr-auto">Bootstrap</strong>
                                                    <small class="text-muted">just now</small>
                                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="toast-body">
                                                    See? Just like this.
                                                </div>
                                            </div>

                                            <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header">
                                                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        preserveAspectRatio="xMidYMid slice" focusable="false"
                                                        role="img">
                                                        <rect fill="#007aff" width="100%" height="100%"></rect>
                                                    </svg>
                                                    <strong class="mr-auto">Bootstrap</strong>
                                                    <small class="text-muted">2 seconds ago</small>
                                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="toast-body">
                                                    Heads up, toasts will stack automatically
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Placement with Flexbox</h4>
                                <div class="bg-light p-2">
                                    <!-- Flexbox container for aligning the toasts -->
                                    <div aria-live="polite" aria-atomic="true"
                                        class="d-flex justify-content-center align-items-center"
                                        style="min-height: 200px;">

                                        <!-- Then put toasts within -->
                                        <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header">
                                                <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                                    <rect fill="#007aff" width="100%" height="100%"></rect>
                                                </svg>
                                                <strong class="mr-auto">Bootstrap</strong>
                                                <small>11 mins ago</small>
                                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Adminmart. Designed and Developed by <a
                    href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app-style-switcher.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
    <script type="text/javascript">
        $('.toast').toast('show');
    </script>
</body>

</html>