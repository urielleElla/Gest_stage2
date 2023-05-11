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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Notification</h4>
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
                                <h4 class="card-title">Default Alert</h4>
                                <p class="text-muted font-14 mb-3">
                                    Alerts are available for any length of text, as well as an optional dismiss button.
                                    For proper styling, use one of the eight
                                    <strong>required</strong> contextual classes (e.g., <code>.alert-success</code>).
                                    For background color use class
                                    <code>.bg-* </code>, <code>.text-white </code>
                                </p>

                                <div class="alert alert-primary" role="alert">
                                    <strong>Primary - </strong> A simple primary alert—check it out!
                                </div>
                                <div class="alert alert-secondary" role="alert">
                                    <strong>Secondary - </strong> A simple secondary alert—check it out!
                                </div>
                                <div class="alert alert-success" role="alert">
                                    <strong>Success - </strong> A simple success alert—check it out!
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    <strong>Error - </strong> A simple danger alert—check it out!
                                </div>
                                <div class="alert alert-warning bg-warning text-white border-0" role="alert">
                                    <strong>Warning - </strong> A simple warning alert—check it out!
                                </div>
                                <div class="alert alert-info bg-info text-white border-0" role="alert">
                                    <strong>Info - </strong> A simple info alert—check it out!
                                </div>
                                <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                    <strong>Light - </strong> A simple light alert—check it out!
                                </div>
                                <div class="alert alert-dark bg-dark text-white border-0 mb-0" role="alert">
                                    <strong>Dark - </strong> A simple dark alert—check it out!
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dismissing Alerts</h4>
                                <p class="text-muted font-14 mb-3">
                                    Add a dismiss button and the <code>.alert-dismissible</code> class, which adds extra
                                    padding to the right of the alert
                                    and positions the <code>.close</code> button.
                                </p>

                                <div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show"
                                    role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Primary - </strong> A simple primary alert—check it out!
                                </div>
                                <div class="alert alert-secondary alert-dismissible bg-secondary text-white border-0 fade show"
                                    role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Secondary - </strong> A simple secondary alert—check it out!
                                </div>
                                <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                                    role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Success - </strong> A simple success alert—check it out!
                                </div>
                                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                                    role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Error - </strong> A simple danger alert—check it out!
                                </div>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Warning - </strong> A simple warning alert—check it out!
                                </div>
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Info - </strong> A simple info alert—check it out!
                                </div>
                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Light - </strong> A simple light alert—check it out!
                                </div>
                                <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Dark - </strong> A simple dark alert—check it out!
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Custom Alerts</h4>
                                <p class="text-muted font-14 mb-3">
                                    Display alert with transparent background and with contextual text color. Use
                                    classes
                                    <code>.bg-white</code>, and <code>.text-*</code>. E.g.
                                    <code>bg-white text-primary</code>.
                                </p>

                                <div class="alert alert-primary bg-white text-primary" role="alert">
                                    This is a <strong>primary</strong> alert—check it out!
                                </div>

                                <p class="text-muted font-14 mb-2 mt-3">
                                    Display alert with filled background. Use classes
                                    <code>.bg-*</code>, and <code>.text-white</code>. E.g.
                                    <code>bg-success text-white</code>.
                                </p>

                                <div class="alert alert-success" role="alert">
                                    <i class="dripicons-checkmark mr-2"></i> This is a <strong>success</strong> alert -
                                    check it out!
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    <i class="dripicons-wrong mr-2"></i> This is a <strong>danger</strong> alert - check
                                    it out!
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-warning mr-2"></i> This is a <strong>warning</strong> alert -
                                    check it out!
                                </div>
                                <div class="alert alert-info" role="alert">
                                    <i class="dripicons-information mr-2"></i> This is a <strong>info</strong> alert -
                                    check it out!
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Additional content</h4>
                                <p class="text-muted font-14 mb-3">
                                    Alerts can also contain additional HTML elements like headings, paragraphs and
                                    dividers.
                                </p>

                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Well done!</h4>
                                    <p>Aww yeah, you successfully read this important alert message. This example text
                                        is going to run a bit longer so that you can see how spacing within an alert
                                        works with this kind of content.</p>
                                    <hr>
                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                                        nice and tidy.</p>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
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
    <!-- This Page JS -->
    <script src="<?php echo base_url(); ?>assets/extra-libs/prism/prism.js"></script>
</body>

</html>