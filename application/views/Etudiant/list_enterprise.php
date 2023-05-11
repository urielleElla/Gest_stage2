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
                Liste des entreprises disponibles
              </h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0)">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active">Stage académique</li>
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
                    <h4 class="card-title">Liste d'entreprises disponibles</h4>
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
                  <table
                    id="zero_config"
                    class="table data-table table-striped table-bordered"
                  >
                    <thead>
                      <tr>
                        <th>Noms</th>
                        <th>Ville</th>
                        <th>Contact</th>
                        <th>E-mail</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr">
                        <td>IUT</td>
                        <td>NGAOUNDERE</td>
                        <td>6*********</td>
                        <td>Exemple@gmail.com</td>
                      </tr>
                      <tr">
                        <td>IUT</td>
                        <td>NGAOUNDERE</td>
                        <td>6*********</td>
                        <td>Ex</td>
                      <tr>
                        <td>CIMENTCAM</td>
                        <td>DOUALA</td>
                        <td>6*********</td>
                        <td>Exemple@gmail.com</td>
                      </tr>
                      <tr>
                        <td>BUTERFLY</td>
                        <td>NGAOUNDERE</td>
                        <td>6*********</td>
                        <td>Exemple@gmail.com</td>
                      </tr>
                      <tr>
                        <td>FOUKOU</td>
                        <td>BANJOUN</td>
                        <td>6*********</td>
                        <td>Exemple@gmail.com</td>
                      </tr>
                      <tr>
                        <td>SIGALIAIN</td>
                        <td>NGAOUNDERE</td>
                        <td>6*********</td>
                        <td>Exemple@gmail.com</td>
                      </tr>
                        <td>IUT</td>
                        <td>BANJOUN</td>
                        <td>6*********</td>
                        <td>Exemple@gmail.com</td>
                      </tr>
                      <tr>
                        <td>HOPITAL REGIONAL</td>
                        <td>NGAOUNDERE</td>
                        <td>6*********</td>
                        <td>Exemple@gmail.com</td>
                      </tr>
                      <tr>
                        <td>HOPITAL REGIONALE</td>
                        <td>DOUALA</td>
                        <td>6*********</td>
                        <td>Exemple@gmail.com</th>
                      </tr>
                    </tbody>
                  </table>
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
    <script src="<?php echo base_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app-style-switcher.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/feather.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="<?php echo base_url(); ?>assets/extra-libs/c3/d3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/c3/c3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboards/dashboard1.min.js"></script>
    <script src="<?php echo base_url(); ?>../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>../assets/dist/js/pages/datatable/datatable-basic.init.js"></script>
  </body>
</html>
