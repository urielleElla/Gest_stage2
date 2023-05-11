<?php require_once("header/header4.php") ?>
    <?php require_once("include/side_bar3.php") ?>
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
              <h3
                class="page-title text-truncate text-dark font-weight-medium mb-1"
              >
                État de ma scolarité
              </h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0)">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active">Scolarité</li>
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
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Les états</h4>
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
                  <!-- .Start table -->
                  <table
                    id="zero_config"
                    class="table table-striped table-bordered no-wrap"
                  >
                    <thead>
                      <tr>
                        <th>Objet</th>
                        <th>Montant versé</th>
                        <th>Statut</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1ère tranche</td>
                        <td>125 000FCFA</td>
                        <td><span class="text-success">Complet</span></td>
                      </tr>
                      <tr>
                        <td>CMS</td>
                        <td>3000FCFA</td>
                        <td><span class="text-success">Payé</span></td>
                      </tr>
                      <tr>
                        <td>2ème tranche</td>
                        <td></td>
                        <td>
                          <span class="text-danger">Impayé</span><br />
                          <h6>A payer avant le 12 Avril</h6>
                        </td>
                      </tr>
                      <tr>
                        <td>AE IUT</td>
                        <td></td>
                        <td>
                          <span class="text-danger">Impayé</span><br />
                          <h6>A payer avant le 12 Avril</h6>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- / .End table -->
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End Page Content -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center text-muted">
          Projet d'integration GIN <a href="https://wrappixel.com">2023</a>.
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
