<?php require_once("header/header5.php") ?>
    <?php require_once("include/side_bar3.php") ?>
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-7 align-self-center">
              <h3
                class="page-title text-truncate text-dark font-weight-medium mb-1"
              >
                Draft & Mémoire
              </h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0)">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active">Draft & Mémoire</li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="col-5 align-self-center">
              <div class="customize-input float-right"></div>
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
          <!-- *************************************************************** -->
          <!-- *************************************************************** -->
          <!-- Start Services -->
          <!-- *************************************************************** -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Je veux</h4>
                    <div class="ml-auto">
                      <div class="dropdown sub-dropdown">
                        <button
                          class="btn btn-link text-muted dropdown-toggle"
                          type="button"
                          id="dd1"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        ></button>
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="grid">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="grid-container">
                            <a href="depot_draft" class="zoom">
                              <div class="card text-center">
                                <i
                                  class="fas fa-file-word fa-4x text-success mt-4"
                                ></i>
                                <div class="card-body">
                                  <h5 class="card-title text-uppercase">
                                    Déposer mon draft
                                  </h5>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="grid-container">
                            <a href="depot_memoire" class="zoom">
                              <div class="card text-center">
                                <i
                                  class="fas fa-file-pdf fa-4x text-primary mt-4"
                                ></i>
                                <div class="card-body">
                                  <h5 class="card-title text-uppercase">
                                    Déposer mon mémoire
                                  </h5>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="grid-container">
                            <a href="library" class="zoom">
                              <div class="card text-center">
                                <i
                                  class="fas fa-file-archive fa-4x mt-4 text-warning"
                                ></i>
                                <div class="card-body">
                                  <h5 class="card-title text-uppercase">
                                    Consulter la bibliothèque
                                  </h5>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- end row -->
                    </div>
                    <!-- grid-structure -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- *************************************************************** -->
          <!-- End Services -->
          <!-- *************************************************************** -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center text-muted">
          All Rights Reserved by Adminmart. Designed and Developed by
          <a href="https://wrappixel.com">WrapPixel</a>.
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
